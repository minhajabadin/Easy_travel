<section class="index_bg">
    <section class="slider">
        <div class="container">
            <div class="ttl col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                <h1>Find Your Ideal Hotel</h1>
            </div>
            <div class="row">
                <div class="search_bar col-md-6 col-md-offset-3 col-lg-6">
                    <form action="<?php echo site_url('home/hotel') ?>" method="get" enctype="multipart/form-data">
                        <div class="input-group">
                            <script>
                                $(function () {
                                    var availableTags = [<?php echo $autoLocation; ?>]
                                    $("#main_search").autocomplete({
                                        source: availableTags
                                    });
                                });
                            </script>
                            <input type="text" name="main_search" placeholder="City name" id="main_search" autocomplete="off" class="search form-control input-lg" style="background-color: rgba(0, 0, 0, 0.7);">
                            <span class="input-group-btn">
                                <input type="hidden" name="trigger" value="Submit">
                                <button class="my_btn btn btn-lg" type="submit">Go!</button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--welcome-->
    <section class="wlcm">
        <div class="container">
            <div class="welcome">
                <h1 class="wl">WELCOME</h1>
                <p class="lorem">Welcome to our Website. Here You can book room according to your budget and also user profile. If you are a hotelier you can add your hotel in our website to fullfill requirement's. Every hotelier get their profile where they can add their room  they can also add multiple room at a time. User can complain or any suggestion to our admin.  </p>
<!--                <a href=""><input type="button" class="btn learn_button " value="Learn More" /></a>-->
            </div>
<!--            <div class="offers col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6">
                <h3>THIS WEEK'S SPECIAL OFFERS</h3>
                <P>GREAT IDEAS FOR FAMILY REST</P>
            </div>-->
        </div>
    </section>
<!--    <section class="offer_section">
        <div class="container">
            <div class="four_week col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="h_name">
                    <h4>RAJSHAHI</h4>
                </div>
                <img src="<?php //echo $img ?>1.1.jpg" alt="" class=""/>
                <p class="address">Rose View Hotel </p>
                <p class="day">6-7 nights, airfare, 3-5 star hotels </p>
                <p class="address">From $680 </p>
                <div class="h_name">
                    <h4>BOOK NOW</h4>
                </div>
            </div>
            <div class="four_week col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="h_name">
                    <h4>DHAKA</h4>
                </div>
                <img src="<?php //echo $img ?>1.2.jpg" alt="" class=""/>
                <p class="address">Romero, Kyle Jerome, Dubai </p>
                <p class="day">6-7 nights, airfare, 3-5 star hotels </p>
                <p class="address">From $680 </p>
                <div class="h_name">
                    <h4>BOOK NOW</h4>
                </div>
            </div>
            <div class="four_week col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="h_name">
                    <h4>CHITTAGONG</h4>
                </div>	
                <img src="<?php //echo $img ?>1.3.jpg" alt="" class=""/>
                <p class="address">Romero, Kyle Jerome, Dubai </p>
                <p class="day">6-7 nights, airfare, 3-5 star hotels </p>
                <p class="address">From $680 </p>
                <div class="h_name">
                    <h4>BOOK NOW</h4>
                </div>
            </div>
            <div class="four_week col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="h_name">
                    <h4>SYLHET</h4>
                </div>	
                <img src="<?php //echo $img ?>1.4.jpg" alt="" class=""/>
                <p class="address">Romero, Kyle Jerome, Dubai </p>
                <p class="day">6-7 nights, airfare, 3-5 star hotels </p>
                <p class="address">From $680 </p>
                <div class="h_name">
                    <h4>BOOK NOW</h4>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Service Area -->
