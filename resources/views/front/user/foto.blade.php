@extends('layouts.front')

@section('content')
    <!-- Container -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12 pa-0">
                 <!-- CABEÇALHO PAINEL USER -->
                 @include('components.cabecalho_usuario')
                 <!-- FIM CABEÇALHO -->
                <div class="tab-content mt-sm-60 mt-30">
                    <div class="tab-pane fade show active" role="tabpanel">
                        <div class="container-fluid">
                            <div class="hk-row">
                                
                                <!-- MENU PERFIL -->
                                @include('front.user.menu')
                                <!-- FIM MENU PERFIL -->
                                <div class="col-lg-8">
                                    <div class="card card-profile-feed">
                                        <div class="card-header card-header-action">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h3 class="text-capitalize font-weight-500 text-dark">Foto</h3>
                                                    <div class="font-13">Adicione uma bela foto sua para o seu perfil. </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-body">
                                            <section class="hk-sec-wrapper">
                                                <div class="row text-center">
                                                    <div class="col-sm-12 col-md-12 ">
                                                    <img width="270px" height="270px" src="@if(Auth::user()->photo_url) {{ asset('storage'.Auth::user()->photo_url) }} @else {{ asset('dist/img/img-thumb.jpg')}} @endif" class="img-fluid" alt="{{ Auth::user()->name }}">
                                                    </div>
                                                </div>
                                            </section>
                                        <div class="row">
                                        <div class="col-sm">
                                                <form action="{{ route('usuario.foto.post') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf                                                        
                                                    <div class="form-group">
                                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Upload</span>
                                                                </div>
                                                                <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                                <span class="input-group-append">
                                                                        <span class=" btn btn-primary btn-file"><span class="fileinput-new">Selecionar imagem</span><span class="fileinput-exists">Alterar</span>
                                                                <input class="@error('photo_url') is-invalid @enderror" type="file" name="photo_url" id="photo_url">
                                                                </span>
                                                                <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remover</a>
                                                                </span>
                                                               
                                                            </div>
                                                            @error('photo_url')
                                                             <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                            <br/>
                                                            <div class="text-center">
                                                                    <button class="btn btn-primary text" type="submit">Alterar Foto</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                        </div>
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
        <!-- /Row -->
    </div>
    <!-- /Container -->
@endsection
@section('js_after')
    
@endsection