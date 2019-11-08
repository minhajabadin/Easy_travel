<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title ?></title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo $css ?>bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="<?php echo $css ?>bootstrap-theme.min.css" >
        <link rel="stylesheet" href="<?php echo $fa ?>css/font-awesome.min.css">
        <!-- Uikit -->
        <link rel="stylesheet" href="<?php echo $css ?>normalize.css">
        <link rel="stylesheet" href="<?php echo $uikit ?>css/uikit.min.css" />
        <!-- Uikit -->

        <link href="<?php echo $css ?>fileinput.css" media="all" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $themes ?>explorer/theme.css" media="all" rel="stylesheet" type="text/css"/>


        <link rel="stylesheet" href="<?php echo $css ?>main.css">
        <link rel="stylesheet" href="<?php echo $css ?>style.css" />
        <link rel="stylesheet" href="<?php echo $css ?>responsive.css" />
    </head>
    <body> 
        <!--  top Nav Area -->
        <section class="nav_area">	
            <nav class="my_nav navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="row">
                    <div class="top_side">
                        <div class="container">
                            <div class="top_nav col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <ul class="list-inline top-v1-contacts" style="float:left;  font-size:13px; font-weight:600;padding-top:3px;">
                                    <li class="my_number">
                                        <i class="fa fa-phone my_phone"></i> &nbsp; +08801747-147275 &nbsp; <i class="fa fa-envelope my_phone"></i> shuhed939@gmail.com
                                    </li>
                                </ul>
                                <div class="fa_user"> 
                                    <ul>
                                        <li><a href="<?php echo site_url('userlogin') ?>"><i class="fa fa-user" aria-hidden="true"> Login</i></a></li>	
                                    </ul>	  
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>  
                <div class="container">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="my_class navbar-brand" href="<?php echo site_url('home') ?>"><strong>HOTEL</strong> PORTAL</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo site_url('home') ?>">HOME</a></li>
                                <li><a href="<?php echo site_url('home#my_services') ?>">SERVICES</a></li>
                                <li><a href="<?php echo site_url('home#about_id') ?>">ABOUT US</a></li>
                                <li><a href="<?php echo site_url('home#contact_id') ?>">CONTACT US</a></li>	
                                <li class="dropdown">
                                    <a href="<?php echo site_url('home') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-plus" aria-hidden="true"></i> SIGN UP </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url('home/signup') ?>"> <span class="vz"></span> > Sign up as a User</a></li>
                                        <li><a href="<?php echo site_url('home/add_hotel') ?>"> >Sign up as a Hoteliors</a></li>
                                    </ul>
                                </li>	
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </div>
            </nav>
        </section>
        <section class="class_login">
            <div class="container">
                <div class="custom_p col-xs-12 col-sm-12 col-md-11 col-lg-11">
                    <p>Log Into Your Account</p>
                    <h2><?php echo $this->session->flashdata('notification'); ?></h2>
                </div>	
            </div>
            <div class="container">
                <div class="custom_right col-xs-12 col-sm-12 col-md-5 col-md-offset-3 col-lg-5 col-lg-offset-3">
                    <form action="<?php site_url('UserLogin') ?>" method="POST">
                        <div class="form-group our_span">
                            <span><strong>Enter your Email</strong></span>			
                            <input name="email" type="email" placeholder="" class="custominput form-control input-md " />
                        </div>
                        <div class="form-group our_span">
                            <span><strong>Enter your Password</strong></span>		
                            <input name="password" type="password" placeholder="" class="custominput form-control input-md " />
                        </div>
                        <div class="form-group our_span">
                            <input name="trigger"  type="hidden" value="login"/>
                            <button type="submit" class="btn custom_button pull-left">Login</button> 
                            <br>
                        </div>	
                        
                    </form>
                    <div class="forgot_login col-md-6 pull-right">
                        <a class="logon_forgot_pass" href="<?php echo site_url('Hotelprofile/login') ?>">Log in as a Hoteliers?</a>
                    </div>
<!--                    <div class="forgot_login col-md-7">
                        <a class="logon_forgot_pass" href="">Forgot your password?</a>
                    </div>-->
                    
                </div>	
            </div>
        </section>
        <footer class="fotter_area">
    <div class="container">
        <div class="row">
            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <p class="address"><strong>easy travel BD,</strong> 32/1 Rongdhonu, Choukidekhi, Amborkhana, Sylhet, Bangladesh </p>
                <p>Copyright 2017 easy travel | All rights reserved.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h1><strong>easy travel</strong></h1>
                <div class="link_area col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a href="https://plus.google.com/" class=""><i class="google_icons fa fa-google-plus pull-center" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/" class=""><i class="linkedin_icons fa fa-linkedin pull-center" aria-hidden="true"></i></a>
                    <a href="https://www.twitter.com/" class=""><i class="twitter_icons fa fa-twitter pull-center" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/" class=""><i class="facebook_icons fa fa-facebook pull-center" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                <select name="District" class="my_form form-control input-lg" style="background-color: rgba(0, 0, 0, 0.7);">
                    <option value="dha">Dhaka</option>
                    <option value="syl">Sylhet</option>
                    <option value="ctg">Chittagonj</option>
                    <option value="raj">Rajshahi</option>
                    <option value="bar">Barisal</option>
                    <option value="myn">Mymensingh</option>
                    <option value="khu">Khulna</option>
                    <option value="ron">Rongpur</option>
                </select>
            </div>
        </div>
    </div>
</footer>