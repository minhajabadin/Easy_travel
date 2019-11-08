<?php if($star_data != FALSE){ foreach ($star_data->result() as $data){?>
<div class="row cus_pad">
    <div class="hotel_img col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <img src="<?php echo base_url() . 'HotelGallery/' . getHotelimage($data->hotel_id) ; ?>" class="my_img" alt="image">
    </div>
    <div class="hotel_detailes col-xs-6 col-sm-4 col-md-5 col-lg-5">
        <h2><?php echo $data->hotel_name ?></h2>
        <h4><?php echo $data->hotel_address ?></h4>
        <h4>Free WiFi</h4>
    </div>
    <div class="hotel_deal col-xs-6 col-sm-4 col-md-3 col-lg-3">
        <button onclick="return confirm('Please submit abobe form as your requirement')" type="button" class="btn view_deal">View</button>
    </div>
</div>
<?php } }else { ?>
    <div class="hotel_deal col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2>No result found</h2>
    </div>
<?php }?>