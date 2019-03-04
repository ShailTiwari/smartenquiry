<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('backend_assets/plugins/images/smartmislogo.png');?>');?>">
    <title>Renuka || SMART HRM</title>
    <!-- Custom CSS -->

    <link  href="<?php echo base_url('backend_assets/css/stylelogin.css');?>" rel="stylesheet">
    
<link href="<?php echo base_url('backend_assets/plugins/bower_components/sweetalert/sweetalert.css');?>" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <!--  <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div> -->
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->



        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?php echo base_url('backend_assets/plugins/images/auth-bg.jpg');?>) <?php echo "no-repeat center center"?>;">
            <div class="auth-box">
                <div>
                    <div class="logo">
                        <span class="logo">

                           <!--  <img src="<?php echo base_url('backend_assets/plugins/images/smartmislogo.png');?>" alt="logo" /> -->
                        </span>
                        <h5 class="font-medium mb-3">Sign In to Smart MIS </h5>
                    </div>

                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                        <form method="post" class="form-horizontal new-lg-form" id="loginform" action="<?php echo base_url('index.php/Login/Login_Admin');?>">  

                    <div class="form-group">
                      <div class="col-xs-12">
                        <label>Login User Name</label>                        
                        <input name="email"  class="form-control" type="text" required="" placeholder="Username">
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="col-xs-12">
                        <label>Password</label>
                        <input class="form-control"  name="password" type="password" required="" placeholder="Password">
                      </div>
                    </div>



                        <div class="row">
                        <button type="submit" class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light">Sign In</button>
                    <!-- /.col -->
                   </div>
                 </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->

  <?php if($this->session->flashdata('item')) { 
  $message = $this->session->flashdata('item');
  ?>
<script>
  window.onload = function() {
 swal("<?php echo $message; ?>", "Login Fail");
};
</script>
<?php } ?>



    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('backend_assets/plugins/bower_components/sweetalert/sweetalert.min.js');?>"></script>
    <script src="<?php echo base_url('backend_assets/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js');?>"></script>

     <script src="<?php echo base_url('backend_assets/plugins/bower_components/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url('backend_assets/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>


    <script type="text/javascript">
    function finyrchange() {
        var val = $("#finyr").val();
        if (val == "xxxxx") {
            alertModal("Select Fin yr !!");
            return false;
        } else {
          $('html, body').css("cursor", "wait");
            $.ajax({
                type: "POST",
                async: false,
                url: "<?php echo base_url('Login/companyload') ?>",
                data: {val: val},
                success: function (res) {
                    var data = jQuery.parseJSON(res);
                    if(data.err == 1) {
                        //alert(data.msg);
                        return false;
                    } else {
                        $("#company").empty();
                        $("#company").append(data.companyprof);
                    }

                }
            });
      $('html, body').css("cursor", "auto");
        }
    }
</script>

</body>

</html>