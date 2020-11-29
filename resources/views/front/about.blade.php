@extends('front.master')

@section('title', 'About')

@section('content')
    {{-- @include('front.common.breadcrumb') --}}
    @include('front.common.about')
    @include('front.common.counter')

    <section class="about-block">
        <div class="container">
            <div class="about-block-details">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="para-o">
                            <div class="sec-title ta-left">
                                <h2>Mission</h2>
                            </div>
                            <p>KKD International Traders was established in 2019 with the aim of providing poerful and yet affordable electric vehicles. We offer state-of-the-art technical support. Many years of experience and customer satisfaction are proof of our success. </p>
                            <h3>We are offering the following kinds of products:</h3>
                            <ul class="ft-lzt">
                                <li>Commercial 3 Wheelers</li>
                                <li>Electric Scooty</li>
                                <li>Electric Bikes</li>
                                <li>Ready Spare Parts</li>
                                <li>Nationwide Coverage</li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="para-o">
                            <div class="sec-title ta-left">
                                <h2>Vision</h2>
                            </div>
                            <p>KKD International Traders, in its many years of work, pays special attention to professionalism of business, quality and reliability of equipment with the purpose of greater satisfaction of clients in designing, installing and servicing.</p>
                            <p>The team of professional sales and technicians - servicers guarantees professionally done work and customer satisfaction. Any constructive customer feedback is welcomed, improving the level of service and job execution.</p>
                        </div>
                    </div>
                </div>
            </div><!--about-block-details end-->
        </div>
    </section><!--about-block end-->

    {{-- @include('front.common.request_quote') --}}
    {{-- @include('front.common.inquiry') --}}
    @include('front.common.partner')

@endsection
    