<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ReclamaCategory;
use App\Reclamacao;
use App\ReclamaSubCategory;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class IndexController extends Controller
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

        $reclamacoes = Reclamacao::latest()->with('user','categories')->paginate(100);

      return response()->json([
        'success' => true,
        'data' => $reclamacoes
      ]);
    }

    public function getReclamacaoView(Request $request){

      $reclamacao = Reclamacao::where('id', $request->id)->with('user','categories')->first();

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
}
