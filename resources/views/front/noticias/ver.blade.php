@extends('layouts.front')


@section('content')
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    
   
    <!-- Row -->
    
    <div class="row ">
        <div class="col-xl-8 col-md-8 mb-20">
            <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title">Notícia</h4>
        </div>
    <!-- /Title -->
                <!-- TEXTO NOTICIA -->
                <div class="card ">
                    <img class="card-img-top w-100" src="{{asset('storage'.$noticia->image_url)}}" alt="{{ $noticia->title}}">
                    <div class="card-header  media pa-20 ">
                        <div class="media-body">
                        <small>{{$noticia->category->name}}</small>
                            <h5 class="mb-5">{{ $noticia->title}}</h5> 
                        </div>
                        <div class="d-flex align-items-center card-action-wrap">
                            <small>{{ \Carbon\Carbon::parse($noticia->created_at)->diffForHumans() }}</small>
                        </div>
                    </div>
                   
                    <div class="card-body">
                        <!-- publicidade -->
                        <div class="w-100 mb-40">
                            <img class="img-fluid mx-auto d-block" alt="img" src="https://via.placeholder.com/728x90.png?text=publicidade728x90">
                        </div>
                        <!-- fim publicidade -->
                        <p class="card-text font-15">{!! $noticia->description!!}</p>
                                
                        <div class="form-group mt-30">
                            <label for="url">Compartilhar:</label>
                            <input type="url" class="form-control filled-input mw-100" value="{{setting('site_url')}}/{{$noticia->id}}/{{$noticia->slug}}" readonly>
                        </div>
                        <div class="row">
                                <div class="col-sm">
                                    <div class="w-100">
                                        <?php 
                                            $tags = explode(',',$noticia->tags);
                                        ?>
                                        <span class="badge mt-15 mr-10">Tags:</span>
                                        @foreach($tags as $tag)
                                    <span class="badge badge-primary mt-15 mr-5">{{$tag}}</span>
                                        @endforeach
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                    
                </div> 
                <!-- FIM texto noticia -->
                <section class="hk-sec-wrapper">
                        <div id="disqus_thread"></div>
                </section>       
        </div>
        <!-- FIM CONTEUDO -->
           
            <!-- COLUNA DIREITA  -->
            <div class="col-xl-4 col-md-4 ">
                <form class="navbar-search-alt mb-20" action="/noticias/pesquisa" method="POST">
                        @csrf                    
                    <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span></span>
                       </div>
                             <input class="form-control" type="search" name="pesquisar" placeholder="Digite e aperte enter" aria-label="Search">
                       </div>
                </form>
                <div class="mb-20">
                    <h5 class="hk-sec-title mb-20">Categorias</h5>
                        <div class="row">
                            <div class="col-sm">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="list-group">
                                            @foreach ($noticiasCategorias as $cat )
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <a href="{{url('/noticias/categoria/'.$cat->id)}}">- {{$cat->name}}</a>
                                                </li>
                                            @endforeach
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @include('parts.coluna_direita')
            </div>
            <!-- FIM COLUNA DIREITA -->
        </div>
</div>
@endsection

@section('js_after')

      
@endsection
