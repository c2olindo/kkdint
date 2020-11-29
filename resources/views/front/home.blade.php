@extends('front.master')

@section('title', 'Home')

@section('content')

    @include('front.slider')

    @include('front.common.about')
    @include('front.common.counter')


    <section class="video-system">
        <div class="container">
            <div class="sec-title">
                <span>Featured Products</span>
                <h2>Electronics Vehicles</h2>
            </div><!-- sec-title end-->
            <div class="video-posts-sec">
                <div class="row vid-carousel">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="video-post">
                            <div class="video-post-thumbnail">
                                <img src="{{ asset('assets/images/resources/img1.jpg') }}" alt="">
                                <div class="vid-post-info">
                                    <h2>KKD EBike 3</h2>
                                    <p>&#9830;  48V12Ah Battery Capacity</p>
                                    <p>&#9830;  16" Wheels with Tubeless Tire</p>
                                    <p>&#9830;  Lead acid battery </p>
                                    <p>&#9830;  350W Motor</p>
                                    <p>&#9830;  Top Speed: 35 km/h+</p>
                                    <p>&#9830;  Range: 40 km</p>
                                </div>
                                <a href="services.html" title="" class="ext-link"></a>
                            </div><!--video-post-thumbnail end-->
                            <div class="video-post-info">
                                <a href="{{ route('kkd-ebike-3') }}" title="" class="rd-btn"><i class="fa fa-angle-double-right"></i></a>
                                <h2><a href="{{ route('kkd-ebike-3') }}" title="">KKD EBike 3</a></h2>
                            </div>
                        </div><!--video-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="video-post">
                            <div class="video-post-thumbnail">
                                <img src="{{ asset('assets/images/resources/img2.jpg') }}" alt="">
                                <div class="vid-post-info">
                                    <h2>ZXMCO Big Bull</h2>
                                    <p>&#9830;  60V32h Battery Capacity</p>
                                    <p>&#9830;  Tyre: 3.00-10</p>
                                    <p>&#9830;  800W Motor</p>
                                    <p>&#9830;  Top Speed: 60km/h</p>
                                    <p>&#9830;  Range: 70+km</p>
                                </div>
                                <a href="services.html" title="" class="ext-link"></a>
                            </div><!--video-post-thumbnail end-->
                            <div class="video-post-info">
                                <a href="{{ route('big-bull') }}" title="" class="rd-btn"><i class="fa fa-angle-double-right"></i></a>
                                <h2><a href="{{ route('big-bull') }}" title="">ZXMCO Big Bull</a></h2>
                            </div>
                        </div><!--video-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="video-post">
                            <div class="video-post-thumbnail">
                                <img src="{{ asset('assets/images/resources/img3.jpg') }}" alt="">
                                <div class="vid-post-info">
                                    <h2>KKD EBike 4</h2>
                                    <p>&#9830;  48V12Ah Battery Capacity</p>
                                    <p>&#9830;  18" Wheels with Tubeless Tire</p>
                                    <p>&#9830;  Lithium Ion battery </p>
                                    <p>&#9830;  350W Motor</p>
                                    <p>&#9830;  Top Speed: 35 km/h+</p>
                                    <p>&#9830;  Range: 40 km</p>
                                </div>
                                <a href="services.html" title="" class="ext-link"></a>
                            </div><!--video-post-thumbnail end-->
                            <div class="video-post-info">
                                <a href="{{ route('kkd-ebike-4') }}" title="" class="rd-btn"><i class="fa fa-angle-double-right"></i></a>
                                <h2><a href="{{ route('kkd-ebike-4') }}" title="">KKD EBike 4</a></h2>
                            </div>
                        </div><!--video-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="video-post">
                            <div class="video-post-thumbnail">
                                <img src="{{ asset('assets/images/resources/img4.jpg') }}" alt="">
                                <div class="vid-post-info">
                                    <h2>ZXMCO LE Hungarian</h2>
                                    <p>&#9830;  60V20Ah Battery Capacity</p>
                                    <p>&#9830;  Tyre: 3.00-10</p>
                                    <p>&#9830;  Assisted Pedal</p>
                                    <p>&#9830;  650W Motor</p>
                                    <p>&#9830;  Top Speed: 60 km/h+</p>
                                    <p>&#9830;  Range: 70+ km</p>
                                </div>
                                <a href="services.html" title="" class="ext-link"></a>
                            </div><!--video-post-thumbnail end-->
                            <div class="video-post-info">
                                <a href="{{ route('hungarian') }}" title="" class="rd-btn"><i class="fa fa-angle-double-right"></i></a>
                                <h2><a href="{{ route('hungarian') }}" title="">ZXMCO LE Hungarian</a></h2>
                            </div>
                        </div><!--video-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="video-post">
                            <div class="video-post-thumbnail">
                                <img src="{{ asset('assets/images/resources/img5.jpg') }}" alt="">
                                <div class="vid-post-info">
                                    <h2>ZXMCO Lexus</h2>
                                    <p>&#9830;  60V20Ah Battery Capacity</p>
                                    <p>&#9830;  Tyre: 3.00-10</p>
                                    <p>&#9830;  1000W Motor</p>
                                    <p>&#9830;  Top Speed: 60 km/h+</p>
                                    <p>&#9830;  Range: 60 km</p>
                                </div>
                                <a href="services.html" title="" class="ext-link"></a>
                            </div><!--video-post-thumbnail end-->
                            <div class="video-post-info">
                                <a href="{{ route('lexus') }}" title="" class="rd-btn"><i class="fa fa-angle-double-right"></i></a>
                                <h2><a href="{{ route('lexus') }}" title="">ZXMCO Lexus</a></h2>
                            </div>
                        </div><!--video-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="video-post">
                            <div class="video-post-thumbnail">
                                <img src="{{ asset('assets/images/resources/img6.jpg') }}" alt="">
                                <div class="vid-post-info">
                                    <h2>ZXMCO Peppa</h2>
                                    <p>&#9830;  48V20Ah Battery Capacity</p>
                                    <p>&#9830;  Tyre: 3.00-10</p>
                                    <p>&#9830;  500W Motor</p>
                                    <p>&#9830;  Top Speed: 45 km/h+</p>
                                    <p>&#9830;  Range: 50+ km</p>
                                </div>
                                <a href="services.html" title="" class="ext-link"></a>
                            </div><!--video-post-thumbnail end-->
                            <div class="video-post-info">
                                <a href="{{ route('peppa') }}" title="" class="rd-btn"><i class="fa fa-angle-double-right"></i></a>
                                <h2><a href="{{ route('peppa') }}" title="">ZXMCO Peppa</a></h2>
                            </div>
                        </div><!--video-post end-->
                    </div>
                </div>
            </div><!--video-posts-sec end-->
        </div>
    </section><!--video-system end-->

    <section class="case-study-sec half-overlay">
        <div class="container">
            <div class="sec-title-style2">
                <div class="sec-title">
                    <span>Our 3 Wheelers</span>
                    {{-- <h2>Our Case’s Study</h2> --}}
                </div>
                {{-- <a href="index2.html#" title="" class="lnk-default">View All Project</a> --}}
                <div class="clearfix"></div>
            </div><!--case-sec-title end-->
            <div class="case-study-section">
                <div class="case_slider">
                    <div class="case_slide">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="case-study-carouz">
                                    <div class="case-study-slide">
                                        <h4>Commerical</h4>
                                        <h2>JBV E5</h2>
                                        {{-- <span>Cayler Offices</span> --}}
                                        <p>The KING of all Battery-Operated Electric Three-Wheelers is here to take its rightful place atop the throne. With a range of over 100 km per charge and an 1800 W motor, the JBV E5 is currently the most advanced Battery-Operated Electric Three-wheeler in the local market. The load capacity of 1 ton combined with the spacious interior, the E5 can easily carry 8 passengers and/or cargo gives it a clear edge over its competitors. Designed and manufactured JUNBANG VEHICLE CO, a premier electric vehicle manufacturer in China, we are the sole distributors of the JBV E5 in Bangladesh. So, what are you waiting for? Call now to pre-order yours today!
                                        </p>
                                        <a href="https://www.youtube.com/watch?v=B2pEyS7FVA4" title="" class="lnk-default html5lightbox">Watch a Demo</a> 
                                    </div><!--case-study-slide end-->
                                </div><!--case-study-carouz end-->
                            </div>
                            <div class="col-lg-7">
                                <div class="gallery-row">
                                    <div class="gallery-thumb">
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}"" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb2.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb5.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}"" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb2.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb3.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="gallery-images-slide" id="custom-gallery">
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/gallery2.jpg" alt="">
                                            <a href="assets/images/resources/gallery2.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/gallery2.jpg" alt="">
                                            <a href="assets/images/resources/gallery2.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gallery3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gallery3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gallery3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gallery3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/gallery2.jpg" alt="">
                                            <a href="assets/images/resources/gallery2.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/gallery2.jpg" alt="">
                                            <a href="assets/images/resources/gallery2.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gallery3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gallery3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--gallery-row end-->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--case-study-section end-->
        </div>
    </section><!--case-study-sec end-->

    {{-- @include('front.common.request_quote') --}}

    {{-- @include('front.common.inquiry') --}}

    @include('front.common.testimonial')
    @include('front.common.partner')


@endsection