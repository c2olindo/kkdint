<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Our Products | {{ config('app.name') }}</title>
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
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color.css')}}">
</head>


<body>

	
	<div class="wrapper">
		
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


        <div class="mobile-menu">
			<ul>
				<li><a class="" href="{{ route('home') }}">Home</a></li>
				<li><a href="{{ route('about_us') }}">About Us</a></li>
				<li><a href="{{ route('products') }}">Our Products</a></li>
				<li><a href="{{ route('contact') }}">Get In Touch</a></li>
			</ul>
		</div><!--mobile-menu end-->

		<section class="page-content">
			<div class="container">
				<div class="gallery-page">
					<div class="options">
						<div class="option-isotop">
							<ul id="filter" class="option-set filters-nav" data-option-key="filter">
                                <li><a class="selected" data-option-value="*">All</a></li>
                                <li><a data-option-value=".cycle">Cycle</a></li>
                                <li><a data-option-value=".scooty">Scooty</a></li>
                                <li><a data-option-value=".3_wheeler">3 Wheeler</a></li>
                            </ul>
						</div>
					</div><!--options end-->
					<div class="gallery-sec">
                        <div class="row">
                            <div class="masonary" id="custom-gallery">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 scooty">
                                    <div class="gallery-col">
                                        <div class="gallery-img">
                                            <img src="{{ asset('assets/images/resources/product1.jpg') }}" alt="">
                                            <ul class="gallery-optz">
                                                <li><a href="{{ route('big-bull') }}" title=""><i class="fa fa-link"></i></a></li> -
                                                {{-- <li><a href="{{ asset('assets/images/resources/product1.jpg') }}" title="" class="lightbox"><i class="fa fa-search"></i></a></li> --}}
                                            </ul>
                                        </div><!--gallery-img end-->
                                        <h3><a href="{{ route('big-bull') }}" title="">ZXMCO Big Bull</a></h3>
									</div>
									<div class="gallery-col">
                                        <div class="gallery-img">
                                            <img src="{{ asset('assets/images/resources/product12.jpg') }}" alt="">
                                            <ul class="gallery-optz">
                                                <li><a href="{{ route('bull') }}" title=""><i class="fa fa-link"></i></a></li> -
                                                {{-- <li><a href="{{ asset('assets/images/resources/product1.jpg') }}" title="" class="lightbox"><i class="fa fa-search"></i></a></li> --}}
                                            </ul>
                                        </div><!--gallery-img end-->
                                        <h3><a href="{{ route('bull') }}" title="">ZXMCO Bull</a></h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 scooty">
                                    <div class="gallery-col">
                                        <div class="gallery-img">
                                            <img src="{{ asset('assets/images/resources/product2.jpg') }}" alt="">
                                            <ul class="gallery-optz">
                                                <li><a href="{{ route('peppa') }}" title=""><i class="fa fa-link"></i></a></li> -
                                                {{-- <li><a href="{{ asset('assets/images/resources/product2.jpg') }}" title="" class="lightbox"><i class="fa fa-search"></i></a></li> --}}
                                            </ul>
                                        </div><!--gallery-img end-->
                                        <h3><a href="{{ route('peppa') }}" title="">ZXMCO Peppa</a></h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 scooty">
                                    <div class="gallery-col">
                                        <div class="gallery-img">
                                            <img src="{{ asset('assets/images/resources/product3.jpg') }}" alt="">
                                            <ul class="gallery-optz">
                                                <li><a href="{{ route('lexus') }}" title=""><i class="fa fa-link"></i></a></li> -
                                                {{-- <li><a href="{{ asset('assets/images/resources/product3.jpg') }}" title="" class="lightbox"><i class="fa fa-search"></i></a></li> --}}
                                            </ul>
                                        </div><!--gallery-img end-->
                                        <h3><a href="{{ route('lexus') }}" title="">ZXMCO Lexus</a></h3>
                                    </div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-12 3_wheeler">
                                    <div class="gallery-col">
                                        <div class="gallery-img">
                                            <img src="{{ asset('assets/images/resources/product10.jpg') }}" alt="">
                                            <ul class="gallery-optz">
                                                <li><a href="{{ route('jbve5') }}" title=""><i class="fa fa-link"></i></a></li> -
                                                {{-- <li><a href="{{ asset('assets/images/resources/product3.jpg') }}" title="" class="lightbox"><i class="fa fa-search"></i></a></li> --}}
                                            </ul>
                                        </div><!--gallery-img end-->
                                        <h3><a href="{{ route('jbve5') }}" title="">JBV E5</a></h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 scooty">
                                    <div class="gallery-col">
                                        <div class="gallery-img">
                                            <img src="{{ asset('assets/images/resources/product4.jpg') }}" alt="">
                                            <ul class="gallery-optz">
                                                <li><a href="{{ route('hungarian') }}" title=""><i class="fa fa-link"></i></a></li> -
                                                {{-- <li><a href="{{ asset('assets/images/resources/product4.jpg') }}" title="" class="lightbox"><i class="fa fa-search"></i></a></li> --}}
                                            </ul>
                                        </div><!--gallery-img end-->
                                        <h3><a href="{{ route('hungarian') }}" title="">ZXMCO Hungarian</a></h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 cycle">
                                    <div class="gallery-col">
                                        <div class="gallery-img">
                                            <img src="{{ asset('assets/images/resources/product5.jpg') }}" alt="">
                                            <ul class="gallery-optz">
                                                <li><a href="{{ route('kkd-ebike-5') }}" title=""><i class="fa fa-link"></i></a></li> -
                                                {{-- <li><a href="{{ asset('assets/images/resources/product5.jpg') }}" title="" class="lightbox"><i class="fa fa-search"></i></a></li> --}}
                                            </ul>
                                        </div><!--gallery-img end-->
                                        <h3><a href="{{ route('kkd-ebike-5') }}" title="">KKD EBike 5</a></h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 cycle">
                                    <div class="gallery-col">
                                        <div class="gallery-img">
                                            <img src="{{ asset('assets/images/resources/product6.jpg') }}" alt="">
                                            <ul class="gallery-optz">
                                                <li><a href="{{ route('kkd-ebike-4') }}" title=""><i class="fa fa-link"></i></a></li> -
                                                {{-- <li><a href="{{ asset('assets/images/resources/product6.jpg') }}" title="" class="lightbox"><i class="fa fa-search"></i></a></li> --}}
                                            </ul>
                                        </div><!--gallery-img end-->
                                        <h3><a href="{{ route('kkd-ebike-4') }}" title="">KKD EBike 4</a></h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 cycle">
                                    <div class="gallery-col">
                                        <div class="gallery-img">
                                            <img src="{{ asset('assets/images/resources/product7.jpg') }}" alt="">
                                            <ul class="gallery-optz">
                                                <li><a href="{{ route('kkd-ebike-3') }}" title=""><i class="fa fa-link"></i></a></li> -
                                                {{-- <li><a href="{{ asset('assets/images/resources/product7.jpg') }}" title="" class="lightbox"><i class="fa fa-search"></i></a></li> --}}
                                            </ul>
                                        </div><!--gallery-img end-->
                                        <h3><a href="{{ route('kkd-ebike-3') }}" title="">KKD EBike 3</a></h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 cycle">
                                    <div class="gallery-col">
                                        <div class="gallery-img">
                                            <img src="{{ asset('assets/images/resources/product8.jpg') }}" alt="">
                                            <ul class="gallery-optz">
                                                <li><a href="{{ route('kkd-ebike-2') }}" title=""><i class="fa fa-link"></i></a></li> -
                                                {{-- <li><a href="{{ asset('assets/images/resources/product8.jpg') }}" title="" class="lightbox"><i class="fa fa-search"></i></a></li> --}}
                                            </ul>
                                        </div><!--gallery-img end-->
                                        <h3><a href="{{ route('kkd-ebike-2') }}" title="">KKD EBike 2</a></h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 cams cycle">
                                    <div class="gallery-col">
                                        <div class="gallery-img">
                                            <img src="{{ asset('assets/images/resources/product9.jpg') }}" alt="">
                                            <ul class="gallery-optz">
                                                <li><a href="{{ route('kkd-ebike-1') }}" title=""><i class="fa fa-link"></i></a></li> -
                                                {{-- <li><a href="{{ asset('assets/images/resources/product9.jpg') }}" title="" class="lightbox"><i class="fa fa-search"></i></a></li> --}}
                                            </ul>
                                        </div><!--gallery-img end-->
                                        <h3><a href="{{ route('kkd-ebike-1') }}" title="">KKD EBike 1</a></h3>
                                    </div>
                                </div>
                            </div><!--masonary end-->
                            <div class="clearfix"></div>
                        </div>
                    </div><!--gallery-sec end-->

                    {{-- TODO --}}
					{{-- <div class="serity-pagination">
						<nav aria-label="Page navigation example">
							<ul class="pagination">
						    	<li class="page-item"><a class="page-link" href="gallery.html#"><i class="fa fa-angle-double-left"></i> Prev</a></li>
						    	<li class="page-item"><a class="page-link" href="gallery.html#">1</a></li>
						    	<li class="page-item"><a class="page-link" href="gallery.html#">2</a></li>
						    	<li class="page-item"><a class="page-link" href="gallery.html#">3</a></li>
						    	<li class="page-item"><a class="page-link" href="gallery.html#">Next <i class="fa fa-angle-double-right"></i></a></li>
						  	</ul>
						</nav>
					</div> --}}
				</div><!--gallery-page end-->
			</div>
		</section><!--page-content end-->

		@include('front.common.partner')

		<footer>
			<div class="main-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="widget widget-about">
								<img src="{{ asset('assets/images/logo.png') }}" alt="">
								<p>{{ config('app.name') }} Traders is one of the largest importers and distributors of Electric Vehicles in Bangladesh. We are the sole distributors of ZXMCO Scooters and JBV 3 Wheelers, two premier Electric Vehicle manufacturers in China.</p>
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
									<li><a href="https://www.facebook.com/kkdinternationaltraders" title=""><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://www.instagram.com/kkdinternationaltraders/" title=""><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div><!--widget-social end-->
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-strip">
				<div class="container">
					<div class="copyright-text">
						<p>Copyright © 2020, <a href="http://kkdint.com/">{{ config('app.name') }} Trader</a>. All Right Reserved. Developed by <a href="http://buzzfrog.digital/">Buzzfrog Digital</a></p>
						<a href="{{ url('/') }}" title="" class="scrollUp"><i class="fa fa-level-up-alt"></i></a>
					</div>
				</div>
			</div>
		</footer><!--footer end-->

	</div><!--wrapper end-->



<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/isotope.js') }}"></script>
<script src="{{ asset('assets/js/plugin/blueimp-gallery.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>


</body>

</html>






{{-- @extends('front.master')

@section('title', 'Our Products')

@section('content')

    @include('front.shop.shop')


    @include('front.common.partner')

@endsection



 --}}
