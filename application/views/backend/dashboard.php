<?php include 'header.php'; ?>
<?php include 'sidenavbar.php'; ?>

         <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                   
                    <!-- /.col-lg-12 -->
                </div>
                 <!-- .row -->
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="white-box">
                                    <h3 class="box-title">Date</h3>
                                    <div class="text-right"> <span class="text-muted">Current Date</span>
                                        <h1><sup><i class="ti-arrow-up text-success"></i></sup> <?php echo $date = date('d/m/Y', time());  ?></h1> </div> <span class="text-success"></span>
                                    <div class="progress m-b-0">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">20% Complete</span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="white-box">
                                    <h3 class="box-title">Time</h3>
                                    <div class="text-right"> <span class="text-muted">Current Time</span>
                                        <h1><sup><i class="ti-arrow-up text-danger"></i></sup>  <?php echo $date = date('h:i:s A', time());  ?></h1> </div> <span class="text-danger"></span>
                                    <div class="progress m-b-0">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only"> Complete</span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="white-box">
                                    <h3 class="box-title">Supervisor</h3>
                                    <div class="text-right"> <span class="text-muted">Total Supervisor</span>
                                        <h1><sup><i class="ti-arrow-up text-info"></i></sup> <?php echo $supervisor_count  ?></h1> </div> <span class="text-info"></span>
                                    <div class="progress m-b-0">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $supervisor_count*100/$user_count  ?>%;"> <span class="sr-only"> Complete</span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="white-box">
                                    <h3 class="box-title">OTHER</h3>
                                    <div class="text-right"> <span class="text-muted">Other user</span>
                                        <h1><sup><i class="ti-arrow-up text-inverse"></i></sup> 0</h1> </div> <span class="text-inverse"></span>
                                    <div class="progress m-b-0">
                                        <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:0%;"> <span class="sr-only">230% Complete</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="row">
                          <div class="col-lg-6 col-md-6">
                        <div class="white-box">
                            <h3 class="box-title">Visit from the ENQUIRY</h3>
                            <ul class="country-state  p-t-20">
                                <li>
                                    <h2><?php echo $Pending  ?></h2> <small>PENDING ENQUIRY</small>
                                    <div class="pull-right"> <i class="fa fa-level-up text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><?php echo $Rejected  ?></h2> <small>ESTIMATED ENQUIRY</small>
                                    <div class="pull-right"> <i class="fa fa-level-up text-inverse"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:98%;"> <span class="sr-only">98% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><?php echo $Quoted  ?></h2> <small>FINALIZED ENQUIRY</small>
                                    <div class="pull-right"><i class="fa fa-level-up text-info"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%;"> <span class="sr-only">75% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><?php echo $Estimated  ?></h2> <small>REJECTED ENQUIRY</small>
                                    <div class="pull-right"> <i class="fa fa-level-up text-danger"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>




                     <div class="col-lg-6 col-md-6">
                        <div class="white-box">
                            <h3 class="box-title">Visit from the WORKORDER</h3>
                            <ul class="country-state  p-t-20">
                                <li>
                                    <h2><?php echo $total_workorder  ?></h2> <small>TOTAL WORKORDER JOB</small>
                                    <div class="pull-right"><i class="fa fa-level-up text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">48% Complete</span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><?php echo $approved_workorder ?></h2> <small>APPROVED WORKORDER JOB</small>
                                    <div class="pull-right"><i class="fa fa-level-up text-inverse"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%;"> <span class="sr-only"></span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><?php echo $pending_workorder  ?></h2> <small>PENDING WORKORDER JOB</small>
                                    <div class="pull-right"><i class="fa fa-level-up text-info"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only"></span></div>
                                    </div>
                                </li>
                                <li>
                                    <h2><?php echo $reject_workorder  ?></h2> <small>REJECT WORKORDER JOB</small>
                                    <div class="pull-right"> <i class="fa fa-level-up text-danger"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only"></span></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>                           
                           
                           
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <footer class="footer text-center"> <?php date('Y')  ?> &copy; MIS Renuka Softec Indore </footer>
        </div>
    
<?php include 'footer.php'; ?>