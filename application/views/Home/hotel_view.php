
<section class="hotel_view_bg">
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
    </ul>
    <section class="hotel_slider">
        <div class="container">
            <div class="hotel_header col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1><?php echo getHotelname($hotel_name) ?></h1>
            </div>
            <div class="slider_part col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="row">
                    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 700px; height: 356px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                        <!-- Loading Screen -->
                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                            <div style="position:absolute;display:block;background:url('<?php echo $img ?>loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                        </div>
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 700px; height: 256px; overflow: hidden;">
                            <?php foreach ($gallery_image->result() as $data) { ?>
                                <div data-p="144.50" style="display: none;">
                                    <img data-u="image" src="<?php echo base_url() . 'HotelGallery/' . $data->hotel_image_path ?>" />
                                    <img data-u="thumb" src="<?php echo base_url() . 'HotelGallery/' . $data->hotel_image_path ?>" />
                                </div>
                            <?php } ?>
                        </div>
                        <!-- Thumbnail Navigator -->
                        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:700px;height:100px;" data-autocenter="1">
                            <!-- Thumbnail Item Skin Begin -->
                            <div data-u="slides" style="cursor: default;">
                                <div data-u="prototype" class="p">
                                    <div class="w">
                                        <div data-u="thumbnailtemplate" class="t"></div>
                                    </div>
                                    <div class="c"></div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                        <!-- Arrow Navigator -->
                        <span data-u="arrowleft" class="jssora05l" style="top:110px;left:8px;width:40px;height:40px;"></span>
                        <span data-u="arrowright" class="jssora05r" style="top:110px;right:8px;width:40px;height:40px;"></span>                
                    </div>
                </div> 
            </div>
            <div class="slider_left col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="row">
                    <div class="slider_left_add">
                        <h2><?php echo $hotel_info->hotel_name ?></h2>
                        <div class="hotel_contact_icon col-md-12">
                            <div class="col-md-4 col-lg-4">
                                <i class=" pull-right fa fa-star" style="font-size: 25px;color: #009048;font-weight: 600;"></i>
                            </div>
                            <div class="col-md-8 col-lg-8">
                                <h5><?php echo $hotel_info->hotel_stars ?> Star</h5>
                            </div>
                        </div>
                        <div class="hotel_contact_icon col-md-12">
                            <div class="col-md-4 col-lg-4">
                                <i class="pull-right fa fa-map-marker" style="font-size: 25px;color: #009048;font-weight: 600;"></i>
                            </div>
                            <div class="col-md-8 col-lg-8">
                                <h5><?php echo $hotel_info->hotel_address ?></h5>
                            </div>
                        </div>
                        <div class="hotel_contact_icon col-md-12">
                            <div class="col-md-4 col-lg-4">
                                <i class="pull-right fa fa-map" style="font-size: 25px;color: #009048;font-weight: 600;"></i>
                            </div>
                            <div class="col-md-8 col-lg-8">
                                <h5><?php echo $hotel_info->hotel_city ?></h5>
                            </div>
                        </div>
                        <div class="hotel_contact_icon col-md-12">
                           <div class="col-md-4 col-lg-4">
                                <i class="pull-right fa fa-globe" style="font-size: 25px;color: #009048;font-weight: 600;"></i>
                            </div>
                            <div class="col-md-8 col-lg-8">
                                <h5><?php echo $hotel_info->hotel_country ?></h5>
                            </div> 
                        </div>
                        <div class="hotel_contact_icon col-md-12">
                            <div class="col-md-4 col-lg-4">
                                <i class="pull-right fa fa-envelope" style="font-size: 25px;color: #009048;font-weight: 600;"></i>
                            </div>
                            <div class="col-md-8 col-lg-8">
                                <h5><?php echo $hotel_info->hotel_email ?></h5>
                            </div>
                        </div>
                        <div class="hotel_contact_icon col-md-12">
                            <div class="col-md-4 col-lg-4">
                                <i class="pull-right fa fa-phone-square" style="font-size: 25px;color: #009048;font-weight: 600;"></i>
                            </div>
                            <div class="col-md-8 col-lg-8">
                               <h5><?php echo $hotel_info->hotel_mobile ?></h5> 
                            </div>
                        </div>  
                    </div>
