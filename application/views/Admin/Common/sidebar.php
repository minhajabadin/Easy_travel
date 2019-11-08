<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu" >
                        <li>
                            <a href="<?php echo site_url('admin')?>"style="color: white;"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li style="color: white;">
                            <a href="<?php echo site_url('admin/hotel_approval')?>"style="color: white;"><i class="fa fa-indent nav_icon"></i>Hotel<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('admin/hotel_approval')?>"style="color: white;"><i class="fa fa-list-alt nav_icon"></i>Approval List</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/hotel_list')?>"style="color: white;"><i class="fa fa-list-alt nav_icon"></i>Hotel List</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
<!--                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="compose.html">Compose email</a>
                                </li>
                            </ul>
                             /.nav-second-level 
                        </li>-->
                        <li>
                            <a href="<?php echo site_url('admin/message')?>"style="color: white;"><i class="fa fa-envelope nav_icon"></i>Inbox</a>
<!--                             /.nav-second-level -->
                        </li>
                               <li class="m_2"><a href="<?php echo site_url('logout') ?>"style="color: white;"><i class="fa fa-lock nav_icon"></i> Logout</a></li>
                           
                            <!-- /.nav-second-level -->
                 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>