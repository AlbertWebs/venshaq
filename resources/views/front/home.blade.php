@extends('front.master')
@section('content')
  <!-- Banner Section -->
  <section class="banner-section banner-one banner-one-page" id="home">

    <div class="banner-carousel owl-theme owl-carousel">
        <!-- Slide Item -->
        <div class="slide-item">
            <a href="mailto:info@venshaq.com" class="contact-sticky">More Info <span class="fa fa-envelope"></span></a>
            <div class="image-layer" style="background-image: url({{asset('venshaq/images/Nairobi.jpg')}});"></div>

            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner text-center">
                            <div class="sub-title theme-color">Venshaq Holdings Limited</div>
                            <h1><span>Accelerating Sustainable Business Growth</span></h1>
                            <div class="link-box scrollToLink">
                                <a class="theme-btn btn-style-one" href="#about">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Discover More</span>
                                </a>
                                {{-- <div class="vid-link">
                                    <a href="https://www.youtube.com/watch?v=0Az_rMDh-aI"
                                        class="lightbox-image">
                                        <div class="icon"><span class="flaticon-play-button-1"></span><i
                                                class="ripple"></i></div>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--About Section-->
<section class="about-section about-bg" id="about">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="image-block wow fadeInLeft mobile-d-nonae abt-img" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                            src="{{asset('venshaq/images/resource/image-032.jpg')}}" alt=""></div>
                    <div class="image-block wow fadeInUp mobile-d-none" data-wow-delay="300ms" data-wow-duration="1500ms"><img
                            src="{{asset('venshaq/images/resource/photo_2022-04-27_08-00-31.jpg')}}" alt=""></div>
                </div>
                {{--  --}}
                {{-- <div class="row desktop-none">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <img src="{{asset('venshaq/images/image-031.jpg')}}" alt="">
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <img src="{{asset('venshaq/images/photo_2022-04-27_08-00-31.jpg')}}" alt="">
                    </div>
                </div> --}}

                {{--  --}}
            </div>


            <!--Text Column-->
            <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        {{-- <h2>Hello!<br>We are Venshaq Holdings, Dedicated to growth & Positive Impact<span class="dot">.</span></h2> --}}
                        <h2>Dedicated to growth & Positive Impact<span class="dot">.</span></h2>
                        <div class="lower-text">Venshaq Holdings is a private holding company established in 2018. At our establishment, we have secured and consolidated a robust portfolio of companies representing a broad range of services and industries. Our investments are focused on positively impacting communities by creating opportunities that drive business growth and improve lives.  </div>
                    </div>
                    <div class="text">
                        <p>We partner with innovative leaders with unique ideas, strong management teams, and demonstrated ability to help us achieve our strategic goal of a maximum long term return to our shareholders. Our market leading services include: </p>
                    </div>
                    <div class="text clearfix">
                        <ul>
                            <li>Agri-Business</li>
                            <li>Food, Beverage and Delivery</li>
                            <li>Commercial Cleaning & Janitorial Services</li>
                            <li>Motion Picture and Media Production.</li>
                            <li>Construction and Supplies</li>

                        </ul>
                        <div class="since"><span class="txt">EST. <br>2018</span></div>
                    </div>
                    <div class="link-box scrollToLink">
                        <a class="theme-btn btn-style-one" href="#approach">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Discover Companies</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Agency Section-->
<section class="agency-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            {{-- <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">


                    <!--Default Tabs-->
                    <div class="default-tabs tabs-box">

                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#tab-1" class="tab-btn active-btn"><span>Our Mission</span></li>
                            <li data-tab="#tab-2" class="tab-btn"><span>Our Vision</span></li>
                        </ul>

                        <!--Tabs Container-->
                        <div class="tabs-content">

                            <!--Tab-->
                            <div class="tab active-tab" id="tab-1">
                                <div class="content">
                                    <div class="text theme-black">Our mission is to enhance, empower, advance and improve the lives of our stakeholders. We strive to create sustainable business growth through the generation of opportunities with greater value and increased returns.</div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab" id="tab-2">
                                <div class="content">
                                    <div class="text theme-black">To build a world-class, robust and diversified holding company that is growth and innovation driven, profitable and provides value to our stakeholders and the communities we serve.</div>
                                </div>
                            </div>
                            <hr>


                        </div>
                    </div>
                </div>
            </div> --}}
            <!--Right Column-->
            <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    {{--  --}}
                    <div class="sec-title centered">
                        <h5>Our Mission<span class="dot">.</span></h5>
                    </div>
                    {{--  --}}
                    <div class="text theme-black">Our mission is to enhance, empower, advance and improve the lives of our stakeholders. We strive to create sustainable business growth through the generation of opportunities with greater value and increased returns.</div>

                    {{--  --}}
                    {{--  --}}
                    <div class="sec-title centered">
                        <h5>Our Vision<span class="dot">.</span></h5>
                    </div>
                    {{--  --}}
                    <div class="text theme-black">To build a world-class, robust and diversified holding company that is growth and innovation driven, profitable and provides value to our stakeholders and the communities we serve.</div>

                    {{--  --}}
                </div>
            </div>
            <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    {{--  --}}
                    <div class="sec-title centered">
                        <h5>Our Core Values<span class="dot">.</span></h5>
                    </div>
                    {{--  --}}
                    <div class="text theme-black">Our customer focus is a strong contributor to the overall success of our business ventures. Throughout our business lines, we have developed a personalized approach at all customer touchpoints.</div>
                    <div class="text">
                        <ul class="m-0 list-unstyled feature-six__list values-ul">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <li class="feature-six__list__item">
                                        <i class="flaticon-check-symbol"></i>
                                        Integrity, Trust and Credibility
                                    </li>
                                    <li class="feature-six__list__item">
                                        <i class="flaticon-check-symbol"></i>
                                        Focused on Results
                                    </li>
                                    <li class="feature-six__list__item">
                                        <i class="flaticon-check-symbol"></i>
                                        Sustainable Impact
                                    </li>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <li class="feature-six__list__item">
                                        <i class="flaticon-check-symbol"></i>
                                        Transparency & Accountability
                                    </li>
                                    <li class="feature-six__list__item">
                                        <i class="flaticon-check-symbol"></i>
                                        Collaboration
                                    </li>
                                    <li class="feature-six__list__item">
                                        <i class="flaticon-check-symbol"></i>
                                        Customer Focussed
                                    </li>
                                </div>
                            </div>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Services Section-->
