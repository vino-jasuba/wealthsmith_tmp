
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>The Wealthsmith Limited</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--=============== css  ===============-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://use.fontawesome.com/db353e48b5.js"></script>
    <link rel="stylesheet" type="text/css" href="http://mikemagero.co.ke/wealthsmith/css/reset.css">
    <link rel="stylesheet" type="text/css" href="http://mikemagero.co.ke/wealthsmith/css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="http://mikemagero.co.ke/wealthsmith/css/idangerous.swiper.css">
    <link rel="stylesheet" type="text/css" href="http://mikemagero.co.ke/wealthsmith/css/magnific-popup.css" media="all">
    <link rel="stylesheet" type="text/css" href="http://mikemagero.co.ke/wealthsmith/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://mikemagero.co.ke/wealthsmith/css/color.css">
    <!-- panel css -->
    <link rel="stylesheet" href="http://mikemagero.co.ke/wealthsmith/css/panel.css" type="text/css" media="screen">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="http://mikemagero.co.ke/wealthsmith/images/logo.png">
    <!--=============== fonts ===============-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,600,800' rel='stylesheet' type='text/css'>
    <!--=============== google map ===============-->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body onLoad="initialize()">
<!--================= main start ================-->
<div id="main" style="overflow-y:hidden !important;">
    <div class="nav-holder">
        <!--logo-->
        <div class="logo-holder">
            <img src="http://mikemagero.co.ke/wealthsmith/images/logo.png" alt="">
        </div>
        <!--nav button-->
        <div class="btn-menu-wrapper elem call-menu transition2">
            <div id="btn-menu">
                        <span class="icon-container">
                        <span class="line line01"></span>
                        <span class="line line02"></span>
                        <span class="line line03"></span>
                        <span class="line line04"></span>
                        </span>
            </div>
        </div>
        <!--template navigation-->
        <nav class="vis">
            <a href="{{ url('/') }}" class="active swp"><span class="transition"></span>Home</a>
            <a href="#" class="swp"><span class="transition"></span>About Us</a>
            <a href="#" class="swp"><span class="transition"></span>Properties</a>
            <a href="#" class="swp"><span class="transition"></span>Events</a>
            <a href="#" class="swp"><span class="transition"></span>Blog</a>
            <a href="#" class="swp"><span class="transition"></span>Gallery</a>
            <a href="#" class="swp"><span class="transition"></span>Contact</a>
        </nav>
        <div class="arrow-nav">
            <a href="#" class="arrow-right transition2"><i class="fa fa-angle-right"></i></a>
            <a href="#" class="arrow-left transition2"><i class="fa fa-angle-left"></i></a>
        </div>
    </div>
    <!--about slide navigation-->
    <!-- <div class="scroll-nav">
        <a href="#about"><i class="fa fa-smile-o"></i><span>About</span></a>
        <a href="#facts"><i class="fa fa-trophy"></i><span>Facts</span></a>
        <a href="#twitteritem"><i class="fa fa-twitter"></i><span>Twitter</span></a>
        <a href="#resume"><i class="fa fa-briefcase"></i><span>Resume</span></a>
        <a href="#testimonials"><i class="fa fa-comments-o"></i><span>Testomonials</span></a>
    </div> -->

    <!--start content-->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!--================= Home start ================-->
            <div class="swiper-slide slide-bg" style="background:url(http://mikemagero.co.ke/wealthsmith/images/foothills.jpg)">
                <!-- Slider  -->
                <div id="slides" class="transition-slider">
                    <ul class="slides-container">
                        <!-- Slide 1 -->
                        <li>
                            <div style="background-image: url('http://mikemagero.co.ke/wealthsmith/images/s1.jpg');"   class="slides-fullscreen-img anim-slides"></div>
                        </li>
                        <!-- Slide 2 -->
                        <li>
                            <div style="background-image: url('http://mikemagero.co.ke/wealthsmith/images/s2.jpg');"   class="slides-fullscreen-img anim-slides"></div>
                        </li>
                        <!-- Slide 3 -->
                        <li>
                            <div style="background-image: url('http://mikemagero.co.ke/wealthsmith/images/s3.jpg');"   class="slides-fullscreen-img anim-slides"></div>
                        </li>
                        <!-- Slide 4 -->
                        <li>
                            <div style="background-image: url('http://mikemagero.co.ke/wealthsmith/images/s4.jpg');"   class="slides-fullscreen-img anim-slides"></div>
                        </li>

                        <li>
                            <div class="slides-fullscreen-img anim-slides"></div>
                        </li>
                    </ul>
                </div><!-- Slider end -->
                <div class="overlay"></div>
                <div class="container">
                        <section class="homeholder no-bg">
                            <div class="content" id="home">
                                <h2 id="property_name" class="elem tetx-rotator"></h2>
                                <div class="home-separator"><span></span></div>
                                <div class="tetx-rotator">
                                    <div class="tlt">
                                        <ul class="texts">
                                            <li id="property_deed"></li>
                                            <li id="property_size"></li>
                                            <li id="property_beacons"></li>
                                            <li id="property_price"></li>
                                        </ul>
                                    </div>
                                </div>
                                <a id="property_link" href="#folio" class="button  transition hide-icon"><i class="fa fa-angle-right transition3"></i><span class="text transition color-bg">View Property</span></a>
                            </div>
                            <div class="clearfix"></div>
                        </section>
                    <footer>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="contact-info">
                                    <ul>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <a href="#" class="transition">0796528157 / 0796528212</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i>
                                            <a href="#" class="transition"> info@thewealthsmith.co.ke</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-home"></i>
                                            <a href="#" class="transition">5th Floor, Westcom Point Westlands Mahiga Mairu Road</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="social-list">
                                    <ul>
                                        <li><a href="https://www.facebook.com/ThewealthsmithKenya/"  target="_blank" class="transition elem"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/wealthsmith_ltd"  target="_blank" class="transition elem"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/the_wealthsmith/"  target="_blank" class="transition elem"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCM218eVUi_C_f-GtSefLjJw/feed?disable_polymer=1"  target="_blank" class="transition elem"><i class="fa fa-youtube-play"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <!--home end-->
