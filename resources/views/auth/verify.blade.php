
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
                        <div class="card">
                            <div class="card-header">{{ __('Valide seu email') }}</div>

                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('Um novo link de verificação foi enviado para o seu endereço de e-mail.') }}
                                    </div>
                                @endif

                                {{ __('Antes de prosseguir, verifique seu e-mail em busca de um link de verificação.') }}
                                {{ __('Se você não recebeu o email') }}, <a href="{{ route('verification.resend') }}">{{ __('clique aqui para solicitar outro') }}</a>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
