<div class="reserve_bg">
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="<?php echo site_url('home') ?>">Home</a>
        </li>
        <li>
            <i class="fa fa-hotel"></i>
            <a href="<?php echo site_url('home/hotel') ?>">Hotel</a>
        </li>
        <li>
            <i class="fa fa-user"></i>
            <a href="<?php echo site_url('home/hotel/hotel_view') ?>">Hotel Profile</a>
        </li>
        <li>
            <i class="fa fa-dollar"></i>
            <a href="<?php echo site_url('home/hotel/hotel_view/reserve') ?>">Reservation</a>
        </li>
    </ul> 
    <form action="<?php echo site_url('home/bookingFinal')?>" method="POST">
    <section>
        <div class="container">
            <div class="choice_right col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="<?php echo base_url() ?><?php echo getRoomImagePath($rooms_id) ?>" alt="" class=""/>
                <div class="choice_one">
                    <p class="room2"><strong>   <?php echo $neede_room ?> Room(s) :</strong> <?php echo $adults ?> Adult(s), 1 Double Bed, No Smoking</p>
                    <i class="seft_icon fa fa-coffee pull-center" aria-hidden="true">   Breakfast Included</i>
                    <i class="seft_icon fa fa-car pull-center" aria-hidden="true">   Free Parking</i>
                    <i class="seft_icon fa fa-wifi pull-center" aria-hidden="true">   Free Internet</i>
                    <p class="checkin" style="color: black;font-weight: 600;font-size: 16px;"> Check in: <?php echo $date_from ?></p>
                    <p class="checkout" style="color: black;font-weight: 600;font-size: 16px;">Check out: <?php echo $date_to . ': Time- ' . $hotel_info->checkin_out_time ?></p>
                    <p class="checkout" style="color: black;font-weight: 600;font-size: 16px;">Total BDT: <?php if($room_discount == 0){ echo $room_rate ; }else{ echo $neede_room * ($room_rate - (($room_rate * $room_discount)/100)) ;}?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="great_choice">
        <div class="container">
            <div class="my_choice col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <h2 style="color: #009048;font-weight: 600; padding-top: 15px;"><?php echo $hotel_info->hotel_name ?></h2>
                <p class="choice">Great choice! You choose the cheapest room in at <?php echo $hotel_info->hotel_name ?>. Don't wait book now.</p>
                <p class="room1" style="color: black;"><i class="fa fa-user pull-center" aria-hidden="true"></i><strong>   Room(s) <?php echo $neede_room ?>:</strong> <?php echo $adults ?> Adult(s), 1 Double Bed, No Smoking</p>
                <i class="tik_icon fa fa-check pull-center" aria-hidden="true" style="color: black;">   Breakfast Included</i>
                <i class="tik_icon fa fa-check pull-center" aria-hidden="true" style="color: black;">   Free Parking</i>
                <i class="tik_icon fa fa-check pull-center" aria-hidden="true" style="color: black;">   Free Internet</i>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="padding-bottom: 10px;">
                    <div class="row">
                        <span style="color: black;"><strong >   Enter Email   </strong></span>
                        <input id="booking_email" name="booking_email" type="text" placeholder="Email" value="<?php if(!empty($user_email)){ echo $user_email ;} ?>"  class="reserve_input form-control input-md " />
                    </div>
                </div>	
                 <div class="number col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="row">
                        <span style="color: black;"><strong>  Bkash number </strong></span>
                        <input id="booking_phone_number" name="booking_phone_number" value="<?php if(!empty($user_mobile)){ echo $user_mobile ;} ?>" type="text" placeholder="Phone"  class="number_input form-control input-md "/>
                    </div>
                </div>
<!--                <div class="form-group confirmation col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="row">
                        <input type="checkbox"/> <span class="checkboxs">Text me my confirmation. Standard rates may apply.</span>
                        <br/>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="credit_card_option col-xs-12 col-sm-12 col-md-8 col-lg-8" style="margin-bottom:20px;">
                <i class="credit_card fa fa-credit-card" aria-hidden="true"></i>
                <div class="container">
                    <i class="right_hand fa fa-hand-o-right" aria-hidden="true"> We use secure transmission</i>
                    <i class="right_hand fa fa-hand-o-right" aria-hidden="true"> We protect your personal information</i>
                    <div class="coupon_panel panel-default col-xs-12 col-sm-12 col-md-7 col-lg-7">  
