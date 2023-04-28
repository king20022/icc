<x-guest-layout>
    <main>
        <!--Start Main Slider -->
        <section class="main-slider main-slider-one" id="home">
            <div class="swiper-container thm-swiper__slider"
                data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">
                    <!--Start Single Swiper Slide-->
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="
                    background-image: url(assets/images/slides/slide-v1-1.jpeg);
                  ">
                        </div>
                        <div class="auto-container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-one__content">
                                        <div class="title">
                                            <h2>
                                                Our Major<br />
                                                <span>Goal</span> <br />
                                            </h2>
                                        </div>
                                        <div class="text">
                                            <p>
                                                With a focus on understanding your individual situation ,
                                                <br />
                                                we support and guidance you need to move forward with
                                                confidence.
                                            </p>
                                        </div>
                                        <div class="btn-box">
                                            <a class="btn-one" href="{{ route('register') }}">
                                                <span class="txt">Contact Us</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Swiper Slide-->

                    <!--Start Single Swiper Slide-->
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="
                    background-image: url(assets/images/slides/slide-v1-2.jpeg);
                  ">
                        </div>
                        <div class="auto-container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-one__content">
                                        <div class="title">
                                            <h2>
                                                Best at what we <br />
                                               <span>Do</span> <br />
                                            </h2>
                                        </div>
                                        <div class="text">
                                            <p>
                                                With expert knowledge and experience in dealing with <br />
                                                fraudulent
                                                investments and scams .
                                            </p>
                                        </div>
                                        <div class="btn-box">
                                            <a class="btn-one" href="{{ route('register') }}">
                                                <span class="txt">Report An Issue</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Swiper Slide-->
                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>
            </div>
        </section>
        <!--End Main Slider-->

        <!--Start Features Style1-->
        <section class="features-style1">
            <div class="shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="3500ms"></div>
            <div class="shape2">
                <img src="assets/images/shapes/features-v1-shape1.png" alt="#" />
            </div>
            <div class="auto-container">
                <div class="features-style1__inner">
                    <div class="row">
                        <!--Start Features Style1 Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="features-style1__single">
                                <div class="features-style1__single-icon">
                                    <span class="icon-Group-3"></span>
                                </div>

                                <div class="features-style1__single-content">
                                    <h3>
                                        <a href="#">Field operations <br />
                                        </a>
                                    </h3>
                                    <p>
                                        Responsible for coordinating field agents and investigators who work on-site to
                                        locate and recover lost or stolen assets.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--End Features Style1 Single-->

                        <!--Start Features Style1 Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms"
                            data-wow-duration="1500ms">
                            <div class="features-style1__single">
                                <div class="features-style1__single-icon">
                                    <span class="icon-Group-1"></span>
                                </div>

                                <div class="features-style1__single-content">
                                    <h3>
                                        <a href="#">Asset valuation <br /></a>
                                    </h3>
                                    <p>
                                        They would work closely with the legal department to determine the value of
                                        assets in legal cases and negotiate settlements with debtors.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--End Features Style1 Single-->

                        <!--Start Features Style1 Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="features-style1__single">
                                <div class="features-style1__single-icon">
                                    <span class="icon-Group-2"></span>
                                </div>

                                <div class="features-style1__single-content">
                                    <h3>
                                        <a href="#">Training & development <br />
                                            Related</a>
                                    </h3>
                                    <p>
                                        Training new employees and providing ongoing professional development for
                                        existing staf.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--End Features Style1 Single-->

                        <!--Start Features Style1 Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="features-style1__single">
                                <div class="features-style1__single-icon">
                                    <span class="icon-Group-4"></span>
                                </div>

                                <div class="features-style1__single-content">
                                    <h3>
                                        <a href="#">Customer service <br /></a>
                                    </h3>
                                    <p>
                                        providing information on the status of recovery efforts, and assisting customers
                                        with any issues they may encounter.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--End Features Style1 Single-->
                    </div>
                </div>
            </div>
        </section>
        <!--End Features Style1-->

        <!--Start About Style1-->
        <section class="about-style1" id="about">
            <div class="auto-container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-style1__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h6>About Leader</h6>
                                </div>
                                <h2>
                                    Meet <span>Ideological</span> <br />
                                    of ICC<br />
                                </h2>
                            </div>
                            <div class="about-style1__content-text">
                                <p>
                                    Losing funds to a scam or fraudulent investment can be a devastating experience,
                                    leaving you feeling helpless and vulnerable. However, with the help ICC
                                    , you can take steps to recover your lost funds and hold those
                                    responsible accountable for their actions.
                                </p>
                            </div>
                            <div class="about-style1__content-signature">
                                <img src="assets/images/resources/about-v1-signature.png" alt="#" />
                            </div>
                            <ul class="about-style1__content-list">
                                <li>
                                    <div class="icon-box">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Improving Recovery</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon-box">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Quick solutions for daily problems</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon-box">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Success stories</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="about-style1__content-btn">
                                <a class="btn-one" href="{{ route('register') }}">
                                    <span class="txt">Report an Issues</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="about-style1__img">
                            <div class="shape1 float-bob-y">
                                <img src="assets/images/shapes/thm-shape1.png" alt="#" />
                            </div>
                            <div class="shape2 rotate-me">
                                <img src="assets/images/shapes/thm-shape1.png" alt="#" />
                            </div>
                            <div class="shape3"></div>
                            <div class="about-style1__img-inner">
                                <img src="assets/images/about/about-v1-img1.png" alt="#" />
                            </div>
                            <div class="experience-box text-center">
                                <h2>
                                    <span class="odometer" data-count="20">00</span>
                                </h2>
                                <div class="title">
                                    <h3>
                                        Years Of <br />
                                        Exps
                                    </h3>
                                </div>
                            </div>

                            <div class="about-style1__img-client-info">
                                <h3>Jordon Cooper</h3>
                                <p> Mayor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About Style1-->

        <!--Start Services Style1-->
        <section class="services-style1" id="services">
            <div class="shape1"></div>
            <div class="shape2 rotate-me">
                <img src="assets/images/shapes/services-v1-shape1.png" alt="#" />
            </div>
            <div class="shape3 float-bob-y">
                <img src="assets/images/shapes/services-v1-shape2.png" alt="#" />
            </div>
            <div class="shape4">
                <img src="assets/images/shapes/services-v1-shape3.png" alt="#" />
            </div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h6>EFFICIENCY - OPPORTUNITY</h6>
                    </div>
                    <h2>ICC Services <br />And Departments</h2>
                </div>
                <div class="row">
                    <!--Start Services Style1 Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="services-style1__single">
                            <div class="services-style1__single-content text-center">
                                <div class="services-style1__single-icon">
                                    <span class="icon-Group-5"></span>
                                </div>
                                <div class="services-style1__single-text">
                                    <h3>
                                        <a href="#">
                                            Legal department <br />
                                            Department </a>
                                    </h3>
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Style1 Single-->

                    <!--Start Services Style1 Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="services-style1__single">
                            <div class="services-style1__single-content text-center">
                                <div class="services-style1__single-icon">
                                    <span class="icon-Group-6"></span>
                                </div>
                                <div class="services-style1__single-text">
                                    <h3>
                                        <a href="#">Customer service <br />
                                            Department</a>
                                    </h3>
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Style1 Single-->

                    <!--Start Services Style1 Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="services-style1__single">
                            <div class="services-style1__single-content text-center">
                                <div class="services-style1__single-icon">
                                    <span class="icon-Group-7"></span>
                                </div>
                                <div class="services-style1__single-text">
                                    <h3>
                                        <a href="#">
                                            Collections <br />
                                            Department</a>
                                    </h3>
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Style1 Single-->

                    <!--Start Services Style1 Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="services-style1__single">
                            <div class="services-style1__single-content text-center">
                                <div class="services-style1__single-icon">
                                    <span class="icon-Group-16"></span>
                                </div>
                                <div class="services-style1__single-text">
                                    <h3>
                                        <a href="#">
                                            Logistics <br />
                                            Department</a>
                                    </h3>
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Style1 Single-->

                    <!--Start Services Style1 Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="services-style1__single">
                            <div class="services-style1__single-content text-center">
                                <div class="services-style1__single-icon">
                                    <span class="icon-Group-121"></span>
                                </div>
                                <div class="services-style1__single-text">
                                    <h3>
                                        <a href="#">IT <br />
                                            Department</a>
                                    </h3>
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Style1 Single-->

                    <!--Start Services Style1 Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="services-style1__single">
                            <div class="services-style1__single-content text-center">
                                <div class="services-style1__single-icon">
                                    <span class="icon-Group-9"></span>
                                </div>
                                <div class="services-style1__single-text">
                                    <h3>
                                        <a href="#">Field operations <br />
                                            Department</a>
                                    </h3>
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Style1 Single-->

                    <!--Start Services Style1 Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="services-style1__single">
                            <div class="services-style1__single-content text-center">
                                <div class="services-style1__single-icon">
                                    <span class="icon-Group-10"></span>
                                </div>
                                <div class="services-style1__single-text">
                                    <h3>
                                        <a href="#">Asset valuation <br />
                                            Department</a>
                                    </h3>
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Style1 Single-->

                    <!--Start Services Style1 Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="services-style1__single">
                            <div class="services-style1__single-content text-center">
                                <div class="services-style1__single-icon">
                                    <span class="icon-Group-11"></span>
                                </div>
                                <div class="services-style1__single-text">
                                    <h3>
                                        <a href="#">
                                            Quality control <br />
                                            Department</a>
                                    </h3>
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Style1 Single-->
                </div>
            </div>
        </section>
        <!--End Services Style1-->

        <!--Start Instant Services Style1-->
        <section class="instant-services-style1">
            <div class="shape2 rotate-me">
                <img src="assets/images/shapes/thm-shape1.png" alt="#" />
            </div>
            <div class="auto-container">
                <div class="row">
                    <!--Start Instant Services Style1 Img-->
                    <div class="col-xl-6">
                        <div class="instant-services-style1__img">
                            <div class="shape1 float-bob-y">
                                <img src="assets/images/shapes/thm-shape1.png" alt="#" />
                            </div>
                            <div class="instant-services-style1__img-inner">
                                <img src="assets/images/services/instant-services-v1-img1.jpg" alt="#" />
                            </div>
                        </div>
                    </div>
                    <!--End Instant Services Style1 Img-->

                    <!--Start Instant Services Style1 Content-->
                    <div class="col-xl-6">
                        <div class="instant-services-style1__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h6>Instant Services</h6>
                                </div>
                                <h2>
                                    Quick Services From <br />
                                    ICC
                                </h2>
                            </div>

                            <div class="instant-services-style1__content-text">
                                <p>
                                    Please note that contact information and availability may vary depending on the
                                    organization and its policies.

                                </p>
                            </div>
                            <div class="instant-services-style1__content-bottom">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="instant-services-style1__content-bottom-single">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">Report an issue</a>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">Things To Do In ICC</a>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">Offer support</a>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">Advocate for change</a>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">Provide information and education</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="instant-services-style1__content-bottom-single">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">Provide resources</a>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">success stories </a>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">Daily affirmation</a>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">Recovery podcasts</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Instant Services Style1 Content-->
                </div>
            </div>
        </section>
        <!--End Instant Services Style1-->

        <!--Start Testimonials Style1-->
        <section class="testimonials-style1">
            <div class="shape1"></div>
            <div class="shape2 rotate-me">
                <img src="assets/images/shapes/services-v1-shape1.png" alt="" />
            </div>
            <div class="shape3 wow slideInRight" data-wow-delay="500ms" data-wow-duration="2500ms">
                <img class="float-bob-y" src="assets/images/shapes/testimonials-v1-shape2.png" alt="" />
            </div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h6>Testimonials</h6>
                    </div>
                    <h2>We are Very Glad to Get <br />People Review</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonials-style1__inner">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-carousel-one"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 2
                                        },
                                        "992": {
                                            "items": 2
                                        },
                                        "1200": {
                                            "items": 3
                                        }
                                    }
                                }'>
                                <!--Start Testimonials Style1 Single-->
                                <div class="testimonials-style1__single">
                                    <div class="testimonials-style1__single-content">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>
                                                "I'm grateful to the team at ICC Recovery! Despite falling
                                                victim to an online scam and losing a substantial amount of money, their
                                                expertise helped trace and recover my stolen funds."
                                            </p>
                                        </div>
                                    </div>

                                    <div class="testimonials-style1__single-client-info">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-1.jpg"
                                                alt="#" />
                                        </div>

                                        <div class="text-box">
                                            <h3>Benjamin F.</h3>

                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonials Style1 Single-->

                                <!--Start Testimonials Style1 Single-->
                                <div class="testimonials-style1__single">
                                    <div class="testimonials-style1__single-content">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>
                                                “Their professionalism in the recovery process was outstanding. Highly
                                                recommend ICC Recovery to anyone who lost funds to scams. Thank you for
                                                bringing justice to my situation!.”
                                            </p>
                                        </div>
                                    </div>

                                    <div class="testimonials-style1__single-client-info">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-2.jpg"
                                                alt="#" />
                                        </div>

                                        <div class="text-box">
                                            <h3>Christopher L.</h3>

                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonials Style1 Single-->

                                <!--Start Testimonials Style1 Single-->
                                <div class="testimonials-style1__single">
                                    <div class="testimonials-style1__single-content">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>
                                                “I had lost hope of recovering my funds, but FundsRecoveryPro's expert
                                                team worked tirelessly, kept me informed, and never gave up. Thanks to
                                                their unwavering efforts.”
                                            </p>
                                        </div>
                                    </div>

                                    <div class="testimonials-style1__single-client-info">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-3.jpg"
                                                alt="#" />
                                        </div>

                                        <div class="text-box">
                                            <h3>Daniel S</h3>

                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonials Style1 Single-->

                                <!--Start Testimonials Style1 Single-->
                                <div class="testimonials-style1__single">
                                    <div class="testimonials-style1__single-content">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>
                                                “Devastated by an investment scam and loss of funds, I found hope with
                                                ICCRecovery. Their expert team guided me through the recovery
                                                process with care and professionalism.”
                                            </p>
                                        </div>
                                    </div>

                                    <div class="testimonials-style1__single-client-info">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-4.jpg"
                                                alt="#" />
                                        </div>

                                        <div class="text-box">
                                            <h3>Alex K.</h3>

                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonials Style1 Single-->

                                <!--Start Testimonials Style1 Single-->
                                <div class="testimonials-style1__single">
                                    <div class="testimonials-style1__single-content">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>
                                                “ICC Recovery utilized their expertise and resources to track the
                                                scammers and recover a significant portion of my stolen funds. Forever
                                                grateful for their exceptional services and restored faith in fund
                                                recovery..”
                                            </p>
                                        </div>
                                    </div>

                                    <div class="testimonials-style1__single-client-info">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-5.jpg"
                                                alt="#" />
                                        </div>

                                        <div class="text-box">
                                            <h3>Michael H.</h3>

                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonials Style1 Single-->

                                <!--Start Testimonials Style1 Single-->
                                <div class="testimonials-style1__single">
                                    <div class="testimonials-style1__single-content">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>
                                                “I didn't think I could recover my lost funds, but ICC Recovery
                                                proved me wrong. Their expert team guided me patiently, thoroughly
                                                investigating the case and pursuing every avenue to recover my stolen
                                                funds.”
                                            </p>
                                        </div>
                                    </div>

                                    <div class="testimonials-style1__single-client-info">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-6.jpg"
                                                alt="#" />
                                        </div>

                                        <div class="text-box">
                                            <h3>Michael H.</h3>

                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonials Style1 Single-->

                                <!--Start Testimonials Style1 Single-->
                                <div class="testimonials-style1__single">
                                    <div class="testimonials-style1__single-content">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>
                                                “Thanks to ICC Recovery's diligent efforts, I successfully recovered
                                                my funds and achieved justice. Incredibly grateful for their unwavering
                                                support and dedication to helping victims. Highly recommend their
                                                services for fund recovery assistance.”
                                            </p>
                                        </div>
                                    </div>

                                    <div class="testimonials-style1__single-client-info">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-7.jpg"
                                                alt="#" />
                                        </div>

                                        <div class="text-box">
                                            <h3>David K.</h3>

                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonials Style1 Single-->

                                <!--Start Testimonials Style1 Single-->
                                <div class="testimonials-style1__single">
                                    <div class="testimonials-style1__single-content">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>
                                                “FundsRecoveryPro traced and recovered my stolen funds with outstanding
                                                dedication. Grateful for their services in successfully recovering a
                                                substantial portion of my losses. Highly recommend them for fund
                                                recovery assistance!”
                                            </p>
                                        </div>
                                    </div>

                                    <div class="testimonials-style1__single-client-info">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-8.jpg"
                                                alt="#" />
                                        </div>

                                        <div class="text-box">
                                            <h3>Charles L.</h3>

                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonials Style1 Single-->

                                <!--Start Testimonials Style1 Single-->
                                <div class="testimonials-style1__single">
                                    <div class="testimonials-style1__single-content">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>
                                                “My experience with FundsRecoveryPro was exceptional. Despite losing a
                                                significant amount in an investment scam, their expert team provided me
                                                with guidance, support, and professionalism throughout the recovery
                                                process”
                                            </p>
                                        </div>
                                    </div>

                                    <div class="testimonials-style1__single-client-info">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-9.jpg"
                                                alt="#" />
                                        </div>

                                        <div class="text-box">
                                            <h3>John W.</h3>

                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonials Style1 Single-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonials Style1-->

        <!--Start Fact Counter Style1-->
        <section class="fact-counter-style1">
            <div class="fact-counter-style1__bg"
                style="
              background-image: url(/assets/images/backgrounds/fact-counter-v1-bg.png);
            ">
            </div>
            <div class="auto-container">
                <div class="row">
                    <!--Start Fact Counter Style1 Title-->
                    <div class="col-xl-4">
                        <div class="fact-counter-style1__title">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h6>Instant Services</h6>
                                </div>
                                <h2>
                                    Large Scale of City <br />
                                    Numbers
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!--End Fact Counter Style1 Title-->

                    <!--Start Fact Counter Style1 Right-->
                    <div class="col-xl-8">
                        <div class="fact-counter-style1__right">
                            <ul class="fact-counter-style1__counter-box">
                                <!--Start Fact Counter Style1 Counter Box Single-->
                                <li class="fact-counter-style1__counter-box-single text-center">
                                    <div class="counter-box">
                                        <h2 class="odometer" data-count="4.2">00</h2>
                                        <span class="text">M</span>
                                    </div>
                                    <div class="title">
                                        <p>Total Funds Recovered <br /></p>
                                    </div>
                                </li>
                                <!--End Fact Counter Style1 Counter Box Single-->

                                <!--Start Fact Counter Style1 Counter Box Single-->
                                <li class="fact-counter-style1__counter-box-single text-center">
                                    <div class="counter-box">
                                        <h2 class="odometer" data-count="7">00</h2>
                                        <span class="text">k</span>
                                    </div>
                                    <div class="title">
                                        <p>
                                            Successfull Case <br />

                                        </p>
                                    </div>
                                </li>
                                <!--End Fact Counter Style1 Counter Box Single-->

                                <!--Start Fact Counter Style1 Counter Box Single-->
                                <li class="fact-counter-style1__counter-box-single text-center">
                                    <div class="counter-box">
                                        <h2 class="odometer" data-count="4">00</h2>
                                        <span class="text">rd</span>
                                    </div>
                                    <div class="title">
                                        <p>Ranking </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Fact Counter Style1-->

        <!--Start Events Style1-->
        {{-- <section class="events-style1">
            <div class="events-style1__bg"
                style="
              background-image: url(assets/images/backgrounds/events-v1-bg.png);
            ">
            </div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h6>upcoming Events</h6>
                    </div>
                    <h2>Explore Upcoming City <br />Event Schedule</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="events-style1__inner">
                            <!--Start Events Style1 Single-->
                            <div class="events-style1__single wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="events-style1__single-left">
                                    <div class="img-box">
                                        <img src="assets/images/resources/events-v1-img1.jpg" alt="#" />
                                    </div>
                                    <div class="title">
                                        <h2>
                                            <a href="event-details.html">The Youth Event – Things <br />
                                                To Remember</a>
                                        </h2>
                                    </div>
                                </div>

                                <div class="events-style1__single__right">
                                    <ul class="contact-info">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-wall-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>08.00AM - 06.00PM</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <div class="text">
                                                <p>New Hyde Park, NY 11040</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="events-style1__single__right-btn">
                                        <a class="btn-one" href="event-details.html">
                                            <span class="txt">Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--End Events Style1 Single-->

                            <!--Start Events Style1 Single-->
                            <div class="events-style1__single wow animated fadeInUp" data-wow-delay="0.2s">
                                <div class="events-style1__single-left">
                                    <div class="img-box">
                                        <img src="assets/images/resources/events-v1-img2.jpg" alt="#" />
                                    </div>
                                    <div class="title">
                                        <h2>
                                            <a href="event-details.html">Street San Antonio <br />
                                                Sketches & Urban History</a>
                                        </h2>
                                    </div>
                                </div>

                                <div class="events-style1__single__right">
                                    <ul class="contact-info">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-wall-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>08.00AM - 06.00PM</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <div class="text">
                                                <p>New Hyde Park, NY 11040</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="events-style1__single__right-btn">
                                        <a class="btn-one" href="event-details.html">
                                            <span class="txt">Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--End Events Style1 Single-->

                            <!--Start Events Style1 Single-->
                            <div class="events-style1__single wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="events-style1__single-left">
                                    <div class="img-box">
                                        <img src="assets/images/resources/events-v1-img3.jpg" alt="#" />
                                    </div>
                                    <div class="title">
                                        <h2>
                                            <a href="event-details.html">Protest of Violence <br />
                                                Against Women Rights</a>
                                        </h2>
                                    </div>
                                </div>

                                <div class="events-style1__single__right">
                                    <ul class="contact-info">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-wall-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>08.00AM - 06.00PM</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <div class="text">
                                                <p>New Hyde Park, NY 11040</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="events-style1__single__right-btn">
                                        <a class="btn-one" href="event-details.html">
                                            <span class="txt">Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--End Events Style1 Single-->
                            <div class="events-style1__btn text-center">
                                <a class="btn-one" href="event-details.html">
                                    <span class="txt">More Events</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--End Events Style1-->


        <!--Start Team Style1-->
        {{-- <section class="team-style1" id="team">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h6>Council Members</h6>
                    </div>
                    <h2>
                        Meet Excellent Council <br />
                        Members
                    </h2>
                </div>
                <div class="row">
                    <!--Start Team Style1 Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                        <div class="team-style1__single">
                            <div class="team-style1__single-img">
                                <div class="team-style1__single-img-inner">
                                    <img src="assets/images/team/team-v1-img1.jpg" alt="#" />
                                </div>

                                <ul class="social-links clearfix">
                                    <li>
                                        <a href="mailto:yourmail@email.com"><span class="icon-mail-1"></span></a>
                                    </li>
                                    <li class="share">
                                        <a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li>
                                                <a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-facebook-app-symbol"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="tel:1234567890"><span class="icon-telephone"></span></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="team-stye1__single-content text-center">
                                <div class="inner-box">
                                    <div class="round-bg"></div>
                                    <h2><a href="team-details.html">Robert Gates</a></h2>
                                    <p>Ambassador</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Style1 Single-->

                    <!--Start Team Style1 Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-style1__single">
                            <div class="team-style1__single-img">
                                <div class="team-style1__single-img-inner">
                                    <img src="assets/images/team/team-v1-img2.jpg" alt="#" />
                                </div>

                                <ul class="social-links clearfix">
                                    <li>
                                        <a href="mailto:yourmail@email.com"><span class="icon-mail-1"></span></a>
                                    </li>
                                    <li class="share">
                                        <a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li>
                                                <a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-facebook-app-symbol"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="tel:1234567890"><span class="icon-telephone"></span></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="team-stye1__single-content text-center">
                                <div class="inner-box">
                                    <div class="round-bg"></div>
                                    <h2><a href="team-details.html">Nicholas Cage</a></h2>
                                    <p>Director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Style1 Single-->

                    <!--Start Team Style1 Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-style1__single">
                            <div class="team-style1__single-img">
                                <div class="team-style1__single-img-inner">
                                    <img src="assets/images/team/team-v1-img3.jpg" alt="#" />
                                </div>

                                <ul class="social-links clearfix">
                                    <li>
                                        <a href="mailto:yourmail@email.com"><span class="icon-mail-1"></span></a>
                                    </li>
                                    <li class="share">
                                        <a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li>
                                                <a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-facebook-app-symbol"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="tel:1234567890"><span class="icon-telephone"></span></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="team-stye1__single-content text-center">
                                <div class="inner-box">
                                    <div class="round-bg"></div>
                                    <h2><a href="team-details.html">Keanu Reeves</a></h2>
                                    <p>Mayor Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Style1 Single-->

                    <!--Start Team Style1 Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="team-style1__single">
                            <div class="team-style1__single-img">
                                <div class="team-style1__single-img-inner">
                                    <img src="assets/images/team/team-v1-img4.jpg" alt="#" />
                                </div>

                                <ul class="social-links clearfix">
                                    <li>
                                        <a href="mailto:yourmail@email.com"><span class="icon-mail-1"></span></a>
                                    </li>
                                    <li class="share">
                                        <a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li>
                                                <a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-facebook-app-symbol"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="tel:1234567890"><span class="icon-telephone"></span></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="team-stye1__single-content text-center">
                                <div class="inner-box">
                                    <div class="round-bg"></div>
                                    <h2><a href="team-details.html">Brendan Fraser</a></h2>
                                    <p>Council Member</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Style1 Single-->
                </div>
            </div>
        </section> --}}
        <!--End Team Style1-->

        <!--Start Cta Style1-->
        <section class="cta-style1">
            <div class="cta-style1__bg"
                style="
              background-image: url(assets/images/backgrounds/cta-v1-bg.png);
            ">
            </div>
            <div class="auto-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-style1__inner">
                            <div class="cta-style1__title">
                                <div class="sec-title">
                                    <div class="sub-title">
                                        <h6>Become Volunteer</h6>
                                    </div>
                                    <h2>
                                        Become a Volunteer, Service to Our <br />
                                        City, & Make Difference!
                                    </h2>
                                </div>
                            </div>

                            <div class="cta-style1__btn">
                                <a class="btn-one" href="{{ route('register') }}">
                                    <span class="txt">Become Volunteer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cta Style1-->


    </main>
</x-guest-layout>
{{--  --}}
