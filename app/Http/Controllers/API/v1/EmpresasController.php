<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EmpresasCategory;

class EmpresasController extends Controller
{
    public function getCategorias(){

    $categorias = EmpresasCategory::where('status',1)->select('id', 'name', 'icon_url')->paginate(30);
    if($categorias){
    return response()->json([
      'success' => true,
      'categorias' => $categorias
    ]);
  }else{
    return response()->json([
      'success' => false,
      'message' => 'Nenhuma categoria encontrada.'
    ]);
  }


    }
}