<section class="services-section-three services-section-three__one-page" id="approach">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Centers Of Excellence<span class="dot">.</span></h2>
            <h5 class="theme-text">We invest where we can attain the highest growth opportunities and advancements, by focussing our investments on businesses in Frontier Markets <span class="dot">.</span></h5>
        </div>
        <div class="services">
            <div class="row clearfix" style="margin:0 auto !important">

                <!--Service Block-->
                <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12" style="margin:0 auto !important">
                    <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-monitor" aria-hidden="true"></span></div>
                        <h5><a target="new" href="{{url('/')}}/sectors/farming-and-meat-production">Farming &<br>Meat Production</a></h5>
                        {{-- <div class="text">www.shaqsfarm.com</div> --}}
                        <div class="link-box"><a href="{{url('/')}}/sectors/farming-and-meat-production"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                 <!--Service Block-->
                 <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-digital"></span></div>
                        <h5><a target="new" href="{{url('/')}}/sectors/foot-and-beverages">Food, Beverage & Delivery<br></a></h5>
                        {{-- <div class="text">www.shaqshouse.co.ke</div> --}}
                        <div class="link-box"><a href="{{url('/')}}/sectors/foot-and-beverages"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>


                <!--Service Block-->
                <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-vector"></span></div>
                        <h5><a target="new" href="{{url('/')}}/sectors/commercial-cleaning">Commercial Cleaning &  <br>Janitorial Services</a></h5>
                        {{-- <div class="text">www.trevencleanersltd.co.ke</div> --}}
                        <div class="link-box"><a href="{{url('/')}}/sectors/commercial-cleaning"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                  <!--Service Block-->
                  <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12" style="margin:0 auto !important">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                        <h5><a target="new" href="{{url('/')}}/sectors/motion-pictures-and-media-production">Motion Picture &<br>Media Production</a></h5>
                        {{-- <div class="text">www.shemaq.com</div> --}}
                        <div class="link-box"><a href="{{url('/')}}/sectors/motion-pictures-and-media-production"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="fa fa-wrench"></span></div>
                        <h5><a target="new" href="{{url('/')}}/sectors/construction-and-supplies">Construction <br>& Supplies</a></h5>
                        {{-- <div class="text">
                            www.pros-borders.com
                        </div> --}}
                        <div class="link-box"><a href="{{url('/')}}/sectors/construction-and-supplies"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>





            </div>
        </div>
    </div>

</section>

