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
                        <form method="POST" action="{{ route('entrar') }}">
                                @csrf
                            <h1 class="display-4 text-center mb-10">Bem Vindo :)</h1>
                            <p class="text-center mb-30">Faça login na sua conta e aproveite.</p> 
                            @include('parts.messages')
                            <div class="form-group">
                                <input class="form-control" id="email" placeholder="Email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" id="password" placeholder="Senha" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    
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

                  
                            <div class="custom-control custom-checkbox mb-25">
                                <input class="custom-control-input"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label font-14" for="remember">Mantenha-me conectado</label>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                            <p class="font-14 text-center mt-15"><a href="{{ route('password.request') }}">Esqueceu sua senha?</a></p>
                           
                        <p class="text-center">Não tem uma conta? <a href="{{ route('cadastrar') }}">Cadastrar</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
