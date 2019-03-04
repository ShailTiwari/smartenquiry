<?php include 'header.php'; ?>
<?php include 'sidenavbar.php'; ?>
  <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
   <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4> </div>
                  
                </div>
                <!-- /.row -->
                <!-- .row -->
                 <?php foreach($profile as $r)
                         { ?>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="<?php echo base_url('backend_assets/plugins/images/users/smartmislogo.png');?>">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="<?php echo base_url('backend_assets/plugins/images/users/smartmislogo.png');?>" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white"><?=$r->UserName?> </h4>
                                        <h5 class="text-white"><?=$r->Post?></h5> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-purple"><i class="ti-facebook"></i></p>
                                    </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-blue"><i class="ti-twitter"></i></p>
                                    </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-danger"><i class="ti-dribbble"></i></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <ul class="nav nav-tabs tabs customtab">
                                
                                <li class="active tab">
                                    <a href="#profile" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Profile</span> </a>
                                </li>

                                <li class="tab">
                                    <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Settings</span> </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                               
                                <div class="tab-pane" id="profile">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                            <br>
                                            <p class="text-muted"><?=$r->UserName?></p>
                                        </div>

                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                            <br>
                                            <p class="text-muted"><?=$r->Email?></p>
                                        </div>


                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                            <br>
                                            <p class="text-muted"><?=$r->Ph1?></p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Post</strong>
                                            <br>
                                            <p class="text-muted"><?=$r->Post?></p>
                                        </div>
                                       
                                    </div>
                                    <hr>
                                    <p class="m-t-30"></p>
                                    <h4 class="font-bold m-t-30">Skill Set</h4>
                                    <hr>
                                    <h5>Test1 <span class="pull-right">80%</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
                                    </div>
                                    <h5>Test2 <span class="pull-right">90%</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
                                    </div>
                                    <h5>Test3 <span class="pull-right">50%</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
                                    </div>
                                    <h5>Test4 <span class="pull-right">70%</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal form-material" method="post" action="">
                                        <div class="form-group">
                                            <label class="col-md-12">User Name</label>
                                            <div class="col-md-12">
                                                <input type="text" name="name" value="<?=$r->UserLoginName?>" placeholder="Johnathan Doe" class="form-control form-control-line"> </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="col-md-12">Password</label>
                                            <div class="col-md-12">
                                                <input type="password" name="password" value="<?=$r->UserPassword?>" class="form-control form-control-line"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Phone No</label>
                                            <div class="col-md-12">
                                                <input type="text" name="phone" value="<?=$r->Ph1?>" placeholder="123 456 7890" class="form-control form-control-line"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">About</label>
                                            <div class="col-md-12">
                                                <textarea rows="5" class="form-control form-control-line"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
              
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
         </div>
            <!-- /.container-fluid -->
           
            <footer class="footer text-center"> <?php echo date('Y'); ?> © MIS Renuka Softec Indore  </footer>
        </div>
        <!-- /#page-wrapper -->
 
<?php include 'footer.php'; ?>