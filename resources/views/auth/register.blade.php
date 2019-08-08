@extends('layouts.auth')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 pa-0">
                <div class="auth-form-wrap pt-xl-0 pt-70">
                    <div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                        <a class="auth-brand text-center d-block mb-20" href="#">
                            <img class="brand-img" src="{{asset('dist/img/logo-light.png')}}" alt="brand"/>
                        </a>
                        <form method="POST" action="{{ route('cadastrar') }}">
                                @csrf
                            <h1 class="display-4 mb-10 text-center">Cadastre-se! </h1>
                            <p class="mb-30 text-center">Crie uma conta agora e aproveite!</p>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" placeholder="Primeiro Nome" type="text" @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                        <input class="form-control" placeholder="Sobrenome" type="text" @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <div class="input-group">
                                    <input id="password" type="password" placeholder="Senha" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                        <input id="password-confirm" type="password" placeholder="Confirmar Senha" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mb-25">
                                <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                <label class="custom-control-label font-14" for="same-address">Eu li e aceito os <a href=""><u>termos e condições</u></a></label>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
                            
                            <p class="text-center mt-15">Já tem uma conta? <a href="{{ route('entrar') }}">Entrar</a></p>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
