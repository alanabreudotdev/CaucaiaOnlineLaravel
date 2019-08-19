<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>@if(setting('Titulo')) {{ setting('Titulo')  }} @else Criatees - Soluções Web @endif  @if(!empty($titulo)) - {{$titulo}} @endif</title>
    <meta name="description" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">
    <link rel="icon" href="{{asset('favicon.png')}}" type="image/x-png">

	<!-- Morris Charts CSS -->
    <link href="{{asset('vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />

	<!-- Toastr CSS -->
    <link href="{{asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Toggles CSS -->
    <link href="{{asset('vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    <!-- select2 CSS -->
    <link href="{{asset('vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- auto complete -->
    <link href="{{asset('dist/css/auto-complete.css')}}" rel="stylesheet" type="text/css">


    <!-- Jquery UI -->
    <link href="{{asset('dist/css/jquery-ui.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
    @yield('css_before')
</head>

<body>
    @include('flash-toastr::message')
    <!-- Preloader -->
    <div class="preloader-it">
            <div class="pin"></div>
            <div class="pulse"></div>
    </div>
    <!-- /Preloader -->


	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-alt-nav hk-icon-nav ">
        <!-- Top Navbar -->
            @include('parts.topbar_frontend')
        <!-- /Top Navbar -->
        <!-- Main Content -->
        <div class="hk-pg-wrapper  px-0 bg-light ">
            @yield('content')
            <!-- Footer -->
            <div class="hk-footer-wrap container-fluid border-top border-5 border-green bg-light">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>{{setting('footer-text')}} </p>
                        </div>
                        <div class="col-md-6 col-sm-12">

                            <p class="d-inline-block"> <a href="#">Política de Privacidade</a> | Redes Sociais</p>
                            <a href="https://www.instagram.com/caucaia.online" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-instagram"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->
         <!-- jQuery -->
      <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
      <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

      <!-- Jasny-bootstrap  JavaScript -->
    <script src="{{asset('vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>

      <!-- Slimscroll JavaScript -->
      <script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

      <!-- Fancy Dropdown JS -->
      <script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

      <!-- FeatherIcons JavaScript -->
      <script src="{{asset('dist/js/feather.min.js')}}"></script>

      <!-- Toggles JavaScript -->
      <script src="{{asset('vendors/jquery-toggles/toggles.min.js')}}"></script>
      <script src="{{asset('dist/js/toggle-data.js')}}"></script>

      <!-- Counter Animation JavaScript -->
      <script src="{{asset('vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>

      <!-- Select2 JavaScript -->
        <script src="{{asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{asset('dist/js/select2-data.js')}}"></script>
        <script src="{{asset('dist/js/jquery-ui.js')}}"></script>

      <!-- Toastr JS -->
      <script src="{{asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

       <!-- Gmap JavaScript -->

       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW0nZzyGoIjG4s_0MMpMobRL_j78KQy2M&language=pt-BR"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
       <script src="{{asset('dist/js/mapas/markerclusterer.js')}}"></script>
       <script src="{{asset('dist/js/mapas/infobox.js')}}"></script>

      <!-- Init JavaScript -->
      <script src="{{asset('dist/js/init.js')}}"></script>


        @yield('js_after')

        <script src="{{asset('dist/js/mapas/map.js')}}"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-3NERRDCHH7"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-3NERRDCHH7');
        </script>
</body>

</html>
