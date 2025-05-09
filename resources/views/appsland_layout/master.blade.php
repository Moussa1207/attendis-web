<!DOCTYPE html>
<html lang="zxx" class="js">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="AppsLand is a powerful App Landing HTML Template with full of customization options and features">
		<!-- Fav Icon  -->
		<link rel="shortcut icon" href="backend/images//favicon.png">
		<!-- Site Title  -->
		<title>@yield('title')</title>
		<!-- Vendor Bundle CSS -->
		<link rel="stylesheet" href="frontend/assets/css/vendor.bundle.css" >
		<!-- Custom styles for this template -->
		<link href="frontend/assets/css/style.css?ver=131" rel="stylesheet">
		<link href="frontend/assets/css/theme-royel-teal.css?ver=131" rel="stylesheet">
	</head>
	<body class="overflow-scroll">
		    {{-- header par ici --}}
       	@include('appsland_layout.header')
		@include('appsland_layout.about')
			{{-- features  ici --}}
		@include('appsland_layout.features')
		    {{-- screenshot  ici --}}
		@include('appsland_layout.screenshot')
		    {{--   step/statistic ici--}}
		@include('appsland_layout.step-statistique')
		    {{-- pricing ici --}}
		@include('appsland_layout.pricing')
		    {{-- faq ici --}}
		@include('appsland_layout.faq')
		    {{-- team ici --}}
		@include('appsland_layout.team')
		    {{-- testimonial ici --}}
		@include('appsland_layout.testimonial')
		    {{-- contact ici --}}
		@include('appsland_layout.contact')
		    {{-- footer ici --}}
		@include('appsland_layout.footer')
            {{-- preloader ici --}}
		@include('appsland_layout.preloader')

		<!-- Google Map Script -->
		<script src="https://maps.google.com/maps/api/js?key=AIzaSyD6cxB4idvB67_Mz1ScQn-_nBJmltUaS-g"></script> 
		<script src="assets/js/googleMap.js"></script>

		<!-- JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		
		<script src="frontend/assets/js/jquery.bundle.js"></script>
		<script src="frontend/assets/js/script.js"></script>
		
	</body>
</html>
