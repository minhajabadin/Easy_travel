<?php if ($available_hotel_data != FALSE) { foreach ($available_hotel_data->result() as $data) { ?>
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
        <a href="<?php echo site_url('home/hotel_view/' . $data->hotel_id. '/' . $date_from . '/' . $date_to . '/'  . $data->room_type . '/' . $neede_room . '/' . $adults . '/' . $children) ?>" class="btn view_deal" >View</a>
    </div>
</div>
<?php }} else { ?>
<div class="hotel_deal col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h2>No result found</h2>
</div>
<?php } ?>