<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EmpresasCategory;
use App\Empresa;
use App\EmpresaReview;
use DB;


class EmpresasController extends Controller
{

  /**
  * pesquisa de empresas
  */
  public function search(Request $request)
  {
      $keyword = $request->get('search');
      $perPage = 10;

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
      $max_distance = 500;

      if (!empty($keyword)) {
          $empresas = Empresa::where('nome', 'LIKE', "%$keyword%")
              ->orWhere('website_url', 'LIKE', "%$keyword%")
              ->orWhere('address', 'LIKE', "%$keyword%")
              ->orWhere('description', 'LIKE', "%$keyword%")
              ->orWhere('category_id', 'LIKE', "%$keyword%")
              ->orWhere('instagram', 'LIKE', "%$keyword%")
              ->orWhere('facebook', 'LIKE', "%$keyword%")
              ->orWhere('twitter', 'LIKE', "%$keyword%")
              ->orWhere('youtube', 'LIKE', "%$keyword%")
              ->select("empresas.id", "empresas.address", "empresas.nome","empresas.total_reviews", "empresas.imagem_principal", "empresas.featured","empresas.empresa_package_id"
                  ,
                  DB::raw("7371 * acos(cos(radians(" . $lat . "))
                  * cos(radians(empresas.latitude))
                  * cos(radians(empresas.longitude) - radians(" . $lon . "))
                  + sin(radians(" .$lat. "))
                  * sin(radians(empresas.latitude))) AS distance"))

              ->latest()->with('categoria')->paginate($perPage);
      } else {
          $empresas = Empresa::latest()
          ->select("empresas.id", "empresas.address", "empresas.nome","empresas.total_reviews", "empresas.imagem_principal", "empresas.featured","empresas.empresa_package_id"
              ,
              DB::raw("7371 * acos(cos(radians(" . $lat . "))
              * cos(radians(empresas.latitude))
              * cos(radians(empresas.longitude) - radians(" . $lon . "))
              + sin(radians(" .$lat. "))
              * sin(radians(empresas.latitude))) AS distance"))

          ->paginate($perPage);
      }

      if($empresas){
        return response()->json([
          'success' => true,
          'empresas' => $empresas,
        ]);
      }else{
        return response()->json([
          'success' => false,
          'message' => 'Nenhuma empresa encontrada.'
        ]);
      }
  }

    /****
    * GET CATEGORIES EMPRESAS
    */
      public function getCategorias(){

          $categorias = EmpresasCategory::where('status',1)->select('id', 'name', 'icon_url')->paginate(30);


          if($categorias){
            return response()->json([
              'success' => true,
              'categorias' => $categorias,
            ]);
          }else{
            return response()->json([
              'success' => false,
              'message' => 'Nenhuma categoria encontrada.'
            ]);
          }

    }

    /*******
    **
    * GET EMPRESAS TO JSON
    **
    *******/

    public function getEmpresas(Request $request){

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
      $max_distance = 500;

    $empresas = Empresa::select("empresas.id", "empresas.address", "empresas.nome","empresas.total_reviews", "empresas.imagem_principal", "empresas.featured","empresas.empresa_package_id"
        ,
        DB::raw("7371 * acos(cos(radians(" . $lat . "))
        * cos(radians(empresas.latitude))
        * cos(radians(empresas.longitude) - radians(" . $lon . "))
        + sin(radians(" .$lat. "))
        * sin(radians(empresas.latitude))) AS distance"))
        ->latest()

        ->where('status',1)
        ->where('category_id',$request->categoria)

        ->orderby('featured', 'desc')
        ->orderby('distance', 'asc')
        ->paginate(10);
        //->having('distance','<=',20)
        //->get();

      if($empresas){

        $categoria = EmpresasCategory::where('id',$request->categoria)->first();

        $dados = [
          'total_views' => $categoria->total_views+1
        ];
        $categoria->update($dados);

        return response()->json([
          'success' => true,
          'empresas' => $empresas,
        ]);
      }else{
        return response()->json([
          'success' => false,
          'message' => 'Nenhuma empresa encontrada.'
        ]);
      }
    }

    /*******
    **
    * GET EMPRESA TO JSON
    ** param: empresa id
    *******/

    public function getEmpresa(Request $request){



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
      $max_distance = 10;

    $empresa = Empresa::select("empresas.id",
    "empresas.address",
    "empresas.nome",
    "empresas.description",
    "empresas.total_reviews",
    "empresas.imagem_principal",
    "empresas.featured",
    "empresas.telefone",
    "empresas.whatsapp",
    "empresas.instagram",
    "empresas.facebook",
    "empresas.twitter",
    "empresas.youtube",
    "empresas.latitude",
    "empresas.longitude",
    "empresas.foto_01",
    "empresas.foto_02",
    "empresas.foto_03",
    "empresas.foto_04",
    "empresas.foto_05",
    "empresas.foto_06",
    "empresas.foto_07",
    "empresas.foto_08",
    "empresas.foto_09",
    "empresas.empresa_package_id",
    "empresas.website_url",
    "empresas.horario_func",
    "empresas.total_views"
        ,
        DB::raw("7371 * acos(cos(radians(" . $lat . "))
        * cos(radians(empresas.latitude))
        * cos(radians(empresas.longitude) - radians(" . $lon . "))
        + sin(radians(" .$lat. "))
        * sin(radians(empresas.latitude))) AS distance"))
        ->latest()
        ->where('status',1)
        ->where('id',$request->id)
        ->orderby('distance', 'asc')
        ->first();
        //->having('distance','<=',20)
        //->get();

      if($empresa){


        $dados = [
          'total_views' => $empresa->total_views+1
        ];
        $empresa->update($dados);

        return response()->json([
          'success' => true,
          'empresa' => $empresa,
        ]);
      }else{
        return response()->json([
          'success' => false,
          'message' => 'Nenhuma empresa encontrada.'
        ]);
      }
    }

    /****
    *  UPDATE REVIEW FROM EMPRESAS/LUGARES
    ****/
    public function updateReview(Request $request){

      if($request->empresa_id && $request->note){

          $dados = $request->all();

          $save = EmpresaReview::create($dados);


        if($save){
          //$totalReviews = EmpresaReview->getTotalReviews($request->empresa_id);
          return response()->json([
            'success' => true,
            'reviews' => $save,
          ]);
        }else{
          return response()->json([
            'success' => false,
            'message' => 'Nenhuma empresa encontrada.'
          ]);
        }
      }else{
        return response()->json([
          'success' => false,
          'message' => 'Dados invalidos'
        ]);
      }
    }

    public function lugaresMapa(Request $request){

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
      $max_distance = 50;

    //GET EMPRESAS TO MAP
    $empresas = DB::table("empresas")
    ->select("empresas.id","empresas.featured","empresas.latitude","empresas.longitude", "empresas.address", "empresas.nome","empresas.total_reviews", "empresas.imagem_principal", "empresas.featured","empresas.empresa_package_id"
        ,
        DB::raw("7371 * acos(cos(radians(" . $lat . "))
        * cos(radians(empresas.latitude))
        * cos(radians(empresas.longitude) - radians(" . $lon . "))
        + sin(radians(" .$lat. "))
        * sin(radians(empresas.latitude))) AS distance"))
        ->latest()
        ->where('status',1)
        ->orderby('featured', 'desc')
        ->orderby('distance', 'asc')
        ->limit(50)
        //->having('distance','<=',$max_distance)
        ->get();

      //GET EMPRESAS FEATURED
      $empresasFeatured = DB::table("empresas")
      ->select("empresas.id","empresas.featured","empresas.latitude","empresas.longitude", "empresas.address", "empresas.nome","empresas.total_reviews", "empresas.imagem_principal", "empresas.featured","empresas.empresa_package_id"
          ,
          DB::raw("7371 * acos(cos(radians(" . $lat . "))
          * cos(radians(empresas.latitude))
          * cos(radians(empresas.longitude) - radians(" . $lon . "))
          + sin(radians(" .$lat. "))
          * sin(radians(empresas.latitude))) AS distance"))
          ->latest()
          ->where('status',1)
          ->where('featured',1)
          ->orderby(DB::raw('RAND()'))
          ->limit(25)
          //->having('distance','<=',$max_distance)
          ->get();

      if($empresas){
        return response()->json([
          'success' => true,
          'lugares' => $empresas,
          'featured' => $empresasFeatured,
        ]);
      }else{
        return response()->json([
          'success' => false,
          'message' => 'Nenhuma empresa encontrada.'
        ]);
      }
    }
}
