<nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
        <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
        <a class="navbar-brand" href="/">
            <img class="brand-img d-inline-block align-top" src="{{asset('dist/img/logo-light.png')}}" alt="brand" />
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapseAlt">
            <ul class="navbar-nav">
                <li class="nav-item  show-on-hover active">
                    <a class="nav-link " href="/" role="button" aria-haspopup="true" aria-expanded="false">
                            Início
                    </a>
                </li>
                <li class="nav-item  show-on-hover">
                    <a class="nav-link " href="{{route('noticias.front.index')}}" role="button"  aria-haspopup="true" aria-expanded="false">
                         Notícias
                    </a>
                </li>
                <li class="nav-item  show-on-hover">
                    <a class="nav-link " href="{{ route('reclamacao.front.index')}}" role="button"  aria-haspopup="true" aria-expanded="false">
                        Reclame 
                    </a>
                </li>
                <li class="nav-item dropdown show-on-hover">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Classificados
					</a>
                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" href="{{ route('classificados.front.index')}}">Anúncios</a>
                        <a class="dropdown-item" href="{{ route('classificados.front.categorias')}}">Categorias</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('classificados.front.anunciar')}}">Anunciar Grátis </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="documentation.html" >Lugares</a>
                </li>
            </ul>
        </div>
      
        @if(Auth::user())
        <ul class="navbar-nav hk-navbar-content">
            <li class="nav-item">
                <a class="btn btn-gradient-success btn-wth-icon icon-wthot-bg btn-sm d-none d-sm-block d-md-none" href="{{ url('/classificados/anunciar') }}"><span class="icon-label"><i class="pe-7s-speaker"></i> </span><span class="btn-text">Anunciar</span></a>
            </li>
            @if (Auth::check() && Auth::user()->hasRole('admin')) 
                <li class="nav-item">
                   <a id="settings_toggle_btn"  class="nav-link nav-link-hover" href="{{ url('/admin') }}"><span class="feather-icon"><i data-feather="settings"></i></span></a>
                </li>
            @endif
            
            <li class="nav-item dropdown dropdown-notifications">
                <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge-wrap"><span class="badge badge-success badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <h6 class="dropdown-header">Notificações <a href="javascript:void(0);" class="">Ver todas</a></h6>
                    <div class="notifications-nicescroll-bar">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                            <img src="@if(Auth::user()->photo_url) {{ asset('storage'.Auth::user()->photo_url) }} @else {{ asset('dist/img/img-thumb.jpg')}} @endif" alt="{{ Auth::user()->name }}" class="avatar-img rounded-circle">
                                        </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
                                        <div class="notifications-time">12m</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset('dist/img/avatar2.jpg')}}" alt="user" class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
                                        <div class="notifications-time">1h</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                        <span class="avatar-text avatar-text-primary rounded-circle">
                                                <span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Griffin head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
                                        <div class="notifications-time">2d</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                        <span class="avatar-text avatar-text-success rounded-circle">
                                                <span class="initial-wrap"><span>A</span></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
                                        <div class="notifications-time">1w</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <div class="media">
                                <div class="media-img-wrap">
                                    <div class="avatar avatar-sm">
                                        <span class="avatar-text avatar-text-warning rounded-circle">
                                                <span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div>
                                        <div class="notifications-text">Last 2 days left for the project</div>
                                        <div class="notifications-time">15d</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item dropdown dropdown-authentication">
                <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <div class="media-img-wrap">
                            <div class="avatar">
                                <img src="@if(Auth::user()->photo_url) {{ asset('storage'.Auth::user()->photo_url) }} @else {{ asset('dist/img/img-thumb.jpg')}} @endif" alt="{{ Auth::user()->name }}" class="avatar-img rounded-circle">
                            </div>
                            <span class="badge badge-success badge-indicator"></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">

                <a class="dropdown-item" href="{{ route('usuario.perfil')}}"><i class="dropdown-icon zmdi zmdi-account-o"></i><span>Perfil</span></a>
                    <a class="dropdown-item" href="{{ route('usuario.lugares') }}"><i class="dropdown-icon material-icons">store</i><span>Empresas</span></a>
                    <a class="dropdown-item" href="{{ route('usuario.anuncios') }}"><i class="dropdown-icon material-icons">shop</i><span>Anúncios</span></a>
                    <a class="dropdown-item" href="{{ route('usuario.reclamacoes') }}"><i class="dropdown-icon material-icons">record_voice_over</i><span>Reclamações</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     <i class="dropdown-icon zmdi zmdi-power"></i><span>Sair</span></a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </div>
            </li>
            
        </ul>
        @else
        <ul class="navbar-nav hk-navbar-content">
               
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                
                            </div>
                            <div class="media-body">
                            <span>Olá usuário<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="{{ route('entrar')}}"><i class="dropdown-icon zmdi zmdi-account"></i><span>Entrar</span></a>
                        <a class="dropdown-item" href="{{ route('cadastrar')}}"><i class="dropdown-icon zmdi zmdi-card"></i><span>Cadastrar</span></a>
                       
                    </div>
                </li>
                
            </ul>
            @endif
    </nav>