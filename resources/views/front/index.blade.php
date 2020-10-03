@extends('layouts.front')

@section('content')
<!-- Row -->
<div class="row ">

  <div class="col-sm">
    <div class="card align-items-center justify-content-center">
      <div class="card-img card-img-bg text-white  h-400p align-items-center justify-content-center" style="background-image: url(dist/img/home_banner.jpg);">
        <div class="card-img-overlay text-white bg-trans-dark-60  h-400p align-items-center justify-content-center">
          <h2 class="  card-title text-white mt-100 align-items-center justify-content-center"></h2>
          <div class="row align-items-center justify-content-center ">
            <h3 class="text-white text-center"><strong>O GUIA DA CIDADE DE CAUCAIA</strong></h3>
          </div>
          <p class="card-text align-items-center justify-content-center">
            <div class="row  align-items-center justify-content-center mt-20">
            <a href="#" target="_blank" rel="noopener">
              <img class="h-50p w-150p" src="dist/img/app-store-dark.png" alt="Colab na App Store">
            </a>

            <a href="#" target="_blank" rel="noopener">
              <img class="h-50p w-150p" src="dist/img/google-play-dark.png" alt="Colab no Google Play">
            </a>

          </div>

          <div class="row col-12 align-items-center justify-content-center">
            <small>disponível em breve*</small>
          </div></p>

        </div>
      </div>
    </div>



  </div>
</div>
<div class="container-fluid  ">
  <div class="row mt-40 mb-40">
    <div class="col-12">
      <div class="row align-items-center justify-content-center">
        <div class="row col-12 align-items-center justify-content-center mb-20">
          <h5>O QUE VOCÊ DESEJA? </h5>


        </div>
        <div class="row col-12 align-items-center justify-content-center">

          <a href="/reclamar/listar/todas" class="btn btn-gradient-danger mr-5 mt-5">Voz do Cidadão</a>
          <a href="#!" onclick="javascript:alert('Em breve');" class="btn btn-gradient-success mr-5 mt-5">Classificados</a>
          <a href="#!" onclick="javascript:alert('Em breve');" class="btn btn-gradient-primary mr-5 mt-5">Noticias</a>
          <a href="#!" onclick="javascript:alert('Em breve');" class="btn btn-gradient-info mr-5 mt-5">Lugares</a>

        </div>

      </div>
    </div>

  </div>

</div>
@endsection

@section('js_after')


@endsection
