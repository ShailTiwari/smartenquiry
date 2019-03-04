   <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <ul class="nav" id="side-menu">

                     <?php foreach($profile as $r) { ?>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="<?php echo base_url('backend_assets/plugins/images/users/smartmislogo.png');?>" alt="user-img" class="img-circle"> <span class="hide-menu"><?=$r->UserName?><span class="fa arrow"></span></span>
                        </a>
                         <ul class="nav nav-second-level">
                           
                            <li>
                                <a href="<?php echo base_url('main/dashboard') ?>"><i class="ti-dashboard "></i> <span class="hide-menu">Dashboard</span></a>
                            </li>

                            <li><a href="<?php echo base_url('main/profile') ?>"><i class="ti-user"></i> <span class="hide-menu">My Profile</span></a></li>

                            <li><a href="<?php echo base_url('main/profile') ?>"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a></li>

                            <li><a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
                        </ul>
                    </li>
                    <?php  }  ?>


                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-cart-outline fa-fw" data-icon="v"></i> <span class="hide-menu">Order Management<span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> 
                                <a href="<?php echo base_url('enquiry_master/add') ?>"><i class="mdi mdi-account-plus fa-fw"></i><span class="hide-menu">Enquiry Add</span></a> 
                            </li>

                            <li> 
                                <a href="<?php echo base_url('enquiry_master/enquiry_list') ?>"><i class="mdi mdi-table-large fa-fw"></i><span class="hide-menu">Enquiry List</span></a> 
                            </li>

                            <li> 
                                <a href="<?php echo base_url('enquiry_master/enquiry_approval') ?>"><i class="mdi mdi-briefcase-check fa-fw"></i><span class="hide-menu">Enquiry Approval</span></a> 
                            </li>

                                                    
                        </ul>
                    </li>

                 

                 
                 <!--   <?php foreach($sidebar_nav as $s) { ?>
                    <li>
                     <a href="<?=$s->link?>" class="waves-effect"><i class="<?=$s->icon?>" data-icon="v"></i> <span class="hide-menu"><?=$s->name?><span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <?php
                            $myuser_check=$_SESSION['user_id'];
                            if ($myuser_check=='00001')
                             {
                                
                                 $query = $this->db->query("SELECT * FROM ample_admin_category WHERE parent_id =$s->category_id and top=1  and status=1;");
                            }


                            else
                            {
                                 $query = $this->db->query("SELECT a.link,a.icon,a.name  from (ample_admin_category a  join user_permission_granted as b on a.category_id=b.ModuleID and b.UserId='$myuser_check') where   parent_id=$s->category_id and a.top=1   and status=1;"); 
                            }






                              $sidebar_sub_nav =$query->result();
                              foreach($sidebar_sub_nav as $p) { ?>
                            <li> <a href="<?php echo base_url('') ?><?=$p->link?>"><i class="<?=$p->icon?>"></i><span class="hide-menu"><?=$p->name?></span></a> </li>
                            <?php  }  ?>
                        </ul>
                    </li>
                    <?php  }  ?> -->






                    
                  

                    



                   <!--   <li> <a href="#" class="waves-effect"><i class="mdi mdi-security fa-fw" data-icon="v"></i> <span class="hide-menu">Prerequisite <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> 
                                <a href="<?php echo base_url('Prerequisite_master') ?>"><i class="mdi mdi-security-home fa-fw"></i><span class="hide-menu">ArtWork</span></a> 
                            </li>

                            <li> 
                                <a href="<?php echo base_url('Prerequisite_master') ?>"><i class="mdi mdi-security-home fa-fw"></i><span class="hide-menu">ShadeCard</span></a> 
                            </li>

                            <li> 
                                <a href="<?php echo base_url('Prerequisite_master') ?>"><i class="mdi mdi-security-home fa-fw"></i><span class="hide-menu">PunchDie</span></a> 
                            </li>

                            <li> 
                                <a href="<?php echo base_url('Prerequisite_master') ?>"><i class="mdi mdi-security-home fa-fw"></i><span class="hide-menu">EmboseBlock</span></a> 
                            </li>
                            <li> 
                                <a href="<?php echo base_url('Prerequisite_master') ?>"><i class="mdi mdi-security-home fa-fw"></i><span class="hide-menu">KeyLine</span></a> 
                            </li>

                            <li> 
                                <a href="<?php echo base_url('Prerequisite_master') ?>"><i class="mdi mdi-security-home fa-fw"></i><span class="hide-menu">FoilBlock</span></a> 
                            </li>  

                            <li> 
                                <a href="<?php echo base_url('Prerequisite_master') ?>"><i class="mdi mdi-security-home fa-fw"></i><span class="hide-menu">Board</span></a> 
                            </li> 

                            <li> 
                                <a href="<?php echo base_url('Prerequisite_master') ?>"><i class="mdi mdi-security-home fa-fw"></i><span class="hide-menu">Ink Avaliablity</span></a> 
                            </li>                           
                        </ul>
                    </li> -->



                    




                   <!--  <li> <a href="#" class="waves-effect"><i class="mdi mdi-email fa-fw" data-icon="v"></i> <span class="hide-menu">Mail Test <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url('Automail') ?>"><i class="mdi mdi-email fa-fw"></i><span class="hide-menu">Production Email</span></a> </li>
                            
                            <li> <a href="<?php echo base_url('Automail/indexx') ?>"><i class="mdi mdi-email fa-fw"></i><span class="hide-menu">Cumulative Mail</span></a> </li>
                        </ul>
                    </li> -->

                   
                    
                    <li class="devider"></li>
                   
                    <li><a href="<?php echo base_url('login/logout') ?>" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    <li class="devider"></li>
                    <!-- <li><a href="<?php echo base_url('login/docs') ?>" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li> -->
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->