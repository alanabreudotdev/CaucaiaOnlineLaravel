@extends('layouts.front')

@section('content')
    <!-- Container -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12 pa-0">
                <!-- CABEÇALHO PAINEL USER -->
                    @include('components.cabecalho_usuario')
                <!-- FIM CABEÇALHO -->
                <div class="tab-content mt-sm-60 mt-30">
                    <div class="tab-pane fade show active" role="tabpanel">
                        <div class="container-fluid">
                            <div class="hk-row">
                                <!-- MENU PERFIL -->
                                @include('front.user.menu')
                                <!-- FIM MENU PERFIL -->
                                <div class="col-lg-8">
                                        <div class="card card-profile-feed mb-25">
                                                <div class="card-header card-header-action">
                                                    <div class="media align-items-center">
                                                      
                                                        <div class="media-body">
                                                            <h3 class="text-capitalize font-weight-500 text-dark">Minhas Reclamações</h3>
                                                            <div class="font-13">Listagem das reclamações</div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                    <form class="navbar-search-alt mb-25">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span></span>
                                            </div>
                                            <input class="form-control" type="search" name="pesquisar" placeholder="Digite e aperte enter" aria-label="Search">
                                        </div>
                                    </form>
                                    <section class="hk-sec-wrapper">
                                            
                                        <!-- LISTAR RECLAMACÇÕES -->
                                        @include('components.reclamacoes_list')
                                        <!-- FIM LISTAR RECLAMACOES -->
                                        </section>
                                        <div class="pagination-wrap  justify-content-center mb-25">
                                            {{$reclamacoes->links()}}
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
        <!-- /Row -->
    </div>
    <!-- /Container -->
@endsection
@section('js_after')
    
@endsection