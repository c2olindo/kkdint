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
                                <h2>Serity Soluctions</h2>
                            </div>
                            <p>Serity Solutions was established in 2019 with the aim of providing technical protection services. We offer state-of-the-art technical protection system solutions. Many years of experience and customer satisfaction are proof of our success. We have a MIA license to perform technical protection activities.</p>
                            <h3>We are engaged in the following activities:</h3>
                            <ul class="ft-lzt">
                                <li>Video Surveillance</li>
                                <li>Anti-theft</li>
                                <li>Fire alarm</li>
                                <li>Intercom systems</li>
                                <li>Access control and opening hours	</li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="para-o">
                            <div class="sec-title ta-left">
                                <h2>Vision</h2>
                            </div>
                            <p>Serity Solutions, in its many years of work, pays special attention to professionalism of business, quality and reliability of equipment with the purpose of greater satisfaction of clients in designing, installing and servicing the system of technical protection of persons and property.</p>
                            <p>The team of professional and competent engineers - designers and technicians - servicers guarantees professionally done work and customer satisfaction. Any constructive customer feedback is welcomed, improving the level of service and job execution.</p>
                        </div>
                    </div>
                </div>
            </div><!--about-block-details end-->
        </div>
    </section><!--about-block end-->

    @include('front.common.request_quote')
    @include('front.common.inquiry')
    @include('front.common.partner')

@endsection
    