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
                                <div class="vid-link">
                                    <a href="https://www.youtube.com/watch?v=0Az_rMDh-aI"
                                        class="lightbox-image">
                                        <div class="icon"><span class="flaticon-play-button-1"></span><i
                                                class="ripple"></i></div>
                                    </a>
                                </div>
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
<section class="about-section" id="about">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                            src="{{asset('venshaq/images/resource/featured-image-1.jpg')}}" alt=""></div>
                    <div class="image-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"><img
                            src="{{asset('venshaq/images/resource/featured-image-2.jpg')}}" alt=""></div>
                </div>
            </div>
            <!--Text Column-->
            <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>We’re the best agency <br>in downtown<span class="dot">.</span></h2>
                        <div class="lower-text">We are committed to providing our customers with exceptional
                            service while offering our employees the best training.</div>
                    </div>
                    <div class="text">
                        <p>Lorem Ipsum is simply dummy text of free available in market the printing and
                            typesetting industry has been the industry's standard dummy text ever.</p>
                    </div>
                    <div class="text clearfix">
                        <ul>
                            <li>Suspe ndisse suscipit sagittis leo.</li>
                            <li>Entum estibulum dignissim posuere.</li>
                            <li>If you are going to use a passage.</li>
                        </ul>
                        <div class="since"><span class="txt">Since <br>2018</span></div>
                    </div>
                    <div class="link-box scrollToLink">
                        <a class="theme-btn btn-style-one" href="#team">
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
<section class="services-section-three services-section-three__one-page" id="industries">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>What we do<span class="dot">.</span></h2>
        </div>
        <div class="services">
            <div class="row clearfix">
                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-vector"></span></div>
                        <h5><a href="#">Commercial <br>Cleaning</a></h5>
                        <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                        <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-digital"></span></div>
                        <h5><a href="#">Fast Food <br>Delivery</a></h5>
                        <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                        <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                        <h5><a href="#">Enterntainment <br>Production</a></h5>
                        <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                        <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-monitor" aria-hidden="true"></span></div>
                        <h5><a href="#">Farming &<br>Meat Production</a></h5>
                        <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                        <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

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
            <div class="image-layer" style="background-image: url({{asset('venshaq/images/resource/featured-image-3.jpg')}});"></div>
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
<section class="we-do-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>We do more then ever <br>platforms<span class="dot">.</span></h2>
                    </div>
                    <div class="featured-block clearfix">
                        <div class="image"><img src="{{asset('venshaq/images/resource/featured-image-4.jpg')}}" alt=""></div>
                        <div class="text">There are many variatns of passages the majority have suffered
                            alteration in some foor randomised words believable.</div>
                    </div>
                    <div class="progress-box">
                        <div class="bar-title">Enterntainment & Production</div>
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
                        <div class="bar-title">Commercial Cleaning & Fumigation</div>
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
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="faq-box">
                        <ul class="accordion-box clearfix">
                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active"><span class="count">1.</span> We help to create
                                    visual strategies</div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority
                                            have suffered alteration in some fo injected humour, or randomised
                                            words believable.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><span class="count">2.</span> Motion Graphics & Animations
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority
                                            have suffered alteration in some fo injected humour, or randomised
                                            words believable.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><span class="count">3.</span> We help to achieve mutual
                                    goals</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority
                                            have suffered alteration in some fo injected humour, or randomised
                                            words believable.</div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section" id="portfolio">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
            <div class="upper-row clearfix">
                <div class="sec-title">
                    <h2>work showcase<span class="dot">.</span></h2>
                </div>
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All<sup>[6]</sup></li>
                        <li class="filter" data-role="button" data-filter=".branding">Branding<sup>[3]</sup>
                        </li>
                        <li class="filter" data-role="button" data-filter=".illustration">
                            illustration<sup>[3]</sup></li>
                        <li class="filter" data-role="button" data-filter=".photography">
                            Photography<sup>[3]</sup></li>
                        <li class="filter" data-role="button" data-filter=".web-design">Web Design<sup>[4]</sup>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="filter-list row">
                <!-- Gallery Item -->
                <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('venshaq/images/gallery/1.jpg')}}" alt=""></figure>
                        <a href="images/gallery/1.jpg')}}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="#">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all photography web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('venshaq/images/gallery/2.jpg')}}" alt=""></figure>
                        <a href="images/gallery/2.jpg')}}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="#">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all branding web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('venshaq/images/gallery/3.jpg')}}" alt=""></figure>
                        <a href="images/gallery/3.jpg')}}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="#">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all branding illustration col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('venshaq/images/gallery/4.jpg')}}" alt=""></figure>
                        <a href="images/gallery/4.jpg')}}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="#">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div
                    class="gallery-item mix all branding illustration photography web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('venshaq/images/gallery/5.jpg')}}" alt=""></figure>
                        <a href="images/gallery/5.jpg')}}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="#">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all illustration photography col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('venshaq/images/gallery/6.jpg')}}" alt=""></figure>
                        <a href="images/gallery/6.jpg')}}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="#">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>


