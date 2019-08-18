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

                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form role="form" method="POST" action="{{ route('password.update') }}">
                            <h3>Resetar Senha</h3>

                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                @if ($errors->has('email'))
                                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email"/>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                @if ($errors->has('password'))
                                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                @endif
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                @if ($errors->has('password_confirmation'))
                                <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
                                @endif
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"/>
                            </div>


                            <button class="btn btn-primary btn-block" type="submit">Resetar Senha</button>
                            <p class="font-14 text-center mt-15"><a href="{{ route('password.request') }}">Esqueceu sua senha?</a></p>

                        <p class="text-center">Não tem uma conta? <a href="{{ route('cadastrar') }}">Cadastrar</a></p>


                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>


              @endsection
