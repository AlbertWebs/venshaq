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
                        <h2>Hello!<br>We are Venshaq Holdings, Dedicated to growth & Positive Impact<span class="dot">.</span></h2>
                        <div class="lower-text">Venshaq Holdings is a private holding company established in 2018. At our establishment, we have secured and consolidated a robust portfolio of companies representing a broad range of services and industries. Our investments are focused on positively impacting communities by creating opportunities that drive business growth and improve lives.  </div>
                    </div>
                    <div class="text">
                        <p>We partner with innovative leaders with unique ideas, strong management teams, and demonstrated ability to help us achieve our strategic goal of a maximum long term return to our shareholders. Our market leading services include: </p>
                    </div>
                    <div class="text clearfix">
                        <ul>
                            <li>Commercial Janitorial Services</li>
                            <li>Motion Picture and Media Production.</li>
                            <li>Meal Delivery Services</li>
                            <li>Construction and Supplies</li>
                            <li>Agri-Business</li>
                        </ul>
                        <div class="since"><span class="txt">EST. <br>2018</span></div>
                    </div>
                    <div class="link-box scrollToLink">
                        <a class="theme-btn btn-style-one" href="#industries">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Discover Companies</span>
                        </a>
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
        </div>
        <div class="services">
            <div class="row clearfix" style="margin:0 auto !important">
                <!--Service Block-->
                <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-vector"></span></div>
                        <h5><a target="new" href="https://www.trevencleanersltd.co.ke">Commercial <br>Cleaning</a></h5>
                        {{-- <div class="text">www.trevencleanersltd.co.ke</div> --}}
                        <div class="link-box"><a href="https://www.trevencleanersltd.co.ke"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="fa fa-wrench"></span></div>
                        <h5><a target="new" href="https://www.pros-borders.com">Construction <br>& Supplies</a></h5>
                        {{-- <div class="text">
                            www.pros-borders.com
                        </div> --}}
                        <div class="link-box"><a href="https://www.pros-borders.com"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-digital"></span></div>
                        <h5><a target="new" href="https://www.shaqhouse.co.ke">Food &<br>Beverage</a></h5>
                        {{-- <div class="text">www.shaqshouse.co.ke</div> --}}
                        <div class="link-box"><a href="https://www.shaqshouse.co.ke"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12" style="margin:0 auto !important">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                        <h5><a target="new" href="https://www.shemaq.com">Motion Picture &<br>Media Production</a></h5>
                        {{-- <div class="text">www.shemaq.com</div> --}}
                        <div class="link-box"><a href="https://www.shemaq.com"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12" style="margin:0 auto !important">
                    <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-monitor" aria-hidden="true"></span></div>
                        <h5><a target="new" href="https://www.sheqsfarm.com">Farming &<br>Meat Production</a></h5>
                        {{-- <div class="text">www.shaqsfarm.com</div> --}}
                        <div class="link-box"><a href="https://www.shaqsfarm.com"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                {{-- <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12" style="margin:0 auto !important">
                <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-shopping-cart" aria-hidden="true"></span></div>
                        <h5><a target="new" href="https://www.shaqsbites.com">Shaq's <br>Bites</a></h5>
                        <div class="text">www.shaqsbites.com</div>
                        <div class="link-box"><a href="https://www.shaqsbites.com"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div> --}}



            </div>
        </div>
    </div>
</section>




<!--Live Section-->
<section class="live-section live-section__one-page">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Experience us live<span class="dot">.</span></h2>
        </div>
        <div class="main-image-box">
            <div class="image-layer" style="background-image: url({{asset('venshaq/images/resource/pexels-christina-morillo-1181406.jpg')}});"></div>
            <div class="inner clearfix">
                <div class="round-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="round-inner">
                        <div class="vid-link">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="lightbox-image">
                                <div class="icon"><span class="flaticon-play-button-1"></span><i
                                        class="ripple"></i></div>
                            </a>
                        </div>
                        <div class="title">
                            <h3>Clients Satisfaction <br>Our Hapiness</h3>
                        </div>
                        <div class="more-link scrollToLink"><a href="#about">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--We DO Section-->
