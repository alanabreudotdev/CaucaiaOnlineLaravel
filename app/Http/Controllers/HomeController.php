<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reclamacao;
use App\ReclamaCategory;
use App\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Reclamacao $rcl)
    {
       // $this->middleware('auth');
       $this->rcl = $rcl;
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $titulo = 'Aqui o cidadão tem voz';

        //PEGA OS DADOS PARA ALIMENTAR OS MAPAS
        $locations = $this->rcl->mapJson();
        //TRATA OS DADOS E TRANSFORMANDO EM JSON
        $locations = $this->rcl->toJson($locations);
        
        $reclamacoes = Reclamacao::latest()->paginate(6);

        //LISTA CATEGORIAS PARA PASSAR PARA MENU LATERAL
        $categorias = ReclamaCategory::orderby('total_reclamacoes','desc')->paginate(20);

        $maisApoiadas = $this->rcl->getMaisApoiadas();
       
        $noticias = News::latest()->select('title','slug','id','image_url','created_at','category_id')->with('category')->paginate(6);
    
        return view('home',compact('locations','reclamacoes','categorias','noticias','titulo','maisApoiadas'));
        
    }
}
