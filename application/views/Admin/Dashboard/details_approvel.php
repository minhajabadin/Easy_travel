<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs">
            <h3>Hotel details</h3>
            <div class="bs-example4 col-lg-offset-2 col-md-8" data-example-id="contextual-table" style="margin-bottom:20px; ">
                <table class="table">
                    <tr class="info">
                        <th>Hotels Name</th>
                        <td><?php echo $all_data->hotel_name; ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><?php echo $all_data->hotel_address; ?></td>
                    </tr>
                    <tr class="info">
                        <th>Email</th>
                        <td><?php echo $all_data->hotel_email; ?></td>
                    </tr>
                    <tr>
                        <th>Website</th>
                        <td><?php echo $all_data->hotel_website; ?></td>
                    </tr>
                    <tr class="info">
                        <th>City</th>
                        <td><?php echo $all_data->hotel_city; ?></td>
                    </tr>
                    <tr>
                        <th>Division</th>
                        <td><?php echo $all_data->hotel_division; ?></td>
                    </tr>
                    <tr class="info">
                        <th>Country</th>
                        <td><?php echo $all_data->hotel_country; ?></td>
                    </tr>

                    <tr>
                        <th>Postal Code</th>
                        <td><?php echo $all_data->hotel_zip; ?></td>
                    </tr>

                    <tr class="info">
                        <th>Mobile</th>
                        <td><?php echo $all_data->hotel_mobile; ?></td>
                    </tr>
                    <tr>
                        <th>Telephone</th>
                        <td><?php echo $all_data->hotel_telephone; ?></td>
                    </tr>
                    <tr class="info">
                        <th>Hotel Registration No:</th>
                        <td><?php echo $all_data->hotel_reg_no; ?></td>
                    </tr>
                    <tr >
                        <th>Hotel Star</th>
                        <td><?php echo $all_data->hotel_stars; ?></td>
                    </tr>
                    <tr class="info">
                        <th>Room Image</th>
                        <td> <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">View Images</button>

                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
                                                <!-- Loading Screen -->
                                                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                                </div>
                                                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 570px; height: 300px; overflow: hidden;">
                                                    <?php foreach ($all_images->result() as $data){ ?>
                                                        <div data-p="112.50" style="display: none;">
                                                            <img data-u="image" src="<?php echo base_url()?>HotelGallery/<?php echo $data-> hotel_image_path ?>" />
                                                        </div>
                                                    <?php } ?>
                                                    

                                                </div>
                                                <!-- Bullet Navigator -->
                                                <div data-u="navigator" class="jssorb01" style="bottom:16px;right:40px;">
                                                    <div data-u="prototype" style="width:12px;height:12px;"></div>
                                                </div>
                                                <!-- Arrow Navigator -->
                                                <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                                                <span data-u="arrowright" class="jssora02r" style="top:0px;right:40px;width:55px;height:55px;" data-autocenter="2"></span>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>
                            <a href="<?php echo site_url('Admin/hotel_acceptor/' . $all_data->hotel_id)?>" type="submit" class="btn btn-primary">Approve</a>
                            <a href="<?php echo site_url('Admin/hotel_decline/' . $all_data->hotel_id)?>" type="submit" class="btn btn-danger">Decline</a>
                        </td>
                    </tr>
                </table>
            </div>