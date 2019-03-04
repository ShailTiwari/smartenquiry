<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#4632c8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('backend_assets/plugins/images/users/smartmislogo.png');?>">
    <title>MIS|Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('backend_assets/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url('backend_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css');?>" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url('backend_assets/css/animate.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('backend_assets/css/style.css');?>" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url('backend_assets/css/colors/green-dark.css');?>" id="theme" rel="stylesheet">

    
    <link href="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-table/dist/bootstrap-table.min.css');?>" rel="stylesheet" type="text/css" />

     

     <!-- Select2 CSS -->
    <link href="<?php echo base_url('backend_assets/plugins/bower_components/custom-select/custom-select.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('backend_assets/plugins/bower_components/switchery/dist/switchery.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('backend_assets/plugins/bower_components/multiselect/css/multi-select.css');?>" rel="stylesheet" type="text/css" />

    
    <!-- sweetalert plugins css -->
    <link href="<?php echo base_url('backend_assets/plugins/bower_components/sweetalert/sweetalert.css');?>" rel="stylesheet" type="text/css">

     <!-- Date picker plugins css -->
    <link href="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css');?>" rel="stylesheet" type="text/css" />


<link href="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datetimepicker.min.css');?>" rel="stylesheet" type="text/css" />


   <style type="text/css">
   .spinner 
    {
    position: absolute;  
    width: 100%;
    height: 100%;
    padding:30px 15px 0px;
    box-shadow:1px 1px 10px #ababab;
    background-color: #c5bbbb36;
    z-index: 1250;
    text-align:center;
    overflow: auto;
        }
   </style>
    
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->


    <div class="preloader">
         <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
       <!--  <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg> -->
    </div>


    <div id="spinner" class="spinner" style="display: none;">
         <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
        </svg> -

        <!-- <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div> -->

            
    </div>


    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       



        <nav class="navbar navbar-default navbar-static-top m-b-0 hidden-sm hidden-md hidden-lg hidden-xl">
            <div class="navbar-header">
              


                 <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="#">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?php echo base_url('backend_assets/plugins/images/users/smartmislogo.png');?>" alt="home" class="dark-logo" style="height: 30px;width: 30px;" />
                        
                        <!--This is light logo icon--><img src="<?php echo base_url('backend_assets/plugins/images/users/smartmislogo.png');?>" alt="Renuka Softetec" style="height: 30px;width: 30px;" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?php echo base_url('backend_assets/plugins/images/users/smartmislogo.png');?>" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?php echo base_url('backend_assets/plugins/images/users/smartmislogo.png');?>" alt="home" class="light-logo" />
                     </span> </a>
                </div>



                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
                    
                </ul>


                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>

                    <?php foreach($profile as $r) { ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo base_url('backend_assets/plugins/images/users/smartmislogo.png');?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?=$r->UserName?></b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="<?php echo base_url('backend_assets/plugins/images/users/smartmislogo.png');?>" alt="user" /></div>
                                    <div class="u-text"><h4><?=$r->UserName?></h4><p class="text-muted"><?=$r->Post?></p><a href="<?php echo base_url('main/profile') ?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url('main/profile') ?>"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                              <?php  }  ?>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
