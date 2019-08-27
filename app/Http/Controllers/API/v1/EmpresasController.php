<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EmpresasCategory;
use App\Empresa;
use DB;


class EmpresasController extends Controller
{
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

      $lat = -3.769712;
      $lon = -38.652216;
      $max_distance = 500;

    $empresas = DB::table("empresas")
    ->select("empresas.id", "empresas.address", "empresas.nome","empresas.total_reviews", "empresas.imagem_principal", "empresas.featured","empresas.empresa_package_id"
        ,
        DB::raw("7371 * acos(cos(radians(" . $lat . "))
        * cos(radians(empresas.latitude))
        * cos(radians(empresas.longitude) - radians(" . $lon . "))
        + sin(radians(" .$lat. "))
        * sin(radians(empresas.latitude))) AS distance"))
        ->latest()
        ->where('status',1)
        ->where('category_id',$request->categoria)
        ->orderby('distance', 'asc')
        ->paginate(10);
        //->having('distance','<=',20)
        //->get();

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

    /*******
    **
    * GET EMPRESA TO JSON
    ** param: empresa id
    *******/

    public function getEmpresa(Request $request){

      $lat = -3.769712;
      $lon = -38.652216;
      $max_distance = 500;

    $empresa = DB::table("empresas")
    ->select("empresas.id",
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
    "empresas.horario_func"
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
}
