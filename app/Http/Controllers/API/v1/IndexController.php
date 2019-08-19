<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;


class IndexController extends Controller
{
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
}
