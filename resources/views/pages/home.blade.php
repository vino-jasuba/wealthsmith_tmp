@extends('layouts.master-layout') 

@section ('header') 
    The Wealthsmith Limited 
@stop 

@section ('content')
    <!--============= about start =============-->
    <div class="swiper-slide slide-bg" style="background:url({{asset("images/img2.jpg")}})">
        <div class="container">
            <!--Page-title-->
            <div class="page-title">
                <div class="content">
                    <h2>About <span>Wealthsmith</span></h2>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>
                    <div class="color-separator"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="overlay"></div>
            </div>
            <!--section top about-->
            <section class="gray-bg subab">
                <div class="content">
                    <div class="row-fluid">
                        <div class="col-md-4">
                            <p><strong>Customer Experience</strong></p>
                            <div class="clearfix"></div>
                            <div class="color-separator"></div>
                            <div class="clearfix"></div>
                            <p>You and your friends will love the exceptionally good customer service we offer.</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Teamwork</strong></p>
                            <div class="clearfix"></div>
                            <div class="color-separator"></div>
                            <div class="clearfix"></div>
                            <p>We understand that Talent wins games, but teamwork and intelligence wins championships</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Recognition</strong></p>
                            <div class="clearfix"></div>
                            <div class="color-separator"></div>
                            <div class="clearfix"></div>
                            <p>We are recognized as the ultimate wealth creation real estate firm, and take great pride in that!</p>
                        </div>
                    </div>
                </div>
            </section>
            <!--section about-->
            <section  id="about">
                <div class="left-colum">
                    <!--about slider nav-->
                    <span class="about-button show-about cur"><i class="fa fa-user"></i><span class="tooltip">About Us</span></span>
                    <span class="about-button show-res"><i class="fa fa-rocket"></i><span class="tooltip">Our Strengths</span></span>
                    <span class="about-button show-ser"><i class="fa fa-cogs"></i><span class="tooltip">Why Wealthsmith</span></span>
                    <div class="about-slider-holder">
                        <!--about slider -->
                        <div id="about-slider">
                            <!--1-->
                            <div class="item">
                                <div class="item-box">
                                    <h3>A Story of Wealth</h3>
                                    <div class="clearfix"></div>
                                    <p>We tell a story of wealth creation in Kenya!</p>
                                    <div class="float-separator"></div>
                                    <div class="clearfix"></div>
                                    <p>We have done due diligence, therefore the properties we offer have ready titles, are serviced with roads, water, electricity, have a fence all round and access to public amenities. What’s more, we have the most affordable rates with friendly and flexible financing options.

                                        The properties we have on offer guarantee you great returns as they are located in emerging areas with economic potential for growth. Agriculture is also a lucrative option as the land is virgin and ready to yield a bountiful harvest.   <br><br></p>
                                    <div class="clearfix"></div>
                                    <a href="#" class="button gw float-button content-button  transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">View Proeprties</span></a>
                                </div>
                            </div>
                            <!--2-->
                            <div class="item">
                                <div class="item-box">
                                    <h3>Our Strengths</h3>
                                    <div class="clearfix"></div>
                                    <div class="float-separator"></div>
                                    <div class="clearfix"></div>
                                    <div class="custom-skillbar-holder">
                                        <div class="skillbar-box animaper">
                                            <!-- skill 1-->
                                            <div class="custom-skillbar-title"><span>Property Search</span></div>
                                            <div class="skill-bar-percent">100%</div>
                                            <div class="skillbar-bg" data-percent="95%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                            <!-- skill 2-->
                                            <div class="custom-skillbar-title"><span>New Property Search</span></div>
                                            <div class="skill-bar-percent">98%</div>
                                            <div class="skillbar-bg" data-percent="65%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                            <!-- skill 3-->
                                            <div class="custom-skillbar-title"><span>Customer Experience</span></div>
                                            <div class="skill-bar-percent">97%</div>
                                            <div class="skillbar-bg" data-percent="75%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                            <!-- skill 2-->
                                            <div class="custom-skillbar-title"><span>Efficiency</span></div>
                                            <div class="skill-bar-percent">97%</div>
                                            <div class="skillbar-bg" data-percent="35%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                            <!-- skill 3-->
                                            <div class="custom-skillbar-title"><span>Title Delivery</span></div>
                                            <div class="skill-bar-percent">100%</div>
                                            <div class="skillbar-bg" data-percent="55%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--3-->
                            <div class="item">
                                <div class="item-box">
                                    <h3>Why Wealthsmith</h3>
                                    <div class="clearfix"></div>
                                    <div class="float-separator"></div>
                                    <div class="clearfix"></div>
                                    <div class="services-holder">
                                        <ul>
                                            <!-- services-link -->
                                            <li class="transition2">
                                                <a href="#serv-pop1" data-ser="modal">
                                                    <i class="fa fa-file transition"></i>
                                                    <h5><span>Title Deeds</span></h5>
                                                </a>
                                            </li>
                                            <!-- services-link -->
                                            <li class="transition2">
                                                <a href="#serv-pop2" data-ser="modal">
                                                    <i class="fa fa-podcast transition"></i>
                                                    <h5><span>Beacons</span></h5>
                                                </a>
                                            </li>
                                            <!-- services-link -->
                                            <li class="transition2">
                                                <a href="#serv-pop3" data-ser="modal">
                                                    <i class="fa fa-plug transition"></i>
                                                    <h5><span>Electricity</span></h5>
                                                </a>
                                            </li>
                                            <!-- services-link -->
                                            <li class="transition2">
                                                <a href="#serv-pop4" data-ser="modal">
                                                    <i class="fa fa-credit-card transition"></i>
                                                    <h5><span>Flexible Payment</span></h5>
                                                </a>
                                            </li>
                                            <!-- services-link -->
                                            <li class="transition2">
                                                <a href="#serv-pop5" data-ser="modal">
                                                    <i class="fa fa-briefcase transition"></i>
                                                    <h5><span>Experience</span></h5>
                                                </a>
                                            </li>
                                            <!-- services-link -->
                                            <li class="transition2">
                                                <a href="#serv-pop6" data-ser="modal">
                                                    <i class="fa fa-tint transition"></i>
                                                    <h5><span>Water</span></h5>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- services - box -->
                                        <div class="services-info" id="serv-pop1">
                                            <div class="serv-overlay"></div>
                                            <div class="row-fluid">
                                                <div class="col-md-3">
                                                    <i class="fa fa-file"></i>
                                                    <h2>Title Deeds</h2>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>We deliver title deeds on time and make sure that your plot numbers and all documents are done in the most efficient time possible.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- services - box -->
                                        <div class="services-info" id="serv-pop2">
                                            <div class="serv-overlay"></div>
                                            <div class="row-fluid">
                                                <div class="col-md-3">
                                                    <i class="fa fa-podcast"></i>
                                                    <h2>Beacons</h2>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>We do ensure that all our properties have beacons so that you can see your individual plot in the correct time possible.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- services - box -->
                                        <div class="services-info" id="serv-pop3">
                                            <div class="serv-overlay"></div>
                                            <div class="row-fluid">
                                                <div class="col-md-3">
                                                    <i class="fa fa-plug"></i>
                                                    <h2>Electricity</h2>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>All our properties are fitted with electricity so that you are able to stand building as soon as you complete your land purchase.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- services - box -->
                                        <div class="services-info" id="serv-pop4">
                                            <div class="serv-overlay"></div>
                                            <div class="row-fluid">
                                                <div class="col-md-3">
                                                    <i class="fa fa-credit-card"></i>
                                                    <h2>Flexible Payment</h2>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>We have made it possible for you to own property at your own convenience by paying for your property when you can through our flexible payment periods.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- services - box -->
                                        <div class="services-info" id="serv-pop5">
                                            <div class="serv-overlay"></div>
                                            <div class="row-fluid">
                                                <div class="col-md-3">
                                                    <i class="fa fa-briefcase"></i>
                                                    <h2>Experience</h2>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>we promise you that every purchase period with us is always a convenient one with our relationship managers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- services - box -->
                                        <div class="services-info" id="serv-pop6">
                                            <div class="serv-overlay"></div>
                                            <div class="row-fluid">
                                                <div class="col-md-3">
                                                    <i class="fa fa-tint"></i>
                                                    <h2>Water</h2>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>Water is a key element or a key aspect when purchasing a property. All our properties have boreholes that are connected to your individual piece of plot. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-colum">
                    <!--about image slider -->
                    <div class="about-image">
                        <div class="customNavigation">
                            <a class="btn next-slide transition"><i class="fa fa-angle-right"></i></a>
                            <a class="btn prev-slide transition"><i class="fa fa-angle-left"></i></a>
                        </div>
                        <div class="about-image-slider owl-carousel">
                            <div class="item">
                                <img src="images/foothills.jpg" style="width:100% !important; height:520px !important;" alt="" class="respimg">
                            </div>
                            <div class="item">
                                <img src="images/foothills2.jpg" style="width:100% !important; height:520px !important;" alt="" class="respimg">
                            </div>
                            <div class="item">
                                <img src="images/ngong.jpg" style="width:100% !important; height:520px !important;" alt="" class="respimg">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--section facts-->
            <section id="facts">
                <div class="content">
                    <div  class="facts row-fluid">
                        <ul>
                            <!-- fact 1-->
                            <li  class="col-md-3">
                                <h6> Projects completed</h6>
                                <div class="num">25</div>
                            </li>
                            <!-- fact 2-->
                            <li  class="col-md-3">
                                <h6> Awards Won</h6>
                                <div class="num">5</div>
                            </li>
                            <!-- fact 3-->
                            <li  class="col-md-3">
                                <h6>Title Deeds Delivered</h6>
                                <div class="num">3500+
                                </div>
                            </li>
                            <li class="col-md-3">
                                <h5>Wealthsmith Facts </h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <!--section testimonials-->
            <section id="testimonials">
                <div class="overlay op8"></div>
                <div class="bg" style="background:url({{asset("images/foothills.jpg")}});"></div>
                <div class="content">
                    <div class="testimonials-holder">
                        <h3>Testimonials</h3>
                        <div class="customNavigation">
                            <a class="btn next-slide transition"><i class="fa fa-angle-right"></i></a>
                            <a class="btn prev-slide transition"><i class="fa fa-angle-left"></i></a>
                        </div>
                        <div class="clearfix"></div>
                        <div id="testimonials-slider" class="owl-carousel">
                            <div class="item">
                                <div class=" row-fluid">
                                    <div class="col-md-2">
                                        <div class="testi-image">
                                            <img src="images/avatar.png" alt="" class="respimg">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Jane Karuru</h4>
                                        <p>" Wealthsmith, thanks to your dedication, persistence & marketing knowledge, my home in Kisaju is perfect. "</p>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class=" row-fluid">
                                    <div class="col-md-2">
                                        <div class="testi-image">
                                            <img src="images/avatar.png" alt="" class="respimg">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Mark Mwendwa</h4>
                                        <p>" Wealthsmith, Thank you so much for your great service!  We recommend you all the time!!"</p>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class=" row-fluid">
                                    <div class="col-md-2">
                                        <div class="testi-image">
                                            <img src="images/avatar.png" alt="" class="respimg">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h4>John Khaminwa</h4>
                                        <p>" Marshal from Wealthsmith listened closely to my needs, developed a plan with his team specific to my investment idea and implemented it. That is how i am a proud investor of their Kilimo Poa project"</p>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>



            <!--section resume-->
            <section id="resume">
                <div class="resume-title-holder">
                    <div class="resume-title">
                        <h4>Our Key Achievements</h4>
                    </div>
                    <div class="download-botton-holder">
                        <a href="{{route('downloads')}}" target="_blank" class="button content-button transition hide-icon"><i class="fa fa-download transition2"></i> <span class="text transition color-bg">Download Our Latest Property Bronchure
