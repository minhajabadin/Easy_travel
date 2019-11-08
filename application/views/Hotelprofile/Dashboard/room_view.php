            <div class="bs-example4 col-md-12" data-example-id="contextual-table" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <h3 style="text-align: center;">Room details</h3>
                <div class="col-md-6">
                <table class="table" style="text-align: center; ">
                    <tr class="info">
                        <th>Room Name</th>
                        <td><?php echo $all_data->room_name; ?></td>
                    </tr>
                    <tr>
                        <th>Room AC/Non-Ac</th>
                        <td><?php
                            if ($all_data->room_ac == 1) {
                                echo "Non-Ac";
                            } else {
                                echo "Ac";
                            };
                            ?></td>
                    </tr>
                    <tr class="info">
                        <th>Room Type</th>
                        <td><?php
                            if ($all_data->room_type == 1) {
                                echo 'Single Room';
                            } else {
                                echo 'Double Room';
                            };
                            ?></td>
                    </tr>
                    <tr>
                        <th>Bed Type</th>
                        <td><?php
                            if ($all_data->bed_type == 1) {
                                echo 'Single Bed';
                            } elseif ($all_data->bed_type == 2) {
                                echo 'Master Bed';
                            } elseif ($all_data->bed_type == 3) {
                                echo 'Single Twin Bed';
                            } elseif ($all_data->bed_type == 4) {
                                echo 'One Master & Twin Bed';
                            } elseif ($all_data->bed_type == 5) {
                                echo 'Two Master Bed';
                            } elseif ($all_data->bed_type == 6) {
                                echo 'Two Twin Bed';
                            }
                            ;
                            ?></td>
                    </tr>
                    <tr class="info">
                        <th>Room Information</th>
                        <td><?php echo $all_data->room_information; ?></td>
                    </tr>
                    <tr>
                        <th>Room Option</th>
                        <td><?php echo $all_data->room_option; ?></td>
                    </tr>
                    <tr class="info">
                        <th>Rate Per Night</th>
                        <td><?php echo $all_data->room_rate; ?></td>
                    </tr>
                    <tr >
                        <th>Discount</th>
                        <td><?php echo $all_data->room_discount; ?> %</td>
                    </tr>
                    <tr class="info">
                        <th>Total Rooms</th>
                        <td><?php echo $all_data->total_room; ?></td>
                    </tr>

                    
                    <tr>
                        <td>
                            <a href="<?php echo site_url('Hotelprofile/room_edit/' . $all_data->rooms_id) ?>" type="submit" class="btn btn-primary"style="margin-left: 75%">EDIT</a>
                        </td>
                    </tr>
                </table>
                    </div>
                <div class="col-md-6">
                    <img src="<?php echo base_url() ?><?php echo $all_images->image_path ?>">
                    
                </div>
            </div>


<!--                        <h3>Room Image</h3>
                        <td> <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">View Images</button>
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                     Modal content
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>-->