<!-- Funfacts Section -->
<section class="facts-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
    <!-- <div class="image-layer" style="background-image: url(images/background/image-1.jpg);"></div> -->
    <img src="{{asset('venshaq/images/background/image-1.jpg')}}" alt="" class="jarallax-img">
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
                                    <span class="count-text" data-speed="4000" data-stop="8705">0</span>
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
                                    <span class="count-text" data-speed="3000" data-stop="480">0</span>
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
                                    <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                </div>
                                <div class="counter-title">cups of coffee</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="4000" data-stop="9704">0</span>
                                </div>
                                <div class="counter-title">happy clients</div>
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
                                <span>We’re Committed To Deliver High Quality Projects .</span>
                            </div>
                        </div>
                        <div class="features">
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
                        </div>
                    </div>
                </div>
                <div class="right-col col-xl-7 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>We’re trusted by more <br>than 6260 clients<span class="dot">.</span></h2>
                            <div class="lower-text">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some form, simply free
                                text by injected humour, or randomised.</div>
                        </div>
                        <div class="featured-block-two clearfix">
                            <div class="image"><img src="{{asset('venshaq/images/resource/featured-image-5.jpg')}}" alt=""></div>
                            <div class="text">
                                <ul>
                                    <li> Suspe ndisse sagittis leo.</li>
                                    <li>Entum estibulum is posuere.</li>
                                    <li>If you are going to use passage.</li>
                                    <li>Lorem Ipsum on the tend to repeat.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section no-padd-top" id="team">
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
</section>

<!-- Parallax Section -->
<section class="parallax-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
    <!-- <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div> -->
    <img src="{{asset('venshaq/images/background/image-2.jpg')}}" alt="" class="jarallax-img">
    <div class="auto-container">
        <div class="content-box">
            <div class="icon-box"><span class="flaticon-app-development"></span></div>
            <h2>Great things in business are never done by one person. <span>They’re done by a team of
                    people.</span></h2>
        </div>
    </div>
</section>
<!-- End Funfacts Section -->

<!--Testimonials Section-->
<section class="testimonials-section" id="testimonials">
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
</section>



<!--Sponsors Section-->
<section class="sponsors-section sponsors-section__one-page">
    <div class="sponsors-outer">
        <!--Sponsors-->
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="sponsors-carousel owl-theme owl-carousel">
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/1.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/2.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/3.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/4.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/5.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/1.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/2.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/3.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/4.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('venshaq/images/clients/5.png')}}" alt=""></a></figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section" id="blog">
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
</section>

<!--Get Quote Section-->
<section class="get-quote-two get-quote-two__one-page" id="contact">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>We are always here to help you<span class="dot">.</span></h2>
                    </div>
                    <div class="text">There are many variatns of passages the majority have suffered alteration
                        in some foor randomised words believable.</div>
                    <div class="info">
                        <ul>
                            <li class="address">
                                <span class="icon flaticon-pin-1"></span>
                                <strong>Visit Us</strong>
                                66 Ngong Road , Nairobi. Kenya
                            </li>
                            <li>
                                <span class="icon flaticon-email-2"></span>
                                <strong>Email address</strong>
                                <a href="mailto:hello@venshaq.com">hello@venshaq.com</a>
                            </li>
                            <li>
                                <span class="icon flaticon-call"></span>
                                <strong>Call now</strong>
                                <a href="tel:666888000">666 888 000</a>
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
<section class="contact-section contact-section__one-page">
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
                                <li>Malik Heights Suite 3</li>
                                <li><a href="mailto:shemaq@venshaq.com">shemaq@venshaq.com</a></li>
                                <li><a href="tel:666888000">666 888 000</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h5>Shaq House</h5>
                        <div class="text">
                            <ul class="info">
                                <li>Malik Heights Suite 4</li>
                                <li><a href="mailto:shaq@venshaq.com">shaq@venshaq.com</a></li>
                                <li><a href="tel:666888000">666 888 000</a></li>
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
                                <li>Malik Heights Suite 5</li>
                                <li><a href="mailto:treven@venshaq.com">treven@venshaq.com</a></li>
                                <li><a href="tel:666888000">666 888 000</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h5>Shaq Farm House</h5>
                        <div class="text">
                            <ul class="info">
                                <li>Malik Heights Suite 6</li>
                                <li><a href="mailto:farm@venshaq.com">farm@venshaq.com</a></li>
                                <li><a href="tel:666888000">666 888 000</a></li>
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
            <h2>Let's Get Your Project <br>Started!</h2>
            <div class="link-box">
                <a class="theme-btn btn-style-two" href="about.html">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Contact with us</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
