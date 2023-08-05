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

    <title>Hybrid Taxes - Hop in, Lets go.</title>

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
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
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
                <a href="index.html"><img src="assets/img/logo-light.png" alt="logo"></a>
            </div>
            <p>Everything your taxi business needs is already here!</p>
            <ul class="sidebox-list">
                <li class="call"><span>Call for ride:</span>+263-242-777-524</li>
                <li>
                    <span>You can find us at:</span>9139 Southlands Park  Harare, Zimbabwe
                </li>
                <li><span>Email now:</span>Info@hybridtravel&tours.com</li>
            </ul>
        </div>
    </div>
    <!--/.popup-sidebox-->
    <div id="sidebox-overlay"></div>

    <div class="map-wrapper pt-90">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2796.7082446464087!2d31.002703335210573!3d-17.896825432628944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2szw!4v1690810252373!5m2!1sen!2szw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <!-- /#google-map -->

    <section class="contact-section bd-bottom padding">
        <div class="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-details-wrap">
                        <div class="contact-title">
                            <h2>Have Any <span>Questions?</span></h2>
                            <p>Get in touch to discuss your transportation needs today. Please give us a call, drop us an email or fill out the contact form.</p>
                        </div>
                        <ul class="contact-details">
                            <li><i class="fas fa-map-marker-alt"></i>9139 Southlands Park,<br> Waterfalls Harare, Zimbabwe</li>
                            <li><i class="fas fa-envelope"></i>info@hybridtravelandtours.co.zw<br>oceanhybridzim@gmail.com<br>finance@hybridtravelandtours.co.zw</li>
                            <li><i class="fas fa-phone"></i>(+263) 773 555 198 <br>+263 242 610 488-9</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="contact.php" method="post" id="ajax_contact" class="form-horizontal">
                            <div class="contact-title">
                                <h2>Contact With Us! <span></span></h2>
                            </div>
                            <div class="contact-form-group">
                                <div class="form-field">
                                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" required>
                                </div>
                                <div class="form-field">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="form-field message">
                                    <textarea id="message" name="message" cols="30" rows="4" class="form-control" placeholder="Message" required></textarea>
                                </div>
                                <div class="form-field">
                                    <button id="submit" class="default-btn" type="submit">Send Massage</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.contact-section-->

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
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