<section class="we-do-section" id="portfolio">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>Creating More <br>In Return<span class="dot">.</span></h2>
                    </div>
                    {{-- <div class="featured-block clearfix">
                        <div class="image"><img src="{{asset('venshaq/images/resource/featured-image-4.jpg')}}" alt=""></div>
                        <div class="text">There are many variatns of passages the majority have suffered
                            alteration in some foor randomised words believable.</div>
                    </div> --}}
                    <div class="progress-box">
                        <div class="bar-title">Motion Picture & Media Production</div>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="100%">
                                <div class="count-box">
                                    <span class="count-text" data-stop="100" data-speed="1500">0</span>%
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="progress-box">
                        <div class="bar-title">Commercial Cleaning </div>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="100%">
                                <div class="count-box">
                                    <span class="count-text" data-stop="100" data-speed="1500">0</span>%
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="progress-box">
                        <div class="bar-title">Farming </div>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="100%">
                                <div class="count-box">
                                    <span class="count-text" data-stop="100" data-speed="1500">0</span>%
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="progress-box">
                        <div class="bar-title">Fast Food Delicacies </div>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="100%">
                                <div class="count-box">
                                    <span class="count-text" data-stop="100" data-speed="1500">0</span>%
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="progress-box">
                        <div class="bar-title">Construction and Supplies </div>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="100%">
                                <div class="count-box">
                                    <span class="count-text" data-stop="100" data-speed="1500">0</span>%
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="faq-box">
                        <ul class="accordion-box clearfix">
                            <!--Block-->
                            {{-- <li class="accordion block active-block"> --}}
                            <li class="accordion block">
                                {{-- <div class="acc-btn active"><span class="count">1.</span> Commercial Janitorial Services</div> --}}
                                <div class="acc-btn"><span class="count">1.</span> Commercial Janitorial Services</div>
                                <div class="acc-content">
                                {{-- <div class="acc-content current"> --}}
                                    <div class="content">
                                        <div class="text">
                                            Treven Cleaners Limited, is a full-service janitorial services provider offering comprehensive and professional cleaning solutions that are bespoke, high-quality and pocket-friendly to our residential and corporate clientele alike.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><span class="count">2.</span>Motion Picture & Media Production
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          Shemaq Productions offers a robust roster of highly experienced directors and producers with distinct yet complementary strengths and passions. Whether it's electronic content distribution, our specialist live event management services or traditional TVCs and documentaries, their end-to-end solutions offer the highest level of creative expertise.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><span class="count">3.</span> Meal Delivery Services</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                           Shaqs House offers meal delivery services for the busy lifestyle. From sell-out favourites to traditional delicacies, our offerings guarantee freshness and keep things interesting with a variety of responsibly sourced, quality ingredients. Shaqs house takes orders from their website and delivers to your home or offices just in time.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><span class="count">4.</span> Agri-business</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            For over a decade, Shaqs Farm has produced healthy, high end food products that go into some of the finest regional recipes. Shaqs Farm is committed to producing quality, value added meat products to all its customers through the procurement, processing, packaging and delivery of premium products.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><span class="count">5.</span> Construction & Supplies</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            Pros Borders Limited, is a multi-disciplinary civil engineering and construction company with proven capabilities over a wide range of different technical fields in the Civil Engineering and Building Works industries, respectively. Over the years, we have helped create, connect and care for the roads, bridges and buildings that bring people and communities together.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <br><br>
                            {{--  --}}


                            {{--  --}}
                        </ul>
                    </div>
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
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/treven.jpg')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/house.jpg')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/shemaq.jpg')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/zone.jpg')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/shaq.jpg')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/ProsBorders.jpg')}}" alt=""></a></figure>
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
                    <div class="text"><br><br></div>
                    <div class="info">
                        <ul>
                            <li class="address">
                                <span class="icon flaticon-pin-1"></span>
                                <strong>Visit Us</strong>
                                Ngong Rd, Malik Heights, 4th Floor Rm 406
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
                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
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
                </div>

                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
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
                </div>

                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h5>Treven Cleaners</h5>
                        <div class="text">
                            <ul class="info">
                                <li>Malik Heights, 4th Floor Rm 406</li>
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
                                <li>Malik Heights, 4th Floor Rm 406</li>
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
