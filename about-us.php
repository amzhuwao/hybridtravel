<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ridek Online Taxi Booking HTML5 Template">
    <meta name="author" content="DynamicLayers">

    <title>Ridek - Online Taxi Booking Service HTML5 Template</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/keyframe-animation.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/venobox.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/elements.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <!--[if lt IE 8]>
	<p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
	</p><![endif]-->

    <div class="site-preloader">
        <div class="car">
            <div class="strike"></div>
            <div class="strike strike2"></div>
            <div class="strike strike3"></div>
            <div class="strike strike4"></div>
            <div class="strike strike5"></div>
            <div class="car-detail spoiler"></div>
            <div class="car-detail back"></div>
            <div class="car-detail center"></div>
            <div class="car-detail center1"></div>
            <div class="car-detail front"></div>
            <div class="car-detail wheel"></div>
            <div class="car-detail wheel wheel2"></div>
        </div>
    </div>
    <!--/.site-preloader-->

    <?php 
    require_once 'header.php'
?>
    <!--/.main-header-->

    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here..." />
                <button id="popup-search-button" type="submit" name="submit">
                    <i class="las la-search"></i>
                </button>
            </form>
            <div class="search-close"><i class="las la-times"></i></div>
        </div>
    </div>
    <!--/.popupsearch-box-->
    <div id="searchbox-overlay"></div>

    <div id="popup-sidebox" class="popup-sidebox">
        <div class="sidebox-content">
            <div class="site-logo">
                <a href="index.html"><img src="assets/img/logo-light.png" alt="logo" /></a>
            </div>
            <p>Everything your taxi business needs is already here! Ridek, a theme
                made for taxi service companies.</p>
            <ul class="sidebox-list">
                <li class="call"><span>Call for ride:</span>5267-214-392</li>
                <li>
                    <span>You can find us at:</span>Halk Street New York, USA - 2386
                </li>
                <li><span>Email now:</span>Info.ridek@mail.com</li>
            </ul>
        </div>
    </div>
    <!--/.popup-sidebox-->
    <div id="sidebox-overlay"></div>

    <section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>About Us!</h4>
                <h2>Feel your journey <br> with <span>Ridek!</span></h2>
                <p>Everything your taxi business <br>needs is already here! </p>
            </div>
        </div>
    </section>
    <!--/.page-header-->

    <section class="about-section padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-6">
                    <div class="about-img">
                        <img class="about-img1" src="assets/img/about-1.png" alt="img">
                        <img class="about-img2" src="assets/img/about-2.png" alt="img">
                        <figure class="round-text"><img src="assets/img/experience-text-round.png" alt="img"></figure>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="section-heading mb-40">
                        <h4><span></span>About Our Company</h4>
                        <h2>Feel the difference and Relaxation with Ridek Taxi Company!</h2>
                        <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies. Our portfolio includes dozens of successfully completed projects of houses of different storeys, with high–quality finishes and good repairs. Book your taxi from anywhare today!</p>
                    </div>
                    <!--/.section-heading-->
                    <ul class="about-info">
                        <li>
                            <img class="owner-thumb" src="assets/img/comment-1.png" alt="thumb">
                            <div class="owner">
                                <h4>Founder - CEO</h4>
                                <img class="signature" src="assets/img/signature.png" alt="signature">
                            </div>
                        </li>
                        <li>
                            <h2><span>Call For Taxi</span><a href="tel:5267214392">5267-214-392</a></h2>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/.about-section-->

    <section class="service-section bg-grey bd-bottom padding">
        <div class="bg-half"></div>
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h4><span></span>What We Offer</h4>
                <h2 class="white">Start your journey with<br>Ridek Taxi Company!</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly master new technologies.</p>
            </div>
            <!--/.section-heading-->
            <div class="swiper-outside">
                <div class="service-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/img/service-1.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">Regular Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/img/service-2.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">Airport Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/img/service-3.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">Luggage Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/img/service-4.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">City Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/img/service-5.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">Business Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div><!-- Carousel Dots -->
                </div>
                <!-- Carousel Arrows -->
                <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
            </div>
        </div>
    </section>
    <!--/.service-section-->

    <section class="testimonial-section bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading mb-10">
                        <h4><span></span>Clients Testimonial</h4>
                        <h2>Ridek Passenger Reviews...</h2>
                        <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master technologies.</p>
                    </div>
                    <div class="swiper-outside testi-pagination">
                        <div class="testimonial-carousel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>Good to have transportation available in places and times it is otherwise hard to find, but the app has always been a bit difficult to use especially how it works or doesnt with large font phone settings.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/img/comment-1.png" alt="author"></div>
                                            <div class="author-info">
                                                <h3>Eredrik Johanson <span>Financial .INC</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>Good to have transportation available in places and times it is otherwise hard to find, but the app has always been a bit difficult to use especially how it works or doesnt with large font phone settings.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/img/comment-1.png" alt="author"></div>
                                            <div class="author-info">
                                                <h3>Eredrik Johanson <span>Financial .INC</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>Good to have transportation available in places and times it is otherwise hard to find, but the app has always been a bit difficult to use especially how it works or doesnt with large font phone settings.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/img/comment-1.png" alt="author"></div>
                                            <div class="author-info">
                                                <h3>Eredrik Johanson <span>Financial .INC</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div><!-- Carousel Dots -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-wrap">
                        <div class="section-heading mb-30">
                            <h4 class="white"><span></span>Why Choose Us!</h4>
                            <h2 class="white">Why Ride with Ridek?</h2>
                            <p class="white">We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master technologies.</p>
                        </div>
                        <!--/.section-heading-->
                        <ul class="ridek-features">
                            <li>
                                <div class="feature-icon">
                                    <i class="las la-gem"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Safe Guarantee</h3>
                                    <p>We successfully cope with tasks of <br> varying complexity!</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-icon">
                                    <i class="las la-taxi"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Fast Pickups</h3>
                                    <p>We successfully cope with tasks of <br> varying complexity!</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-icon">
                                    <i class="las la-tachometer-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Quick Ride</h3>
                                    <p>We successfully cope with tasks of <br> varying complexity!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.testimonial-section-->

    <section class="team-section padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h4><span></span>Lets Go With Us!</h4>
                <h2>Our Expert Drivers</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly master new technologies.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team-1.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                            <h3><a href="driver-details.html">Félix Lengyel</a></h3>
                            <h4>BMW X5 2008</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team-2.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                            <h3><a href="driver-details.html">Henry Nathan</a></h3>
                            <h4>Mercedes‑Benz</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team-3.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                            <h3><a href="driver-details.html">Brandon Larned</a></h3>
                            <h4>Hyundai 2022</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team-4.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                            <h3><a href="driver-details.html">Sasha Hostyn</a></h3>
                            <h4>Toyota XCorola</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.team-section-->

    <section class="cta-section padding">
        <div class="cta-men"></div>
        <div class="container">
            <div class="cta-content">
                <h2>Call Us Now <span>Book Your Taxi</span> <br> For Your Next Ride!</h2>
                <p>We successfully cope with tasks of varying complexity,<br>guarantees and regularly master new technologies.</p>
                <div class="cta-call">
                    <i class="las la-phone-volume"></i>
                    <p><span>Call For Taxi</span><a href="tel:5267214392">5267-214-392</a></p>
                </div>
            </div>
        </div>
    </section>
    <!--/.cta-section-->

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h4><span></span>Recent Posts!</h4>
                <h2>News And Insights!</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly master new technologies.</p>
            </div>
            <!--/.section-heading-->
            <div class="row grid-post">
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="post-card">
                        <div class="post-thumb">
                            <img src="assets/img/post-1.jpg" alt="post" />
                            <a href="blog-details.html" class="post-category">Business</a>
                        </div>
                        <div class="post-content-wrap">
                            <ul class="post-meta">
                                <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                <li><i class="las la-user"></i>Elliot Alderson</li>
                            </ul>
                            <div class="post-content">
                                <h3>
                                    <a href="blog-details.html" class="hover">How to start initiating an startup in few days.</a>
                                </h3>
                                <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                <a href="blog-details.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="post-card">
                        <div class="post-thumb">
                            <img src="assets/img/post-2.jpg" alt="post" />
                            <a href="blog-details.html" class="post-category">Startup</a>
                        </div>
                        <div class="post-content-wrap">
                            <ul class="post-meta">
                                <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                <li><i class="las la-user"></i>Elliot Alderson</li>
                            </ul>
                            <div class="post-content">
                                <h3>
                                    <a href="blog-details.html">Financial experts support help you to find out.</a>
                                </h3>
                                <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                <a href="blog-details.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="post-card">
                        <div class="post-thumb">
                            <img src="assets/img/post-3.jpg" alt="post" />
                            <a href="blog-details.html" class="post-category">Finance</a>
                        </div>
                        <div class="post-content-wrap">
                            <ul class="post-meta">
                                <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                <li><i class="las la-user"></i>Elliot Alderson</li>
                            </ul>
                            <div class="post-content">
                                <h3>
                                    <a href="blog-details.html">Innovative business all over the world.</a>
                                </h3>
                                <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                <a href="blog-details.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.blog-section-->

    <?php 
    require_once 'footer.php'
?>
    <!--/.footer-section-->

    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top">
            <i class="las la-arrow-up"></i>
        </button>
    </div>
    <!--scrollup-->

    <div class="dl-cursor">
        <div class="cursor-icon-holder"><i class="las la-times"></i></div>
    </div>
    <!--/.dl-cursor-->

    <!--jQuery Lib-->
    <script src="assets/js/vendor/jquary-3.6.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="assets/js/vendor/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/swiper.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/venobox.min.js"></script>
    <script src="assets/js/vendor/smooth-scroll.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
