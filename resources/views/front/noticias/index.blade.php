@extends('layouts.front')


@section('content')
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">

    <!-- Row -->
    
    <div class="row ">
        <div class="col-xl-8 col-md-8 mb-20">
               <!-- Title -->
   <div class="hk-pg-header">
        <h4 class="hk-pg-title">Notícias</h4>
    </div>
    <!-- /Title -->
                @if(Request::get('page')==null) 
                <!-- NOTICIAS EM DESTAQUE -->
                <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="/noticias/{{$noticiaDestaque->id}}/{{$noticiaDestaque->slug}}">    
                            <div class="card mb-20">
                                <img class="card-img-top" src="{{asset('storage'.$noticiaDestaque->image_url)}}" alt="Card image cap">
                                    <div class="card-body">
                                        <small class="text-muted">{{$noticiaDestaque->category->name}}</small>
                                        <h5 class="card-title">{{$noticiaDestaque->title}}</h5>
                                        <p class="card-text">@if(strlen($noticiaDestaque->description)>200) {!!substr($noticiaDestaque->description,0,201)!!}... @else {!!$noticiaDestaque->description!!} @endif</p>
                                        <p class="card-text">
                                                <small class="text-muted">{{ \Carbon\Carbon::parse($noticiaDestaque->created_at)->diffForHumans() }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>  
                     <!-- FIM NOTICIAS EM DESTAQUE -->  
                @endif
                     <!-- publicidade -->
                     <div class="w-100 mb-20">
                            <img class="img-fluid mx-auto d-block" alt="img" src="https://via.placeholder.com/728x90.png?text=publicidade728x90">
                        </div>
                     <!-- fim publicidade -->

                     <!--NOTICIAS HORIZONTAL -->
                     <div class="hk-sec-wrapper">

                     @foreach ($noticias as $not)
                        @if($not->id != $noticiaDestaque->id)
                        <a href="/noticias/{{$not->id}}/{{$not->slug}}">    
                            <div class="row mb-10">
                                    <div class="col-sm">
                                        <div class="media pa-20 border border-2 border-light ">
                                            <img class="mr-15 circle d-74" src="{{asset('storage'.$not->image_url)}}" alt="{{$not->title}}">
                                            <div class="media-body">
                                                    <small class="text-muted">{{$not->category->name}}</small>

                                            <h5 class="mb-5">{{$not->title}}</h5> 
                                            <p class="card-text text-muted">
                                                   @if(strlen($not->description)>200) {!!substr($not->description,0,201)!!}... @else {!!$not->description!!} @endif
                                            </p>
                                            <p class="card-text">
                                                    <small class="text-muted">{{ \Carbon\Carbon::parse($not->created_at)->diffForHumans() }}</small>
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </a>
                    
                        @endif
                     @endforeach
                    </div>
                    <!-- FIM NOTICIAS HORIZONTAL -->
                    <div class="pagination-wrap  justify-content-center mb-25">
                            {{$noticias->links()}}
                    </div>   
        </div>
       
        <!-- FIM CONTEUDO -->
           
            <!-- COLUNA DIREITA  -->
            <div class="col-xl-4 col-md-4 ">
                        <!-- Title -->
   <div class="hk-pg-header">
        <h4 class="hk-pg-title">Categorias</h4>
    </div>
    <!-- /Title -->
                
                <div class="mb-20">
                        
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
                    <form class="navbar-search-alt mb-20" action="/noticias/pesquisa" method="POST">
                        @csrf
                        <div class="input-group">
                            <div class="input-group-prepend">
                               <span class="input-group-text"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span></span>
                           </div>
                                 <input class="form-control" type="search" name="pesquisar" placeholder="Digite e aperte enter" aria-label="Search">
                           </div>
                    </form>
                @include('parts.coluna_direita')
            </div>
            <!-- FIM COLUNA DIREITA -->
        </div>
</div>
@endsection

@section('js_after')

      
@endsection
