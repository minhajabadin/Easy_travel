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