<!--    <section class="our_services" id="my_services">    
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">    
                <h1 class="services">Our services</h1>
                <p class="ispum">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                </p>
            </div>
            <div class="service_one col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="black_area">
                    <h1 class="hotels">HOTELS</h1>
                    <h4 class="star">3 star, 5 star hotel & resort are available with us</h4>
                    <a href=""><input type="button" class="btn read_button " value="Read More" /></a>
                </div>
            </div>
            <div class="service_two col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="black_area">
                    <h1 class="hotels">RESTAURANT</h1>
                    <h4 class="star">3 star, 5 star hotel & resort are available with us</h4>
                    <a href=""><input type="button" class="btn read_button " value="Read More" /></a>
                </div>
            </div>
            <div class="service_three col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="black_area">
                    <h1 class="hotels">CAR RENTAL</h1>
                    <h4 class="star">3 star, 5 star hotel & resort are available with us</h4>
                    <a href=""><input type="button" class="btn read_button " value="Read More" /></a>
                </div>
            </div>
            <div class="service_four col-xs-12 col-sm-12 col-md-4 col-lg-4">	
                <div class="black_area">
                    <h1 class="hotels">PICNIC SPOT</h1>
                    <h4 class="star">3 star, 5 star hotel & resort are available with us</h4>
                    <a href=""><input type="button" class="btn read_button " value="Read More" /></a>
                </div>
            </div>
            <div class="service_five col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="black_area">
                    <h1 class="hotels">GYM</h1>
                    <h4 class="star">3 star, 5 star hotel & resort are available with us</h4>
                    <a href=""><input type="button" class="btn read_button " value="Read More" /></a>
                </div>
            </div>
            <div class="service_six col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="black_area">
                    <h1 class="hotels">SPA</h1>
                    <h4 class="star">3 star, 5 star hotel & resort are available with us</h4>
                    <a href=""><input type="button" class="btn read_button " value="Read More" /></a>
                </div>
            </div>
        </div>
    </section>-->
    <!-- About Area -->
    <section class="about_area" id="about_id">
        <div class="container">
            <h1 class="About_us"> About Us</h1>
            <h4 class="stay_h4">Stay with us</h4>
            <div class="about_one col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h3>Who we are?</h3>
                <p>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="about_one col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h3>What we do?</h3>
                <p>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="about_one col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h3>What is our purpopse?</h3>
                <p>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="about_one col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h3>What is our plan?</h3>
                <p>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
    </section>
    <!-- Contact Area -->
    <section class="contact_area" id="contact_id">
        <div class="container">
            <h1 class="contact_us"> Contact Us</h1>
            <p class="assist_p">We are always ready to assist you</p>
            <div class="custom_message col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form  action="<?php echo site_url('home/contactus') ?>" method="POST">	
                    <div class="form-group">
                        <span><strong > Name </strong></span>
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">						
                                <input type="text" name="fst_name" placeholder="First Name"  class="contact_input form-control input-md " />
                            </div>						
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <input type="text" name="lst_name" placeholder="Last Name"  class="contact_input form-control input-md " />
                            </div>					
                        </div>				
                    </div>
                    <div class="form-group">
                        <span><strong > Email </strong></span>
                        <input type="email" name="email" placeholder="Enter Your Email" class="contact_input form-control input-md" />
                    </div>
                    <div class="form-group">
                        <span><strong > Message </strong></span>
                        <textarea  class="msg_input form-control input-md "name="massage" placeholder="Write something.." ></textarea>		
                    </div>
                    <div class="form-group send">					
                        <button type="submit"  class="btn send_button pull-right" > Send</button>
                        <input type="hidden" name="trigger" value="submit">
                        <br>
                        <br>
                    </div>			
                </form>	
            </div>
            <div class="coctact_info col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1">
                <h2 style="text-decoration: underline;">Contact Info </h2>
                <div class="contact_icon col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-md-2 col-lg-2">
                    <i class="contact_icon fa fa-map-marker" style="font-size: 30px;color: #009048;font-weight: 600;"></i>
                    </div>
                    <div class="col-md-10 col-lg-10">
                      <p class="cont_p">32/1 Rongdhonu, Choukidekhi, Amborkhana, Sylhet, Bangladesh</p> 
                    </div>
                    
                </div>
                <div class="contact_icon col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-md-2 col-lg-2">
                    <i class=" fa fa-envelope-o" style="font-size: 30px; color: #009048; font-weight: 600;"></i>
                    </div> 
                    <div class="col-md-10 col-lg-10" >
                        <p class="cont_p">easytravel_27b@gmail.com</p>
                    </div>
                    
                </div>
                <div class="contact_icon col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                    <div class="col-md-2 col-lg-2">
                        <i class=" fa fa-phone"style="font-size: 30px; color: #009048; font-weight: 600;"></i>
                    </div>
                    <div class="col-md-10 col-lg-10">
                        <p class="cont_p">+880 17 3155 5300</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</section>