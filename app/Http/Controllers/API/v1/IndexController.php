<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\EmpresasCategory;
use App\Empresa;
use App\EmpresaReview;
use DB;
use App\Reclamacao;


class IndexController extends Controller
{

  /*** HOME  APP ****/
  public function getHome(Request $request){
    if(!$request->lat){
      $lat = -3.769712;
    }else{
      $lat = $request->lat;
    }
    if(!$request->lon){
      $lon = -38.652216;
    }else{
      $lon = $request->lon;
    }
    $max_distance = 30;

  //GET EMPRESAS By Location
  $empresasByLocation = DB::table("empresas")
  ->select("empresas.id","empresas.featured","empresas.latitude","empresas.longitude", "empresas.address", "empresas.nome","empresas.total_reviews", "empresas.imagem_principal", "empresas.featured","empresas.empresa_package_id"
      ,
      DB::raw("7371 * acos(cos(radians(" . $lat . "))
      * cos(radians(empresas.latitude))
      * cos(radians(empresas.longitude) - radians(" . $lon . "))
      + sin(radians(" .$lat. "))
      * sin(radians(empresas.latitude))) AS distance"))
      ->latest()
      ->where('status',1)
      ->orderby('distance', 'asc')
      ->orderby(DB::raw('RAND()'))
      ->orderby('featured', 'desc')
      ->limit(50)
      ->having('distance','<=',$max_distance)
      ->get();

    //GET EMPRESAS FEATURED
    $empresasFeatured = DB::table("empresas")
    ->select("empresas.id","empresas.featured","empresas.latitude","empresas.longitude", "empresas.address", "empresas.nome","empresas.total_reviews", "empresas.imagem_principal", "empresas.featured","empresas.empresa_package_id"
        )
        ->where('status',1)
        ->where('featured',1)
        ->orderby(DB::raw('RAND()'))
        ->limit(5)
        //->having('distance','<=',$max_distance)
        ->get();

    //GET CATEGORIES GUIA COMERCIAL HOME
    $categorias = EmpresasCategory::where('status',1)->select('id', 'name', 'icon_url')->limit(9)->get();

    $reclamacoes = Reclamacao::latest()->select('id','created_at','reclama_category_id',
      'titulo', 'texto_reclamacao','foto_url_01', 'apoio', 'endereco', 'views', 'user_id', 'slug' )
                              ->limit(5)
                              ->get();

    if($empresasByLocation){
      return response()->json([
        'success' => true,
        'lugaresPerto' => $empresasByLocation,
        'featured' => $empresasFeatured,
        'categorias' => $categorias,
        'reclamacoes' => $reclamacoes,
      ]);
    }else{
      return response()->json([
        'success' => false,
        'message' => 'Nenhuma empresa encontrada.'
      ]);
    }
  }

    public function noticiasListar(){

      $perPage = 6;

      $noticias = News::latest()->with('category')->where('status','1')->paginate($perPage);


      if($noticias){
        return response()->json([
          'success' => true,
          'noticias' => $noticias
        ]);
      }else{
        return response()->json([
          'success' => false,
          'message' => 'Nenhuma noticia encontrada.'
        ]);
      }
    }

    /**
     * VER NOTICIAS
     * param: id/slug
     */
    public function noticiasVer(Request $request){

        $noticia =  News::where('id',$request->id)->with('category')->first();
        ///$noticiasCategorias = $this->categorias->where('status','1')->orderby('name','asc')->get();

        if($noticia){
          return response()->json([
            'success' => true,
            'noticia' => $noticia
          ]);
        }else{
          return response()->json([
            'success' => false,
            'message' => 'Nenhuma noticia encontrada.'
          ]);
        }

    }
}