<!--                    <div class="add_rating">
                        <h4>Rate us</h4>
                        <img onclick="getHotelRateList('1')" id="rate" src="<?php //echo $img ?>angry.png" class="star_image" title="Not Good" alt="image">
                        <img onclick="getHotelRateList('2')" id="rate" src="<?php //echo $img ?>ok.png" class="star_image" title="Ok" alt="image">
                        <img onclick="getHotelRateList('3')" id="rate" src="<?php //echo $img ?>good.png"      class="star_image" title="Good" alt="image">
                        <img onclick="getHotelRateList('4')" id="rate" src="<?php //echo $img ?>very_good.png" class="star_image" title="Very Good" alt="image">
                        <img onclick="getHotelRateList('5')" id="rate" src="<?php //echo $img ?>excellent.png" class="star_image" title="Excellent" alt="image">
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="booking_area col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <h2 class="choose">Choose your room</h2>
                </div>
                <div class="row">
                    <div class="check_update col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <form id="booking-form" class="booking-form" name="form1" method="post" action="">					
                                <div id="form-content">
                                    <div class="group">
                                        <div class="row">
                                            <div class=" calander_p addon-right col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                                <i class="fa fa-calendar"></i>
                                                <label for="date-from">From</label>
                                                <input id="date-from" name="date_from" value="<?php echo $date_from ;?>" class="form-control" type="text" style="color: black;">	
                                                <input id="h_id" value="<?php echo $hotel_name ;?>" type="hidden">	
                                            </div>
                                            <div class="calander_p addon-right col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                                <i class="fa fa-calendar"></i>
                                                <label for="date-to">To</label>
                                                <input id="date-to" name="date_to" value="<?php echo $date_to ;?>" class="form-control" type="text" style="color: black;">
                                            </div>
                                            <div  class="calander_p col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                                <label for="room-type">Room type</label>
                                                <select id="room-type" name="room_type" class="form-control">
                                                    <option value="1" <?php if($room_type == 1){ echo 'selected' ;} ?>>Single room</option>
                                                    <option value="2" <?php if($room_type == 2){ echo 'selected' ;} ?>>Double room</option>
