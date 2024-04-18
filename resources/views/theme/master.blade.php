<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>iGuruWeb | iGaming Games Provider</title>	

		<meta name="keywords" content="iGuruWeb | iGaming Games Provider" />
		<meta name="description" content="iGuruWeb | iGaming Games Provider">
		<meta name="author" content="iGuruWeb.co">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('img/iguru-icon.png') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('img/iguru-icon.png') }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ asset('css/skins/skin-corporate-16.css') }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

	</head>

	<style>
		@media screen and (max-width: 991px){
			#header .header-nav-main nav > ul li a.dropdown-toggle .fa-chevron-down {
				position: absolute;
				top: 0;
				right: 0;
				width: 30px;
				height: 100%;
				display: none;
				align-items: center;
				justify-content: center;
				font-size: 0.6rem;
			}
		}
	</style>

	<body data-plugin-page-transition>

@if (session('success'))
    <script>
        toastr.success('{{ session('success') }}', 'Success');
    </script>
@endif
    @if (session('error'))
    <script>
        toastr.error('{{ session('error') }}', 'Error');
    </script>
@endif

		<div class="body">
			
            @include('theme.header')

            @yield('content')

            @include('theme.footer')
			
		</div>

		<!-- Vendor -->
		<script src="{{ asset('vendor/plugins/js/plugins.min.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('js/theme.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('js/theme.init.js') }}"></script>

	</body>
</html>
