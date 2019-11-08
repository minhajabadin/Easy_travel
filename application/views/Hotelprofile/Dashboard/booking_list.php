<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs">
            <div class="box-header">
                <h2 style="font-weight: 600;font-size: 26px; text-align: center;padding-bottom: 15px;">Booking List</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>City</th>
                                <th>Room name</th>                                          
                                <th>Booked Room</th>                                          
                                <th>Mobile</th>                                          
                                <th>Email</th>
                                <th>Check in</th>
                                <th>Check out</th>
                                <!--<th>Cancel</th>-->                                          
                            </tr>
                        </thead>   
                        <tbody>
                            <?php if($allBookingData != FALSE){foreach ($allBookingData->result() as $data){ ?>
                            <tr>
                                <td><?php echo getUserName($data->user_id) ?></td>
                                <td class="center"><?php echo $data->bo_city ?></td>
                                <td class="center"><?php echo getRoomName($data->bo_room_id); ?></td>
                                <td class="center"><?php echo $data->booked_room ?></td>
                                <td class="center"><?php echo $data->bo_mobile ?></td>
                                <td class="center"><?php echo $data->bo_email ?></td>
                                <td><?php echo $data->bo_checkin ?></td>
                                <td class="center"><?php echo $data->bo_checkout ?><a href="<?php echo site_url('hotelprofile/expairRoom/' . $data->booking_id)?>" class="btn btn-close">Check Out</a></td>
<!--                                <td class="center">
                                    <a href=""><span class="label label-danger">Cancel</span></a>
                                </td>                                       -->
                            </tr>
                            <?php } }else{ ?>
                            <tr>
                                <td style="text-align: center;font-weight: 600;font-size: 24px;" colspan="8">No result found</td>                                    
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>    
                </div>