<section class="testimonials-six we-do-section" id="portfolio">
    <div class="auto-container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonials-six__item">
                        <p class="testimonials-six__content">We explore and seek to acquire a broad range of opportunities in underserved consumer goods and services with strong potential for growth through strategic planning and targeted capital channelling. With the aim of investing in innovation, cultivating creativity and remaining resilient, our accelerator strategy endorses our trial models with direct investments, strengthening our reach in Frontier Markets</p><!-- /.testimonials-six__content -->
                    </div><!-- /.testimonials-six__item -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container thm-swiper__slider -->
        {{-- <hr> --}}
    </div><!-- /.auto-container -->
</section><!-- /.testimonials-six -->



<!--Live Section-->
<section class="live-section live-section__one-page">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Experience us live<span class="dot">.</span></h2>
            <div class="sec-title centered">
                <h6 class="theme-text"> Each of our businesses has been championed keeping in mind the hyper-competitive global and regional business arena. We take initiatives to sustain our overall competitive lead by empowering innovative ideas and value systems that are consistent with those of our founders <span class="dot">.</span></h6>
            </div>
        </div>
        <div class="main-image-box">
            <div class="image-layer" style="background-image: url({{asset('venshaq/images/resource/pexels-christina-morillo-1181406.jpg')}});"></div>
            <div class="inner clearfix">
                <div class="round-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="round-inner">
                        {{-- <div class="vid-link">
                            <a href="#" class="lightbox-image">
                                <div class="icon"><span class="flaticon-play-button-1"></span><i
                                        class="ripple"></i></div>
                            </a>
                        </div> --}}
                        <div class="title">
                            <h4>Committed to Long-term Product and Service Excellence</h4>
                        </div>
                        <div class="more-link scrollToLink"><a href="#about">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--We DO Section-->
{{-- @include('front.remove') --}}
<section class="we-do-section" id="portfolio">

    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">

                </div>
            </div>
        </div>
    </div>
</section>




<!-- Funfacts Section -->
<section class="facts-section jarallax venshaq-bg" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
    <!-- <div class="image-layer" style="background-image: url(images/background/image-1.jpg);"></div> -->
    <img src="{{asset('venshaq/images/resource/pexels-pixabay-416320.jpg')}}" alt="Venshaq Holdings Limited" class="jarallax-img">
    <div class="auto-container">
        <div class="inner-container">

            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="4000" data-stop="248">0</span>
                                </div>
                                <div class="counter-title">Projects Completed</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3000" data-stop="88">0</span>
                                </div>
                                <div class="counter-title">Active clients</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="5">0</span>
                                </div>
                                <div class="counter-title">Companies</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="4000" data-stop="248">0</span>
                                </div>
                                <div class="counter-title">Happy Clients</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Funfacts Section -->

<!-- Trusted Section -->
<section class="trusted-section">
    <div class="auto-container">
        <div class="outer-container">
            <div class="row clearfix">
                <div class="left-col col-xl-5 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="col-header">
                            <div class="header-inner">
                                <span> Committed to Product and Service Excellence! </span>
                            </div>
                        </div>
                        {{-- <div class="features">
                            <div class="feature">
                                <div class="count"><span>01</span></div>
                                <h5>TOTAL DESIGN FREEDOM FOR EVERYONE</h5>
                                <div class="sub-text">core features</div>
                            </div>
                            <div class="feature">
                                <div class="count"><span>02</span></div>
                                <h5>BASIC RULES OF RUNNING WEB AGENCY</h5>
                                <div class="sub-text">core features</div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="right-col col-xl-7 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>Trusted by more <br>than 100 clients<span class="dot">.</span></h2>
                            {{-- <div class="lower-text">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some form, simply free
                                text by injected humour, or randomised.</div> --}}
                        </div>
                        {{-- <div class="featured-block-two clearfix">
                            <div class="image"><img src="{{asset('venshaq/images/resource/featured-image-5.jpg')}}" alt=""></div>
                            <div class="text">
                                <ul>
                                    <li> Suspe ndisse sagittis leo.</li>
                                    <li>Entum estibulum is posuere.</li>
                                    <li>If you are going to use passage.</li>
                                    <li>Lorem Ipsum on the tend to repeat.</li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- <!-- Team Section -->
<section class="team-section no-padd-top" id="team" style="position: relative; padding: 120px 0px; background: #ffffff url('{{asset('venshaq/images/background/pattern-2.png')}}') left top repeat; overflow: hidden;">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Meet the expert team<span class="dot">.</span></h2>
        </div>
    </div>
    <div class="auto-container">
        <div class="carousel-box">
            <div class="team-carousel__one-page owl-theme owl-carousel">
                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="about.html"><img src="{{asset('venshaq/images/resource/team-1.jpg')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="#">Kevin martin</a></h5>
                            <div class="designation">Designer</div>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="about.html"><img src="{{asset('venshaq/images/resource/team-2.jpg')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="#">Jessica Brown</a></h5>
                            <div class="designation">Designer</div>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="about.html"><img src="{{asset('venshaq/images/resource/team-3.jpg')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="#">John Albert</a></h5>
                            <div class="designation">Designer</div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div><!-- /.auto-container -->
</section> --}}

<!-- Parallax Section -->
<section class="parallax-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
    <!-- <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div> -->
    <img src="{{asset('venshaq/images/resource/pexels-christina-morillo-1181406.jpg')}}" alt="" class="jarallax-img">
    <div class="auto-container">
        <div class="content-box">
            <div class="icon-box"><span class="flaticon-app-development"></span></div>
            <h2>Cultivating An <span> Exceptional </span> Portfolio</h2>
        </div>
    </div>
</section>
<!-- End Funfacts Section -->

<!--Testimonials Section-->
{{-- <section class="testimonials-section" id="testimonials">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Customer feedbacks<span class="dot">.</span></h2>
        </div>
        <div class="carousel-box">
            <div class="testimonials-carousel owl-theme owl-carousel">
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{asset('venshaq/images/resource/author-1.jpg')}}"
                                        alt=""></a></div>
                            <div class="name">Shirley Smith</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{asset('venshaq/images/resource/author-2.jpg')}}"
                                        alt=""></a></div>
                            <div class="name">Mike hardson</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{asset('venshaq/images/resource/author-3.jpg')}}"
                                        alt=""></a></div>
                            <div class="name">Sarah albert</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{asset('venshaq/images/resource/author-1.jpg')}}"
                                        alt=""></a></div>
                            <div class="name">Shirley Smith</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{asset('venshaq/images/resource/author-2.jpg')}}"
                                        alt=""></a></div>
                            <div class="name">Mike hardson</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{asset('venshaq/images/resource/author-3.jpg')}}"
                                        alt=""></a></div>
                            <div class="name">Sarah albert</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}



