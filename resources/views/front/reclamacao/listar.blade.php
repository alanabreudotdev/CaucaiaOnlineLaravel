@extends('layouts.front')


@section('content')

<div class="container-fluid">
        <div class="row mb-40">
                <div class="col-xl-12 pa-0 ">
                    <div id="mapa" class="gmap w-auto h-350p border-bottom border-3" ></div>
                    <div class="listar-mapcontrols">
                            <span id="doc-mapplus"><i class="fa fa-plus"></i></span>
                            <span id="doc-mapminus"><i class="fa fa-minus"></i></span>
                            <span id="doc-lock"><i class="fa fa-lock"></i></span>
                    </div>
                </div>
        </div>
  
    <!-- Row -->
    <div class="row ">
        <div class="col-xl-8 col-md-8">
        
            <div class="">   
                <!-- Title -->
        <div class="hk-pg-header">
                @if($categoria)
                    <h4 class="hk-pg-title "><span class="pg-title-icon">{{$titulo}}</h4>
                @else
                    <h4 class="hk-pg-title "><span class="pg-title-icon">Reclamações</h4>
                @endif  
        </div>
        <!-- /Title -->
        <small>Total de Reclamações: {{count($reclamacoes)}}</small>                 
                <!-- LISTAR RECLAMACÇÕES -->
                @include('components.reclamacoes_list')
                <!-- FIM LISTAR RECLAMACOES -->
                    
                <div class="pagination-wrap  justify-content-center mb-25">
                    {{$reclamacoes->links()}}
                </div>               
             </div>
        </div>
           
            <!-- COLUNA DIREITA  -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-10">
                @include('components.categorias_problemas_mais_frequentes')
            </div>
            <!-- FIM COLUNA DIREITA -->
        </div>
</div>
@endsection

@section('js_after')
<script>
    
        var data = <?php print_r(json_encode($locations)) ?>;
    </script>  
    
@endsection
