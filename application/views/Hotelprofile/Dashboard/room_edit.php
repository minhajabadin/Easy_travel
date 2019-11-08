<div id="page-wrapper">
    <div class="graphs">
        <div class="xs" style="padding-left: 200px;">
            <h3>Room Details</h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <h1><?php echo $this->session->flashdata('notification') ?></h1>
                    <form action="<?php echo site_url('Hotelprofile/room_edit') ?>" method="POST" class="form-horizontal">
                        <div id="logic_form">
                            <div class="form-group">
                               <div class="col-sm-4">
                                   <span><strong> Room Name</strong></span>
                                   <input name="room_name" value="<?php echo $all_data->room_name ;?>" type="text" class="form-control1"  placeholder="Room Name" required="required" >
                               </div>
                                <div class="r_name col-sm-4">
                                    <span><strong> Person's</strong></span>
                                    <input name="room_capacity" value="<?php echo $all_data->room_capacity ;?>" type="text" class="form-control1"  placeholder="How Many Person" required="required" >
                                </div>
                           </div>
                           <div class="form-group">
                               <div class="col-sm-4">
                                   <span><strong > Room Type</strong></span>
                                   <select class="form-control1 input-md" name="room_type" required>
                                       <option value="0">Select Room Type</option>
                                       <option value="1" <?php if($all_data->room_type == 1){echo 'selected';} ?>>Single Room</option>
                                       <option value="2" <?php if($all_data->room_type == 2){echo 'selected';} ?>>Double Room</option>
                                       <option value="3" <?php if($all_data->room_type == 3){echo 'selected';} ?>>Option 3</option>
                                   </select>
                               </div>
                               <div class="col-sm-4">
                                   <span><strong > Bed Type</strong></span>
                                   <select class="form-control1 input-md" name="bed_type" required="required">
                                       <option value="0" >Select Bed Type </option>
                                       <option value="1" <?php if($all_data->bed_type == 1){echo 'selected';} ?>>Single Bed</option>
                                       <option value="2" <?php if($all_data->bed_type == 2){echo 'selected';} ?>>Master Bed</option>
                                       <option value="3" <?php if($all_data->bed_type == 3){echo 'selected';} ?>>Single Twin Bed</option>
                                       <option value="4" <?php if($all_data->bed_type == 4){echo 'selected';} ?>>One Master & Twin Bed</option>
                                       <option value="5" <?php if($all_data->bed_type == 5){echo 'selected';} ?>>Two Master Bed</option>
                                       <option value="6" <?php if($all_data->bed_type == 6){echo 'selected';} ?>>Two Twin Bed</option>
                                   </select>
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-sm-4">
                                   <span><strong> Room Information</strong></span>
                                   <input name="room_info" value="<?php echo $all_data->room_information ;?>" type="text" class="form-control1" id="disabledinput" placeholder="Room Information" required="required">
                               </div>
                               <div class="col-sm-4">
                                   <span><strong>Room Option</strong></span>
                                   <input name="option" value="<?php echo $all_data->room_option ;?>" type="text" class="form-control1" id="mediuminput" placeholder="Room Option" required="required">
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-sm-4">
                                   <span><strong >Rate Per Night</strong></span>
                                   <input name="rate" value="<?php echo $all_data->room_rate ;?>" type="text" class="form-control1" id="mediuminput" placeholder="Rate Per Night" required="required">
                               </div>
                               <div class="col-sm-4">
                                   <span><strong > Discount %</strong></span>
                                   <input name="discount" value="<?php echo $all_data->room_discount ;?>" type="text" class="form-control1" id="disabledinput" placeholder="Total Room's" required="required">
                               </div>

                           </div>
                           <div class="form-group">
                               <div class="col-sm-4">
                                   <span><strong > Total Room's</strong></span>
                                   <input name="total_room" value="<?php echo $all_data->total_room ;?>" type="text" class="form-control1" id="disabledinput" placeholder="Total Room's" required="required">
                               </div>
                               <div class="col-sm-8" style="padding-top: 25px;">
                                   <span><strong >AC/Non-AC  :   </strong></span>
                                   <div class="radio-inline" style="padding-top: 0px;"><label><input name="ac" type="radio" value="1" <?php if($all_data->room_ac == 1){echo 'checked';} ?> required="required">Non AC</label></div>
                                   <div class="radio-inline" style="padding-top: 0px;"><label><input name="ac" type="radio" value="2" <?php if($all_data->room_ac == 2){echo 'checked';} ?> required="required">AC</label></div>
                               </div>
                           </div>
                          
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8">
                                <input name="rooms_id" type="hidden" value="<?php echo $all_data->rooms_id ?>">
                                <input name="trigger" type="hidden" value="submit">
                                <button type="submit" class="btn-success btn">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>