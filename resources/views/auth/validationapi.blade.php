
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
                            <div class="card-header">{{ __('EMAIL VALIDADO COM SUCESSO') }}</div>

                            <div class="card-body">


                                {{ __('Seu email foi validado com sucesso. Abra o APP do Caucaia Online e logue.') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
