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
    ->select("empresas.id", "empresas.address", "empresas.nome","empresas.total_reviews", "empresas.imagem_principal", "empresas.featured","empresas.tipo_conta_premium_id"
        ,
        DB::raw("6371 * acos(cos(radians(" . $lat . "))
        * cos(radians(empresas.latitude))
        * cos(radians(empresas.longitude) - radians(" . $lon . "))
        + sin(radians(" .$lat. "))
        * sin(radians(empresas.latitude))) AS distance"))
        ->latest()
        ->where('status',1)
        ->where('category_id',$request->categoria)
        ->paginate(2);
        //->having('distance','<=',20)
        //->get();


      //$empresas = Empresa::latest()->where('status',1)->where('category_id',$request->categoria)->paginate(2);

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
}
