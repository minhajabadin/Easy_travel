<div id="page-wrapper">
    <div class="graphs">
        <div class="xs" style="padding-left: 200px;">
            <h3 style="font-weight: 600;font-size: 26px;padding-bottom: 15px;">Add Hotel Rooms </h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <h1><?php echo $this->session->flashdata('notification') ?></h1>
                    <form action="<?php echo site_url('Hotelprofile/room_details') ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        <div id="logic_form">
                            <div  id='addr0'>
                                 <div class="form-group">
                                    <div class="r_name col-sm-4">
                                        <span><strong> Room Name</strong></span>
                                        <input name="room_name" type="text" class="form-control1"  placeholder="Room Name" required="required" >
                                    </div>
                                     <div class="r_name col-sm-4">
                                        <span><strong> Person's</strong></span>
                                        <input name="room_capacity" type="text" class="form-control1"  placeholder="How Many Person" required="required" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <span><strong >AC/Non-AC :  </strong></span>
                                        <div class="radio-inline"><label><input name="ac" type="radio" value="1" required="required">Non AC</label></div>
                                        <div class="radio-inline"><label><input name="ac" type="radio" value="2" required="required">AC</label></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <span><strong > Room Type</strong></span>
                                        <select class="form-control1 input-md" name="room_type" required>
                                            <option value="0">Select Room Type</option>
                                            <option value="1">Single Room</option>
                                            <option value="2">Double Room</option>
<!--                                            <option value="3">Option 3</option>-->
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <span><strong > Bed Type</strong></span>
                                        <select class="form-control1 input-md" name="bed_type" required="required">
                                            <option value="0">Select Bed Type </option>
                                            <option value="1">Single Bed</option>
                                            <option value="2">Master Bed</option>
                                            <option value="3">Single Twin Bed</option>
                                            <option value="4">One Master & Twin Bed</option>
                                            <option value="5">Two Master Bed</option>
                                            <option value="6">Two Twin Bed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <span><strong> Room Information</strong></span>
                                        <input name="room_info" type="text" class="form-control1" id="disabledinput" placeholder="Room Information" required="required">
                                    </div>
                                    <div class="col-sm-4">
                                        <span><strong>Room Option</strong></span>
                                        <input name="option" type="text" class="form-control1" id="mediuminput" placeholder="Room Option" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <span><strong >Rate Per Night</strong></span>
                                        <input name="rate" type="text" class="form-control1" id="mediuminput" placeholder="Rate Per Night" required="required">
                                    </div>
                                    <div class="col-sm-4">
                                        <span><strong > Total Room's</strong></span>
                                        <input name="total_room" type="text" class="form-control1" id="disabledinput" placeholder="Total Room's" required="required">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="frm_dorder col-sm-8">
                                        <label for="exampleInputFile">Upload Image</label>
                                        <input multiple name="userfile[]" size="20" type="file" >   
                                    </div>
                                </div>
                            </div>
                            <div id='addr1'>  </div>
                        </div>
                        <div col-sm-4>
                            <a id="add_row" class="btn btn-primary ">Add More</a> <a id='delete_row' class="btn btn-danger">Delete</a>
                        </div>
                        <div class="panel-footer">
                            <div class="col-sm-8 col-sm-offset-4">
                                <input name="trigger" type="hidden" value="submit">
                                <button type="submit" class="btn-success btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>