<!--                        <div class="coupon_panell col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <img src="<?php //echo $img ?>BKash_logo.png" class="credit_card_details" alt="image"> 
                        </div>
                        <div class="coupon_panell col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <img src="<?php //echo $img ?>paypal.png" class="credit_card_details" alt="image"> 
                        </div>
                        <div class="coupon_panell col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <img src="<?php //echo $img ?>visa.png" class="credit_card_details" alt="image"> 
                        </div>
                        <div class="coupon_panell col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <img src="<?php //echo $img ?>mastercard.png" class="credit_card_details" alt="image"> 
                        </div>-->
                        <h3 class="bkash_here" style="color: black;">Hoteliers Bkash Number <i class="fa fa-phone"></i> +88 <?php echo $hotel_mobile?></h3>
                        <input id="booking_trx" name="booking_trx" type="text" placeholder="bKash Transaction Number"  class="reserve_input form-control input-md "  required="required" />
                    </div>
                </div>
                <div class="row">
                    <?php if(empty($user_id)){ ?>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <button data-toggle="modal" data-target="#myModal"  href="" type="button" class="btn btn-success btn-lg">Submit</button>
                    </div>
                    <div  class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="panel-body col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                        <div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">
                                                    <span><strong >   Enter your Email   </strong></span>
                                                    <input id="email" name="email" type="text" placeholder="Enter your Email"  class="reserve_input form-control input-md " />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <span><strong >   Enter your password   </strong></span>
                                                <input id="password" name="password" type="password" placeholder="Enter your Password" class="sign_input form-control input-md " />
                                            </div>                
<!--                                            <div class="form-group send">					
                                                <input type="checkbox"/> <span class="checkboxs">Keep me signed in</span>
                                                <br/>
                                            </div>-->
                                            <div class="row">
                                                <div class="form-group sign_in col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <input type="hidden" id="trigger" name="trigger"  value="login" />
                                                    <button type="button"  class="btn sign_button pull-left" onclick="getLogin()">Submit</button>
                                                    <a class="logon_forgot_pass pull-right" style="color: black;padding-left: 150px;" href="<?php echo site_url('home/signup') ?>">Don't have any Account?</a> 
                                                </div>     
                                            </div>         
<!--                                        <div class="forgot">
                                            <a href="">Forgot your password?</a>
                                        </div>-->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }  else { ?>
                    <input type="hidden" id="user_id" name="user_id" value="<?php if(!empty($user_id)){ echo $user_id; } ?>">
                    <input type="hidden" id="rooms_id" name="rooms_id" value="<?php echo $rooms_id?>">
                    <input type="hidden" id="hotel_id" name="hotel_id" value="<?php echo $hotel_id?>">
                    <input type="hidden" id="date_from" name="date_from" value="<?php echo $date_from?>">
                    <input type="hidden" id="date_to" name="date_to" value="<?php echo $date_to?>">
                    <input type="hidden" id="room_type" name="room_type" value="<?php echo $room_type?>">
                    <input type="hidden" id="user_address" name="user_address" value="<?php if(!empty($user_address)){ echo $user_address; } ?>">
                    <input type="hidden" id="neede_room" name="neede_room" value="<?php echo $neede_room?>">
                    <input type="hidden" id="adults" name="adults" value="<?php echo $adults?>">
                    <input type="hidden" id="children" name="children" value="<?php echo $children?>">
                    <input type="hidden" id="room_rate" name="room_rate" value="<?php echo $room_rate?>">
                    <input type="hidden" id="room_discount" name="room_discount" value="<?php echo $room_discount?>">
                    <input type="hidden" id="trigger2" name="trigger2" value="booking">
                    <div class="btn_bkash">
                        <button type="submit" class="btn btn-success btn-lg">Submit</button>
                    </div>
                    <?php } ?>
                </div>
            </div>
            </div>
        </div>
    </section>
    </form>
</div>

<script>
    function getLogin(){
        var email = $("#email").val();
        var password = $("#password").val();
        var trigger = $("#trigger").val();
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Home/reserve",
            data: {email : email, password : password, trigger : trigger},
            cache: false,
            success: function(rubel) {
                location.reload();
            },
            error: function(html) {
                alert(html.responseText);
                alert(html.responseStatus);
            }
        });
    }
    
//    function getBooking(){
//        var booking_email   = $("#booking_email").val();
//        var booking_phone_number   = $("#booking_phone_number").val();
//        var booking_trx     = $("#booking_trx").val();
//        var trigger2 = $("#trigger2").val();
//        jQuery.ajax({
//            type: "POST",
//            url: "<?php// echo base_url(); ?>Home/reserve",
//            data: {booking_email : booking_email, booking_phone_number : booking_phone_number, booking_trx : booking_trx, trigger2 : trigger2},
//            cache: false,
//            success: function(rubel) {
//               // location.reload();
//            },
//            error: function(html) {
//                alert(html.responseText);
//                alert(html.responseStatus);
//            }
//        });
//    }
</script>