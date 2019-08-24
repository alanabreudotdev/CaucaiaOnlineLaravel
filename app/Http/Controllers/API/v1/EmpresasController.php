<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EmpresasCategory;

class EmpresasController extends Controller
{
    public getCategorias(){

    $categorias = EmpresaCategory::where('status',1)->paginate(30);

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
