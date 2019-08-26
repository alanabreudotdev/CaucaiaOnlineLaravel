<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EmpresasCategory;
use App\Empresa;


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

      $empresas = Empresa::latest()->where('status',1)->where('category_id',$request->categoria)->paginate(2);

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
