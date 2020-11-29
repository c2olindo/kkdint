@extends('front.master')

@section('content')
<section class="page-content">
    <div class="container">
        <div class="shop-page">
            <div class="row">
                <div class="col-lg-9">
                    <div class="shop-product-details">
                        <div class="shop-product-image">
                            <img src="{{ asset('assets/images/resources/product1.jpg') }}" alt="">
                        </div>
                        <div class="shop-product-info">
                            <h3>@yield('name')</h3>
                            
                            <p>@yield('desc') </p>
                            
                        </div>
                    </div>
                   
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar shop-sidebar">
                    
                        <div class="widget widget-products">
                            <h3 class="widget-title">Similar Products</h3>
                            <ul class="products-list">
                                <li>
                                    <div class="wd-product">
                                        <div class="wd-product-thumb">
                                            <img src="{{ asset('assets/images/resources/@yield('simprod1pic').jpg') }}" alt="" style="height: 90px">
                                            {{-- <span class="sale">Sale</span> --}}
                                            <a href="shop-details.html" title="" class="ext-link"></a>
                                        </div>
                                        <div class="wd-product-info">
                                            <h3><a href="shop-details.html#" title="">@yield('simprod1')</a></h3>
                                            <ul class="pd-rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-alt"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wd-product">
                                        <div class="wd-product-thumb">
                                            <img src="{{ asset('assets/images/resources/@yield('simprod2pic').jpg') }}" alt="" style="height: 90px">
                                            <a href="shop-details.html" title="" class="ext-link"></a>
                                        </div>
                                        <div class="wd-product-info">
                                            <h3><a href="shop-details.html#" title="">@yield('simprod2')</a></h3>
                                            <ul class="pd-rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-alt"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wd-product">
                                        <div class="wd-product-thumb">
                                            <img src="{{ asset('assets/images/resources/@yield('simprod3pic').jpg') }}" alt="" style="height: 90px">
                                            <a href="shop-details.html" title="" class="ext-link"></a>
                                        </div>
                                        <div class="wd-product-info">
                                            <h3><a href="shop-details.html#" title="">@yield('simprod3')</a></h3>
                                            <ul class="pd-rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-alt"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul><!--products-list end-->
                        </div><!--widget-products end-->
                    </div><!--sidebar end-->
                </div>
            </div>
        </div><!--shop-page end-->
    </div>
</section><!--page-content end-->

@include('front.common.partner')


@endsection