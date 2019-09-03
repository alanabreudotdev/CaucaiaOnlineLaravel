<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ReclamaCategory;
use App\Reclamacao;
use App\ReclamacaoAbuso;
use App\ReclamaSubCategory;
use App\User;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;

class ReclamacaoController extends Controller
{
  use UploadTrait;

  public function __construct(Reclamacao $rcl, ReclamaCategory $rclCat, ReclamaSubCategory $rclSubCat, Request $rqst){
      $this->rcl = $rcl;
      $this->rclCat = $rclCat;
      $this->rclSubCat = $rclSubCat;
      $this->rqst = $rqst;
  }

  /***
  * PEGA AS CATEGORIAS PARA ABRIR UMA NOVA RECLAMACAO
  */
  public function getReclamaCategories(){

      $categorias = $this->rclCat->orderby('name','asc')->get();

      return response()->json([
        'success' => true,
        'data' => $categorias
      ]);
  }

  public function getReclamaSubCategories(Request $request){

      $categorias = $this->rclSubCat->where('reclama_category_id',$request->categoryid)->orderby('name','asc')->get();

      return response()->json([
        'success' => true,
        'data' => $categorias
      ]);
  }

  public function getReclamacao($id = null){


      $reclamacoes = Reclamacao::latest()->select('id','created_at','reclama_category_id',
        'titulo', 'texto_reclamacao','foto_url_01', 'apoio', 'endereco', 'views', 'user_id', 'slug' )
                                ->with('user','categories')
                                ->paginate(5);

    return response()->json([
      'success' => true,
      'reclamacoes' => $reclamacoes
    ]);
  }

  public function getReclamacaoView(Request $request){

    $reclamacao = Reclamacao::where('id', $request->id)->with('user','categories')->first();

    $dados = [
      'views' => $reclamacao->views+1
    ];

    $reclamacao->update($dados);

    return response()->json([
        'success' =>true,
        'data' => $reclamacao
    ]);

  }

  public function postReclamacao(Request $request){

    $latLong = $request->LatLong;
    $latLong = substr($latLong,7, -1);
    $latLong = explode(",",$latLong);
    $latitude = $latLong[0];
    $longitude = $latLong[1];
    $slug = str_slug($request->titulo);

    $dados = [
      'reclama_category_id' => $request->categoria,
      'reclama_sub_category_id' => $request->subcategoria,
      'user_id' => $request->user_id,
      'titulo' => $request->titulo,
      'texto_reclamacao' => $request->textoReclamacao,
      'endereco' => $request->endereco,
      'celular' =>$request->celular,
      'longitude' => $longitude,
      'latitude' =>$latitude,
      'slug' => $slug,
      'status'=> 1
    ];


    //GET TOTAL RECLAMACOES PER CATEGORY
    $total = $this->rclCat->getTotalReclamacao($request->categoria);
    $total->total_reclamacoes = $total->total_reclamacoes + 1;
    $total->save();

    // Persist user record to database
    $save = Reclamacao::create($dados);

    if($save){
      if($request->has('foto_url_01')){

        $name = str_slug($save->id.'_'.time().'_'. str_random(10)). '.jpg';
        // Define folder path
        $storageFolder = '/app/public/uploads/images/reclamacao/';
        $folder = '/uploads/images/reclamacao/';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        $filePath = $folder . $name;
      //  dd($filePath);
        $image = $request->foto_url_01;  // your base64 encoded

        \File::put(storage_path(). $storageFolder . $name, base64_decode($image));

        // Set user profile image path in database to filePath
        $save->foto_url_01 = $filePath;
        $save->save();
      }
    }


    return response()->json([
      'success'=>true,
      'data'=> 'Foi'
    ]);
  }

  public function userUpdate(Request $request){
    $request->birthday = str_replace('-','', $request->birthday);

    if(strlen($request->birthday)==10){
      $date = date_create_from_format("d/m/Y", $request->birthday)->format("Y-m-d");
    }else{
      return response()->json([
        'success'=>false,
        'message'=> 'Data invalida. Digite corretamente. Ex: 10/06/1990'
      ]);
    }

    $dados = [
      'name' => $request->name,
      'lastname' => $request->lastname,
      'celular' => $request->celular,
      'birthday' => $date,
      'reclamacao_privacidade' => $request->reclamacao_privacidade,
      'cpf' => $request->cpf

    ];

    $user = User::where('id', $request->id)->first();

    $save = $user->update($dados);
    if($save){
      $user = User::where('id', $request->id)->first();
      return response()->json([
        'success'=>true,
        'user'=>$user
      ]);
    }else{
      return response()->json([
        'success'=>false,
        'message'=> 'Error'
      ]);
    }

  }

/***
* REPORTAR ABUSO / Reclamacao
* params: reclamacao id, user id
*/
public function reportarAbuso($id = null, Request $request){


  if($id == null){
    $id = $request->id;
  }

    //verifica se o usuario ja reportou abuso
    $check = ReclamacaoAbuso::where('reclamacao_id',$request->id)->where('user_id',$request->user_id)->count();
    if($check>0){
      return response()->json([
        'success'=>true,
        'message'=>'Você já solicitou análise desta reclamação.'
      ]);
    }else{

      $dados = [
        'reclamacao_id' =>$id,
        'user_id' => $request->user_id,
        'status' =>1,
        'analisada' =>0
      ];

      $retorno = ReclamacaoAbuso::create($dados);

        if($retorno){
          return response()->json([
            'success'=>true,
            'message'=>'Iremos analisar esta reclamação.'
          ]);
        }else{
          return response()->json([
            'success'=>false,
            'message'=> 'Error'
          ]);
      }
    }







}

}
