@extends('layouts.front')

@section('content')

<div class="container-fluid">
        <div class="row mb-40">
            <div class="col-xl-12 pa-0 ">
                <div id="mapa" class="gmap w-auto h-450p border-grey border-bottom border-4 navbar-expand-xl" ></div>
                <div class="listar-mapcontrols">
                    <span id="doc-mapplus"><i class="fa fa-plus"></i></span>
                    <span id="doc-mapminus"><i class="fa fa-minus"></i></span>
                    <span id="doc-lock"><i class="fa fa-lock"></i></span>
                    <span id="listar-geolocation"><i class="fa fa-crosshairs"></i></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="">
                        <div class="hk-pg-header mb-10 justify-content-center">
                            <div>
                                    <div class="div1"></div>
                                    <h2 class="hk-pg-title text-center ">Reclamações Recentes</h2>
                                </div>
                        </div>
                            
                        <!-- LISTAR RECLAMACÇÕES -->
                        @include('components.reclamacoes_list')
                        <!-- FIM LISTAR RECLAMACOES -->
                        
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-10">
                    @include('components.categorias_problemas_mais_frequentes')
                    @include('components.reclamacoes_mais_apoiadas')
            </div>
        </div>
         <!-- FIM ROW -->
         
        

</div>

    
@endsection

@section('js_after')

      <!-- Owl JavaScript -->
     <script src="{{asset('vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
     <!-- Owl Init JavaScript -->
    <script src="{{asset('dist/js/owl-data.js')}}"></script>
     
    

<script>
    var data = <?php print_r(json_encode($locations)) ?>;
</script>
  
      
@endsection
