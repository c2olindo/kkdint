<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | {{ config('app.name') }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="icon" href="{{ asset('assets/images/favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/js/plugin/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/js/plugin/slick-theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/blueimp-gallery.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color.css') }}">
</head>


<body>
    <div class="wrapper">
        <!-- Navigation -->
        <header>
			<div class="top-header">
				<div class="container">
					<div class="top-header-content">
						<ul class="contact-info">
							<li>
								<i class="fa fa-envelope"></i>
								<span>info@kkdint.com</span>
							</li>
							<li>
								<i class="fa fa-map-marker-alt"></i>
								<span>31, Central Rd, Dhanmondi, Dhaka</span>
							</li>
						</ul>
						<!--  Social Links -->
						<ul class="social-links">
							<li>
								<a href="https://www.facebook.com/kkdinternationaltraders" title=""><i class="fab fa-facebook-f"></i></a>
							</li>
							<li>
								<a href="https://www.instagram.com/kkdinternationaltraders" title=""><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div><!--top-header end-->
			<div class="bottom-header">
				<div class="container">
					<div class="header-content">
						<div class="logo">
							<a href="{{ route('home') }}" title="">
								<img src="{{ asset('assets/images/logo.png') }}" alt="">
							</a>
						</div><!--logo end-->
						<a href="index.html#" title="" class="menu-btn"><i class="fa fa-bars"></i></a>
						<nav style="float: right">
							<ul>
								<li><a class="" href="{{ route('home') }}">Home</a></li>
								<li><a href="{{ route('about_us') }}">About Us</a></li>
								<li><a href="{{ route('products') }}">Our Products</a></li>
								<li><a href="{{ route('contact') }}">Get In Touch</a></li>
							</ul>
						</nav><!--navigation end-->
						{{-- <a href="contact.html" title="" class="quote-btn">Get A Quote</a> --}}
						
						<div class="clearfix"></div>
					</div><!--header-content end-->
				</div>
			</div><!--bottom-header end-->
		</header><!--header end-->

        <!-- mobile naviagtion -->
        <div class="mobile-menu">
			<ul>
				<li><a class="" href="{{ route('home') }}">Home</a></li>
								<li><a href="{{ route('about_us') }}">About Us</a></li>
								<li><a href="{{ route('products') }}">Our Products</a></li>
								<li><a href="{{ route('contact') }}">Get In Touch</a></li>
			</ul>
		</div><!--mobile-menu end-->

        @yield('content')

        <footer>
			<div class="main-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="widget widget-about">
								<img src="{{ asset('assets/images/logo.png') }}" alt="">
								<p>{{ config('app.name') }} Traders is one of the largest importers and distributors of Electric Vehicles in Bangladesh. We are the sole distributors of ZXMCO Scooters and JVB 3 Wheelers, two premier Electric Vehicle manufacturers in China.</p>
							</div><!--widget-about end-->
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6" >
							<div class="widget widget-services">
								<h3 class="widget-title">Get In Touch</h3>
								<ul>
									<li><i class="fa fa-map-marker-alt"></i> <span>31, Central Rd, New Market, Dhaka</span></li>
									<li><i class="fa fa-envelope"></i> <span>info@kkdint.com</span></li>
									<li><i class="fa fa-phone-volume"></i> <span>+8801776090007</span></li>
								</ul> 
							</div><!--widget-services end-->
						</div>
						<div class="col-lg-4">
							<div class="widget widget-social">
								<h3 class="widget-title">Follow Us</h3>
								<ul class="socio-links">
									<li><a href="index2.html#" title=""><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="index2.html#" title=""><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div><!--widget-social end-->
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-strip">
				<div class="container">
					<div class="copyright-text">
						<p>Copyright © 2020, <a href="http://kkdint.com/">{{ config('app.name') }}</a>. All Right Reserved. Developed by <a href="http://buzzfrog.digital/">Buzzfrog Digital</a></p>
						<a href="{{ url('/') }}" title="" class="scrollUp"><i class="fa fa-level-up-alt"></i></a>
					</div>
				</div>
			</div>
		</footer><!--footer end-->

    </div>


<script src=" {{ asset('assets/js/jquery.min.js') }}"></script>
<script src=" {{ asset('assets/js/popper.js') }}"></script>
<script src=" {{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src=" {{ asset('assets/js/plugin/slick.min.js') }}"></script>
<script src=" {{ asset('assets/js/plugin/waypoint.js') }}"></script>
<script src=" {{ asset('assets/js/plugin/jquery.counterup.min.js') }}"></script>
<script src=" {{ asset('assets/js/plugin/blueimp-gallery.min.js') }}"></script>
<script src=" {{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src=" {{ asset('assets/js/validator.js') }}"></script>
<script src=" {{ asset('assets/js/plugin/html5lightbox.js') }}"></script>
<script src=" {{ asset('assets/js/script.js') }}"></script>
</body>

</html>



