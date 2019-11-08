<section class="user_reg">	
    <div class="container">
        <div class="custom_p col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p>Create your Account</p>
        </div>
    </div>
    <div class="container">	
        <div class="custom_right col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
            <form action="<?php echo site_url('home/signup') ?>" method="POST">	
                <h3><?php echo $this->session->flashdata('notification');  ?></h3>
                <div class="form-group our_span">
                    
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <span><strong >First Name</strong></span>
                            <input name="user_f_name" type="text" placeholder="First Name"  class="custominput form-control input-md " />
                        </div>						
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <span><strong >Last Name</strong></span>
                            <input name="user_l_name" type="text" placeholder="Last Name"  class="custominput form-control input-md " />
                        </div>					
                    </div>				
                </div>
                <div class="form-group our_span"> 
                    <span><strong >Enter Your Email</strong></span>
                    <input name="user_email" type="email" placeholder="Email" class="custominput form-control input-md " />
                </div>
                <div class="form-group our_span">
                    <span><strong >Create a password</strong></span>
                    <input name="user_password" type="password" placeholder="password"   class="custominput form-control input-md " />
                </div>
                <div class="form-group our_span"> 
                    <span><strong >Confirm password</strong></span>                    
                    <input name="user_conf_password" type="password" placeholder="Confirm password"  class="custominput form-control input-md " />
                </div>	

                <div class="form-group our_span">
                   	<span><strong >Mobile No:</strong></span>				
                    <input name="user_mobile" type="text" placeholder="Mobile No"  class="custominput form-control input-md " />
                </div>
                
                <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <span><strong >Address</strong></span>			
                            <input name="user_address" type="text" placeholder="Address"  class="custominput form-control input-md " />
                        </div>						
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <span><strong >Country</strong></span>			
                            <input name="user_country" type="text" placeholder="Country"  class="custominput form-control input-md " />

                        </div>					
                    </div>

                <div class="form-group">					
                    <span><strong >Gender</strong></span>
                    <br/>					
                    <input type="radio" name="user_gender" value="1"/> Male
                    <input type="radio" name="user_gender" value="2"/> Female
                    <input type="radio" name="user_gender" value="3"/> Others					
                </div>					
                <div class="form-group">		
                    <input type="checkbox"> I have Read the Terms & Conditions of this Form
                </div>


                <div class="form-group our_span">
                    <input name="trigger"  type="submit"  class="btn custom_button pull-left"  value="Signup"/>			
                    <a  href="login.html"><p class="pull-right">Already have an account? LogIn</p></a>					
                    <br>
                    <br>
                </div>

            </form>

        </div>

    </div>
</section>