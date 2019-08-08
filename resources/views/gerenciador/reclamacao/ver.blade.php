@extends('layouts.backend')

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
            
   <!-- Title -->
   <div class="hk-pg-header">
   <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i class="material-icons">record_voice_over</i></span></span>Reclamação #{{$reclamacao->id}}</h4>
    </div>
    <!-- /Title -->
    <!-- Row -->
    <div class="row ">
            <div class="col-xl-12 col-md-12">
            <section class="hk-sec-wrapper bg-light">
                <h5 class="hk-sec-title">Prefeitura - Caucaia</h5>
                 <h6>Categoria/Serviço: {{ $reclamacao->categories->name}}</h6>
            </section>
           
            <!-- INICIO CARD RECLAMACAO -->
            
            <div class="card">
                    <div class="card-header d-flex align-items-center card-action-wrap">
                            <small>{{ \Carbon\Carbon::parse($reclamacao->created_at)->diffForHumans() }}</small>
                    </div>
                    <div class="card-header  media pa-20 ">
                            <img class="mr-15 circle d-74" src="@if($reclamacao->user->photo_url)
                                                                {{asset('storage/'.$reclamacao->user->photo_url)}}
                                                                @else
                                                                {{asset('dist/img/avatar9.jpg')}}
                                                               
                                                                @endif" alt="Reclamado por:">
                            <div class="media-body">
                                <small> Reclamado por: 
                                    {{$reclamacao->user->name}} {{$reclamacao->user->lastname}}
                                    <br/>
                                     CPF: {{$reclamacao->user->cpf}}
                                    <br/>
                                    E-mail: {{$reclamacao->user->email}}
                                    <br/>
                                   Celular: {{$reclamacao->celular}}
                                </small>
                            </div>
                            
                    </div>
                    <div id="collapse_1" class="collapse show">
                        <div class="card-body">
                            <h6 class="mb-5">{{ strtoupper($reclamacao->titulo)}}</h6> 
                            <p class="card-text">{!! $reclamacao->texto_reclamacao!!}</p>               
                        </div>
                    </div>
                </div> 
                <!-- FIM CARD RECLAMACAO -->
                @if($reclamacao->foto_url_01 || $reclamacao->foto_url_02 || $reclamacao->foto_url_02)
                    <!-- SECTION IMAGENS RECLAMACAO -->
                    <section class="hk-sec-wrapper hk-gallery-wrap bg-light">
                            <h5 class="hk-sec-title">Imagens enviadas pelo reclamante</h5>
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
                    <!-- INICIO BOTAO RESPONDER -->
                    @if($reclamacao->respondida==0)
                               <div class="row mb-20">
                                <div class="col-sm ">
                                    <div class="button-list ">
                                        <button type="button" class="btn btn-primary mb-20 text-right" data-toggle="collapse" href="#collapseResposta" role="button" aria-expanded="false" aria-controls="collapseResolvido ">Responder reclamação</button>
                                        <div class="collapse" id="collapseResposta">
                                            <div class="card card-body bg-light">
                                                <form method="post" action="{{route('gerenciador.reclamacao.responder')}}">
                                                    @csrf
                                                    <input type="hidden" name="reclamacao_id" value="{{$reclamacao->id}}">
                                                    <input type="hidden" name="tipo" value="1">
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
                            </div>
                    @endif
                    <!-- FIM BOTAO RESPONDER -->
                    
                    @if($reclamacao->respondida==1)
                    <?php $tipo = 0 ?>
                            @foreach ($reclamacao->answers as $answers)
                                @if($answers->tipo == '1')
                                <?php $tipo = $answers->tipo ?>
                                    <!-- MOSTRAR RESPOSTA -->
                                    <div class="row">
                                        <div class="col-12 pr-80">
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
                                <?php $tipo = $answers->tipo ?>
                                    <!-- MOSTRAR RESPOSTA -->
                                    <div class="row  pl-80">
                                        <div class="col-12 ">
                                                <div class="card  bg-light shadow">
                                                    <div class="card-header  media pa-30 ">
                                                            <div class="media-body">
                                                                <h6 >RÉPLICA DO RECLAMANTE (NÃO RESOLVIDO)
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
                                <?php $tipo = $answers->tipo ?>
                                    <!-- MOSTRAR RESPOSTA -->
                                    <div class="row  pl-80">
                                        <div class="col-12 ">
                                                <div class="card text-white bg-success shadow">
                                                    <div class="card-header  media pa-30 ">
                                                            <div class="media-body">
                                                                <h6 class=" text-white">RÉPLICA DO RECLAMANTE (RESOLVIDO)
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
                                <?php $tipo = $answers->tipo ?>
                                    <!-- MOSTRAR RESPOSTA -->
                                    <div class="row ">
                                        <div class="col-12 pr-80">
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
                            @if($reclamacao->resolvido ==0)
                                @if($tipo == 2 || $tipo==3)
                                <!-- SE NAO ESGOTADAS RESPOSTAS MOSTRAR FORMULARIO DE RESPOSTA -->
                                <div class="row mb-20">
                                        <div class="col-sm ">
                                            <div class="button-list ">
                                                <button type="button" class="btn btn-primary mb-20 text-right" data-toggle="collapse" href="#collapseResposta" role="button" aria-expanded="false" aria-controls="collapseResolvido ">Responder reclamação</button>
                                                <div class="collapse" id="collapseResposta">
                                                    <div class="card card-body bg-light">
                                                        <form method="post" action="{{route('gerenciador.reclamacao.responder')}}">
                                                            @csrf
                                                            <input type="hidden" name="reclamacao_id" value="{{$reclamacao->id}}">
                                                        <input type="hidden" name="tipo" value="@if($tipo==3){{$tipo + 1}} @elseif($tipo==2){{$tipo + 2}} @else {{$tipo}}@endif">
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
                                    </div>
                                    <!-- fim SE NAO ESGOTADAS RESPOSTAS MOSTRAR FORMULARIO DE RESPOSTA -->
                                    @endif
                                @endif
                    @endif
                       
        </div>
           
            
        </div>
</div>
@endsection

@section('js_after')
    <!-- Gallery JavaScript -->
    <script src="{{asset('vendors/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('dist/js/froogaloop2.min.js')}}"></script>
    <script src="{{asset('dist/js/gallery-data.js')}}"></script>

    <script>
    
        var locations = <?php print_r(json_encode($locations)) ?>;
    
        var mymap = new GMaps({
    
          el: '#mapa',
          lat: {{$locations[0]->latitude}}, 
          lng: {{$locations[0]->longitude}},
          zoom:19
    
        });
    
    $.each( locations, function( index, value ){
            console.log();
            mymap.addMarker({
    
              lat: value.latitude,
              lng: value.longitude,
              title: value.titulo,
             
              infoWindow: {
                content: '<div style="border-radius: 50%">'+
                         '<h5><i class="material-icons">'+value.categories.icon+'</i> '+value.categories.name+'</h5>'+
                            '<br/>'+value.titulo+
                            '<br/><br/><small>'+value.endereco+'</small>'+
                            '<br/><br/><a href="/reclamar/ver/'+value.id+'/'+value.slug+'">Ver reclamação</a>'+
                        '</div>'
    
        }
    
        });
    
    });
       
    </script>
@endsection
