<?php include 'header.php'; ?>
<?php include 'sidenavbar.php'; ?>
<link href="<?php echo base_url('backend_assets/plugins/bower_components/datatables/jquery.dataTables.min.css');?>" rel="stylesheet" type="text/css" />

 <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
             <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="panel-info">
                            <div class="panel-heading">
                             <form  id="searchform" class="form" role="form"  method="post"> 
                              <div class="row">
                               <div class="col-md-2 col-xs-6">
                                  <input class="form-control" type="text" name="kyesearch"  id ="kyesearch" placeholder="W.O. No " >
                                </div>
                               

                                <div class="col-md-2 col-xs-6">
                                <input type="text" class="search_date form-control" name="from_date" id="datepicker-autoclose"  placeholder="From Date"  value="<?php echo  date("01-m-Y")  ?>">                                        
                              </div>
                              

                               <div class="col-md-2 col-xs-6">
                                <input type="text" class="search_date form-control" name="to_date" id="datepicker-autoclose2" value="<?php echo  date("d-m-Y")  ?>">                                        
                              </div>




                                <div class="col-md-2 col-xs-6">
                                 <select class="form-control select2" name="showclient" id="selectclient"  >
                                  <option value="">All Client</option>
                                       <?php  foreach($client as $c)  {  ?>
                                   <option value="<?=$c->CompanyId?>"><?=$c->CompanyName?></option>
                                        <?php } ?>
                                 </select>
                                </div>


                                 <div class="col-md-2 col-xs-6">
                                 <select    name="drp_MarketingExe" id="drp_MarketingExe"  class="form-control select2" >
                                   <option value="">All Executive</option>
                                     <?php  foreach($executive as $c)  {  ?>
                                         <option value="<?=$c->EmpId?>"><?=$c->EmpName?></option>
                                     <?php } ?>
                                 </select>
                                </div>


                                 <div class="form-group col-md-2 col-sm-2 col-xs-12">
                                      <input type="submit" value="Show" class="btn btn-warning btn-rounded">
                                  </div>
                                    </div>


                                     <div class="row">

                               <!-- <div class="col-md-2 col-xs-6">
                                 <div class="radio radio-warning">
                                    <input type="radio" name="drp_postatus" id="radio14" value="" checked="checked">
                                    <label for="radio14">ALL Order</label>
                                </div>                                      
                              </div> -->


                              <div class="col-md-2 col-xs-6">
                                 <div class="radio radio-warning">
                                    <input type="radio" name="drp_postatus" id="radio14" value="0" checked="checked">
                                    <label for="radio14">Pending</label>
                                </div>                                      
                              </div>


                              <div class="col-md-2 col-xs-6">
                                 <div class="radio radio-success">
                                    <input type="radio" name="drp_postatus" id="radio14" value="1">
                                    <label for="radio14">Approved</label>
                                </div>                                      
                              </div>



                              <div class="col-md-2 col-xs-6">
                                 <div class="radio radio-danger">
                                    <input type="radio" name="drp_postatus" id="radio14" value="2">
                                    <label for="radio14">Rejected </label>
                                </div>                                      
                              </div>
                                <!-- <form method="post" id="status_update"> -->
                                  <div class="col-lg-2 col-sm-4 col-xs-12">
                                    <button id="change_status"  onclick="submitForm('<?php echo base_url('enquiry_master/update_approval_status');?>')" class="btn btn-block btn-success btn-rounded">Approve</button>
                                </div>



                                <div class="col-lg-2 col-sm-4 col-xs-12">
                                    <button id="change_status_reject" onclick="submitForm('<?php echo base_url('enquiry_master/update_approval_status_reject');?>')"  class="btn btn-block btn-danger btn-rounded">Reject</button>
                                </div>
                                <!-- </form> -->

                              </div>
                                </form>
                             </div>
                          </div>


                    
                        <div class="white-box">
                             <div >
                              <!-- <form method="post" id="status_update"  > -->
                               <div id="tbl_search_mode_tbody">
                                <center><h3>Data Shown be Here</h3></center>
                              </div>
                              <input style="display: none;" type="submit" id="update_status" class="update_status btn-success"  name="update_status" value="update">
                               <!-- </form> -->
                        </div>
                        </div>

                        
                    </div>
                </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
 
<?php include 'footer.php'; ?>



<script>
        
function changeflag(lnk) {
    var flag = $("#hdn_flag\\["+ lnk +"\\]").val();
    if (flag == 0) {
    $("#hdn_flag\\["+ lnk +"\\]").val(1);

    }
}

$('input[type=radio]').on('change', function() {
    $(this).closest("form").submit();
});


$(document).ready(function () {
    table = $('#tbl_enq').DataTable({
    });
});
</script>




<script type="text/javascript">
$(document).ready(function(){
  $('#searchform').on('submit', function(e) {     
    e.preventDefault();  
    var url = "<?php echo base_url('enquiry_master/search_enquiry_approval');?>";
    var data1 =    $('#searchform').serialize(); 
   startSpinner();
    $.ajax({
      url: url,
      method:"post", 
      data: data1,
      success: function(msg)
      {
      $('#tbl_search_mode_tbody').html(msg);
      stopSpinner();
      }

    })
  });
});

</script>

<script type="text/javascript">
$('#change_status').on('click',function(){
     $(".update_status").click(); 
    return false;
 });

</script>



<script type="text/javascript">
  function submitForm(myurl){
    var check = 0;
    var len = $("#tbl_search_mode_tbody tr").length;
     for (var i = 0; i < len; i++) {
        var flag = $("#chk\\["+ i +"\\]").is(':checked');
        if (flag == true) {
          check = parseInt(check) + 1;
        }
      }
      if (check == 0) {
        swal("Please Check Atleast 1");
            return false;
        }
    //e.preventDefault();  
    var url = myurl;
    var data1 =$('#status_update').serialize(); 
    // alert(data1);
   startSpinner();
    $.ajax({
      url: url,
      method:"post", 
      data: data1,
      success: function(msg)
      {
      swal(msg);
      console.log(msg);
      // window.location.reload();
    table.ajax.reload();
      stopSpinner();
      }

    })
  }

</script>


 <script src="<?php echo base_url('backend_assets/plugins/bower_components/datatables/jquery.dataTables.min.js');?>"></script>
   
