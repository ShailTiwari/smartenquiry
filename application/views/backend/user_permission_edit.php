<?php include 'header.php'; ?>
 <link href="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-table/dist/bootstrap-table.min.css');?>" rel="stylesheet" type="text/css" />
<?php include 'sidenavbar.php'; ?>


  <div id="page-wrapper">
            <div class="container-fluid">
                <!--.row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                           
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">


                   <div class="row">
                 
                    <div class="col-md-6 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Edit Permission</h3>
                            <div class="row">
                          <?php foreach($operator_info as $r) {?>
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post"  action="<?php echo base_url('Permission_master/update_supervisor_master');?>">
                                      


                                        <div class="form-group">
                                            <label for="exampleInputuname">User Name</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                 <input  value="<?=$r->UserID?>" name="user_id" type="hidden" >
                                                 <input type="text" value="<?=$r->UserLoginName?>" name="username" class="form-control" id="exampleInputuname" placeholder="Username"> </div>
                                        </div>
                                       
                                       

                                        <div class="form-group">
                                            <label for="exampleInputpwd1">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-lock"></i></div>
                                                <input type="password"  value="<?=$r->UserPassword?>"  name="password"  class="form-control" id="exampleInputpwd1" placeholder="Enter Password"> </div>
                                        </div>
                                       

                                         <div class="form-group">
                                            <label for="exampleInputuname">Status</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-check"></i></div>
                                                  <select id="Status"  name="status"  class="form-control">  
                                                    <option value="1" selected="selected">Active</option>
                                                    <option value="0">De-Active</option>
                                                  </select>
                                                </div>
                                           </div>  

                                         <div class="form-group">
                                            <label for="exampleInputuname">Check Permission</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-check-box"></i></div>
                                                    <div id="operators"> 
                                                      <?php foreach($operator_mydepartment as $od)
                                                      {
                                                       ?>
                                                       <div class="checkbox checkbox-success checkbox-circle">                      
                                                          <input type="checkbox"  name="check_list[]"  value="<?=$od->category_id?>" <?php  
                                                      foreach($operator_check as $o) {if ($od->category_id==$o->ModuleID) {echo "checked";  } }  ?> >
                                                      <label  <?php if ($od->parent_id==0) { ?>style="color: red;font-size: 14px;" <?php  } ?>  for="checkbox0"><?php  echo $od->name; ?></label>
                                                                  </div>


                                                                 
                                                  <?php  } ?>
                                                   </div>
                                                </div>
                                           </div>   


                                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                         <a href="<?php echo base_url('main/supervisor');?>"><span id="listbutton" class="btn btn-info waves-effect waves-light m-r-10">New</span></a>
                                        <span id="listbutton" onclick="getlist();" class="btn btn-info waves-effect waves-light m-r-10">Search</span>
                                    </form>
                                </div>
                                 <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                 <table data-toggle="table" data-height="530" data-mobile-responsive="true" class="table-striped">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody id="list">

                                </tbody>
                            </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--./row-->
<script>



 function getlist()
{
 var mat="<?php echo base_url('Permission_master/get_sup_list');?>";
  startSpinner();
 $.ajax({
      url:mat,
      async:false,
 success:function(data){
//consol.log(data);
 //  alert(data);
 $('#list').html(data);
 stopSpinner();

 } }); }
</script>




 <?php if($this->session->flashdata('item')) { 
  $message = $this->session->flashdata('item');
  ?>
<script>
  window.onload = function() {
 swal("<?php echo $message; ?>", "Result");
};
</script>
<?php } ?>



<?php include 'footer.php'; ?>

    <script src="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-table/dist/bootstrap-table.min.js');?>"></script>
    <script src="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-table/dist/bootstrap-table.ints.js');?>"></script>