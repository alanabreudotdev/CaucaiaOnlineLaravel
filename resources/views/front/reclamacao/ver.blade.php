@extends('layouts.front')

@section('css_before')
    <link href="{{ asset('vendors/lightgallery/dist/css/lightgallery.min.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="container-fluid ">
    <div class="row mb-40">
        <div class="col-xl-12 pa-0 ">
            <div id="mapa" class="gmap w-auto h-350p border-bottom border-3" ></div>
        </div>
    </div>
   
    <!-- Row -->
    <div class="row ">
        <div class="col-xl-8 col-md-8">
          <!-- Title -->
        <div class="hk-pg-header">
                <h3 class="hk-pg-title ">Reclamação #{{$reclamacao->id}}</h3>
                </div>
                <!-- /Title -->
            <section class="hk-sec-wrapper shadow-sm">
        
                <h4 class="hk-sec-title ">{{setting('nome_orgao_servico')}}</h5>
                 <h5 >Categoria/Serviço: {{ $reclamacao->categories->name}}</h6>
                 <small>Subcategoria: {{ $reclamacao->subcategories->name}}</small>

            </section>
           
            <!-- INICIO CARD RECLAMACAO -->
            
            <div class="card">
                    <div class="card-header  media pa-20 ">
                            <img class="mr-15 circle d-50" src="@if($reclamacao->user->reclamacao_privacidade==1)
                                                                    @if($reclamacao->user->photo_url)
                                                                        {{asset('storage/'.$reclamacao->user->photo_url)}}
                                                                @else
                                                                        {{ asset('dist/img/img-thumb.jpg')}}
                                                                        @endif
                                                                    @else
                                                                    {{ asset('dist/img/img-thumb.jpg')}}
                                                            
                                                                @endif" alt="Reclamado por:">
                            <div class="media-body">
                                
                                Reclamado por: 
                                <br/>
                                @if($reclamacao->user->reclamacao_privacidade==1)
                                                    {{$reclamacao->user->name}}
                                                @else
                                                    Perfil Privado
                                                @endif
                            </div>
                            <div class="d-flex align-items-center card-action-wrap">
                                    <small>{{ \Carbon\Carbon::parse($reclamacao->created_at)->diffForHumans() }}</small>
                            </div>
                    </div>
                        
                        <div class="card-body">
                            <div class="position-relative">
                                <img class="card-img-top d-block" src="{{asset('storage'.$reclamacao->foto_url_01)}}" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                 <h5 class="card-title">{{ $reclamacao->titulo}} @if($reclamacao->resolvido)<span class="badge badge-success">Resolvido</span>@endif</h5>
                                    <p class="card-text">{!! $reclamacao->texto_reclamacao!!}</p>
                            </div>
                          
                            <div class="form-group mt-30">
                                <label for="url">Compartilhar:</label>
                            <input type="url" class="form-control filled-input mw-100" value="{{setting('site_url')}}/reclama/ver/{{$reclamacao->id}}/{{$reclamacao->slug}}" readonly>
                            </div>
                           
                        </div>
                        
                    <div class="card-footer justify-content-between">
                            <div>
                                <a href="#!" id="reclamacao_apoio" onclick="apoioLike({{$reclamacao->id}})"><i class="ion-md-thumbs-up text-primary"></i>&nbsp;<span class="apoios-{{$reclamacao->id}}">@if($reclamacao->apoio ==0) 0 @else {{$reclamacao->apoio}}  @endif</span> &nbsp; pessoas apoiaram</a>
                            </div>
                            <div>
                                
                            </div>
                        </div>
                </div> 
                
                <!-- FIM CARD RECLAMACAO -->
                @if($reclamacao->foto_url_02 || $reclamacao->foto_url_02)
                    <!-- SECTION IMAGENS RECLAMACAO -->
                    <section class="hk-sec-wrapper hk-gallery-wrap bg-light">
                            <h5 class="hk-sec-title">+ Imagens enviadas pelo reclamante</h5>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" role="tabpanel">
                                    
                                    <div class="row hk-gallery">
                                        @if($reclamacao->foto_url_01)      
                                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="{{asset('storage'.$reclamacao->foto_url_01)}}">
                                                <a href="#" class="">
                                                    <div class="gallery-img" style="background-image:url({{asset('storage'.$reclamacao->foto_url_01)}});"></div>
                                                </a>
                                            </div>
                                        @endif
                                        @if($reclamacao->foto_url_02)   
                                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="{{asset('storage'.$reclamacao->foto_url_02)}}">
                                                <a href="#" class="">
                                                    <div class="gallery-img" style="background-image:url({{asset('storage'.$reclamacao->foto_url_02)}});"></div>
                                                </a>
                                            </div>
                                        @endif
                                        @if($reclamacao->foto_url_03)   
                                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="{{asset('storage'.$reclamacao->foto_url_03)}}">
                                                <a href="#" class="">
                                                    <div class="gallery-img" style="background-image:url({{asset('storage'.$reclamacao->foto_url_03)}});"></div>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                    @if($reclamacao->url_video)
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Video</h5>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$reclamacao->url_video}}?rel=0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                    @if($reclamacao->respondida==1)
                            @foreach ($reclamacao->answers as $answers)
                                @if($answers->tipo == '1')
                                    <!-- MOSTRAR RESPOSTA -->
                                    <div class="row">
                                        <div class="col-12 ">
                                                <div class="card text-white bg-dark shadow">
                                                    <div class="card-header  media pa-30 ">
                                                            <div class="media-body">
                                                                <h6 class=" text-white">RESPOSTA DO SERVIÇO PÚBLICO
                                                            </div>
                                                            <div class="d-flex align-items-center card-action-wrap">
                                                                    <small>{{ \Carbon\Carbon::parse($answers->created_at)->diffForHumans()}}</small>
                                                            </div>
                                                    </div>
                                                    <div class="card-body pa-30">
                                                        
                                                    <p class="card-text">{{$answers->texto_comentario}}</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- FIM MOSTRAR RESPOSTA -->
                                @endif
                                @if($answers->tipo == '2')
                                    <!-- MOSTRAR RESPOSTA -->
                                    <div class="row  pl-20">
                                        <div class="col-12 ">
                                                <div class="card   shadow">
                                                    <div class="card-header  media pa-30 ">
                                                            <div class="media-body">
                                                                    <h4 class=" text-red">RÉPLICA DO RECLAMANTE </h5>
                                                                        <h6 class=" text-red"><span class="ti-face-sad"></span> NÃO RESOLVIDO</h6>
                                                            </div>
                                                            <div class="d-flex align-items-center card-action-wrap">
                                                                    <small>{{ \Carbon\Carbon::parse($answers->created_at)->diffForHumans()}}</small>
                                                            </div>
                                                    </div>
                                                    <div class="card-body pa-30">
                                                        
                                                    <p class="card-text">{{$answers->texto_comentario}}</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- FIM MOSTRAR RESPOSTA -->
                                @endif
                                @if($answers->tipo == '3')
                                    <!-- MOSTRAR RESPOSTA -->
                                    <div class="row  pl-20">
                                        <div class="col-12 ">
                                                <div class="card text-white bg-success shadow">
                                                    <div class="card-header  media pa-30 ">
                                                            <div class="media-body">
                                                                <h4 class=" text-white">RÉPLICA DO RECLAMANTE </h5>
                                                                <h6 class=" text-white"><span class="ti-face-smile"></span> (RESOLVIDO)</h6>
                                                            </div>
                                                            <div class="d-flex align-items-center card-action-wrap">
                                                                    <small>{{ \Carbon\Carbon::parse($answers->created_at)->diffForHumans()}}</small>
                                                            </div>
                                                    </div>
                                                    <div class="card-body pa-30">
                                                        
                                                    <p class="card-text">{{$answers->texto_comentario}}</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- FIM MOSTRAR RESPOSTA -->
                                @endif
                                @if($answers->tipo == '4')
                                    <!-- MOSTRAR RESPOSTA -->
                                    <div class="row ">
                                        <div class="col-12 ">
                                                <div class="card text-white bg-dark shadow">
                                                    <div class="card-header  media pa-30 ">
                                                            <div class="media-body">
                                                                <h6 class=" text-white">RESPOSTA SERVIÇO PÚBLICO
                                                            </div>
                                                            <div class="d-flex align-items-center card-action-wrap">
                                                                    <small>{{ \Carbon\Carbon::parse($answers->created_at)->diffForHumans()}}</small>
                                                            </div>
                                                    </div>
                                                    <div class="card-body pa-30">
                                                        
                                                    <p class="card-text">{{$answers->texto_comentario}}</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- FIM MOSTRAR RESPOSTA -->
                                @endif
                            @endforeach
                                    
                        @if(Auth::user() !=null)
                            @if(Auth::user()->id == $reclamacao->user_id)
                            
                            @if($reclamacao->resolvido == 0)
                            <!-- RECLAMACAO RESOLVIDA -->
                            <section class="hk-sec-wrapper bg-light">
                                    <h5 class="hk-sec-title mb-25">Sua reclamação foi resolvida?</h5>
                                    
                                    <div class="row">
                                        <div class="col-sm mb-25">
                                            <button class="btn btn-success btn-block mb-15" data-toggle="collapse" href="#collapseResolvido" role="button" aria-expanded="false" aria-controls="collapseResolvido ">FOI RESOLVIDA</button>
                                            <div class="collapse" id="collapseResolvido">
                                                    <div class="card card-body ">
                                                            <form method="post" action="{{route('reclamacao.front.responder')}}">
                                                                    @csrf
                                                                    <input type="hidden" name="reclamacao_id" value="{{$reclamacao->id}}">
                                                                    <input type="hidden" name="tipo" value="3">
                                                                        <div class="form-group">
                                                                            <label for="reclamacao">Deixe sua opinião:</label>
                                                                            <textarea required class="form-control   @error('texto_comentario') is-invalid @enderror"  rows=10 id="texto_comentario" name="texto_comentario" aria-hidden="true">{{old('texto_comentario')}}</textarea>                                    
                                                                            @error('texto_comentario')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}
                                                                                </div>
                                                                            @enderror
                                                                        </div>
                                                                        <button type="button form-control" class="btn btn-success mb-20" >Enviar Resposta</button>
                
                                                                    </form>
                                                                    <small>Verifique a resposta antes de enviar, pois não será possível editar.</small>
                
                                                    </div>
                                            </div>
                                            <button class="btn btn-danger btn-block" data-toggle="collapse" href="#collapseNaoResolvido" role="button" aria-expanded="false" aria-controls="collapseNaoResolvido">NÃO FOI RESOLVIDA</button>
                                            <div class="collapse" id="collapseNaoResolvido">
                                                    <div class="card card-body">
                                                            <form method="post" action="{{route('reclamacao.front.responder')}}">
                                                                    @csrf
                                                                    <input type="hidden" name="reclamacao_id" value="{{$reclamacao->id}}">
                                                                    <input type="hidden" name="tipo" value="2">
                                                                        <div class="form-group">
                                                                            <label for="reclamacao">Responda abaixo a reclamação:</label>
                                                                            <textarea required class="form-control  @error('texto_comentario') is-invalid @enderror"  rows=10 id="texto_comentario" name="texto_comentario" aria-hidden="true">{{old('texto_comentario')}}</textarea>                                    
                                                                            @error('texto_comentario')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}
                                                                                </div>
                                                                            @enderror
                                                                        </div>
                                                                        <button type="button form-control" class="btn btn-success mb-20" >Enviar Resposta</button>
                
                                                                    </form>
                                                                    <small>Verifique a resposta antes de enviar, pois não será possível editar.</small>
                
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-25">
                                            <div class="col-sm">
                                                    <small> *Somente você que abriu esta reclamação é que vai pode responder.</small>
                                            </div>
                                    </div>
                                   
                                    
                            </section>
                            <!--FIM RECLAMACAO RESOLVIDA -->
                                @endif
                            @endif
                        @endif
                    @endif
                <section class="hk-sec-wrapper">
                        <div id="disqus_thread"></div>
                </section>             
        </div>
           
            <!-- COLUNA DIREITA  -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-10">
                @include('components.categorias_problemas_mais_frequentes')
            </div>
            <!-- FIM COLUNA DIREITA -->
        </div>
</div>
@endsection

@section('js_after')
    <!-- Gallery JavaScript -->
    <script src="{{asset('vendors/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('dist/js/froogaloop2.min.js')}}"></script>
    <script src="{{asset('dist/js/gallery-data.js')}}"></script>

    <script>
        var data = <?php print_r(json_encode($locations)) ?>;
    </script>
    
@endsection
