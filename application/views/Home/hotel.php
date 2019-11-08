
    <section class="hotel_bg">
                <ul class="breadcrumb">
                   <li>
                       <i class="fa fa-home"></i>
                       <a href="<?php echo site_url('home') ?>">Home</a>
                   </li>
                   <li>
                       <i class="fa fa-hotel"></i>
                       <a href="<?php echo site_url('home/hotel') ?>">Hotel</a>
                   </li>
               </ul>
        <div class="search_area">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="search_bar_hotel col-md-8 col-md-offset-2 col-lg-8 md-offset-3">
                            <div class="input-group">
                                <input type="text" name="main_search" placeholder="City or hotel name" value="<?php echo $msvalue; ?>" id="main_search" oninput="getHotelList()" class="search form-control input-lg" style="background-color: rgba(0, 0, 0, 0.7);">
                                <span class="input-group-btn">
                                    <button class="my_btn btn btn-lg" type="button">Go!</button>
                                </span>
                            </div><!-- /input-group -->
                        </div>
                    </div>
                    <div class="booking_out col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="booking-form" class="booking-form">					
                            <div id="form-content">
                                <div class="group">
                                    <div class="row">
                                        <div class=" calander_p addon-right col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                            <i class="fa fa-calendar"></i>
                                            <label for="date-from">Check in</label>
                                            <input id="date-from" name="date_from" class="form-control" type="text" style="color: black;">	
                                        </div>
                                        <div class="calander_p addon-right col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                            <i class="fa fa-calendar"></i>
                                            <label for="date-to">Check out</label>
                                            <input id="date-to" name="date_to" class="form-control" type="text" style="color: black;">
                                        </div>
                                        <div  class="calander_p col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                            <label for="room-type">Room type</label>
                                            <select id="room-type" name="room_type" class="form-control">
                                                <option value="1">Single room</option>
                                                <option value="2">Double room</option>
<!--                                                <option value="3">Apartment</option>-->
                                            </select>
                                        </div>
                                        <div class="calander_p col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                            <label for="neede_room">Needed Room(s)</label>
                                            <select id="neede_room" name="neede_room" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                        <div class="calander_p col-xs-12 col-sm-6 col-md-1 col-lg-1">
                                            <label for="adults">Adult(s)</label>
                                            <select id="adults" name="adults" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                        <div class="calander_p col-xs-12 col-sm-6 col-md-1 col-lg-1">
                                            <label for="children">Children(s)</label>
                                            <select id="children" name="children" class="form-control">
                                                <option value="0">-</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="submit col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                            <label class="empty"></label>
                                            <div><button onclick="getSearchHotelAvailable()" class="btn  btn_submit" name="submit" type="button" />Submit</button></div>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                            <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hotel_body">
            <div class="container">
                <div class="row">
                    <div class="topnav" id="myTopnav">
                        <div class="filter_area col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="row">
<!--                                <div class="google_map">
                                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:180px;width:100%;color:black;'><div id='gmap_canvas' style='height:180px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="https://buywebsitetrafficreviews.org/trafficwebsites/">make a deal with trusted venders so that your investment can result better outcome</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map() {
                                        var myOptions = {zoom: 10, center: new google.maps.LatLng(24.904539, 91.86110110000004), mapTypeId: google.maps.MapTypeId.ROADMAP};
                                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                                        marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(24.904539, 91.86110110000004)});
                                        infowindow = new google.maps.InfoWindow({content: '<strong>sylhet</strong><br>Sylhet, bangladesh<br>'});
                                        google.maps.event.addListener(marker, 'click', function() {
                                            infowindow.open(map, marker);
                                        });
                                        infowindow.open(map, marker);
                                        }
                                        google.maps.event.addDomListener(window, 'load', init_map);
                                    </script>
                                </div>-->
                                <div class="my_star">
                                    <h4>Search by Hotel Stars</h4>
                                    <img onclick="getHotelStarList('1','<?php echo $msvalue; ?>')" id="star" src="<?php echo $img ?>1.5star.png" class="star_image" title="1.5 Star" alt="image">
                                    <img onclick="getHotelStarList('2','<?php echo $msvalue; ?>')" id="star" src="<?php echo $img ?>2star.png"   class="star_image" title="2 Star" alt="image">
                                    <img onclick="getHotelStarList('3','<?php echo $msvalue; ?>')" id="star" src="<?php echo $img ?>3star.png"   class="star_image" title="3 Star" alt="image">
                                    <img onclick="getHotelStarList('4','<?php echo $msvalue; ?>')" id="star" src="<?php echo $img ?>4star.png"   class="star_image" title="4 Star" alt="image">
                                    <img onclick="getHotelStarList('5','<?php echo $msvalue; ?>')" id="star" src="<?php echo $img ?>5star.png"   class="star_image" title="5 Star" alt="image">
                                </div>
                                <div class="serach_rating">
                                    <h4>Search Hotel by Highest Booking</h4>
                                    
                                    <img onclick="getHotelStarList('1','<?php echo $msvalue; ?>')" src="<?php echo $img ?>angry.png" class="star_image" title="Lowest" alt="image">
                                    <img onclick="getHotelStarList('2','<?php echo $msvalue; ?>')" src="<?php echo $img ?>ok.png"   class="star_image" title="Middle" alt="image">
