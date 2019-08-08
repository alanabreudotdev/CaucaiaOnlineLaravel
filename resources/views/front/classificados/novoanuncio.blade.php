@extends('layouts.front')

@section('css_before')

@endsection

@section('content')
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    <!-- Title -->
    <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><i class="material-icons">dashboard</i></span> Classificados </h4>
        </div>
        <!-- /Title -->
    <!-- Row -->
    <div class="row ">
            <div class="col-xl-8 col-md-8">
                <section class="hk-sec-wrapper">
                        <h4 class="hk-sec-title">Novo Anúncio</h4>
                        <div class="row">
                            <div class="col-sm">
                            <form id="anuncio" action="{{route('classificados.front.anunciar.post')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-md-8 form-group{{ $errors->has('category_id') ? 'has-error' : ''}}">
                                     {!! Form::label('category_id', 'Categoria*', array('class'=> ' control-label')) !!}                                            
                                          <select name="category_id" class="form-control select2"  id="category_id" required>
                                                <option  selected="" value="">Selecione...</option>
                                            @foreach($categories as $category)
                                                    <option disabled value="{!!$category->id!!}">{!!$category->name!!}</option>
                                                        if($category->subCategory)
                                                            @foreach($category->subCategory as $subcategory)
                                                                <option value="{!!$subcategory->id!!}">|--{!!$subcategory->name!!}</option>
                                                            @endforeach    
                                                        @end if
                                                      @endforeach
                                                    </select>
                                                    @error('category_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror 
                                                    
                                            </div> 
                                            <div class="col-md-4 form-group">
                                                <label for="tipo">Tipo*</label>
                                                <select  class="form-control custom-select @error('titulo') is-invalid @enderror" name="tipo" id="tipo" required>
                                                    <option value="" selected="">Selecione...</option>
                                                    <option value="1">Alugar</option>
                                                    <option value="2">Vender</option>
                                                    <option value="3">Outro</option>
                                                </select>
                                                @error('tipo')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror 
                                            </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="titulo">Título*</label>
                                                <input required  class="form-control  @error('titulo') is-invalid @enderror" maxlength="220" value="{{old('titulo')}}" name="titulo" id="titulo" placeholder="Título" type="text">    
                                                @error('titulo')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror                                                    
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <label for="titulo">Preço*</label>
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">R$</span>
                                                    </div>
                                                    <input type="tel" name="preco" id="preco" required placeholder="1500" class="form-control" aria-label="Valor em Reais">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">,00</span>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="descricao">Descrição*</label>
                                        <textarea required class="form-control  @error('descricao') is-invalid @enderror"  rows=10 id="descricao" name="descricao" aria-hidden="true">{{old('descricao')}}</textarea>                                    
                                        @error('descricao')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label for="cep">CEP*</label>
                                            <input required value="{{old('cep')}}" class="form-control  @error('cep') is-invalid @enderror"  maxlength="8" name="cep" id="cep" placeholder="xxxxxxxx" type="tel">
                                                @error('cep')
                                                <div class="invalid-feedback">
                                                     {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        <div class="col-md-7 form-group">
                                            <label for="address">Endereço*</label>
                                            <input required value="{{old('endereco')}}" class="form-control  @error('endereco') is-invalid @enderror" name="endereco" id="endereco" placeholder="Av. da Integração" type="text">
                                            @error('endereco')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 form-group">
                                             <label for="numero">Número*</label>
                                            <input class="form-control" required value="{{old('numero')}}" name="numero"  id="numero" placeholder="100" type="text">
                                            @error('numero')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="cidade">Cidade*</label>
                                                <input required value="{{old('cidade')}}" required class="form-control  @error('cidade') is-invalid @enderror" name="cidade" id="cidade" placeholder="Caucaia" type="text">
                                                @error('cidade')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                 <label for="bairro">Bairro*</label>
                                            <input class="form-control" required value="{{old('bairro')}}" name="bairro"  id="bairro" placeholder="Ex: Araturi" type="text">
                                            @error('bairro')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                    <div class="row ">
                                        <div class="form-group col-md-6">
                                           <label for="celular">Celular*</label>
                                            <input required value="{{old('celular')}}" class="form-control  @error('celular') is-invalid @enderror" data-mask="(99) 99999-9999" name="celular"  id="celular" placeholder="" type="tel">
                                            @error('celular')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                         </div>
                                         <div class="form-group col-md-6">
                                                <label for="telefone">Telefone</label>
                                                 <input  value="{{old('telefone')}}" class="form-control  @error('telefone') is-invalid @enderror" data-mask="(99) 9999-9999" name="telefone"  id="telefone" placeholder="" type="tel">
                                                 @error('telefone')
                                                 <div class="invalid-feedback">
                                                     {{ $message }}
                                                 </div>
                                                 @enderror
                                              </div>
                                    
                                        <div class="form-group col-md-12">
                                            <label for="complemento">Complemento</label>
                                            <input class="form-control" name="complemento" id="complemento" placeholder="Ex: próximo a padaria" type="text">
                                        </div>
                                        
                                    </div>
                                    
                                    <small>Seu endereço NÃO aparecerá no anúncio.</small>
                                    <hr>
                                     <div class="row">
                                          
                                            <div class="col-sm">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                            <label for="address">Tags</label>
                                                        <select id="input_tags" name="tags" class="form-control" multiple="multiple">
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <h5 class="hk-sec-title">Imagem Principal*</h5>
                                    <div class="row ">
                                            <div class="form-group col-md-12">
                                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="material-icons">image</i></span>
                                                        </div>
                                                        <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                        <span class="input-group-append">
                                                                <span class=" btn btn-primary btn-file"><span class="fileinput-new">Selecione</span><span class="fileinput-exists">Alterar</span>
                                                        <input  type="file" name="image" id="image" required>
                                                        </span>
                                                        <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </span>
                                                    </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <h5 class="hk-sec-title">Galeria Fotos</h5>
                                    <div class="row ">
                                            <div class="form-group col-md-12">
                                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="material-icons">image</i></span>
                                                        </div>
                                                        <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                        <span class="input-group-append">
                                                                <span class=" btn btn-primary btn-file">
                                                                    <span class="fileinput-new">Selecione</span><span class="fileinput-exists">Alterar</span>
                                                        <input type="file" name="image_01" id="image_01">
                                                        </span>
                                                        <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </span>
                                                    </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="material-icons">image</i></span>                                                        </div>
                                                        <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                        <span class="input-group-append">
                                                                <span class=" btn btn-primary btn-file"><span class="fileinput-new">Selecione</span><span class="fileinput-exists">Alterar</span>
                                                        <input type="file" name="image_02" id="image_02">
                                                        </span>
                                                        <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </span>
                                                    </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="material-icons">image</i></span>                                                        </div>
                                                        <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                        <span class="input-group-append">
                                                                <span class=" btn btn-primary btn-file"><span class="fileinput-new">Selecione</span><span class="fileinput-exists">Alterar</span>
                                                        <input type="file" name="image_03" id="image_03">
                                                        </span>
                                                        <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </span>
                                                    </div>
                                            </div>
                                    </div>    
                                        <small>Campos com * são obrigatórios</small>
                                    <hr>
                                    <button class="btn btn-success" type="submit">PUBLICAR ANÚNCIO</button>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
           
            <!-- PUBLICIDADE ADWORD -->
        <div class="col-xl-4 col-md-4 ">
                <div class="hk-row-wrapper">
                    <div class="card">                            
                        <img src="https://via.placeholder.com/300x250.png" class="img-fluid" alt="img">
                    </div>
                </div>
            </div>
            <!-- FIM PUBLICIADE ADWORD -->
        </div>
</div>
</div>
@endsection

@section('js_after')
    
   <script>
       $('form#anuncio').submit(function(){
            $(this).find(':input[type=submit]').prop('disabled', true);
            
        });

        function scrollPage() {
            let size = $(document).height() * 0.0;
            $("html, body").animate({scrollTop: size}, "slow");
        }
       
	$("#cep").focusout(function(){
		//Início do Comando AJAX
		$.ajax({
			//O campo URL diz o caminho de onde virá os dados
			//É importante concatenar o valor digitado no CEP
			url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			//Aqui você deve preencher o tipo de dados que será lido,
			//no caso, estamos lendo JSON.
			dataType: 'json',
			//SUCESS é referente a função que será executada caso
			//ele consiga ler a fonte de dados com sucesso.
			//O parâmetro dentro da função se refere ao nome da variável
			//que você vai dar para ler esse objeto.
			success: function(resposta){
				//Agora basta definir os valores que você deseja preencher
				//automaticamente nos campos acima.
				$("#endereco").val(resposta.logradouro);
				$("#complemento").val(resposta.complemento);
				$("#bairro").val(resposta.bairro);
				$("#cidade").val(resposta.localidade);
				$("#uf").val(resposta.uf);
				//Vamos incluir para que o Número seja focado automaticamente
				//melhorando a experiência do usuário
				$("#numero").focus();
			}
		});
	});

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
                }
                form.classList.add('was-validated');
                $(this).find(':input[type=submit]').removeAttr('disabled', 'disabled');
              }, false);
            });
          }, false);
        })();
</script>

   
@endsection
