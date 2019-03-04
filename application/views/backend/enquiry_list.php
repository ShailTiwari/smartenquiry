<link href="<?php echo base_url('backend_assets/plugins/bower_components/datatables/jquery.dataTables.min.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('backend_assets/datatable_button/buttons.dataTables.min.css');?>" rel="stylesheet" type="text/css" />
<?php include 'header.php'; ?>
<?php include 'sidenavbar.php'; ?>


 <div id="page-wrapper">
            <div class="container-fluid">
               <!--.row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"> 
                                <form  id="searchform" class="form" role="form"  method="post"> 
                              <div class="row">
                               <div class="col-md-3 col-xs-6">
                                  <input class="form-control" type="text" name="kyesearch"  id ="kyesearch" placeholder="Enquiry No or  Person or Product Name" >
                                </div>
                               <div class="col-md-2 col-xs-6">
                                <input type="text" class="search_date form-control" name="enq_date" id="datepicker-autoclose"  placeholder="Date" placeholder="Enquiry Date">                                        
                              </div>

                                <div class="col-md-3 col-xs-6">
                                 <select class="form-control select2" name="showclient" id="selectclient"  >
                                  <option value="" selected="selected">All Client</option>
                                       <?php  foreach($client as $c)  {  ?>
                                   <option value="<?=$c->CompanyId?>"><?=$c->CompanyName?></option>
                                        <?php } ?>
                                 </select>
                                </div>

                                <!--/span-->
                                <div class="col-md-2 col-xs-6">
                                  <select class="form-control" name="count" id="selectcount" data-placeholder="Choose a Category" tabindex="1">
                                        <option value='10' class=Selected>10</option>
                                        <option value='50' class=Selected>50</option>
                                        <option value='100' class=Selected>100</option>
                                          <option value='500' class=Selected>500</option>
                                        <option value='' class=Selected>All</option>
                                  </select>                                        
                                </div>

                                 <div class="form-group col-md-2 col-sm-2 col-xs-12">
                                      <input type="submit" value="Show" class="btn btn-warning">
                                      <a class="btn btn-success" style="text-decoration: none;  color: #f3f0f0;" href="<?php echo base_url('enquiry_master/add');?>">Add New</a>
                                  </div>
                                    </div>
                                </form>

                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                  <div class="col-sm-12">
                        <div class="white-box">
                         <div id="tbl_search_mode_tbody">
                            <center><h3>Data Shown be Here</h3></center>
                          </div>
                        </div>
                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--./row-->
            </div>
            <footer class="footer text-center"> <?php date('Y')  ?> &copy; MIS Renuka Softec Indore </footer>
        </div> 
    
<?php include 'footer.php'; ?>
<script type="text/javascript">
$(document).ready(function(){
  $('#searchform').on('submit', function(e) {     
    e.preventDefault();  
    var url = "<?php echo base_url('enquiry_master/search_enquiry');?>";
    var data1 =    $('#searchform').serialize(); 
    //startSpinner();
    $.ajax({
      url: url,
      method:"post", 
      data: data1,
      success: function(msg)
      {
      $('#tbl_search_mode_tbody').html(msg);
      //stopSpinner();
      }

    })
  });
});
</script>




<script type="text/javascript">
$( document ).ready(function() 
{
      var url = "<?php echo base_url('enquiry_master/search_enquiry');?>";
    var data1 =    $('#searchform').serialize(); 
    //startSpinner();
    $.ajax({
      url: url,
      method:"post", 
      data: data1,
      success: function(msg)
      {
      $('#tbl_search_mode_tbody').html(msg);
      //stopSpinner();
      }
})
});  
    
</script>








<script src="<?php echo base_url('backend_assets/plugins/bower_components/datatables/jquery.dataTables.min.js');?>"></script>


  <!-- start - This is for export functionality only -->
  <script src="<?php echo base_url('backend_assets/datatable_button/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('backend_assets/datatable_button/buttons.flash.min.js');?>"></script>
    <script src="<?php echo base_url('backend_assets/datatable_button/buttons.jszip.min.js');?>"></script>
    <script src="<?php echo base_url('backend_assets/datatable_button/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('backend_assets/datatable_button/vfs_fonts.js');?>"></script>
    <script src="<?php echo base_url('backend_assets/datatable_button/buttons.html5.min.js');?>"></script>
    <script src="<?php echo base_url('backend_assets/datatable_button/buttons.print.min.js');?>"></script>
    <!-- end - This is for export functionality only -->

