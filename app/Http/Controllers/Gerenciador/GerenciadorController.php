<?php

namespace App\Http\Controllers\Gerenciador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reclamacao;
use App\ReclamaCategory;

class GerenciadorController extends Controller
{
    public function __construct(Reclamacao $rcl, ReclamaCategory $rclCat){
        $this->rcl = $rcl;
        $this->rclCat = $rclCat;
    }
    public function index(){
        $titulo = 'Gerenciador';
        
        $totalReclamacoes = $this->rcl->totalReclamacoes();
        $totalRespondidas = $this->rcl->totalReclamacoesRespondidas();
        $totalNaoRespondidas = $this->rcl->totalReclamacoesNaoRespondidas();
        $totalResolvido = $this->rcl->totalReclamacoesResolvido();

        $ultimasReclamacoes = $this->rcl->with('categories', 'user')->latest()->paginate(10);
        
        $categoriasReclamacao = $this->rclCat->getCategorias();

        return view('gerenciador.dashboard',compact('categoriasReclamacao','totalNaoRespondidas','ultimasReclamacoes','titulo','totalReclamacoes','totalRespondidas','totalResolvido'));
    }
}
