<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Matsu</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/nice-select/css/nice-select.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<style>
		h1,h2,h3,h4,h5,h6
		{
			font-family: Rubik, sans-serif;
			font-weight: bold;
		}

		a,.col
		{
			font-family: Rubik, sans-serif;

		}
	</style>
</head>
<body style="background: url('{{asset('storage/images/body-bg.png')}}') no-repeat center;">
    <div id="app">
		@include('inc.navbar')
        @yield('content')
	</div>
	
	

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="{{asset('js/popper.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/stellar.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('js/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('js/isotope/isotope-min.js')}}"></script>
	<script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('js/mail-script.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('js/gmaps.min.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
	<script src="https://use.fontawesome.com/569b79e629.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
	

	<script>
		$(document).ready(function() {

			$('#summernote').summernote({
				height: 300,                 // set editor height
				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: true                  // set focus to editable area after initializing summernote
			});
			$('.dropdown-toggle').dropdown();
		});
	</script>

	
</body>
</html>
