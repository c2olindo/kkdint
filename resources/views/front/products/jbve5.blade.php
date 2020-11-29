@extends('front.master')

@section('title', 'JBV E5')

@section('content')
<section class="page-content">
    <div class="container">
        <div class="shop-page">
            <div class="row">
                <div class="col-lg-9">
                    <div class="shop-product-details">
                        <div class="shop-product-image">
                            <img src="{{ asset('assets/images/resources/product10.jpg') }}" alt="">
                        </div>
                        <div class="shop-product-info">
                            <h3>JBV E5</h3>
                            
                            <p>&#9830;  60V20Ah Battery Capacity</p>
                            <p>&#9830;  22" Wheel Size</p>
                            <p>&#9830;  1800W Motor</p>
                            <p>&#9830;  Top Speed: 45km/h</p>
                            <p>&#9830;  Range: 100km</p>
                            <p>&#9830;  Capacity: 1 Ton</p>
                        </div>
                    </div>
                   
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar shop-sidebar">
                    
                        <!--widget-products end-->
                    </div>
                </div>
            </div>
        </div><!--shop-page end-->
    </div>
</section><!--page-content end-->

@include('front.common.partner')


@endsection