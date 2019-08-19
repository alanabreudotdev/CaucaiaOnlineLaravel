<nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
        <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
        <a class="navbar-brand" href="/">
            <img class="brand-img d-inline-block align-top" src="{{asset('dist/img/logo-light.png')}}" alt="brand" />
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapseAlt">
            <ul class="navbar-nav">
                <li class="nav-item  show-on-hover {{ (request()->is('/')) ? 'active' : '' }}">
                    <a class="nav-link " href="/" role="button" aria-haspopup="true" aria-expanded="false">
                        INÍCIO
                    </a>
                </li>
                <li class="nav-item  show-on-hover {{ (request()->is('noticias*')) ? 'active' : '' }}">
                    <a class="nav-link " href="{{ url('/noticias')}}" role="button"  aria-haspopup="true" aria-expanded="false">
                        NOTÍCIAS
                    </a>
                </li>
                <li class="nav-item  show-on-hover {{ (request()->is('reclamar*')) ? 'active' : '' }}">
                    <a class="nav-link " href="{{ url('/reclamar/listar/todas')}}" role="button"  aria-haspopup="true" aria-expanded="false">
                        RECLAMAÇÕES
                    </a>
                </li>
                <!--
                <li class="nav-item  show-on-hover">
                        <a class="nav-link " href="#!" role="button"  aria-haspopup="true" aria-expanded="false">
                            AJUDA
                        </a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!" >CONTATO</a>
                </li>
                --->
            </ul>
        </div>

        @if(Auth::user())
        <ul class="navbar-nav hk-navbar-content">
            <li class="nav-item">
                    <a href="/reclamar" class="btn btn-green btn-rounded btn-sm">Reclamar</a>
             </li>
            @if (Auth::check() && Auth::user()->hasRole('admin'))
                <li class="nav-item">
                   <a id="settings_toggle_btn"  class="nav-link nav-link-hover" href="{{ url('/admin') }}"><span class="feather-icon"><i data-feather="settings"></i></span></a>
                </li>
            @endif
            @if (Auth::check() && Auth::user()->hasRole('gerenciador'))
                <li class="nav-item">
                   <a id="settings_toggle_btn"  class="nav-link nav-link-hover" href="{{ url('/gerenciador') }}"><span class="feather-icon"><i data-feather="settings"></i></span></a>
                </li>
            @endif

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
               <li class="nav-item">
                    <a href="/reclamar" class="btn btn-success btn-rounded btn-sm">Reclamar</a>
               </li>
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                    <div class="avatar">
                                            <img src=" {{ asset('dist/img/img-thumb.jpg')}}" alt="Usuario" class="avatar-img rounded-circle">
                                        </div>
                            </div>
                            <div class="media-body">
                            <span><i class="zmdi zmdi-chevron-down"></i></span>
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
