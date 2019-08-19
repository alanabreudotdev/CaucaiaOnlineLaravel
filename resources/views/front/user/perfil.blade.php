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
                                                    <h3 class="text-capitalize font-weight-500 text-dark">Perfil</h3>
                                                    <div class="font-13">Adicione informações sobre você</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-body">

                                        <div class="row">
                                        <div class="col-sm">
                                        <form method="POST" action="{{ route('usuario.perfil.post') }}">
                                            @csrf
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label for="firstName">Nome</label>
                                                        <input class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" id="name" name="name" placeholder="" value="" type="text">
                                                        @error('name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-6 form-group">
                                                        <label for="lastName">Sobrenome</label>
                                                    <input class="form-control" value="{{ Auth::user()->lastname }}" id="lastname" name="lastname" placeholder="" value="" type="text">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <label for="cpf">CPF</label>
                                                            <input class="form-control required @error('cpf') is-invalid @enderror" data-mask="999.999.999-99" value="{{ Auth::user()->cpf }}" id="cpf" name="cpf" placeholder="" value="" type="tel">
                                                            @error('cpf')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-6 form-group">
                                                            <label for="rg">RG</label>
                                                        <input class="form-control" value="{{ Auth::user()->rg }}" id="rg" name="rg" placeholder="" value="" type="tel">
                                                        </div>
                                                    </div>

                                                <div class="form-group">
                                                    <label for="input_tags">Data de Nascimento</label>
                                                    <input class="form-control" type="date" name="birthday" value="{{ Auth::user()->birthday }}" />
                                                </div>
                                                

                                                <!--PRIVACIDADE
                                                <h3 class="text-capitalize font-weight-500 text-dark">Privacidade</h3>
                                                <div class="row mb-25">

                                                    <div class="col-md-6 mt-15">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="reclamacao_privacidade1" value="1" @if(Auth::user()->reclamacao_privacidade == 1) checked @endif name="reclamacao_privacidade" class="custom-control-input">
                                                            <label class="custom-control-label" for="reclamacao_privacidade1">Público</label>

                                                        </div>
                                                        <small>Seu nome será mostrado quando você efetuar uma reclamação</small>
                                                    </div>
                                                    <div class="col-md-6 mt-15">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="reclamacao_privacidade2" value="0" name="reclamacao_privacidade" @if(Auth::user()->reclamacao_privacidade == 0) checked @endif class="custom-control-input">
                                                            <label class="custom-control-label" for="reclamacao_privacidade2">Privado</label>

                                                        </div>
                                                        <small>Seu nome NÃO será mostrado quando você efetuar uma reclamação</small>
                                                    </div>
                                                </div>
                                                <small class="align-center font-13">Nos comentários postados em reclamações, notícias e nos tópicos das comunidades o nome do usuário, por questões legais, será sempre exibido.</small>
                                                -->
                                                <!--FIM PRIVACIDADE -->
                                                <hr>

                                                <div class="text-center">
                                                        <button class="btn btn-primary text" type="submit">Salvar</button>
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
