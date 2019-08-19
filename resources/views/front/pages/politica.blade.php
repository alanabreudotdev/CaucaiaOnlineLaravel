@extends('layouts.front')


@section('content')
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">


    <!-- Row -->

    <div class="row ">
        <div class="col-xl-12 col-md-12 mb-20">
            <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title">Política de Privacidade</h4>
        </div>
    <!-- /Title -->
                <!-- TEXTO NOTICIA -->
                <div class="card ">
                    <div class="card-header  media pa-20 ">
                      

                    </div>

                    <div class="card-body">

                        <p class="card-text font-15"> {!! $page->content!!}</p>


                    </div>

                </div>

        </div>
        <!-- FIM CONTEUDO -->


</div>
@endsection

@section('js_after')


@endsection
