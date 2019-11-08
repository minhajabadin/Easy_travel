<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs">
            <h3 style="font-weight: 600;font-size: 26px; text-align: center;">Booking History</h3>
            <div class="bs-example4" data-example-id="contextual-table">
                <table class="table">
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
                            <?php if($allBookingHistory != FALSE){foreach ($allBookingHistory->result() as $data){ ?>
                            <tr>
                                <td><?php echo getUserName($data->user_id) ?></td>
                                <td class="center"><?php echo $data->bo_city ?></td>
                                <td class="center"><?php echo getRoomName($data->bo_room_id); ?></td>
                                <td class="center"><?php echo $data->booked_room ?></td>
                                <td class="center"><?php echo $data->bo_mobile ?></td>
                                <td class="center"><?php echo $data->bo_email ?></td>
                                <td class="center"><?php echo $data->bo_checkin ?></td>
                                <td class="center"><?php echo $data->bo_checkout ?></td>
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



            
            
            
<script type="text/javascript">
    function room_view(roomId) {
        var roomViewData = roomId;
      //  alert(roomViewData);
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Hotelprofile/room_view",
            data: {roomViewData: roomViewData},
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