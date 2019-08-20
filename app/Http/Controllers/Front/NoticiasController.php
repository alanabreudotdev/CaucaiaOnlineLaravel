<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\NewsCategory;
use Flash;
use SEO;

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

        SEO::setTitle($noticia->title);
        SEO::setDescription($noticia->title);
        SEO::opengraph()->setUrl(setting('site_url'));
        SEO::setCanonical('https://caucaia.online/noticias/'.$noticia->id.'/'.$noticia->slug);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@caucaia.online');
        SEO::jsonLd()->addImage('https://caucaia.online/storage'.$noticia->image_url);

        return view('front.noticias.ver', compact('titulo', 'noticia','noticiasCategorias'));
    }
}
