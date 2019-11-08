<section class="hotel_reg">

    <div class="container">	
        <div class="add_hotel_p col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Hotel Registration</h2>
        </div>

        <form action="<?php echo site_url('home/add_hotel') ?>" method="POST" enctype="multipart/form-data">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="change_information">
                    <div class="update_info col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p class="abt_hotel">About Your Hotel</p>
                        <h3><?php echo $this->session->flashdata('notification');  ?></h3>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">	
                                    <span><strong >Hotel name</strong></span>
                                    <input name="hotel_name" type="text" placeholder="Hotel name"  class="update_change form-control input-md " required="required"/>
                                </div>						
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <span><strong >Address</strong></span>
                                    <input name="hotel_address" type="text" placeholder="Address"  class="update_change form-control input-md " required="required"/>
                                </div>					
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">	
                                    <span><strong >E-mail</strong></span>
                                    <input name="hotel_email" type="email" placeholder="E-mail"  class="update_change form-control input-md " required="required"/>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <span><strong >Website</strong></span>
                                    <input name="hotel_website" type="text" placeholder="Website" autocomplete="off"  class="update_change form-control input-md " required="required"/>
                                </div>
                                					
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">	
                                    <span><strong >Password</strong></span>
                                    <input name="hotel_pass" type="password" placeholder="Password"  class="update_change form-control input-md " required="required"/>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">	
                                    <span><strong >Confirm Password</strong></span>
                                    <input name="hotel_con_pass" type="password" placeholder="Confirm Password"  class="update_change form-control input-md " required="required"/>
                                </div>					
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">	
                                    <span><strong >City</strong></span>
                                    <input name="hotel_city" type="text" placeholder="City"  class="update_change form-control input-md " required="required"/>
                                </div>	
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">	
                                    <span><strong> Division</strong></span>
                                    <input name="hotel_division" type="text" placeholder="Division"  class="update_change form-control input-md " required="required"/>
                                </div>
                                					
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <span><strong >Country</strong></span>
                                    <input name="hotel_country" type="text" placeholder="Country"  class="update_change form-control input-md " required="required"/>
                                </div>                              
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">	
                                    <span><strong >Postal Code/Zip Code</strong></span>
                                    <input name="hotel_post_code" type="text" placeholder="Postal Code/Zip Code"  class="update_change form-control input-md " required="required"/>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">	
                                    <span><strong >Mobile No.</strong></span>
                                    <input name="hotel_mobile" type="text" placeholder="Mobile No"  class="update_change form-control input-md " required="required"/>
                                </div>						
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <span><strong >Telephone No.</strong></span>
                                    <input name="hotel_telephone" type="text" placeholder="Telephone No"  class="update_change form-control input-md " required="required"/>
                                </div>					
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">	
                                    <span><strong>Hotel Reg: No. </strong></span>
                                    <input name="hotel_reg_no" type="text" placeholder="Hotel Reg: Number"  class="update_change form-control input-md " required="required"/>
                                </div>						
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <span><strong >Check in/Out Time</strong></span>
                                    <input name="checkin_out_time" type="time" placeholder="Check in/Out Time"  class="update_change form-control input-md " required="required"/>
                                </div>					
                            </div>
                        </div>
                        <div class="form-group">					
                            <span><strong >Hotel's Star</strong></span>
                            <br/>					
                            <input type="radio" name="stars" value="1"/> 1 Star
                            <input type="radio" name="stars" value="2"/> 2 Star
                            <input type="radio" name="stars" value="3"/> 3 Star					
                            <input type="radio" name="stars" value="4"/> 4 Star					
                            <input type="radio" name="stars" value="5"/> 5 Star					
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <div class=" frm_dorder col-sm-12">
                                <label for="exampleInputFile">Upload Hotel Image</label>
                                <input class="hotel_img_up" type="file" multiple name="userfile[]" size="20">   
                            </div>
                            </div>
                        </div>                        
<!--                        <div class="form-group">		
                            <input name="" type="checkbox"> I have Read the Terms & Conditions of this Form
                        </div>-->
                        <div class="form-group our_span">
                            <input name="trigger" type="submit"  class="btn custom_button pull-left"  value="Submit"/>								
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>