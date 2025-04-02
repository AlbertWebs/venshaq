@extends('front.master-sector')
@section('content')
@foreach ($Sector as $sectors)


  <!-- Banner Section -->
  <section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
    {{-- <div class="shape-1"></div> --}}
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{!! html_entity_decode($sectors->title, ENT_QUOTES, 'UTF-8') !!}</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/')}}">Sectors</a></li>
                        <li class="active">{!! html_entity_decode($sectors->raw, ENT_QUOTES, 'UTF-8') !!}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-7 col-md-12 col-sm-12">
                <div class="service-details">
                    <div class="main-image image">
                        {{-- <img src="images/resource/featured-image-16.jpg" alt=""> --}}
                    </div>
                    <div class="text-content">
                        <h4 style="text-align:center">{{$sectors->meta}}</h4>
                        <p style="color:#000000">{!! html_entity_decode($sectors->content, ENT_QUOTES, 'UTF-8') !!}</p>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-5 col-md-12 col-sm-12">
                <aside class="sidebar blog-sidebar">

                    {{-- <div class="sidebar-widget services">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>All Services</h4>
                            </div>
                            <ul>
                                <li><a href="web-development.html">Website Development</a></li>
                                <li><a href="graphic-designing.html">Graphic Designing</a></li>
                                <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                <li><a href="seo.html">SEO & Content Writting</a></li>
                                <li><a href="app-development.html">App Development</a></li>
                                <li class="active"><a href="ui-designing.html">UI/UX Designing</a></li>
                            </ul>
                        </div>
                    </div> --}}

                    <div class="sidebar-widget call-up">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Venshaq Holdings Limited</h4>
                            </div>
                            <div class="text">We partner with innovative leaders with unique ideas, strong management teams, and demonstrated ability to help us achieve our strategic goal of a maximum long term return to our shareholders.</div>
                            <div class="phone"><a href="tel:+1 (202) 540 0134"><span class="icon flaticon-call"></span>
                                +1 (202) 540 0134</a></div>
                        </div>
                    </div>


                </aside>
            </div>

        </div>
    </div>
</div>

<div class="map-section map-section__one-page">
    <div class="map-container">
        <iframe class="map-iframe"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.168613544265!2d36.7827816!3d-1.2995093!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdfee283a57b3021f!2sVenshaq%20Holdings%20Limited!5e0!3m2!1sen!2ske!4v1649409868981!5m2!1sen!2ske"
            style="border:0;" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>

<!--Contact Section-->
<section class="contact-section contact-section__one-page bg-imgs">
    {{-- <section class="contact-section contact-section__one-page" style="background: url('{{url('/')}}/venshaq/images/image-031.jpg'); background-repeat: no-repeat"> --}}
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Offices Contacts<span class="dot">.</span></h2>
        </div>

        <div class="upper-info">
            <div class="row clearfix">
                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h5>ShemaQ Productions</h5>
                        <div class="text">
                            <ul class="info">
                                <li> Chalbi Condominiums, Ring Road, Kilimani, 5th Floor Suite 5c
                                            Nairobi <br>Kenya</li>
                                <li><a href="mailto:shemaq@venshaq.com">shemaq@venshaq.com</a></li>
                                <li><a href="tel:666888000">+1 (202) 540 0134</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h5>Shaq's House</h5>
                        <div class="text">
                            <ul class="info">
                                <li> Chalbi Condominiums, Ring Road, Kilimani, 5th Floor Suite 5c
                                            Nairobi <br>Kenya</li>
                                <li><a href="mailto:shaq@venshaq.com">shaq@venshaq.com</a></li>
                                <li><a href="tel:666888000">+1 (202) 540 0134</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h5>Treven Cleaners</h5>
                        <div class="text">
                            <ul class="info">
                                <li> Chalbi Condominiums, Ring Road, Kilimani, 5th Floor Suite 5c
                                            Nairobi <br>Kenya</li>
                                <li><a href="mailto:treven@venshaq.com">treven@venshaq.com</a></li>
                                <li><a href="tel:666888000">+1 (202) 540 0134</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h5>Shaqs Farm House</h5>
                        <div class="text">
                            <ul class="info">
                                <li> Chalbi Condominiums, Ring Road, Kilimani, 5th Floor Suite 5c
                                            Nairobi <br>Kenya</li>
                                <li><a href="mailto:farm@venshaq.com">farm@venshaq.com</a></li>
                                <li><a href="tel:666888000">+1 (202) 540 0134</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endforeach
@endsection
