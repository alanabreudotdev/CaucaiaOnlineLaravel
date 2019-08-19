<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Page;

class PagesController extends Controller
{
    public function privacidade(){

      $page = Page::where('id',2)->first();
      
      return view('front.pages.politica', compact('page'));

    }
}