<!--                                                    <option value="3" <?php if($room_type == 3){ echo 'selected' ;} ?>>Apartment</option>-->
                                                </select>
                                            </div>
                                            <div class="calander_p col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                                <label for="neede_room">Needed Room's</label>
                                                <select id="neede_room" name="neede_room" class="form-control">
                                                    <option value="1" <?php if($neede_room == 1){ echo 'selected' ;} ?>>1</option>
                                                    <option value="2" <?php if($neede_room == 2){ echo 'selected' ;} ?>>2</option>
                                                    <option value="3" <?php if($neede_room == 3){ echo 'selected' ;} ?>>3</option>
                                                    <option value="4" <?php if($neede_room == 4){ echo 'selected' ;} ?>>4</option>
                                                    <option value="5" <?php if($neede_room == 5){ echo 'selected' ;} ?>>5</option>
                                                    <option value="6" <?php if($neede_room == 6){ echo 'selected' ;} ?>>6</option>
                                                    <option value="7" <?php if($neede_room == 7){ echo 'selected' ;} ?>>7</option>
                                                    <option value="8" <?php if($neede_room == 8){ echo 'selected' ;} ?>>8</option>
                                                </select>
                                            </div>
                                            <div class="calander_p col-xs-12 col-sm-6 col-md-1 col-lg-1">
                                                <label for="adults">Adults</label>
                                                <select id="adults" name="adults" class="form-control">
                                                    <option value="1" <?php if($adults == 1){ echo 'selected' ;} ?>>1</option>
                                                    <option value="2" <?php if($adults == 2){ echo 'selected' ;} ?>>2</option>
                                                    <option value="3" <?php if($adults == 3){ echo 'selected' ;} ?>>3</option>
                                                    <option value="4" <?php if($adults == 4){ echo 'selected' ;} ?>>4</option>
                                                    <option value="5" <?php if($adults == 5){ echo 'selected' ;} ?>>5</option>
                                                    <option value="6" <?php if($adults == 6){ echo 'selected' ;} ?>>6</option>
                                                    <option value="7" <?php if($adults == 7){ echo 'selected' ;} ?>>7</option>
                                                    <option value="8" <?php if($adults == 8){ echo 'selected' ;} ?>>8</option>
                                                </select>
                                            </div>
                                            <div class="calander_p col-xs-12 col-sm-6 col-md-1 col-lg-1">
                                                <label for="children">Children</label>
                                                <select id="children" name="children" class="form-control">
                                                    <option value="-">-</option>
                                                    <option value="1" <?php if($children == 1){ echo 'selected' ;} ?>>1</option>
                                                    <option value="2" <?php if($children == 2){ echo 'selected' ;} ?>>2</option>
                                                    <option value="3" <?php if($children == 3){ echo 'selected' ;} ?>>3</option>
                                                    <option value="4" <?php if($children == 4){ echo 'selected' ;} ?>>4</option>
                                                </select>
                                            </div>
                                            <div class="submit col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                                <label class="empty"></label>
                                                <div><button onclick="getSearchRoomAvailable()" class="btn  btn_submit" name="submit" type="button" />Update</button></div>
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                                <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="room_type_1 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <h2>Room Type</h2>
                    </div>
                    <div class="room_option_2 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <h2>Options</h2>
                    </div>
                    <div class="room_price_3 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <h2>Rate per night</h2>
                    </div>
                </div>
                <div id="info">
                <?php if($room_data != FALSE){ foreach ($room_data->result() as $data) { ?>
                    <div class="row">
                        <div class="room_type col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="row">
                                <div class="room_details col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <img src="<?php echo base_url() ?><?php echo getRoomImagePath($data->rooms_id) ?>">
                                </div>
                                <div class="room_details col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                    <h3><?php echo $data->room_name ?></h3>
                                    <p><?php echo $data->room_information ?></p>
                                    
                                    
<!--                                    <a href=""><input type="button" class="btn more_edit_details" value="More details" /></a>-->
                                </div>
                            </div>
                        </div>
                        <div class="room_option col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <h4><?php echo $data->room_option ?> </h4>

                        </div>
                        <div class="room_price col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <h2>BDT  <?php if($data->room_discount == 0){echo $data->room_rate ;}else{ echo '<del style="color:red; font-size:18px;">' . $data->room_rate . '</del>' ,'<span style="color:#ba0000;">', '  ' , $data->room_discount . '% Off','</span>', '<br/>', '<span style="color:green;">', 'BDT  ', $data->room_rate - (($data->room_rate * $data->room_discount)/100),'</span>' ;}?></h2>
                            <a href="<?php echo site_url('home/reserve/' . $data->rooms_id . '/' . $data->hotel_id. '/' . $date_from . '/' . $date_to . '/'  . $data->room_type . '/' . $neede_room . '/' . $adults . '/' . $children . '/' . $data->room_rate . '/' . $data->room_discount) ?>"><input type="button" class="btn reserve pull-center" value="Reserve" /></a>
                            <h2 style="padding-top: 20px;">Total Available Rooms <?php echo $data->available_rooms ?></h2>
                        </div>
                        
                    </div>
                <?php } } else { ?>
                <div class="row">No results found</div>
                <?php }?>
                </div>
            </div>
        </div>
    </section>
</section>
<script type="text/javascript">
    function getHotelRateList(hotelRateData) {
        var hotelRateData = hotelRateData;
        alert(hotelRateData);
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Home/getHotelRateList",
            data: {hotelStarData: hotelRateData},
            cache: false,
            success: function (rubel) {
                $("#info").html(rubel);
            },
            error: function (html) {
                alert(html.responseText);
                alert(html.responseStatus);
            }
        });
    }
    
    function getSearchRoomAvailable() {
        var date_from = $("#date-from").val();
        var date_to = $("#date-to").val();
        var room_type = $("#room-type").val();
        var neede_room = $("#neede_room").val();
        var adults = $("#adults").val();
        var children = $("#children").val();
        var h_id = $("#h_id").val();
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Home/search_room_available",
            data: {h_id : h_id, date_from : date_from, date_to : date_to, room_type: room_type, neede_room: neede_room, adults : adults, children : children},
            cache: false,
            success: function(rubel) {
                $("#info").html(rubel);
            },
            error: function(html) {
                alert(html.responseText);
                alert(html.responseStatus);
            }
        });
    }

</script>