<!--Sponsors Section-->
<section class="sponsors-section sponsors-section__one-page" id="brands">
    <div class="sponsors-outer">
        <!--Sponsors-->
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="sponsors-carousel owl-theme owl-carousel">
                <div class="slide-item">
                    <figure class="image-box"><a href="http://shaqsfarm.com/"><img src="{{asset('venshaq/images/clients/logo-color.jpg')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="http://trevencleanersltd.co.ke"><img src="{{asset('venshaq/images/clients/treven.jpg')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="http://shaqshouse.co.ke/"><img src="{{asset('venshaq/images/clients/house.jpg')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="https://shemaqproductions.com/"><img src="{{asset('venshaq/images/clients/shemaq.jpg')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="http://shaqshouse.co.ke/"><img src="{{asset('venshaq/images/clients/zone.jpg')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="http://shaqshouse.co.ke/"><img src="{{asset('venshaq/images/clients/shaq.jpg')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="https://prosborders.co.ke/"><img src="{{asset('venshaq/images/clients/ProsBorders.jpg')}}" alt=""></a></figure>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- @include('front.illustrations') --}}

<!-- News Section -->
{{-- <section class="news-section" id="blog">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Latest news & articles<span class="dot">.</span></h2>
        </div>

        <div class="row clearfix">
            <!--News Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="blog-single.html"><img src="{{asset('venshaq/images/resource/news-1.jpg')}}" alt=""></a>
                    </div>
                    <div class="lower-box">
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><span class="far fa-clock"></span> 20 Mar</li>
                                <li><span class="far fa-user-circle"></span> Admin</li>
                                <li><span class="far fa-comments"></span> 2 Comments</li>
                            </ul>
                        </div>
                        <h5><a href="blog-single.html">basic rules of running web agency business</a></h5>
                        <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                        <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                    class="flaticon-next-1"></span></a></div>
                    </div>
                </div>
            </div>
            <!--News Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="blog-single.html"><img src="{{asset('venshaq/images/resource/news-2.jpg')}}" alt=""></a>
                    </div>
                    <div class="lower-box">
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><span class="far fa-clock"></span> 20 Mar</li>
                                <li><span class="far fa-user-circle"></span> Admin</li>
                                <li><span class="far fa-comments"></span> 2 Comments</li>
                            </ul>
                        </div>
                        <h5><a href="blog-single.html">Delivering the best digital marketing</a></h5>
                        <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                        <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                    class="flaticon-next-1"></span></a></div>
                    </div>
                </div>
            </div>
            <!--News Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="blog-single.html"><img src="{{asset('venshaq/images/resource/news-3.jpg')}}" alt=""></a>
                    </div>
                    <div class="lower-box">
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><span class="far fa-clock"></span> 20 Mar</li>
                                <li><span class="far fa-user-circle"></span> Admin</li>
                                <li><span class="far fa-comments"></span> 2 Comments</li>
                            </ul>
                        </div>
                        <h5><a href="blog-single.html">Introducing the latest venshaq. features</a></h5>
                        <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                        <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                    class="flaticon-next-1"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!--Get Quote Section-->
<section class="get-quote-two get-quote-two__one-page" id="contact">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>Interested in any of Our services?<span class="dot">.</span></h2>
                        <div class="lower-text">Get In Touch With Us Today. </div>

                    </div>
                    {{-- <div class="text"><br><br></div> --}}
                    <div class="info">
                        <ul>
                            <li class="address">
                                <span class="icon flaticon-pin-1"></span>
                                <strong>Visit Us</strong>
                                Chalbi Condominiums, Ring Road, Kilimani, 5th Floor Suite 5c
                            </li>
                            <li>
                                <span class="icon flaticon-email-2"></span>
                                <strong>Email address</strong>
                                <a href="mailto:hello@venshaq.com">hello@venshaq.com</a>
                            </li>
                            <li>
                                <span class="icon flaticon-call"></span>
                                <strong>Call now</strong>
                                <a href="tel:+1 (202) 540 0134">+1 (202) 540 0134</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="form-box">
                        <div class="default-form">
                            <form method="post" action="http://venshaq.com/venshaq./sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="username" value="" placeholder="Your Name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="email" name="email" value=""
                                                placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="phone" value="" placeholder="Phone Number"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="subject" value="" placeholder="Subject"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <textarea name="message" placeholder="Write Message"
                                                required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-one">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Send message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

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
                {{-- <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h5>ShemaQ Productions</h5>
                        <div class="text">
                            <ul class="info">
                                <li>Malik Heights, 4th Floor Rm 406</li>
                                <li><a href="mailto:shemaq@venshaq.com">shemaq@venshaq.com</a></li>
                                <li><a href="tel:666888000">+1 (202) 540 0134</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h5>Shaq's House</h5>
                        <div class="text">
                            <ul class="info">
                                <li>Malik Heights, 4th Floor Rm 406</li>
                                <li><a href="mailto:shaq@venshaq.com">shaq@venshaq.com</a></li>
                                <li><a href="tel:666888000">+1 (202) 540 0134</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}

                <div style="margin:0px auto;" class="info-block col-xl-9 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="text">
                                    <h5>ShemaQ Productions</h5>
                                    <ul class="info">
                                        <li><a href="mailto:info@shemaqproductions.com">info@shemaqproductions.com</a></li>
                                        <li><a href="tel:666888000">+1 (202) 540 0134</a></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <h5>Shaq's House</h5>
                                    <ul class="info">
                                        <li><a href="mailto:info@shaqshouse.com">info@shaqshouse.com</a></li>
                                        <li><a href="tel:666888000">+1 (202) 540 0134</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="text">
                                    <h5>Treven Cleaners</h5>
                                    <ul class="info">
                                        <li><a href="mailto:info@trevencleanersltd.co.ke">info@trevencleanersltd.co.ke</a></li>
                                        <li><a href="tel:666888000">+1 (202) 540 0134</a></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <h5>Shaqs Farm </h5>
                                    <ul class="info">
                                        <li><a href="mailto:info@shaqsfarm.com">info@shaqsfarm.com</a></li>
                                        <li><a href="tel:666888000">+1 (202) 540 0134</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="text">
                                    <h5>Pros Borders</h5>
                                    <ul class="info">
                                        <li><a href="mailto:info@prosborders.com">info@prosborders.com</a></li>
                                        <li><a href="tel:666888000">+1 (202) 540 0134</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>



                {{-- <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h5>Shaqs Farm House</h5>
                        <div class="text">
                            <ul class="info">
                                <li>Malik Heights, 4th Floor Rm 406</li>
                                <li><a href="mailto:farm@venshaq.com">farm@venshaq.com</a></li>
                                <li><a href="tel:666888000">+1 (202) 540 0134</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</section>


<!-- Call To Section -->
<section class="call-to-section">
    <div class="auto-container">
        <div class="inner clearfix">
            <div class="shape-1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            <div class="shape-2 wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            <h2>Let's Get in Touch  <br>Today!</h2>
            <div class="link-box">
                <a class="theme-btn btn-style-two" href="mailto:info@venshaq.com">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Contact with us</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
