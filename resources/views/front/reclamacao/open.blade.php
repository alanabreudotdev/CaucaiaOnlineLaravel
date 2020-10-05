@extends('layouts.front')

@section('css_before')

@endsection

@section('content')
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">

    <!-- Row -->
    <div class="row ">
            <div class="col-xl-12 col-md-12">
            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title ">Nova Reclamação </h4>
            </div>

           
            <!-- /Title -->
                <section class="hk-sec-wrapper">
                @include('parts.messages')
                <h4 class="hk-sec-title">{{setting('nome_orgao_servico')}}</h4>
                        <h5 class="mb-25">Categoria: {{ $categoria->name}}</h5>
                        <div class="row">
                            <div class="col-sm">
                            <form id="reclamacao" action="{{url('reclamar')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                    @csrf
                                    <input type="hidden" name="reclama_category_id" value="{{ $categoria->id}}">
                                    <input type="hidden" name="latitude" id="latitude">
                                    <input type="hidden" name="longitude" id="longitude">
                                    <div class="row">
                                        <div class="col-md-12 mb-10">
                                            <label for="reclama_sub_category_id">Subcategoria*</label>
                                                <select required value="{{old('reclama_sub_category_id')}}" class="form-control custom-select d-block w-100 @error('reclama_sub_category_id') is-invalid @enderror" name="reclama_sub_category_id" id="reclama_sub_category_id">
                                                        <option value="">Escolha...</option>
                                                        @foreach($subcategorias as $sub)
                                                    <option value="{{$sub->id}}">{{$sub->name}}</option>
                                                        @endforeach
                                                </select>
                                                @error('reclama_sub_category_id')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                       </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="titulo">Título*</label>
                                            <input required class="form-control  @error('titulo') is-invalid @enderror" maxlength="220" value="{{old('titulo')}}" name="titulo" id="titulo" placeholder="Título" type="text">
                                            @error('titulo')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>

                                            @enderror

                                    </div>

                                    <div class="form-group">
                                        <label for="email">Reclamação*</label>
                                        <textarea placeholder="Gostaríamos de saber mais detalhes da sua reclamação." required class="form-control  @error('texto_reclamacao') is-invalid @enderror"  rows=10 id="texto_reclamacao" name="texto_reclamacao" aria-hidden="true">{{old('texto_reclamacao')}}</textarea>
                                        @error('texto_reclamacao')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9 form-group">
                                            <label for="address">Endereço*</label>
                                            <input required placeholder="Ex: Nome da rua, numero, bairro ou cidade" value="{{old('endereco')}}" class="form-control ui-autocomplete-input  @error('endereco') is-invalid @enderror" name="endereco" id="endereco" placeholder="Av. da Integração" type="text" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                                            @error('endereco')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror

                                        </div>
                                        <div class="col-md-3 form-group">
                                                <label for="address">&nbsp</label>
                                                <input type="button" class="btn btn-success  btn-block btn-sm" id="btnEndereco" onclick="btnEndereco()" value="MOSTRAR NO MAPA">
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12 form-group">
                                            <small>Veja abaixo se o marcador está na posição correta. Caso não esteja, você pode mover o marcador para a posição desejada.</small>
                                            <div id="mapaAddress" class="gmap h-400p"></div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row ">
                                        <div class="form-group col-md-6">
                                           <label for="address">Celular*</label>
                                            <input required value="{{old('celular')}}" class="form-control  @error('celular') is-invalid @enderror" data-mask="(99) 99999-9999" name="celular"  id="celular" placeholder="" type="text">
                                            @error('celular')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="address">Telefone</label>
                                            <input class="form-control" name="telefone" data-mask="(99) 9999-9999"  id="telefone" placeholder="" type="tel">
                                       </div>
                                    </div>

                                    <hr>
                                    <h5 class="hk-sec-title">Imagens</h5>
                                    <h5 class="mb-25">Adicione até 03 fotos</h5>
                                    <div class="row ">
                                            <div class="form-group col-md-12">
                                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="material-icons">image</i></span>
                                                        </div>
                                                        <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                        <span class="input-group-append">
                                                                <span class=" btn btn-primary btn-file"><span class="fileinput-new">Selecione</span><span class="fileinput-exists">Alterar</span>
                                                        <input  type="file" name="foto_url_01" id="foto_url_01" >
                                                        </span>
                                                        <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </span>
                                                    </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="material-icons">image</i></span>
                                                        </div>
                                                        <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                        <span class="input-group-append">
                                                                <span class=" btn btn-primary btn-file"><span class="fileinput-new">Selecione</span><span class="fileinput-exists">Alterar</span>
                                                        <input  type="file" name="foto_url_02" id="foto_url_02" >
                                                        </span>
                                                        <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </span>
                                                    </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="material-icons">image</i></span>
                                                        </div>
                                                        <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                        <span class="input-group-append">
                                                                <span class=" btn btn-primary btn-file"><span class="fileinput-new">Selecione</span><span class="fileinput-exists">Alterar</span>
                                                        <input  type="file" name="foto_url_03" id="foto_url_03" >
                                                        </span>
                                                        <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </span>
                                                    </div>
                                            </div>
                                    </div>

                                        <hr>
                                        <h5 class="hk-sec-title ">Adicione um Video</h5>
                                        <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3">https://www.youtube.com/embed/</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="url_video" id="url_video" placeholder="zpOULjyy-n8" aria-describedby="basic-addon3">
                                                </div>
                                                <small>Informe somente o codigo do video após /embed/. Ex: zpOULjyy-n8</small>

                                        </div>

                                   <hr>
                                    <small class="mb-25">Campos com * são obrigatórios</small>
                                    <br/><br/>
                                    <button class="btn btn-success mt-20" type="submit">PUBLICAR RECLAMAÇÃO</button>
                                </form>
                            </div>
                        </div>
                    </section>

        </div>
</div>
</div>
@endsection

@section('js_after')
<script src="{{asset('dist/js/gmap-data-address.js')}}"></script>

   <script>
       $('form#reclamacao').submit(function(){
            $(".preloader-it").fadeIn("slow");
            $(this).find(':input[type=submit]').prop('disabled', true);
        });

        function scrollPage() {
            let size = $(document).height() * 0.0;
            $("html, body").animate({scrollTop: size}, "slow");
        }

       // Example starter JavaScript for disabling form submissions if there are invalid fields
       (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                  scrollPage();
                  $(".preloader-it").delay(500).fadeOut("slow");
                  $(this).find(':input[type=submit]').removeAttr('disabled', 'disabled');
                }
                form.classList.add('was-validated');

              }, false);
            });
          }, false);
        })();
    </script>




@endsection
