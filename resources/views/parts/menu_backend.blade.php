<!-- Vertical Nav -->
<nav class="hk-nav hk-nav-light">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <!--INICIO MENU ADMIN -->
        @if (Auth::check() && Auth::user()->hasRole('admin')) {
            <div class="navbar-nav-wrap">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admin')}}"  data-target="#dash_drp">
                            <span class="feather-icon"><i data-feather="activity"></i></span>
                            <span class="nav-link-text">Painel</span>
                        </a>
                    </li>
                
                </ul>
                
                <hr class="nav-separator">
                <div class="nav-header">
                    <span>MÓDULOS</span>
                    <span>MOD</span>
                </div>
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/news')}}" data-toggle="collapse" data-target="#utilities_drp">
                            <span class="feather-icon"><i data-feather="anchor"></i></span>
                            <span class="nav-link-text">Noticias</span>
                        </a>
                        <ul id="utilities_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                        <li class="nav-item">
                                                <a class="nav-link" href="{{ url('/admin/news')}}">Listar</a>
                                            </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/admin/news-category')}}">Categorias</a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#forms_drp">
                            <span class="feather-icon"><i data-feather="server"></i></span>
                            <span class="nav-link-text">Classificados</span>
                        </a>
                        <ul id="forms_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/admin/classificado-item')}}">Listar</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{url('/admin/classificado-category')}}">Categorias</a>
                                    </li>                
                                    <li class="nav-item">
                                        <a class="nav-link" href="form-layout.html">Form Layout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="form-mask.html">Form Mask</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="form-validation.html">Form Validation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="form-wizard.html">Form Wizard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="file-upload.html">File Upload</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="editor.html">Editor</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#tables_drp">
                            <span class="feather-icon"><i data-feather="list"></i></span>
                            <span class="nav-link-text">Reclamações</span>
                        </a>
                        <ul id="tables_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ url('admin/reclamacao')}}">Listar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('admin/reclama-category')}}">Categorias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('admin/reclama-sub-category')}}">SubCategorias</a>
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/reclama-answer')}}">Respostas</a>
                                    </li>
                                
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#charts_drp">
                            <span class="feather-icon"><i data-feather="pie-chart"></i></span>
                            <span class="nav-link-text">Charts</span>
                        </a>
                        <ul id="charts_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="line-charts.html">Line Chart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="area-charts.html">Area Chart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="bar-charts.html">Bar Chart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pie-charts.html">Pie Chart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="realtime-charts.html">Realtime Chart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="mini-charts.html">Mini Chart</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#maps_drp">
                            <span class="feather-icon"><i data-feather="map"></i></span>
                            <span class="nav-link-text">Maps</span>
                        </a>
                        <ul id="maps_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="google-map.html">Google Map</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="vector-map.html">Vector Map</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            
                <hr class="nav-separator">
                <div class="nav-header">
                    <span>Recursos</span>
                    <span>Rcs</span>
                </div>
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/users')}}" data-target="#content_drp">
                            <span class="feather-icon"><i data-feather="users"></i></span>
                            <span class="nav-link-text">Usuários</span>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin/roles')}}" data-target="#content_drp">
                                <span class="feather-icon"><i data-feather="anchor"></i></span>
                                <span class="nav-link-text">Roles</span>
                            </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin/permissions')}}" data-target="#content_drp">
                                <span class="feather-icon"><i data-feather="server"></i></span>
                                <span class="nav-link-text">Permissões</span>
                            </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin/pages')}}" data-target="#content_drp">
                                <span class="feather-icon"><i data-feather="book-open"></i></span>
                                <span class="nav-link-text">Páginas</span>
                            </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/settings')}}" >
                            <span class="feather-icon"><i data-feather="book"></i></span>
                            <span class="nav-link-text">Configurações</span>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin/generator')}}" >
                                <span class="feather-icon"><i data-feather="sliders"></i></span>
                                <span class="nav-link-text">Gerador</span>
                            </a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link link-with-badge" href="{{url('/admin/activitylogs')}}">
                            <span class="feather-icon"><i data-feather="eye"></i></span>
                            <span class="nav-link-text">Log</span>
                            <span class="badge badge-sm badge-danger badge-pill">v 1.0</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        @endif
        <!--FIM MENU ADMIN -->

        <!-- INICIO MENU GERENCIADOR -->
        @if (Auth::check() && Auth::user()->hasRole('gerenciador')) 
        <div class="navbar-nav-wrap">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('gerenciador')}}"  data-target="#dash_drp">
                            <span class="feather-icon"><i data-feather="activity"></i></span>
                            <span class="nav-link-text">Painel</span>
                        </a>
                    </li>
                
                </ul>
                
                <hr class="nav-separator">
                <div class="nav-header">
                    <span>MÓDULOS</span>
                    <span>MOD</span>
                </div>
                <ul class="navbar-nav flex-column">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#tables_drp">
                            <span class="feather-icon"><i data-feather="list"></i></span>
                            <span class="nav-link-text">Reclamações</span>
                        </a>
                        <ul id="tables_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ url('admin/reclamacao')}}">Listar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('admin/reclama-category')}}">Categorias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('admin/reclama-sub-category')}}">SubCategorias</a>
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/reclama-answer')}}">Respostas</a>
                                    </li>
                                
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            
                <hr class="nav-separator">
                <div class="nav-header">
                    <span>Recursos</span>
                    <span>Rcs</span>
                </div>
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/users')}}" data-target="#content_drp">
                            <span class="feather-icon"><i data-feather="users"></i></span>
                            <span class="nav-link-text">Usuários</span>
                        </a>
                    </li> 
                </ul>
            </div>
        @endif
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->