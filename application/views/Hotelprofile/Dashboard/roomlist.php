<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs">
            <h3 style="font-weight: 600;font-size: 26px; text-align: center;padding-bottom: 15px;">All Room List</h3>
            <div class="bs-example4" data-example-id="contextual-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Room Name</th>
                            <th>Room Ac</th>
                            <th>Bed Type</th>
                            <th>Room Rate</th>
                            <th>Discount</th>
                            <th>Total Rooms</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($get_roomList != FALSE) { $counter = 1; foreach ($get_roomList->result() as $data) { ?>
                                <tr <?php if ($counter % 2 == 0) { ?> class="" <?php } else { ?> class="active" <?php } ?>>
                                    <td><?php echo $data->room_name; ?></td>
                                    <td><?php
                                        if ($data->room_ac == 1) {
                                            echo "Non-Ac";
                                        } else {
                                            echo "Ac";
                                        };
                                        ?>
                                    </td>
                                    <td><?php
                                        if ($data->room_type == 1) {
                                            echo 'Single Room';
                                        } else {
                                            echo 'Double Room';
                                        };
                                        ?></td>
                                    <td style="text-align: center"><?php echo $data->room_rate; ?></td>
                                    <td style="text-align: center"><?php echo $data->room_discount; ?></td>
                                    <td style="text-align: center"><?php echo $data->total_room; ?></td>
                  <!--                  <td><a class="btn btn-primary" href="<?php //echo site_url('HotelProfile/room_view/' . $data->rooms_id);   ?>">View</a></td>-->

                                    <td> <button onclick="room_view(<?php echo $data->rooms_id; ?>)" type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">View Details</button>

                                        <!-- Modal -->
                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->                               
                                                    <div class="modal-body" id="info">
                                                        
                                                    </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                $counter++;
                            }
                        } else {
                            ?>
                            <tr>
                                <td>No results found</td>
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