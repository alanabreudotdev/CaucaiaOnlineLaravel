<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\NewsCategory;
use Flash;
use SEO;
use OpenGraph;
use SEOMeta;

class NoticiasController extends Controller
{
    public function __construct(News $noticias, NewsCategory $categorias){
        $this->categorias = $categorias;
        $this->noticias = $noticias;
    }

    public function index(Request $request){

        $titulo = 'Notícias';

        $keyword = $request->get('pesquisar');
        $perPage = 10;

        $noticiasCategorias = $this->categorias->where('status','1')->orderby('name','asc')->get();

        if (!empty($keyword)) {
            $noticias = News::where('title', 'LIKE', "%$keyword%")

                ->orWhere('description', 'LIKE', "%$keyword%")
                 ->with('category')
                 ->where('status','1')
                ->latest()->paginate($perPage);
        } else {
            $noticias = News::latest()->with('category')->where('status','1')->paginate($perPage);
            $noticiaDestaque = $this->noticias->where('destaque','1')->where('status','1')->with('category')->orderby('id', 'desc')->first();
        }

        return view('front.noticias.index', compact('titulo','noticias','noticiasCategorias','noticiaDestaque'));

    }
    /**
     * LISTAR NOTICIAS POR CATEGORIA
     */
    public function porCategoria($id){

        $perPage = 10;

        $noticiasCategorias = $this->categorias->where('status','1')->orderby('name','asc')->get();


        $noticias = News::latest()->where('category_id',$id)->where('status','1')->with('category')->paginate($perPage);
        $noticiaDestaque = $this->noticias->where('category_id',$id)->where('destaque','1')->where('status','1')->with('category')->orderby('id', 'desc')->first();

        $nomeCategoria = $this->categorias->where('id',$id)->orderby('name','asc')->first();

        //VERIFICA SE TEM ALGUMA NOTICIA
        if(count($noticias)==0){
            Flash::info('','Nenhuma notícia encontrada para esta categoria');
            return redirect('/noticias');
        }
        $titulo = $nomeCategoria->name;

        return view('front.noticias.porCategoria', compact('titulo','noticias','noticiasCategorias','noticiaDestaque'));

    }

    /**
     * por busca
     */

    public function search(Request $request){

        $perPage = 10;
        $keyword = $request->get('pesquisar');

        if(strlen($keyword)<4){
            Flash::warning('','Digite pelo menos 4 caracteres na pesquisa');
            return redirect('/noticias');
        }

        $noticias = News::where('title', 'LIKE', "%$keyword%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->orWhere('tags','LIKE',"%$keyword%")
            ->with('category')
            ->where('status','1')
            ->latest()->paginate($perPage);


        $noticiasCategorias = $this->categorias->where('status','1')->orderby('name','asc')->get();

        //VERIFICA SE TEM ALGUMA NOTICIA
        if(count($noticias)==0){
            Flash::info('','Nenhuma notícia encontrada para essa pesquisa');
            return redirect('/noticias');
        }
        $titulo = "Busca por: ".$keyword ;

        return view('front.noticias.search', compact('titulo','noticias','noticiasCategorias','noticiaDestaque'));

    }

    /**
     * VER NOTICIAS
     * param: id/slug
     */
    public function noticiasVer($id, $slug){

        $noticia = $this->noticias->where('id',$id)->where('slug',$slug)->with('category')->first();
        $noticiasCategorias = $this->categorias->where('status','1')->orderby('name','asc')->get();

        $titulo = $noticia->category->name. ' | '.$noticia->title;

        //SEOMeta::setTitle($reclamacao->titulo);
        SEOMeta::setDescription($noticia->title);
        SEOMeta::addMeta('article:published_time', $noticia->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $noticia->category->name, 'property');
        SEOMeta::addKeyword(['caucaia','noticias caucaia', 'caucaia online', 'prefeitura caucaia', 'cumbuco', 'reclamar caucaia']);

        OpenGraph::setDescription($noticia->title);
        //OpenGraph::setTitle($reclamacao->titulo);
        OpenGraph::setUrl('https://caucaia.online/reclamar/ver/'.$noticia->id.'/'.$noticia->slug);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://caucaia.online/storage'.$noticia->image_url);
        //OpenGraph::addImage($post->images->list('url'));
        OpenGraph::addImage(['url' => 'https://caucaia.online/storage'.$noticia->image_url, 'size' => 300]);
        OpenGraph::addImage('https://caucaia.online/storage'.$noticia->image_url, ['height' => 300, 'width' => 300]);


        return view('front.noticias.ver', compact('titulo', 'noticia','noticiasCategorias'));
    }
}
