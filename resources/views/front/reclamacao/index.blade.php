@extends('layouts.front')


@section('content')
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    
   <!-- Title -->
   <div class="hk-pg-header">
        <h2 class="hk-pg-title mt-20">Do que você quer reclamar?</h2>
    </div>
    <!-- /Title -->
    <!-- Row -->
    <div class="row ">
        <div class="col-xl-12 col-md-12">
                <section class="">
                      <div class="row">
                            <div class="col-sm">
                                    <div class="row">
                                        @foreach ($categorias as $cat)
                                            <!--CARD CATEGORIA -->
                                        <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
                                                <div class="card  text-center pb-30">    
                                                        
                                                           
                                                                                                           
                                                        <div class="card-body">
                                                                <img src="{{asset('storage'.$cat->icon)}}" alt="{{$cat->name}}" class=" text-center h-50p w-50p">
                                                        <h5 class="card-title">{{$cat->name}}</h5>
                                                        <h1 class="card-title">@if($cat->total_reclamacoes>0){{$cat->total_reclamacoes}}@else 0 @endif</h1>
                                                        <h6 class="card-subtitle mb-2 text-muted">reclamações</h6>
                                                        <a href="{{ url('reclamar/listar/'.$cat->id)}}" class="btn btn-light ">Ver</a>
                                                        @if (Auth::check()) 
                                                            <a href="{{ url('reclamar/'.$cat->id)}}" class="btn btn-green ">Reclamar</a>
                                                        @else
                                                            <button  data-toggle="modal" data-target="#modalLogin" class="btn btn-green ">Reclamar</button> 
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- FIM CARD CATEGORIA -->
                                        @endforeach
                                        
                                    </div>
                                </div>
                    </div>
                </section>
                 <!-- FIM NOTICIAS HORIZONTAL -->
                 <div class="pagination-wrap  justify-content-center mb-25">
                        {{$categorias->links()}}
                </div>   
            </div>
            <!--MODAL LOGIN -->
            <div class="modal fade " id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Antes de Reclamar você precisa...</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <!-- FORM CADASTRAR -->
                                <div class="col-md-6 mb-20">
                                        <form method="POST" action="{{ route('cadastrar') }}">
                                                @csrf
                                            <h6 class="mb-10">FAZER SEU CADASTRO </h6>
                                            <p class="mb-30 ">Crie rapidamente uma conta abaixo para gerenciar e fazer futuras reclamações.</p>
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
                                            <button class="btn btn-primary btn-block" type="submit">Continuar</button>
                                            
                                        </form>
                                </div>
                                <!-- FIM FORM CADASTRAR -->
                                <!-- FORM LOGIN -->
                                <div class="col-md-6 mb-20">
                                    <form method="POST" action="{{ route('entrar') }}">
                                        @csrf
                                    <h6 class=" mb-10">OU ENTRAR COM SUA CONTA</h6>
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
                                    </form>
                                </div>
                                 <!-- FIM FORM LOGIN -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM MODAL LOGIN -->
        </div>
</div>
@endsection

@section('js_after')
      <!-- Owl JavaScript -->
    <script src="{{ asset('vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <!-- Owl Init JavaScript -->
    <script src="{{ asset('dist/js/owl-data.js')}}"></script>
      
@endsection
