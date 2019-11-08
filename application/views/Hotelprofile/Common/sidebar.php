    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="<?php echo site_url('hotelprofile') ?>"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                </li> 
                <li>
                    <a href="#"><i class="fa fa-bars nav_icon"></i>Booking's<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url('hotelprofile/booking_list') ?>"><i class="fa fa-indent nav_icon"></i>Booking List</a>
                            <a href="<?php echo site_url('hotelprofile/booking_request') ?>"><i class="fa fa-indent nav_icon"></i>Booking Request</a>
                            <a href="<?php echo site_url('hotelprofile/booking_cancel_request') ?>"><i class="fa fa-indent nav_icon"></i>Booking Cancel Request</a>
                            <a href="<?php echo site_url('hotelprofile/booking_history') ?>"><i class="fa fa-indent nav_icon"></i>Booking History</a>
                        </li>
                       
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-bars nav_icon"></i>Hotel Room's<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo site_url('hotelprofile/room_details') ?>"><i class="fa fa-indent nav_icon"></i>Add Hotel Room's</a>
                            <a href="<?php echo site_url('hotelprofile/roomlist') ?>"><i class="fa fa-indent nav_icon"></i>Room's List</a>
                        </li>
                       
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
<!--                <li>
                    <a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="">Inbox</a>
                        </li>
                        <li>
                            <a href="">Compose email</a>
                        </li>
                    </ul>
                     /.nav-second-level 
                </li>
                <li>
                    <a href="#"><i class="fa fa-envelope nav_icon"></i>Offers<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="inbox.html">Make offers</a>
                        </li>
                    </ul>
                     /.nav-second-level 
                </li>-->
               <li class="m_2"><a href="<?php echo site_url('logoutpro') ?>"><i class="fa fa-lock nav_icon"></i> Logout</a></li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>