<!--                                    <img onclick="getHotelStarList('3','<?php echo $msvalue; ?>')" src="<?php //echo $img ?>good.png" class="star_image" title="Good" alt="image">-->
<!--                                    <img onclick="getHotelStarList('4','<?php //echo $msvalue; ?>')" src="<?php echo $img ?>very_good.png" class="star_image" title="Very Good" alt="image">-->
                                    <img onclick="getHotelStarList('5','<?php echo $msvalue; ?>')" src="<?php echo $img ?>excellent.png" class="star_image" title="Highest" alt="image">
                                </div>
<!--                                <div class="reset_bnt">
                                    <button class="reset_botton btn btn-sm" type="button">Reset all filters</button>  
                                </div>-->
                                <div class="my_star">
                                    <h4>Top options</h4> 
                                    <a href=""><img src="<?php echo $img ?>pets.png" class="star_image" title="Pets" alt="image"></a>
                                    <a href=""><img src="<?php echo $img ?>beach.png" class="star_image" title="Beach" alt="image"></a>
                                    <a href=""><img src="<?php echo $img ?>wifi.png" class="star_image" title="Free Wifi" alt="image"></a>
                                    <a href=""><img src="<?php echo $img ?>breakfast.png" class="star_image" title="Breakfast" alt="image"></a>
                                    <a href=""><img src="<?php echo $img ?>pool.png" class="star_image" title="Swiming Pool" alt="image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hotel_margin col-xs-12 col-sm-12 col-md-8 col-lg-8" >
                        <div id="info">
                            <?php if ($hotel_data != FALSE) { foreach ($hotel_data->result() as $data) { ?>
                            <div class="row cus_pad">
                                <div class="hotel_img col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <img src="<?php echo base_url() . 'HotelGallery/' . getHotelimage($data->hotel_id); ?>" class="my_img" alt="image">
                                </div>
                                <div class="hotel_detailes col-xs-6 col-sm-4 col-md-5 col-lg-5">
                                    <h2><?php echo $data->hotel_name ?></h2>
                                    <h4><?php echo $data->hotel_address ?></h4>
                                    <h4><?php echo $data->hotel_division ?></h4>
 
                                </div>
                                <div class="hotel_deal col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                    <a onclick="return confirm('Please submit abobe form as your requirement')" class="btn view_deal" >View</a>
                                </div>
                            </div>
                            <?php }} else { ?>
                            <div class="hotel_deal col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h2>No result found</h2>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script type="text/javascript">
    function getHotelList() {
        var hoteldata = $("#main_search").val();
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Home/getHotelList",
            data: {hoteldata: hoteldata},
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
<script type="text/javascript">
    function getHotelStarList(hotelStarData,msvalue) {
        var hotelStarData = hotelStarData;
        var msvalue = msvalue;
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Home/getHotelStarList",
            data: {hotelStarData: hotelStarData, msvalue: msvalue},
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

    function getSearchHotelAvailable() {
        var main_search = $("#main_search").val();
        var date_from = $("#date-from").val();
        var date_to = $("#date-to").val();
        var room_type = $("#room-type").val();
        var neede_room = $("#neede_room").val();
        var adults = $("#adults").val();
        var children = $("#children").val();
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Home/search_hotel_available",
            data: {main_search: main_search, date_from : date_from, date_to : date_to, room_type: room_type, neede_room: neede_room, adults : adults, children : children},
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