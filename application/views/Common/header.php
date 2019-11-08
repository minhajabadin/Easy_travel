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

        <link rel="stylesheet" href="<?php echo $css ?>jquery-ui.css">
        <link rel="stylesheet" href="<?php echo $css ?>main.css">
        <link rel="stylesheet" href="<?php echo $css ?>style.css" />
        <link rel="stylesheet" href="<?php echo $css ?>responsive.css" />
        
        <script src="<?php echo $js ?>jquery.min.js"></script>
        <script src="<?php echo $js ?>jquery-ui.js"></script>
        
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
                                        <?php if($this->session->userdata('user_auth') != 0){ ?>
                                        <li><a href="<?php echo site_url('userlogout') ?>"><i class="fa fa-user" aria-hidden="true"> Logout</i></a></li>
                                        <?php } else {?>
                                        <li><a href="<?php echo site_url('userlogin') ?>"><i class="fa fa-user" aria-hidden="true"> Login</i></a></li>	
                                        <?php }?>
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
<!--                                <li><a href="<?php //echo site_url('home#my_services') ?>">SERVICES</a></li>-->
                                <li><a href="<?php echo site_url('home#about_id') ?>">ABOUT US</a></li>
                                <li><a href="<?php echo site_url('home#contact_id') ?>">CONTACT US</a></li>
                                <?php if($this->session->userdata('user_auth') != 0){ ?>
                                <li><a href="<?php echo site_url('user/user_profile') ?>"><i class="fa fa-user" aria-hidden="true"> MY ACCOUNT</i></a></li>
                                <?php } else {?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-plus" aria-hidden="true"></i> SIGN UP </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url('home/signup') ?>"> <span class=""></span> > Sign up as a User</a></li>
                                        <li><a href="<?php echo site_url('home/add_hotel') ?>"> >Sign up as a Hoteliers</a></li>
                                    </ul>
                                </li>	
                                <?php }?>
                                	
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </div>
            </nav>
        </section>