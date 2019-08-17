<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>{{ config('app.name', 'Laravel') }}</title>
		<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.png">
		<link rel="icon" href="favicon.png" type="image/x-png">

		<!-- Toggles CSS -->
		<link href="{{asset('vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

		<!-- Custom CSS -->
		<link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!-- Preloader -->
		<div class="preloader-it">
			<div class="loader-pendulums"></div>
		</div>
		<!-- /Preloader -->

		<!-- HK Wrapper -->
		<div class="hk-wrapper">

			<!-- Main Content -->
			<div class="hk-pg-wrapper hk-auth-wrapper">
                @yield('content')
            </div>
			<!-- /Main Content -->

		</div>
		<!-- /HK Wrapper -->

		<!-- JavaScript -->

		<!-- jQuery -->
		<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
		<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

		<!-- Slimscroll JavaScript -->
		<script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

		<!-- Fancy Dropdown JS -->
		<script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

		<!-- FeatherIcons JavaScript -->
		<script src="{{asset('dist/js/feather.min.js')}}"></script>

		<!-- Init JavaScript -->
		<script src="{{asset('dist/js/init.js')}}"></script>
	</body>
</html>
