<section class="">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="user_pic">
                <h1><?php echo $f_name ?> <?php echo $l_name ?></h1>
                <img src="<?php echo base_url() ?><?php if($pro_pic != FALSE){ echo $pro_pic->propi_path ;}else{ echo 'Propic/Upload.jpg';} ?>" alt="" class="" />
                <div class="user_name">
                    <form action="<?php echo site_url('User/UpLoadUserProPic') ?>" method="POST" enctype="multipart/form-data">
                        <input multiple="multiple" name="file" size="20"  type="file" id="file" onchange="this.form.submit();">
                        <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                        <input type="hidden" name="trigger" value="upload">
                    </form>
                </div>
                <div class="user_info">
                    <p><strong>Email:   </strong>&nbsp;&nbsp;<?php echo $user_data->user_email ;?></p>
                    <p><strong>Address:   </strong>&nbsp;&nbsp;<?php echo $user_data->user_address ?></p>
                    <p><strong>Country: </strong>&nbsp;&nbsp;<?php echo $user_data->user_country ?></p>
                    <p><strong>Phone:   </strong>&nbsp;&nbsp;<?php echo $user_data->user_mobile ?></p>
                    <p><strong>Gender:   </strong>&nbsp;&nbsp;<?php if($user_data->user_gender == 1){ echo 'Male' ;}elseif ($user_data->user_gender == 2){ echo 'Female' ;} else { echo 'Others' ;} {
    
} ?></p>
                </div>
            </div>
        </div>
        <div class=" change_information col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <h3><?php echo $f_name ?> Your Booking list</h3>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                <div class="col-lg-offset-1 col-md-10" style="margin-bottom:20px;">
                    <table class="table table-bordered table-striped" style="text-align: center; ">
                        <tr>
                            <th>Hotel Name</th>
                            <th>Check in</th>
                            <th>Check out</th>
                            <th>City</th>
                            <th>Room type</th>
                            <th>Booked Room</th>
                            <th>Cancel Request</th>
                        </tr>
                        <?php if($allBookingData != FALSE){ foreach ($allBookingData->result() as $data){ ?>
                        <tr> 
                            <td><?php echo getHotelname($data->bo_hotel_id) ?></td>
                            <td><?php echo $data->bo_checkin ?></td>
                            <td><?php echo $data->bo_checkout ?></td>
                            <td><?php echo $data->bo_city ?></td>
                            <td><?php if($data->bo_room_type == 1){ echo 'Single Room' ;}elseif ($data->bo_room_type == 2){ echo 'Double Room' ;}else { echo 'Apartment' ;} ?></td>
                            <td><?php echo $data->booked_room ?></td>
                            <?php if($cancel_disable >= $data->bo_checkin){ ?>
                            <td><a href="#" class="btn btn-danger" disabled>Cancel</a></td>
                            <?php } else{?>
                            <td><a href="<?php echo site_url('user/bookingCancel/' . $data->booking_id) ;?>" class="btn btn-danger">Cancel</a></td>
                            <?php } ?>
                        </tr>
                        <?php } }else{ ?>
                        <tr> 
                            <td style="font-weight: 600;font-size: 24px;" colspan ="7">Wait for Hotelier's confirmation</td>
                        </tr>
                        <?php } ?>                
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
$("input[name='file_1']").change(function() { this.form.submit(); });
</script>