</span></a>
                    </div>
                </div>
                <div class="resume-container">
                    <div class="resume-bg">
                        <div class="bg transition" style="background:url({{asset("images/kpoa.jpg")}})"></div>
                        <div class="overlay op8 transition"></div>
                    </div>
                    <!-- resume-head -->
                    <div class="resume-head">
                        <h3>KILIMO POA PROJECT</h3>
                        <h4>2017 - Ongoing</h4>
                    </div>
                    <div class="resume-box-holder">
                        <div class="resume-box transition">
                            <div class="resume-item">KILIMO POA PROJECT NANYUKI</div>
                            <div class="clearfix"></div>
                            <h6>Progress and Payout to clients</h6>
                            <div class="clearfix"></div>
                            <div class="color-separator"></div>
                            <div class="clearfix"></div>
                            <p class="align-text">In 2017 we launched our Kilimo Poa project in Nanyuki, Laikipia county inviting clients to acquire over 800 greenhouse. We have since seen harvests done and successfully paid clients as we seek to change the agribusiness sector beyond just farming. </p>
                        </div>
                    </div>
                </div>
                <div class="resume-container">
                    <div class="resume-bg">
                        <div class="bg transition" style="background:url(images/kitengela.jpg)"></div>
                        <div class="overlay op8 transition"></div>
                    </div>
                    <!-- resume-head -->
                    <div class="resume-head">
                        <h3>KITENGELA PROJECT COMPLETION</h3>
                        <h4>2016-2016</h4>
                    </div>
                    <div class="resume-box-holder">
                        <div class="resume-box transition">
                            <div class="resume-item">KITENGELA GREENS PROJECT</div>
                            <div class="clearfix"></div>
                            <h6>Kitengela phase 1 and phase 2</h6>
                            <div class="clearfix"></div>
                            <div class="color-separator"></div>
                            <div class="clearfix"></div>
                            <p class="align-text">In 2016 we launched our Kitengela greens project in Kajiado county. A perfect getaway for the clientele looking to invest not very far from Nairobi. We have since sold out the project in under a month in 2016 and look forward to another project within the area. </p>
                        </div>
                    </div>
                </div>
            </section>




            <!--section clients-->
            <section id="clients">
                <div class="clients-holder">
                    <div id="clients-slider" class="owl-carousel" style="background:#fff; padding:40px 0 20px 0 !important;">
                        <div class="item">
                            <img src="images/nic.png" alt="" class="respimg" style="width:100px !important;">
                        </div>
                        <div class="item">
                            <img src="images/dtb.png" alt="" class="respimg" style="width:100px !important;">
                        </div>
                        <div class="item">
                            <img src="images/equity.jpg" alt="" class="respimg" style="width:100px !important;">
                        </div>
                        <div class="item">
                            <img src="images/barleta.png" alt="" class="respimg" style="width:120px !important;">
                        </div>
                    </div>
                </div>
                <div class="to-top-holder gray-bg"><a href="#" class=""><h4>   Our Partners</h4></a></div>
            </section>
        </div>
    </div>
    <!--about end-->

    <!--============== Portfolio start ================-->
    <div class="swiper-slide slide-bg" style="background:url(images/kisaju.jpg)">
        <div class="container">
            <!--page title-->
            <div class="page-title">
                <div class="content">
                    <h2 id="property"><span>Properties</span></h2>
                    <div class="clearfix"></div>
                    <p>See the amazing properties we have across the country.</p>
                </div>
                <div class="overlay"></div>
            </div>
            <!--portfolio filters-->
            <section id="folio" class="gray-bg">

                <!-- ajax  Page Holder-->
                <div id="project-page-holder">
                    <div class="clearfix"></div>
                    <div id="project-page-data"></div>
                    <div class="clearfix"></div>
                    <div id="project-page-button" class="clearfix">
                        <a id="project_close" class="transition"  href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--portfolio links -->
                <div class="content"><br><br><br>
                    <div class="row-fluid">
                        <h3>Available <span style="color:#ac2a2a !important; ">Properties</span></h3>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div id="folio_container">
                                <!-- 1 project ajax page slider-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_1 mix_all">
                                    <a href="" class="open-project" data-toggle="modal" data-target="#myModal">
                                        <div class="folio-img-holder">
                                            <img src="images/foothills.jpg" class="respimg transition" alt="" title="" style="width:360px !important; height:250px !important;">
                                            <div class="folio-item">
                                                <div class=""></div>
                                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                                    Launch demo modal
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h4>Nanyuki Havens</h4>
                                        <p>Enjoy serenity of Nanyuki Haven today.Located 16KM away from Nanyuki town, 2km from Ol-Pejeta conservancy, 1.7km from Mount Kenya wildlife estate,1km from Sweet waters tented camp Serena, 1.6km from Enaai Golf course.</p><br>

                                        <p>
                                            <span><i class="fa fa-file"></i> Ready Title Deeds</span>&nbsp;
                                            <span><i class="fa fa-map"></i> 1/8 Acre</span>&nbsp;
                                            <span><i class="fa fa-podcast"></i> Beacons Ready</span>
                                        </p><br>

                                        <p class="price"><strong>Ksh 199,000</strong></p>
                                    </div>
                                </div>
                                <!-- 2 project ajax page gallery -->
                                <div class="box grid-2 notvisible open-project-link  mix category_2 mix_all">
                                    <a href="" class="open-project">
                                        <div class="folio-img-holder">
                                            <img src="images/foothills2.jpg" class="respimg transition" alt="" title="" style="width:360px !important; height:250px !important;">

                                            <div class="folio-item">
                                                <div class="folio-overlay"></div>
                                                <span class="fol-but">View</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h4>Pipeline Road Garden Ph 2</h4>
                                        <p>Kitengela Greens phase 1 and Phase 2 are still available. Phase 3 (Sold Out). The land is ideal for agribusiness, speculation, commercial and residential purposes, with fully serviced, well maintained murram roads.</p><br>

                                        <p>
                                            <span><i class="fa fa-file"></i> Ready Title Deeds</span>&nbsp;
                                            <span><i class="fa fa-map"></i> 1/8 Acre</span>&nbsp;
                                            <span><i class="fa fa-podcast"></i> Beacons Ready</span>
                                        </p><br>

                                        <p class="price"><strong>Ksh 600,000</strong></p>
                                    </div>
                                </div>
                                <!-- 3 project ajax page iframe-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_3 mix_all">
                                    <div class="folio-img-holder">
                                        <img src="images/ngong.jpg" class="respimg transition" alt="" title="" style="width:360px !important; height:250px !important;">

                                        <div class="folio-item">
                                            <div class="folio-overlay"></div>
                                            <span class="fol-but">View</span>
                                        </div>
                                    </div>
                                    </a>
                                    <div class="box-details">
                                        <h4>Ngong View Phase 1</h4>
                                        <p>Kitengela Greens phase 1 and Phase 2 are still available. Phase 3 (Sold Out). The land is ideal for agribusiness, speculation, commercial and residential purposes, with fully serviced, well maintained murram roads.</p><br>

                                        <p>
                                            <span><i class="fa fa-file"></i> Ready Title Deeds</span>&nbsp;
                                            <span><i class="fa fa-map"></i> 1/8 Acre</span>&nbsp;
                                            <span><i class="fa fa-podcast"></i> Beacons Ready</span>
                                        </p><br>

                                        <p class="price"><strong>Ksh 600,000</strong></p>
                                    </div>
                                </div>

                                <!-- 4 project youtube  video-->
                                <div class="box  grid-2 notvisible  mix category_2 mix_all">
                                    <a href="" class="popup-youtube">
                                        <div class="folio-img-holder">
                                            <img src="images/fhills1.jpg" class="respimg transition" alt="" title="" style="width:360px !important; height:250px !important;">

                                            <div class="folio-item">
                                                <div class="folio-overlay"></div>
                                                <span class="fol-but">View</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h4>Ngong View Phase 1</h4>
                                        <p>Kitengela Greens phase 1 and Phase 2 are still available. Phase 3 (Sold Out). The land is ideal for agribusiness, speculation, commercial and residential purposes, with fully serviced, well maintained murram roads.</p><br>

                                        <p>
                                            <span><i class="fa fa-file"></i> Ready Title Deeds</span>&nbsp;
                                            <span><i class="fa fa-map"></i> 1/8 Acre</span>&nbsp;
                                            <span><i class="fa fa-podcast"></i> Beacons Ready</span>
                                        </p><br>

                                        <p class="price"><strong>Ksh 600,000</strong></p>
                                    </div>
                                </div>
                                <!-- 5 project vimeo video-->
                                <div class="box grid-2 notvisible  mix category_3 mix_all">
                                    <a href="" class="popup-vimeo">
                                        <div class="folio-img-holder">

                                            <img src="images/kisaju.jpg" class="respimg transition" alt="" title="" style="width:360px !important; height:250px !important;">
                                            <div class="folio-item">
                                                <div class="folio-overlay"></div>
                                                <span class="fol-but">View</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h4>Kisaju Gardens</h4>
                                        <p>Kisaju gardens is a beautifully gated community, with 2 and 3 bedroom uniform housing units (bungalows) with a swimming pool, basketball court, jogging track, electricity, water on site and a commercial center .The property also has a......</p><br>

                                        <p>
                                            <span><i class="fa fa-file"></i> Ready Title Deeds</span>&nbsp;
                                            <span><i class="fa fa-map"></i> 1/8 Acre</span>&nbsp;
                                            <span><i class="fa fa-podcast"></i> Beacons Ready</span>
                                        </p><br>

                                        <p class="price"><strong>Ksh 3,000,000</strong></p>
                                    </div>
                                </div>
                                <!-- 6 project ajax modal-->
                                <div class="box grid-2 notvisible  mix category_1 mix_all">
                                    <a href="projects/modal.html" class="popup-with-move-anim">
                                        <div class="folio-img-holder">
                                            <img src="images/kili.jpg" class="respimg transition" alt="" title="" style="width:360px !important; height:250px !important;">

                                            <div class="folio-item">
                                                <div class="folio-overlay"></div>
                                                <span class="fol-but">View</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h4>Kilimo Poa</h4>
                                        <p>Project locationWe are undertaking the Agribusiness Project in Nanyuki. The plots are located at the Foothills of Nanyuki and Lolldaiga hills with a view of both Mt. Kenya and Lolldaiga Hills. Its approximately 17 Km from Nanyuki..</p><br>

                                        <p>
                                            <span><i class="fa fa-file"></i> Ready Title Deeds</span>&nbsp;
                                            <span><i class="fa fa-map"></i> 1/8 Acre</span>&nbsp;
                                            <span><i class="fa fa-podcast"></i> Beacons Ready</span>
                                        </p><br>

                                        <p class="price"><strong>Ksh 785,000</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br><br>

                    <div class="row-fluid">
                    </div>
                    <div class="row-fluid">
                        <h3>Sold Out <span style="color:#ac2a2a !important; ">Properties</span></h3>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div id="folio_container">
                                <!-- 1 project ajax page slider-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_1 mix_all">
                                    <a href="projects/project-ajax.html" class="open-project">
                                        <div class="folio-img-holder">
                                            <img src="images/foothills.jpg" class="respimg transition" alt="" title="" style="width:360px !important; height:250px !important;">
                                            <div class="folio-item">
                                                <div class="folio-overlay"></div>
                                                <span class="fol-but">View</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h4>Nanyuki Havens</h4>
                                        <p>Enjoy serenity of Nanyuki Haven today.Located 16KM away from Nanyuki town, 2km from Ol-Pejeta conservancy, 1.7km from Mount Kenya wildlife estate,1km from Sweet waters tented camp Serena, 1.6km from Enaai Golf course.</p><br>

                                        <p>
                                            <span><i class="fa fa-file"></i> Ready Title Deeds</span>&nbsp;
                                            <span><i class="fa fa-map"></i> 1/8 Acre</span>&nbsp;
                                            <span><i class="fa fa-podcast"></i> Beacons Ready</span>
                                        </p><br>

                                        <p class="price"><strong>Ksh 199,000</strong></p>
                                    </div>
                                </div>
                                <!-- 2 project ajax page gallery -->
                                <div class="box grid-2 notvisible open-project-link  mix category_2 mix_all">
                                    <a href="projects/project-ajax3.html" class="open-project">
                                        <div class="folio-img-holder">
                                            <img src="images/foothills2.jpg" class="respimg transition" alt="" title="" style="width:360px !important; height:250px !important;">

                                            <div class="folio-item">
                                                <div class="folio-overlay"></div>
                                                <span class="fol-but">View</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h4>Pipeline Road Garden Ph 2</h4>
                                        <p>Kitengela Greens phase 1 and Phase 2 are still available. Phase 3 (Sold Out). The land is ideal for agribusiness, speculation, commercial and residential purposes, with fully serviced, well maintained murram roads.</p><br>

                                        <p>
                                            <span><i class="fa fa-file"></i> Ready Title Deeds</span>&nbsp;
                                            <span><i class="fa fa-map"></i> 1/8 Acre</span>&nbsp;
                                            <span><i class="fa fa-podcast"></i> Beacons Ready</span>
                                        </p><br>

                                        <p class="price"><strong>Ksh 600,000</strong></p>
                                    </div>
                                </div>
                                <!-- 3 project ajax page iframe-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_3 mix_all">
                                    <div class="folio-img-holder">
                                        <img src="images/ngong.jpg" class="respimg transition" alt="" title="" style="width:360px !important; height:250px !important;">

                                        <div class="folio-item">
                                            <div class="folio-overlay"></div>
                                            <span class="fol-but">View</span>
                                        </div>
                                    </div>
                                    </a>
                                    <div class="box-details">
                                        <h4>Ngong View Phase 1</h4>
                                        <p>Kitengela Greens phase 1 and Phase 2 are still available. Phase 3 (Sold Out). The land is ideal for agribusiness, speculation, commercial and residential purposes, with fully serviced, well maintained murram roads.</p><br>

                                        <p>
                                            <span><i class="fa fa-file"></i> Ready Title Deeds</span>&nbsp;
                                            <span><i class="fa fa-map"></i> 1/8 Acre</span>&nbsp;
                                            <span><i class="fa fa-podcast"></i> Beacons Ready</span>
                                        </p><br>

                                        <p class="price"><strong>Ksh 600,000</strong></p>
                                    </div>
                                </div>

                                <!-- 4 project youtube  video-->
                                <div class="box  grid-2 notvisible  mix category_2 mix_all">
                                    <a href="" class="popup-youtube">
                                        <div class="folio-img-holder">
                                            <img src="images/fhills1.jpg" class="respimg transition" alt="" title="" style="width:360px !important; height:250px !important;">

                                            <div class="folio-item">
                                                <div class="folio-overlay"></div>
                                                <span class="fol-but">View</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h4>Ngong View Phase 1</h4>
                                        <p>Kitengela Greens phase 1 and Phase 2 are still available. Phase 3 (Sold Out). The land is ideal for agribusiness, speculation, commercial and residential purposes, with fully serviced, well maintained murram roads.</p><br>

                                        <p>
                                            <span><i class="fa fa-file"></i> Ready Title Deeds</span>&nbsp;
                                            <span><i class="fa fa-map"></i> 1/8 Acre</span>&nbsp;
                                            <span><i class="fa fa-podcast"></i> Beacons Ready</span>
                                        </p><br>

                                        <p class="price"><strong>Ksh 600,000</strong></p>
                                    </div>
                                </div>
                                <!-- 5 project vimeo video-->
                                <div class="box grid-2 notvisible  mix category_3 mix_all">
                                    <a href="//player.vimeo.com/video/50510424" class="popup-vimeo">
                                        <div class="folio-img-holder">

                                            <img src="images/kisaju.jpg" class="respimg transition" alt="" title="" style="width:360px !important; height:250px !important;">
                                            <div class="folio-item">
                                                <div class="folio-overlay"></div>
                                                <span class="fol-but">View</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h4>Kisaju Gardens</h4>
                                        <p>Kisaju gardens is a beautifully gated community, with 2 and 3 bedroom uniform housing units (bungalows) with a swimming pool, basketball court, jogging track, electricity, water on site and a commercial center .The property also has a......</p><br>

                                        <p>
                                            <span><i class="fa fa-file"></i> Ready Title Deeds</span>&nbsp;
                                            <span><i class="fa fa-map"></i> 1/8 Acre</span>&nbsp;
                                            <span><i class="fa fa-podcast"></i> Beacons Ready</span>
                                        </p><br>

                                        <p class="price"><strong>Ksh 3,000,000</strong></p>
                                    </div>
                                </div>
                                <!-- 6 project ajax modal-->
                                <div class="box grid-2 notvisible  mix category_1 mix_all">
                                    <a href="projects/modal.html" class="popup-with-move-anim">
                                        <div class="folio-img-holder">
                                            <img src="images/kili.jpg" class="respimg transition" alt="" title="" style="width:360px !important; height:250px !important;">

                                            <div class="folio-item">
                                                <div class="folio-overlay"></div>
                                                <span class="fol-but">View</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h4>Kilimo Poa</h4>
                                        <p>Project locationWe are undertaking the Agribusiness Project in Nanyuki. The plots are located at the Foothills of Nanyuki and Lolldaiga hills with a view of both Mt. Kenya and Lolldaiga Hills. Its approximately 17 Km from Nanyuki..</p><br>

                                        <p>
                                            <span><i class="fa fa-file"></i> Ready Title Deeds</span>&nbsp;
                                            <span><i class="fa fa-map"></i> 1/8 Acre</span>&nbsp;
                                            <span><i class="fa fa-podcast"></i> Beacons Ready</span>
                                        </p><br>

                                        <p class="price"><strong>Ksh 785,000</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--section subscribe-->
            <section id="subscribe">
                <div class="overlay"></div>
                <div class="bg bg-parallax" style="background:url(images/foothills.jpg)"></div>
                <div class="content">
                    <div class="subscribe-holder">
                        <h3>Subscribe</h3>
                        <div class="row-fluid">
                            <div class="span4">
                                <p>Be sure to leave your email address and we shall call you with more information about our products. </p>
                            </div>
                           @include('partials.mail_form')
                        </div>
                    </div>
                </div>
            </section>
            <!--section order-->
            <section id="order" class="gray-bg">
                <div class="content">
                    <h3>LETS TALK</h3>
                    <p>Do you want to converse with us online now? Tell us what you would like us to do for you here!  </p>
                    <div class="clearfix"></div>
                    <a href="#" class="button go-contact  content-button transition hide-icon"><i class="fa fa-angle-right transition2"></i> <span class="text transition color-bg">Order</span></a>
                </div>
            </section>
        </div>
    </div>
    <!--portfolio  end-->
    <!--============== Contact start ================-->
    <div class="swiper-slide slide-bg single-page-title-holder" style="background:url(images/img3.jpg)">
        <div class="container">
            <!--page title-->
            <div class="page-title">
                <div class="content">
                    <h2>Events</h2>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="color-separator"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="overlay"></div>
            </div>
            <!--section contact top-->
            <div class="single-page">
                <div class="content">
                    <div class="row-fluid">
                        <div class="col-md-12">
                            <div id="folio_container">
                                <div class="post">
                                    <div class="box grid-2 notvisible open-project-link mix category_1 mix_all">
                                        <a href="" class="open_project" target="_blank">
                                            <div class="folio-img-holder">
                                                <img src="{{asset('storage/nanyuki_royale.jpg')}}" class="transition custom-image" width="360" height="250" style="width: 360px !important; height: 250px !important;" alt="">
                                            </div>
                                        </a>
                                        <div class="post-title">
                                            <div class=" clearfix"></div>
                                            <h3><a href="#" class="fadelink">Nanyuki Royale Site Visit</a></h3>
                                        </div>
                                        <div class="box-details">
                                            <h3>All roads lead to Nanyuki Royale this Saturday 2 nd June 2018 for the Royale site visit.</h3>
                                        </div>
                                        <div>
                                            <a href="blog-single.html" class="button  float-button content-button  transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">Read more</span></a>
                                        </div>
                                    </div>


                                <div class="box grid-2 notvisible open-project-link mix category_1 mix_all">
                                    <a href="" class="open_project" target="_blank">
                                        <div class="folio-img-holder">
                                            <img src="{{asset('storage/ngong_site_view.jpg')}}" class="transition custom-image" width="360" height="250" style="width: 360px !important; height: 250px !important;" alt="">
                                        </div>
                                    </a>
                                    <div class="post-title">
                                        <div class=" clearfix"></div>
                                        <h3><a href="#" class="fadelink">Nanyuki Royale Site Visit</a></h3>
                                    </div>
                                    <div class="box-details">
                                        <h3>All roads lead to Nanyuki Royale this Saturday 2 nd June 2018 for the Royale site visit.</h3>
                                    </div>
                                    <div>
                                        <a href="blog-single.html" class="button  float-button content-button  transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">Read more</span></a>
                                    </div>
                                </div>



                                <div class="box grid-2 notvisible open-project-link mix category_1 mix_all">
                                    <a href="" class="open_project" target="_blank">
                                        <div class="folio-img-holder">
                                            <img src="{{asset('storage/nanyuki_foothills.jpg')}}" class="transition custom-image" width="360" height="250" style="width: 360px !important; height: 250px !important;" alt="">
                                        </div>
                                    </a>
                                    <div class="post-title">
                                        <div class=" clearfix"></div>
                                        <h3><a href="#" class="fadelink">Nanyuki Royale Site Visit</a></h3>
                                    </div>
                                    <div class="box-details">
                                        <h3>All roads lead to Nanyuki Royale this Saturday 2 nd June 2018 for the Royale site visit.</h3>
                                    </div>
                                    <div>
                                        <a href="blog-single.html" class="button  float-button content-button  transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">Read more</span></a>
                                    </div>
                                </div>
                            </div>
                                {{----}}
                            {{--<!-- Standard Post -->--}}
                            {{--<div class="post">--}}
                                {{--<div class="post-media">--}}
                                    {{--<a href="blog-single.html" class="fadelink">--}}
                                        {{--<img src="{{asset('storage/nanyuki_royale.jpg')}}" class="transition custom-image" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="post-title">--}}

                                    {{--<div class=" clearfix"></div>--}}
                                    {{--<h3><a href="#" class="fadelink">Nanyuki Royale Site Visit</a></h3>--}}
                                {{--</div>--}}
                                {{--<div class="post-body">--}}
                                    {{--<p>All roads lead to Nanyuki Royale this Saturday 2 nd June 2018 for the Royale site visit.</p>--}}
                                    {{--<div>--}}
                                        {{--<a href="blog-single.html" class="button  float-button content-button  transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">Read more</span></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="col-md-4">--}}
                            {{--<!-- Standard Post -->--}}
                            {{--<div class="post">--}}
                                {{--<div class="post-media">--}}
                                    {{--<a href="blog-single.html" class="fadelink">--}}
                                        {{--<img  src="{{asset('storage/ngong_site_view.jpg')}}" class="custom-image transition" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="post-title">--}}

                                    {{--<div class=" clearfix"></div>--}}
                                    {{--<h3><a href="#" class="fadelink">Ngong View Site Visit</a></h3>--}}
                                {{--</div>--}}
                                {{--<div class="post-body">--}}
                                    {{--<p>We are at it again this Saturday 2 nd June 2018 for the Ngong View Site visit.</p>--}}
                                    {{--<div>--}}
                                        {{--<a href="blog-single.html" class="button  float-button content-button  transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">Read more</span></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="col-md-4">--}}
                            {{--<!-- Standard Post -->--}}
                            {{--<div class="post">--}}
                                {{--<div class="post-media">--}}
                                    {{--<a href="blog-single.html" class="fadelink">--}}
                                        {{--<img src="{{asset('storage/nanyuki_foothills.jpg')}}" class="transition custom-image" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="post-title">--}}

                                    {{--<div class=" clearfix"></div>--}}
                                    {{--<h3><a href="#" class="fadelink">Nanyuki Foothills Site Visit </a></h3>--}}
                                {{--</div>--}}
                                {{--<div class="post-body">--}}
                                    {{--<p>Mark the date! Saturday 2 nd June 2018 for the Nanyuki Foothills site visit.</p>--}}
                                    {{--<div>--}}
                                        {{--<a href="blog-single.html" class="button  float-button content-button  transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">Read more</span></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div><br><br>

            <!--section subscribe-->
            <section id="subscribe">
                <div class="overlay"></div>
                <div class="bg bg-parallax" style="background:url(images/foothills.jpg)"></div>
                <div class="content">
                    <div class="subscribe-holder">
                        <h3>Subscribe</h3>
                        <div class="row-fluid">
                            <div class="span4">
                                <p>Be sure to leave your email address and we shall call you with more information about our products. </p>
                            </div>
                            @include('partials.mail_form')
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
        </div>
    </div>
    <br><br>



    <div class="swiper-slide slide-bg single-page-title-holder" style="background:url(images/blog2.jpg)">
        <div class="container">
            <!--start content-->
            <div class="wrapper">
                <div class="single-page-title-holder">
                    <div class="single-page-bg" style="background-image:url(images/ngong.jpg)"></div>
                    <div class="page-title">
                        <div class="content">
                            <h2><span>Blog</span></h2>
                            <div class="clearfix"></div>
                            <p>Our mission is to create wealth through selling prime land for homes, farming, development and investment purposes.One of the unique features we offer is convenience. We have done due diligence, therefore the properties we offer have ready titles, are serviced with roads, water, electricity, have a fence all round and access to public amenities.</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="single-page">
                    <div class="content">
                        <div class="row-fluid">
                            <div class="col-md-8">
                                <!-- Standard Post -->
                                <div class="post">
                                    <div class="post-media">
                                        <a href="blog-single.html" class="fadelink">
                                            <img src="images/b1.jpg" class="respimg transition" alt="">
                                        </a>
                                    </div>
                                    <div class="post-title">
                                        <div class="post-meta">
                                            <ul>
                                                <li>May 3</li>
                                                <li>22 com</li>
                                                <li><i class="fa fa-heart-o"></i> 151</li>
                                                <li>
                                                    <h6>Posted by <a href="#">Admin</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=" clearfix"></div>
                                        <h3><a href="blog-single.html" class="fadelink">7 Mistakes to avoid as a First-time Home-buyer </a></h3>
                                    </div>
                                    <div class="post-body">
                                        <p>The residential sector has been thriving supported by factors such as the rapidly growing middle class, which means increased disposable income to afford people their own homes. In addition, there’s a renewed focus on affordable housing, from both the public and private sectors, which means that most Kenyans from the lower middle class will be able to purchase houses.... </p>
                                        <div>
                                            <a href="blog-single.html" class="button  float-button content-button  transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">Read more</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Standard Post -->
                                <div class="post">
                                    <div class="post-media">
                                        <a href="blog-single.html" class="fadelink">
                                            <img src="images/b2.jpg" class="respimg transition" alt="">
                                        </a>
                                    </div>
                                    <div class="post-title">
                                        <div class="post-meta">
                                            <ul>
                                                <li>May 4</li>
                                                <li>22 com</li>
                                                <li><i class="fa fa-heart-o"></i> 151</li>
                                                <li>
                                                    <h6>Posted by <a href="#">Admin</a> </h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=" clearfix"></div>
                                        <h3><a href="blog-single.html">Essential considerations when designing your dream home </a></h3>
                                    </div>
                                    <div class="post-body">
                                        <p>We have all been looking to live in that home that fits our dreams and aspirations. The house that reflects our character, our needs, and desires. Our heavenly abode, that suits our needs and wants. We shall have a look at some of the important steps in realizing this highly coveted prize, a home:</p>
                                        <div>
                                            <a href="blog-single.html" class="button  float-button content-button  transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">Read more</span></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Standard Post -->
                                <div class="post">
                                    <div class="post-media">
                                        <a href="blog-single.html" class="fadelink">
                                            <img src="images/b3.jpg" class="respimg transition" alt="">
                                        </a>
                                    </div>
                                    <div class="post-title">
                                        <div class="post-meta">
                                            <ul>
                                                <li>May 5</li>
                                                <li>22 com</li>
                                                <li><i class="fa fa-heart-o"></i> 151</li>
                                                <li>
                                                    <h6>Posted by <a href="#">Maruis</a> / <a href="#">Standart</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=" clearfix"></div>
                                        <h3><a href="blog-single.html">Size Matters: The Perfect Sized House </a></h3>
                                    </div>
                                    <div class="post-body">
                                        <p>Buying or building a house is a thrilling experience!
                                            The smell of freshly painted walls, different surrounding and having complete ownership of a house is a pretty exciting feeling. Do you sit down and think about the size of a house in regards to your family or needs when planning to buy a house or building one?
                                        </p>
                                        <div>
                                            <a href="blog-single.html" class="button gw float-button content-button  transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">Read more</span></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Standard Post -->
                                <div class="post">
                                    <div class="post-media">
                                        <a href="blog-single.html" class="fadelink">
                                            <img src="images/b4.jpg" class="respimg transition" alt="">
                                        </a>
                                    </div>
                                    <div class="post-title">
                                        <div class="post-meta">
                                            <ul>
                                                <li>May 6</li>
                                                <li>22 com</li>
                                                <li><i class="fa fa-heart-o"></i> 151</li>
                                                <li>
                                                    <h6>Posted by <a href="#">Admin</a> </h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=" clearfix"></div>
                                        <h3><a href="blog-single.html">Property Valuation in Kenya </a></h3>
                                    </div>
                                    <div class="post-body">
                                        <p>Valuation is an art or science of estimating the value of a particular interest in a property for a specific purpose at a particular moment in time taking into account all features of the property and also considering all the other market factors. The minimum cost for valuation fees is KSh. 15,000 in Kenya.
                                            Jumia House sat down with Michael Otieno, a Valuer at Kenya Valuers and Estates Agents. Below are the excerpts:</p>
                                        <div>
                                            <a href="blog-single.html" class="button gw float-button content-button  transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">Read more</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="pagination-holder">
                                    <div class="pagination">
                                        <a href="#" class="prevposts-link transition"><i class="fa fa-chevron-left"></i></a>
                                        <a href="#" class="blog-page transition">1</a>
                                        <a href="#" class="blog-page current-page transition">2</a>
                                        <a href="#" class="blog-page transition">3</a>
                                        <a href="#" class="blog-page transition">4</a>
                                        <a href="#" class="nextposts-link transition"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="sidebar">
                                    <!-- search widget -->
                                    <div class="widget clearfix">
                                        <form action="#" class="searh-holder">
                                            <input name="se" id="se" type="text" class="search" placeholder="Search.." value="Search..." />
                                            <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                                        </form>
                                    </div>
                                    <!-- categories widget -->
                                    <div class="widget">
                                        <h4>CATEGORIES</h4>
                                        <ul>
                                            <li class="cat-item"><a href="#">Value Added Plots</a> (3)</li>
                                            <li class="cat-item"><a href="#">Buy and Build</a> (6)</li>
                                            <li class="cat-item"><a href="#">Agribusiness</a> (12)</li>
                                            <li class="cat-item"><a href="#">Finance</a> (4)</li>
                                        </ul>
                                    </div>
                                    <!-- tagcloud widget -->
                                    <div class="widget">
                                        <h4>TAGS</h4>
                                        <div class="tagcloud">
                                            <a href='#' class="transition link">Property</a>
                                            <a href='#' class="transition link">Kenya</a>
                                            <a href='#' class="transition link">Home Design</a>
                                            <a href='#' class="transition link">Purchase</a>
                                        </div>
                                    </div>
                                    <!-- flickr widget -->
                                    <div class="widget">
                                        <h4>Convenience</h4>
                                        <p>We have done due diligence, therefore the properties we offer have ready titles, are serviced with roads, water, electricity, have a fence all round and access to public amenities.
                                        </p>
                                    </div>
                                    <!-- archives widget -->
                                    <div class="widget widget-archive">
                                        <h4>Archives</h4>
                                        <ul>
                                            <li><a href="#">April 2018</a></li>
                                            <li><a href="#">April 2018</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--section subscribe-->
            <section id="subscribe">
                <div class="overlay"></div>
                <div class="bg bg-parallax" style="background:url(images/foothills.jpg)"></div>
                <div class="content">
                    <div class="subscribe-holder">
                        <h3>Subscribe</h3>
                        <div class="row-fluid">
                            <div class="span4">
                                <p>Be sure to leave your email address and we shall call you with more information about our products. </p>
                            </div>
                            @include('partials.mail_form')
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="swiper-slide slide-bg single-page-title-holder" style="background:url({{asset('storage/8316.jpg')}})">
        <div class="container">
            <!--page title-->
            <div class="page-title">
                <div class="content">
                    <h2>Gallery</h2>
                    <div class="clearfix"></div>
                    <P>See us in action as we offer you the best experience while purchasing property! </P>
                    <div class="clearfix"></div>
                    <div class="color-separator"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="overlay"></div>
            </div>
            <!--section contact top-->
            <section id="folio" class="gray-bg">
                <!-- ajax  Page Holder-->
                <div id="project-page-holder">
                    <div class="clearfix"></div>
                    <div id="project-page-data"></div>
                    <div class="clearfix"></div>
                    <div id="project-page-button" class="clearfix">
                        <a id="project_close" class="transition"  href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--portfolio links -->
                <div class="content"><br><br>
                    <div class="clearfix"></div>
                    <div class="row-fluid">
                        <h3 style="color:#ac2a2a !important;">Wealth Pictorial</h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row-fluid">
                        <div class="col-md-12">
                            <div id="folio_container">

                                <!-- 1 project ajax page slider-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_1 mix_all">
                                    <a href="" class="open-project" target="_blank">
                                        <div class="folio-img-holder">
                                            <img src="images/clients.jpg" alt="" width="360" height="250" style="width: 360px !important; height: 250px !important;">
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h3>Kilimo Poa Open Day</h3>
                                    </div>
                                </div>

                                <!-- 1 project ajax page slider-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_1 mix_all">
                                    <a href="" class="open-project" target="_blank">
                                        <div class="folio-img-holder">
                                            <img src="images/garden.jpg" alt="" width="360" height="250" style="width: 360px !important; height: 250px !important;">
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h3>Nanyuki Haven open day</h3>
                                    </div>
                                </div>

                                <!-- 1 project ajax page slider-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_1 mix_all">
                                    <a href="" class="open-project" target="_blank">
                                        <div class="folio-img-holder">
                                            <img src="images/brief.jpg" alt="" width="360" height="250" style="width: 360px !important; height: 250px !important;">
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h3>Kitengela Open Day</h3>
                                    </div>
                                </div>

                                <!-- 1 project ajax page slider-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_1 mix_all">
                                    <a href="" class="open-project" target="_blank">
                                        <div class="folio-img-holder">
                                            <img src="images/golf.jpg" alt="" width="360" height="250" style="width: 360px !important; height: 250px !important;">
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h3>Jumia Golf Tournament</h3>
                                    </div>
                                </div>

                                <!-- 1 project ajax page slider-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_1 mix_all">
                                    <a href="" class="open-project" target="_blank">
                                        <div class="folio-img-holder">
                                            <img src="images/golf.jpg" alt="" width="360" height="250" style="width: 360px !important; height: 250px !important;">
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h3>Woodlands Nakuru Open Day</h3>
                                    </div>
                                </div>

                                <!-- 2 project ajax page gallery -->
                                <div class="box grid-2 notvisible open-project-link  mix category_2 mix_all">
                                    <a href="" class="open-project">
                                        <div class="folio-img-holder">
                                            <img src="images/4.jpg" alt="" width="360" height="250" style="width: 360px !important; height: 250px !important;">
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h3>Kisaju Open Day</h3>
                                    </div>
                                </div>

                                <!-- 3 project ajax page iframe-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_3 mix_all">
                                    <a href="" class="open-project">
                                        <div class="folio-img-holder">
                                            <img src="images/img3.jpg" alt="" width="360" height="250" style="width: 360px !important; height: 250px !important;">
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h3>Kenya Homes Expo</h3>
                                    </div>
                                </div>

                                <!-- 2 project ajax page gallery -->
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="row-fluid">
                        <h3 style="color:#ac2a2a !important;">Wealth Videos</h3>
                    </div>

                    <div class="row-fluid">
                        <div class="col-md-12">
                            <div id="folio_container">
                                <!-- 1 project ajax page slider-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_1 mix_all">
                                    <a href="" class="open-project" target="_blank">
                                        <div class="folio-img-holder">
                                            <iframe width="360" height="250" src="https://www.youtube.com/embed/JBpRdEdWe68" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </a>

                                </div>
                                <!-- 2 project ajax page gallery -->
                                <div class="box grid-2 notvisible open-project-link  mix category_2 mix_all">
                                    <a href="" class="open-project">
                                        <div class="folio-img-holder">
                                            <iframe width="360" height="250" src="https://www.youtube.com/embed/SMBzFxTEVok" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </a>

                                </div>
                                <!-- 3 project ajax page iframe-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_3 mix_all">
                                    <a href="" class="open-project">
                                        <div class="folio-img-holder">
                                            <iframe width="360" height="250" src="https://www.youtube.com/embed/8rYK3rPZc_U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </a>

                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="col-md-12">
                            <div id="folio_container">
                                <!-- 3 project ajax page iframe-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_3 mix_all">
                                    <a href="" class="open-project">
                                        <div class="folio-img-holder">
                                            <iframe width="360" height="250" src="https://www.youtube.com/embed/geA44c3Fv6U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </a>

                                </div>

                                <!-- 3 project ajax page iframe-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_3 mix_all">
                                    <a href="" class="open-project">
                                        <div class="folio-img-holder">
                                            <iframe width="360" height="250" src="https://www.youtube.com/embed/OAKiBCHZVBM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </a>

                                </div>
                                <!-- 1 project ajax page slider-->
                                <div class="box grid-2 notvisible  open-project-link  mix category_1 mix_all">
                                    <a href="" class="open-project" target="_blank">
                                        <div class="folio-img-holder">
                                            <iframe width="360" height="250" src="https://www.youtube.com/embed/_Pz-tHkjaZ0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </a>

                                </div>
                                <!-- 2 project ajax page gallery -->
                                <!-- <div class="box grid-2 notvisible open-project-link  mix category_2 mix_all">
                                    <a href="" class="open-project">
                                        <div class="folio-img-holder">
                                            <iframe width="360" height="250" src="https://www.youtube.com/embed/SMBzFxTEVok" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h3>Kisaju Open Day</h3>
                                    </div>
                                </div> -->
                                <!-- 3 project ajax page iframe-->
                                <!-- <div class="box grid-2 notvisible  open-project-link  mix category_3 mix_all">
                                    <a href="" class="open-project">
                                        <div class="folio-img-holder">
                                            <iframe width="360" height="250" src="https://www.youtube.com/embed/SMBzFxTEVok" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </a>
                                    <div class="box-details">
                                        <h3>Kenya Homes Expo</h3>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--section subscribe-->
            <section id="subscribe">
                <div class="overlay"></div>
                <div class="bg bg-parallax" style="background:url(images/foothills.jpg)"></div>
                <div class="content">
                    <div class="subscribe-holder">
                        <h3>Subscribe</h3>
                        <div class="row-fluid">
                            <div class="span4">
                                <p>Be sure to leave your email address and we shall call you with more information about our products. </p>
                            </div>
                            @include('partials.mail_form')
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>




    <!--============== Contact start ================-->
    <div class="swiper-slide slide-bg" style="background:url(images/blog1.jpg)">
        <div class="container">
            <!--page title-->
            <div class="page-title">
                <div class="content">
                    <h2><span>Contacts</span></h2>
                    <div class="clearfix"></div>
                    <p>Contact us today and get the best deals in property! </p>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="overlay"></div>
            </div>
            <!--section contact top-->
            <section id="contact">
                <div class="contact-header">
                    <h3>GET IN TOUCH</h3>
                    <p></p>
                </div>
                <div class="left-colum">
                    <!--contact form-->
                    <div id="contact-form">
                        <div id="message"></div>
                        <form method="post" action="{{route('message')}}" name="contactform" id="contactform">
                            {{csrf_field()}}
                            <input name="name" type="text" id="name"  class="inputForm2"  value="{{old('name')}}" placeholder="Full Name" >
                            <input name="email" type="text" id="email" value="{{old('email')}}" placeholder="Email" >
                            <textarea name="comments"  id="comments" value="{{old('comments')}}" placeholder="Message"></textarea>
                            <input type="submit" class="send_message transition" id="submit" value="Send Message" />
                        </form>
                    </div>
                </div>
                <div class="right-colum">
                    <!--map-->
                    <div id="mapbox">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8520865188357!2d36.782301014971395!3d-1.2609879990802588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f176181a8ef2b%3A0x74a8f71af09b3253!2sWestcom+Point!5e0!3m2!1sen!2ske!4v1523508971620" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
                <!--contact info-->
                <div class="contact-info gray-bg">
                    <ul>
                        <li>
                            <i class="fa fa-phone" style="color:#ac2a2a !important;"></i>
                            <a href="#" class="transition"> 0796528157 | 0796528212</a>
                            <span class="contact-tooltip">My Phone</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" style="color:#ac2a2a !important;"></i>
                            <a href="#" class="transition">info@thewealthsmith.co.ke</a>
                            <span class="contact-tooltip">My email</span>
                        </li>
                        <li>
                            <i class="fa fa-home" style="color:#ac2a2a !important;"></i>
                            <a href="#" class="transition"> 5th Floor, Westcom Point Westlands Mahiga Mairu Road</a>
                            <span class="contact-tooltip">Our location</span>
                        </li>
                    </ul>
                </div>
            </section>

        </div>
    </div>
@stop