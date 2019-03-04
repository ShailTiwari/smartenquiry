<?php include 'header.php'; ?>
<?php include 'sidenavbar.php'; ?>
 <div id="page-wrapper">
            <div class="container-fluid">
               <!--.row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">Enquiry Edit</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                         <form id="enquiry_add" method="post">                              
                                <div class="row"> 
                                <div class="col-md-4 col-sm-12">
                                <div class="white-box">
                                <h3 class="box-title m-b-0">Customer details</h3>
                                <div class="row">

                                <div class=" col-md-12 col-sm-12 col-xs-12">  
                                <input id="enquiry_id"  type="hidden"  name="enquiry_id" value="<?php echo $enquiry_id;  ?>" >

                                  <input id="enq_id"  type="hidden"  name="enq_id" >
                                   <input id="Stetus"  type="hidden"  name="Stetus" >
                                         

                                   <div class="form-group">
                                          <label for="exampleInputuname">Enquiry No</label>
                                           <div class="input-group  col-md-12 col-sm-12 col-xs-12">
                                             <input  class="form-control"  type="text" readonly="readonly"  value="<?php echo $enquiry_id;  ?>" >
                                              </div>
                                      </div>



                                   <div class="form-group">
                                          <label for="exampleInputuname">Type</label>
                                          <div class="input-group  col-md-12 col-sm-12 col-xs-12">
                                            <select   id="est_purpose"  name="est_purpose" class="form-control select2" style="background:#eee;pointer-events:none;touch-action: none;">
                                                 <option value="1">Enquiry</option>
                                                 <option value="2">NPDC</option>
                                            </select>
                                              </div>
                                      </div> 


                                     <div class="form-group">
                                          <label for="exampleInputuname">Client</label>
                                          <div class="input-group  col-md-12 col-sm-12 col-xs-12">
                                            <select  onchange="getclient(this.value);getnewclient(this.value);" id="client"  name="client" class="select2 form-control">
                                              <option value="">Select Client</option>
                                               <option value="00000">New Client</option>
                                                 <?php  foreach($client as $c)  {  ?>
                                                     <option value="<?=$c->CompanyId?>"><?=$c->CompanyName?></option>
                                                 <?php } ?>
                                            </select>
                                              </div>
                                      </div>  



                                       <div class="form-group" id="newClient"  style="display:none">
                                          <label for="exampleInputuname">Client Name</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                             <input id="newclientname" style="" class="form-control" type="text" placeholder="Enter client Name" name="newclientname" ></div>
                                       </div>



                                      <div class="form-group">
                                          <label for="exampleInputuname">Executive*</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                              
                                             <select    name="drp_MarketingExe" id="drp_MarketingExe"  class="select2 form-control" ">
                                               <option value="">Select Executive</option>
                                                 <?php  foreach($executive as $c)  {  ?>
                                                     <option value="<?=$c->EmpId?>"><?=$c->EmpName?></option>
                                                 <?php } ?>                                                    
                                            </select>
                                            </div>
                                      </div>  

                                        

                                      <div class="form-group">
                                          <label for="exampleInputuname">Mode of enquiry</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                             
                                             <select class="select2 form-control" id="moffollowup">
                                                   <option value="">Select mode of enquiry</option>
                                                  <option value="0">E-Mail</option>
                                                  <option value="1">Personal visit</option>
                                                  <option value="3">Reference</option>
                                                  <option value="2">Phone Call</option>
                                                  <option value="4">Walking Client</option>
                                              </select>
                                           </div>
                                      </div> 


                                      <div class="form-group">
                                          <label for="exampleInputuname">Client location</label>
                                          <div class="input-group col-md-12  col-sm-12 col-xs-12">
                                             <input id="cloc" style="" class="form-control" type="text" placeholder="Enter client location" name="cloc" ></div>
                                      </div>



                                      <div class="form-group">
                                          <label for="exampleInputuname">Contact Person*</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                              <input id="ccprsn" style="" class="form-control" type="text" placeholder="Enter Contact Person" name="ccprsn" > </div>
                                      </div>


                                       <div class="form-group">
                                          <label for="exampleInputuname">Designation/Department*</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                            <input id="cdesg" style="" class="form-control" type="text" placeholder="Enter Designation/Department" name="cdesg" > </div>
                                      </div>

                                      <div class="form-group">
                                          <label for="exampleInputuname">Mobile*</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                            <input id="cphone" style="" class="form-control" type="text" placeholder="Enter mobile" name="cphone" > </div>
                                      </div> 


                                      <div class="form-group">
                                          <label for="exampleInputuname">Email*</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                            <input id="cemail" style="" class="form-control" type="email" placeholder="Enter email" name="cemail" > </div>
                                      </div> 




                                        <div class="form-group">
                                          <label for="exampleInputpwd1">Despatch Detail</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                           <input id="cdespatch" style="" class="form-control" type="text" placeholder="Enter Despatch Detail" name="cdespatch"></div>
                                      </div>


                                      <div class="form-group">
                                          <label for="exampleInputpwd1">Delivery Date</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                           <input type="text" class="search_date form-control" name="delivery_date" id="datepicker-autoclose"  placeholder="Date" placeholder="Delivery Date">
                                         </div>
                                      </div>


                                         <div class="form-group">
                                          <label for="exampleInputuname">Sample Reference</label>
                                           <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                            <select  id="samplereference"  name="samplereference" class="select2 form-control">
                                                <option value="">Select Sample Reference</option>
                                                <option value="Given By Customer">Given By Customer</option>
                                                <option value="New Concept">New Concept</option>
                                                <option value="As per given sample">As per given sample</option>
                                                <option value="As per AW">As per AW</option>
                                            </select>
                                          </div>
                                        </div>



                                       <div class="form-group">
                                          <label for="exampleInputpwd1">Remarks/Comment</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                           <input id="cremark" style="" class="form-control" type="text" placeholder="Enter Remarks" name="pothr"></div>
                                      </div>

                                </div>
                                </div>
                                </div>
                                </div> 
                                <div class="col-md-4 col-sm-12">
                                <div class="white-box">
                                <h3 class="box-title m-b-0">Item Details</h3>
                                <div class="row">
                                <div class="col-sm-12 col-xs-12 col-sm-12">
                                    
                                    <div class="form-group">
                                          <label for="exampleInputuname">Product Class*</label>
                                          <div class="input-group col-md-12 col-xs-12">
                                                <select   id="itemselect1"  name="itemselect1" class="select2 form-control">
                                                  <option value="">Select Product Class</option>
                                                     <?php  foreach($itemtype as $c)  {  ?>
                                                         <option value="<?=$c->classID?>"><?=$c->className?></option>
                                                     <?php } ?>
                                                </select>
                                              </div>
                                      </div> 


                                      <div class="form-group">
                                          <label for="exampleInputuname">Item*</label>
                                          <div class="input-group col-md-12 col-xs-12">
                                                <select   id="itemselect"  name="itemselect" class="select2 form-control">
                                                  <option value="">Select item</option>
                                                     <?php  foreach($item as $c)  {  ?>
                                                         <option value="<?=$c->ID?>"><?=$c->CartonType?></option>
                                                     <?php } ?>
                                                </select>
                                              </div>
                                      </div>  


                                     
                                      <div class="form-group">
                                          <label for="exampleInputuname">Product Name*</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                             <input id="prdctname" style="" class="form-control" type="text" placeholder="Enter product name*" name="prdctname" ></div>
                                      </div>



                                      <div class="form-group">
                                          <label for="exampleInputuname">Product Code</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                             <input id="prdctcode"  onchange="get_duplicate(this.value);" style="" class="form-control" type="text" placeholder="Enter product code*" name="prdctcode" > </div>
                                      </div>


                                       <div class="form-group">
                                          <label for="exampleInputuname">Annual Quantity</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                            <input id="annual_qty" style="" class="form-control" type="number" placeholder="Enter Annual Quantity" name="annual_qty"></div>
                                      </div>


                                       <div class="form-group">
                                          <label for="exampleInputuname">Quantity</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                            <input id="iqty1" style="" class="form-control" type="number" placeholder="Enter quantity 1" name="iqty1"></div>
                                      </div>

                                      <div class="form-group">
                                          <label for="exampleInputuname">Quantity-2</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                              <input id="iqty2" style="" class="form-control" type="number" placeholder="Enter quantity 2" name="iqty2"></div>
                                      </div>


                                      <div class="form-group">
                                          <label for="exampleInputuname">Quantity-3</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                            <input id="iqty3" style="" class="form-control" type="number" placeholder="Enter quantity 3" name="iqty3"></div>
                                      </div>


                                      <div class="form-group">
                                          <label for="exampleInputuname">Quantity-4</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                            <input id="iqty4" style="" class="form-control" type="number" placeholder="Enter quantity 4" name="iqty4"></div>
                                      </div>


                                      <div class="form-group">
                                          <label for="exampleInputuname">Quantity-5</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                            <input id="iqty5" style="" class="form-control" type="number" placeholder="Enter quantity 5" name="iqty5"></div>
                                      </div>

                                       <div class="form-group">
                                          <label for="exampleInputuname">Dimensions (in MM)</label>
                                          <div class="input-group  col-md-12 col-sm-12 col-xs-12">
                                            <div style="width:100%;display:inline-flex;" class="form-group">
                                            <input id="length" style="width:33%;margin-left:1px"  class="form-control" type="number" placeholder="Length*" name="length" >
                                            <input id="breadth" style="width:33%;margin-left:1px" class="form-control" type="number" placeholder="Breadth*" name="breadth" >
                                            <input id="height" style="width:33%;margin-left:1px" class="form-control" type="number" placeholder="Height" name="height" >
                                            </div>                                                    
                                          </div>
                                      </div>


                                       <div class="form-group">
                                          <label for="exampleInputuname">Other Dimensions (in MM)</label>
                                          <div class="input-group  col-md-12 col-sm-12 col-xs-12">
                                            <div style="width:100%;display:inline-flex;" class="form-group">
                                            <input id="olength" style="width:33%;margin-left:1px"  class="form-control" type="number" placeholder="Length" name="olength" >
                                            <input id="obreadth" style="width:33%;margin-left:1px" class="form-control" type="number" placeholder="Breadth" name="obreadth" >
                                            <input id="oheight" style="width:33%;margin-left:1px" class="form-control" type="number" placeholder="Height" name="oheight" >
                                            </div>                                                    
                                          </div>
                                      </div> 


                                        <div class="form-group">
                                          <label for="exampleInputuname">Paper</label>
                                           
                                            <div class="input-group" style="width:100%;display:inline-flex;">
                                            
                                             <div style="width:50%">
                                              
                                            <select   id="paperselect"  name="paperselect" class="select2 form-control">
                                              <option value="">Select paper</option>
                                                 <?php  foreach($paper as $c)  {  ?>
                                                     <option value="<?=$c->PaperKind?>"><?=$c->PaperKind?></option>
                                                 <?php } ?>
                                            </select>
                                          </div>
                                          <input id="pprrmrk" style="width:50%;margin-left:1px" class="form-control" type="text" placeholder="Enter remarks" name="pprrmrk">
                                              </div>
                                      </div> 
                                    
                                       <div class="form-group">
                                          <label for="exampleInputuname">GSM</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                             <select  id="gsmselect"  name="gsmselect" class="select2 form-control">
                                                <option value="">Select GSM</option>
                                                   <?php  foreach($gsm as $c)  {  ?>
                                                       <option value="<?=$c->Gsm?>"><?=$c->Gsm?></option>
                                                   <?php } ?>
                                              </select>
                                              </div>
                                      </div> 



                                      
                                </div>
                                </div>
                                </div>
                                </div> 
                                <div class="col-md-4 col-sm-12"> 
                                <div class="white-box" >
                                <h3 class="box-title m-b-0">Process Details</h3>
                                <div class="row">
                                <div class="col-sm-12 col-xs-12">


                                     <div class="form-group">
                                          <label for="exampleInputuname">Metpat Lamination</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                             <select  id="metpatselect"  name="metpatselect" class="select2 form-control">
                                                <option value="">Select Metpat Lamination</option>
                                                   <?php  foreach($metpat as $c)  {  ?>
                                                       <option value="<?=$c->LamID?>"><?=$c->FilmType?>-<?=$c->Micron?></option>
                                                   <?php } ?>
                                              </select>
                                              </div>
                                      </div> 
                                     


                                      <div class="form-group">
                                          <label for="exampleInputpwd1">Printing</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                              <input id="pprintcolour" readonly style="background-color: #fff;" class="form-control" type="hidden" placeholder="Enter printing" name="pprintcolour">
                                             <input id="pprinting" readonly style="background-color: #fff;" class="form-control" type="text" placeholder="Enter printing" onclick="getprintingmodal()" name="pprinting"> </div>
                                      </div>


                                      <div  class="form-group">
                                        <label for="exampleInputpwd1">Coating</label>
                                        <select id="cotingselect"  name="cotingselect" class="select2 m-b-10 select2-multiple"   multiple="multiple" data-placeholder="Select Coating">

                                             <?php  foreach($coating as $c)  {  ?>
                                                 <option id="<?=$c->CoatingID?>" value="<?=$c->CoatingID?>"><?=$c->Description?></option>
                                             <?php } ?>
                                           </select>
                                         
                                      </div>





                                     <div class="form-group">
                                        <input id="pcoatremark"  class="form-control" type="text" placeholder="Enter remark" name="pcoatremark" >
                                     </div>





                                      <div class="form-group">
                                         <label for="exampleInputpwd1">Lamination</label>
                                      <div style="width:100%;display:inline-flex;"  class="form-group">
                                        
                                              <select class="form-control select2"  placeholder="Plam"  style="width:50%" id="plamselect">
                                                 <option value="">Select Lamination</option>
                                               <?php  foreach($plam as $c)  {  ?>
                                                   <option value="<?=$c->LamID?>"><?=$c->Micron?>-<?=$c->FilmType?></option>
                                               <?php } ?>
                                              </select>
                                              <input id="plamrmrk" style="width:50%;margin-left:1px" class="form-control" type="text" placeholder="Enter remarks" name="plamrmrk">
                                      </div>
                                    </div>


                                       <div class="form-group">
                                        <label for="exampleInputpwd1">Foiling</label>
                                      <div style="width:100%;display:inline-flex;"  class="form-group">

                                         <select class="form-control select2" style="width:50%"  placeholder="foiling"  id="foilingselect">
                                           <option value="">Select foiling</option>
                                               <?php  foreach($foiling as $c)  {  ?>
                                                   <option value="<?=$c->FoilID?>"><?=$c->FoilType?></option>
                                               <?php } ?>
                                         </select>
                                        <input id="pfoilremark" style="width:50%;margin-left:1px" class="form-control" type="text" placeholder="Enter remarks" name="pfoilremark" >
                                      </div>
                                    </div>

                                       <div class="form-group">
                                          <label for="exampleInputpwd1">Punching</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                            <input id="ppunch" readonly style="background-color: #fff;" class="form-control" type="text" placeholder="Enter punching" name="ppunch" onclick="getpunching()" ></div>
                                      </div>



                                         <div class="form-group">
                                          <label for="exampleInputuname">Window Patching</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                             <select  id="windoselect"  name="windoselect" class="form-control select2">
                                                <option value="">Select Window Patching</option>
                                                   <?php  foreach($window as $c)  {  ?>
                                                       <option value="<?=$c->WPatchID?>"><?=$c->FilmType?>-<?=$c->Micron?></option>
                                                   <?php } ?>
                                              </select>
                                              </div>
                                          </div>  




                                       <div class="form-group">
                                          <label for="exampleInputpwd1">Pasting</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                           <input id="ppast" readonly style="background-color: #fff;" class="form-control" type="text" placeholder="Enter pasting " name="ppast" onclick="getpasting()" ></div>
                                      </div>


                                       <div class="form-group">
                                          <label for="exampleInputpwd1">Corrugation</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                            <input id="pcorru" readonly style="background-color: #fff;" class="form-control" type="text" placeholder="Enter corrugation" name="pcorru" onclick="getCFlute()"></div>
                                       </div>



                                       <div class="form-group">
                                          <label for="exampleInputpwd1">Other</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                           <input id="pothr" style="" class="form-control" type="text" placeholder="Enter other" name="pothr"></div>
                                      </div>
                                       <div class="form-group">
                                          <label for="exampleInputpwd1">Packing</label>
                                          <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                            <input id="ppck" style="" class="form-control" type="text" placeholder="Enter packing" name="ppck"></div>
                                      </div>


                                      <input type="submit" value="Update" class="btn btn-primary">
                                       <a class="btn btn-success" style="text-decoration: none;  color: #f3f0f0;" href="<?php echo base_url('enquiry_master/enquiry_list');?>">Cancel</a>

                                                                                    
                                  
                                </div>
                                </div>
                                </div>
                                </div> 
                                </div>
                                </form>
                       
      </div>
    </div>
<!-- Modal -->
       <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
           <div class="modal-content" style="text-align:center;">
               <h4>Printing details</h4>
            <div class="modal-body">
            <input id="printfc" class="form-control" type="number" placeholder="Enter front color " oninput="maxLengthCheck(this)" maxlength = "3" name="printfc" >
                       <br>
            <input id="printbc"  class="form-control" type="number" placeholder="Enter back color " oninput="maxLengthCheck(this)" maxlength = "3" name="printbc" >
             <br>
            <select id="printselect"class="form-control">
            <option value="">Select</option>
            <option value="Special">Special</option>
            <option value="Panton">Panton</option>
            <option value="Process color">Process color</option>
            </select>
            <br>
            <input id="pprintremark"  class="form-control" type="text" placeholder="Enter remark" name="pprintremark">
             <br>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-default" onclick="closePrint()">Ok</button>
            </div>
            </div>
          </div>

        </div>
        <!-- Modal -->
       <div class="modal fade" id="mycfModal" role="dialog">
          <div class="modal-dialog modal-sm">
           <div class="modal-content" style="text-align:center;">
               <h4>Corrugation</h4>
            <div class="modal-body">
            <input id="cfply" class="form-control" type="number" placeholder="Enter no. of ply" oninput="maxLengthCheck(this)" maxlength = "7" name="cfply" required>
                       <br>
                      
           <input id="cfcgsm"  class="form-control" type="number" placeholder="Enter craft gsm" oninput="maxLengthCheck(this)" maxlength = "3" name="cfcgsm" required>
             <br>

            <table id="flutlist" style="text-align:left;padding-left:0px;width=100%"></table>
            <br>
             <input id="pcorremark"  class="form-control" type="text" placeholder="Enter remark" name="pcorremark">
             <br>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-default" onclick="closeCorrug()">Ok</button>
            </div>
            </div>
          </div>

        </div>
        <!-- Modal -->
       <div class="modal fade" id="mypunchModal" role="dialog">
          <div class="modal-dialog modal-sm">
           <div class="modal-content" style="text-align:center;">
           <h4>Punching</h4>
            <div class="modal-body">
            <div style="text-align:left;margin-left:5px">
            <table>
             <tr><td><input id="1" type="checkbox" value="Punching" name="pradio" >Punching</td></tr>
             <tr><td><input id="2" type="checkbox" value="Finish_cutting" name="pradio">Finish cutting</td></tr>
             <tr><td><input id="3" type="checkbox" value="Creasing" name="pradio" >Creasing</td></tr>
             <tr><td><input id="4" type="checkbox" value="Folding" name="pradio" >Folding</td></tr>
             <tr><td><input id="5" type="checkbox" value="Embossing" name="pradio" >Embossing</td></tr>
             </table>
             <br><input id="ppunchremark" class="form-control" type="text" placeholder="Enter remark" name="ppunchremark"><br>
            </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-default" onclick="closepunch()">Ok</button>
            </div>
            </div>
          </div>
       </div>


         <!-- Modal -->
       <div class="modal fade" id="mypastModal" role="dialog">
          <div class="modal-dialog modal-sm">
           <div class="modal-content" style="text-align:center;">
               <h4>Pasting</h4>
            <div class="modal-body">
            <div style="text-align:left;margin-left:5px">
            <input id="ppastradio" type="radio" value="Pasting" name="pastradio" >Pasting
              <br><input id="pstitradio" type="radio" value="Stitching" name="pastradio">Stitching<br>
              <br><input id="ppastremark" class="form-control" type="text" placeholder="Enter remark" name="ppastremark"><br>
            </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-default" onclick="closePast()">Ok</button>
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
            </div>
            <footer class="footer text-center"> <?php date('Y')  ?> &copy; MIS Renuka Softec Indore </footer>
        </div> 
    
<?php include 'footer.php'; ?>
<script src="<?php echo base_url('backend_assets/js/jquery.validate.min.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('backend_assets/css/screen.css');?>" />


<script type="text/javascript">


$(document).ready(function(){
 
            var search_url="<?php echo base_url('enquiry_master/update_value_get');?>";
            var eqid = $("#enquiry_id").val(); 
            $.ajax({
                      type: "POST",
                      url: search_url,
                      data: {Btn: "Update_Mode", enq_Id: eqid}
            }).done(function (msg)

             {            
                var fillproductionData = jQuery.parseJSON(msg);
                var masterData = fillproductionData.Master; 
                var Contect = fillproductionData.Contectperson; 
                var EstIdData = fillproductionData.Detail;
                  $('#enq_id').val(eqid);
                $.each(Contect, function (idx, element) {
                    $("#drp_MarketingExe").append("<option value='" + element.empid + "'>" + element.empname + "</option>");
                });

                    
                  $.each(masterData, function (idx, element)
                   {  

                    $('#client').select2().select2('val',element.ClientID);

                    if (element.ClientID=='00000')
                     {
                     $("#newClient").show();
                      }
                      else 
                      {
                       $("#newClient").hide(); 
                      }
                    $('#est_purpose').select2().select2('val',element.est_purpose);
                    $('#newclientname').val(element.NewClient);
                    $('#Status').val(element.Status);

                    $('#drp_MarketingExe').select2().select2('val',element.ExecutiveID);
                    $('#moffollowup').select2().select2('val',element.ModeOfInquiry);
                    $("#cloc").val(element.ClientLocation);
                    $("#ccprsn").val(element.ContactPerson);
                    $("#cdesg").val(element.PersonPost);
                    $("#cphone").val(element.ContactNo_Email);                     
                    $("#cemail").val(element.ContactEmail); 
                    $("#cdespatch").val(element.DespatchDetail);                     
                    $("#cremark").val(element.ClientRemark);                      
                    $("#datepicker-autoclose").val(element.delivery_date);  
                    $('#samplereference').select2().select2('val',element.samplereference);
                    $('#itemselect1').select2().select2('val',element.ItemClass);
                    $('#itemselect').select2().select2('val',element.ItemType);
                    $("#prdctname").val(element.ProductName);  
                    $("#prdctcode").val(element.ProductCode);
                    $("#annual_qty").val(element.AnnualQty);
                    $("#iqty1").val(element.Quantity);
                    $("#iqty2").val(element.Quantity2);   
                    $("#iqty3").val(element.Quantity3);   
                    $("#iqty4").val(element.Quantity4);   
                    $("#iqty5").val(element.Quantity5); 
                    $("#length").val(element.Length);   
                    $("#breadth").val(element.Breadth);   
                    $("#height").val(element.Height); 
                    $("#olength").val(element.Length_other);   
                    $("#obreadth").val(element.Breadth_other);   
                    $("#oheight").val(element.Height_other); 
                    $("#paperselect").val(element.PaperType); 
                    $("#pprrmrk").val(element.papertype_remark);                     
                    $('#gsmselect').select2().select2('val',element.Gsm);
                    $("#pothr").val(element.OtherRemark);  
                    $("#ppck").val(element.PackingDetail);  
                    $("#pprintcolour").val(element.PrintColor);

                    

                    



                });




                    $.each(EstIdData, function (idx, element)
                   {                      
                    $("#pprinting").val(element.printing);
                    $("#pcoatremark").val(element.coating_remarks); 
                    $('#plamselect').select2().select2('val',element.lamination);
                    $('#metpatselect').select2().select2('val',element.metpat_lamination);
                    $('#windoselect').select2().select2('val',element.window_patching);
                    $("#plamrmrk").val(element.lamination_remarks);   
                    $("#foilingselect").val(element.foiling);                   
                    $("#pfoilremark").val(element.foiling_remarks);
                    $("#ppunch").val(element.punching);  
                    $("#ppunchremark").val(element.punching_remarks); 
                    $("#ppast").val(element.pasting); 
                    $("#ppastremark").val(element.pasting_remarks);
                    $("#pcorru").val(element.corrugation);
                    $("#pprintremark").val(element.printing_remarks);

                    $("#pprinting").val(element.printing);
                    var fields = element.printing.split('+');
                    var frontcolour = fields[0];
                    var backcolour = fields[1];
                    var printtype = fields[2];

                    $("#printfc").val(frontcolour);
                    $("#printbc").val(backcolour);
                    $("#printselect").val(printtype);
                    
                    if (element.pasting!='') 
                    {
                  $("input[name='pastradio'][value="+element.pasting+"]").attr('checked', true);
                    }

                     if (element.coating!='') 
                    {
                   var coatingfields = element.coating.split(',');    
                    $('#cotingselect').select2().select2('val',coatingfields);
                    }



              var punchingfields = element.punching.split(',');
                var mylen=punchingfields.length;
                 var len=mylen-1;

               for (var i = 0; i <len; i++) 
             {
              $("input[name='pradio'][value="+punchingfields[i]+"]").attr('checked', 'checked');
             }


                  if (element.printing!='') 
                    {
                  
                    var pfields = element.printing.split('+');
                    var frontcolour = pfields[0];
                    var backcolour = pfields[1];
                    var printtype = pfields[2];

                    $("#printfc").val(frontcolour);
                    $("#printbc").val(backcolour);
                    $("#printselect").val(printtype);
                    }


                    if (element.corrugation!='') 
                    {
                  
                   var cfcorrugation = element.corrugation.split(':'); 
                    var myplyset = cfcorrugation[1];                   
                    var mycorrugation = myplyset.split(',');
                    var plyset = mycorrugation[0];

                    var myplysetgsmset = cfcorrugation[2];                   
                    var mycorrugationgsmset = myplysetgsmset.split(',');
                    var mygsmset = mycorrugationgsmset[0];

                    $("#cfply").val(plyset);
                    $("#cfcgsm").val(mygsmset);
                    }





                    
                    $("#pcorremark").val(element.corrugation_remarks);





                   });

                $("#btn_Update").show();            
                 stopSpinner();
             }
          ) 
});
</script>



<script>
  $().ready(function() 
  {
 // validate signup form on keyup and submit
    $("#enquiry_add").validate({
      rules: {
        client: 
        {
          required: true
        },
         drp_MarketingExe: 
         {
          required: true
          },

          moffollowup: 
        {
          required: true
        },

          cloc: 
        {
          
           minlength: 2,
           maxlength:100
        },

         ccprsn: 
        {
          required: true,
          minlength: 2,
          maxlength:60
        },


         cdesg: 
        {
           required: true,
           minlength: 2,
           maxlength:20
        },


         cphone: 
        {
           required: true,
           minlength: 10,
           maxlength:10,
           number: true  
        },

          cemail: 
        {
          required: true,
          email:true
        },

        cremark: 
        {
          required: true,
           minlength: 3
        },

        itemselect1: 
        {
          required: true
        },

        itemselect: 
        {
          required: true
        },




      

        prdctname: 
        {
          required: true,
          minlength: 2,
          maxlength:100
        },




        prdctcode: 
        {
           minlength: 1,
           maxlength:20
          
        },

      annual_qty: 
        {
           number: true
          
        },


         iqty1: 
        {
           required:true,
           number: true          
        },


         iqty2: 
        {
           number: true          
        },


         iqty3: 
        {
           number: true          
        },


         iqty4: 
        {
           number: true          
        },


         iqty5: 
        {
           number: true          
        },


         length: 
        { 
          
           minlength: 1,
           maxlength:3,
           required:true,
           number: true          
        },


         breadth: 
        {
           minlength: 1,
           maxlength:3,
           required:true,
           number: true          
        },


         height: 
        {
           minlength: 1,
           maxlength:3,
           number: true          
        },


         olength: 
        {
           minlength: 1,
           maxlength:3,
           number: true          
        },


         obreadth: 
        {
           minlength: 1,
           maxlength:3,
           number: true          
        },


         oheight: 
        {
           minlength: 1,
           maxlength:3,
           number: true          
        },


         paperselect: 
        {
           required:true         
        },


         gsmselect: 
        {
          required:true       
        },

       





      },
      messages:
       { 
        client: 
        {
          required: "Please Select client "
        },        

        drp_MarketingExe:
         {
          required: "Please Select Executive"
        },

        moffollowup:
         {
          required: "Please Select Mode Mode Of Enquiry",
        },


         cloc:
         {
           minlength: "Min 2 characters long",
           maxlength: "Max 100 characters long"
        },

          ccprsn:
         {
           required: "Contact Person Required",
           minlength: "Min 2 characters long",
           maxlength: "Max 60 characters long"
        },

          cdesg:
         {
           required: "Designation/Department  Required",
           minlength: " Min 2 characters long",
           maxlength: "Max 20 characters long"
        },

         cphone:
         {
           required: "Mobile No  Required",
           minlength: "Min 10 characters long",
           maxlength: "Max 10 characters long",
            number: "Please enter a valid number."
        },


         cemail:
         {
           required: "Email  Required",
           email: "Please enter a valid email address."
        },

         cremark:
         {
           minlength: "Your  Min 2 characters long",
           maxlength: "Your  Min 20 characters long"
        },

        
          itemselect1: "Item Class Select Required",

        itemselect: "Item Select Required",
         prdctname:
         {
           required: "Product Name  Required",
           minlength: "Min 2 characters long",
           maxlength: "Max 100 characters long"
        },


        prdctcode:
         {
           minlength: "Min 2 characters long",
           maxlength: "Max 20 characters long"
        },


         annual_qty:
         {
          number: "Please enter a valid number."
         },

          iqty1:
         {
          required: "Quantity_1   Required",
          number: "Please enter a valid number."
        },

          iqty2:
         {
          number: "Please enter a valid number."
        },

          iqty3:
         {
          number: "Please enter a valid number."
        },

          iqty4:
         {
          number: "Please enter a valid number."
        },

          iqty5:
         {
          number: "Please enter a valid number."
        },

          length:
         {

           minlength: "Min 1 characters long",
           maxlength: "Max 3 characters long",
          required: "*",
          number: "Please enter a valid number."

        },

          breadth:
         {
          required: "*",
           minlength: "Min 1 characters long",
           maxlength: "Max 3 characters long",
          number: "Please enter a valid number."
        },

          height:
         {

          minlength: "Min 1 characters long",
           maxlength: "Max 3 characters long",
           number: "Please enter a valid number."
        },

          olength:
         {
          minlength: "Min 1 characters long",
           maxlength: "Max 3 characters long",
           number: "Please enter a valid number."
        },

          obreadth:
         {
          minlength: "Min 1 characters long",
           maxlength: "Max 3 characters long",
           number: "Please enter a valid number."
        },

          oheight:
         {
          
          minlength: "Min 1 characters long",
           maxlength: "Max 3 characters long",
           number: "Please enter a valid number."
        },

          paperselect:
         {
          
           required: "Please Select Paper"
        },
        

          gsmselect:
         {
          
           required: "Please Select GSM"
        },

      }
    });



  });
</script>




<script type="text/javascript">
$(document).ready(function(){
  $('#enquiry_add').on('submit', function(e) {     
    e.preventDefault();




     if($("#client").val()=='00000')
        { 
           if($("#newclientname").val()=='')
        {
          alert("Please Enter Client Name! ");
        }


      } 


    var form = this;
    if ($(this).valid())
       {

            var url = "<?php echo base_url('enquiry_master/myupdate');?>";            
            var enq_update=$("#enquiry_id").val();
            var pclinet=$("#client").val();            
            var est_purpose=$("#est_purpose").val();
            var newClientsave=$("#newclientname").val();            
            var pexective=$("#drp_MarketingExe").val();        
            var pmofenq=$("#moffollowup").val();
            var ploc=$("#cloc").val();
            var pconprsn=$("#ccprsn").val();
            var pdesg=$("#cdesg").val();
            var pphone=$("#cphone").val();
            var pemail=$("#cemail").val();
            var pdespatch=$("#cdespatch").val();
            var premark=$("#cremark").val(); 
            var delivery_date=$("#datepicker-autoclose").val();
            var samplereference=$("#samplereference").val();
            var typeofproof=$("#typeofproof").val();       

            var pitmtyp1=$("#itemselect1").val();
            var pitmtyp=$("#itemselect").val();
            var pprdctname=$("#prdctname").val();
            var pprdctcode=$("#prdctcode").val();
            var aqty=$("#annual_qty").val();       
            var pqty1=$("#iqty1").val();
            var pqty2=$("#iqty2").val();
            var pqty3=$("#iqty3").val();
            var pqty4=$("#iqty4").val();
            var pqty5=$("#iqty5").val();
            var plngth=$("#length").val();
            var pbrdth=$("#breadth").val();
            var phight=$("#height").val();
            var polngth=$("#olength").val();
            var pobrdth=$("#obreadth").val();
            var pohight=$("#oheight").val();

            var ppaper=$("#paperselect").val();
            var ppaper_remark=$("#pprrmrk").val();            
            var pgsm=$("#gsmselect").val();   

            var pmet=$("#metpatselect").val();
            var pwindow=$("#windoselect").val();    
            var pprint=$("#pprinting").val();




            var pprntrmrk=$("#pprintremark").val();
            var pprintcolour=$("#pprintcolour").val();
            var pcoatarr=$("#cotingselect").val();
            if (pcoatarr!=null) 
            {

            var pcoat = pcoatarr.join(",");
            }
            else
            { 
            var pcoat=$("#cotingselect").val();
            }
            var pcoatrmrk=$("#pcoatremark").val();
            var plamintn=$("#plamselect").val();
            var plamintnrmrk=$("#plamrmrk").val();
            var pfoil=$("#foilingselect").val();
            var pfoilrmrk=$("#pfoilremark").val();
            var ppunch=$("#ppunch").val();
            var ppunchrmrk=$("#ppunchremark").val();        
            var ppast=$("#ppast").val();
            var ppastrmrk=$("#ppastremark").val();
            var pcorru=$("#pcorru").val();
            var pcorrurmrk=$("#pcorremark").val();
            var pother=$("#pothr").val();
            var ppack=$("#ppck").val();
            var storage = '';
            var aid= '0' ;
            var uid= '0';
   
    
         startSpinner();

    $.ajax({
      url: url,
      method:"post", 
      data:{enq_id:enq_update,accountid:aid,est_purpose:est_purpose,client_id:pclinet,saveclient:newClientsave,executive_id:pexective,mode_enq:pmofenq,client_location:ploc,contact_person:pconprsn,contact_person_post:pdesg,contact:pphone,email:pemail,client_despatch:pdespatch,client_remark:premark,delivery_date:delivery_date,samplereference:samplereference,typeofproof:typeofproof,item_type:pitmtyp,item_class:pitmtyp1,product_name:pprdctname,product_code:pprdctcode,ICompanyID:"00001",quantity:pqty1,quantity2:pqty2,quantity3:pqty3,quantity4:pqty4,quantity5:pqty5,length:plngth,breadth:pbrdth,height:phight,mylength:polngth,mybreadth:pobrdth,myheight:pohight,paper_type:ppaper,gsm:pgsm,met:pmet,window:pwindow,print_color:pprintcolour,printing:pprint,printing_remarks:pprntrmrk,coating:pcoat,coating_remarks:pcoatrmrk,lamination:plamintn,lamination_remarks:plamintnrmrk,foiling:pfoil,foiling_remarks:pfoilrmrk,punching:ppunch,punching_remarks:ppunchrmrk,pasting:ppast,pasting_remarks:ppastrmrk,corrugation:pcorru,corrugation_remarks:pcorrurmrk,other_details:pother,packing_detail:ppack,user_id:uid,ppaper_remark:ppaper_remark,annual_qty:aqty},
      success: function(data)
      {
      swal("Result", data);
      stopSpinner();
      window.location.href = "<?php echo base_url('enquiry_master/enquiry_list') ?>";
      }

    })
  }});
});
</script>





<script>


function getclient(drp_clientname)
{
 var matt="<?php echo base_url('enquiry_master/clientexecutive');?>";
 $.ajax({
      url:matt,
      type:"POST",
      async:false,
      data:{ 
    "client":drp_clientname, 
 },
 success:function(msg)
 {
   var fillproductionData2 = jQuery.parseJSON(msg);
   var masterData2 = fillproductionData2.Master2;
   var Contect = fillproductionData2.Contectperson;

        $.each(Contect, function (idx, element) 
                  {

                    $('#drp_MarketingExe').val(element.RepID).attr("selected", "selected");
                });



    $.each(masterData2, function (idx, element)
                   { 
                    
                    $("#ccprsn").val(element.CName);
                    $("#cdesg").val(element.DeptPost);
                    $("#cphone").val(element.MobileNo);
                    $("#cemail").val(element.EMail);
                    $("#cloc").val(element.City);
                   });



 } }); }







function getnewclient(value)
{
  if(value=='00000')
   {
    $('#newClient').show();
  }
  else
  {
     $('#newClient').hide();
  }
} 


 function getpunching()
 {
  $("#mypunchModal").modal("show");
 }

 function getpasting()
 {
  $("#mypastModal").modal("show");
 }

 function getCFlute()
 {
  $("#mycfModal").modal("show");
 }

 function getprintingmodal()
 {
  $("#myModal").modal("show");
 }

/*function closePrint()
{
    var printfc = $("#printfc").val();
    var printbc = $("#printbc").val();
    var printselect = $("#printselect").val();
  $('#myModal').modal('hide');
  $("#pprinting").val("FC :"+$("#printfc").val()+", BC :"+$("#printbc").val()+","+ $("#printselect").val());printfc").val()+",BC :"+$("#printbc").val()+","+ $("#printselect").val());
 }*/
function closePrint()
     {
$('#myModal').modal('hide');
$("#pprinting").val($("#printfc").val() +"+"+$("#printbc").val()+"+"+ $("#printselect").val());
$("#pprintcolour").val(" "+$("#printfc").val()+" + "+$("#printbc").val());
   }


 /*function closeCorrug()
 {
    var flutlist = $("#flutlist").val();
    var flutlist = $("#flutlist").val();
    var pcorremark = $("#pcorremark").val();
   $("#ppunch").val(flutlist,flutlist,pcorremark);
 }*/

function closeCorrug()
                           {
                      <!--$('#mycfModal').modal('hide'); -->
                      var id = $("#flutlist tr").length;
                      var fcheckdata = "";
                      var fchkfinal="";
                      for (var i = 0; i < id; i++) {
                        if($("#fcheck"+i).is(':checked')){
                        
                            if($("#fgsm"+i).val()!="" && $("#fbf"+i).val() !="")
                                {
                              fcheckdata = $("#fhdn_ftype"+i).val()+"- GSM :"+$("#fgsm"+i).val()+" BF :"+$("#fbf"+i).val();
                              fchkfinal = fchkfinal+fcheckdata+" , ";
                            }
                          else if($("#fgsm"+i).val()!="")
                            { 
                              fcheckdata = $("#fhdn_ftype"+i).val()+"- GSM :"+$("#fgsm"+i).val();
                              fchkfinal = fchkfinal+fcheckdata+" , ";
                               }
                             else if($("#fbf"+i).val()!="")
                               {  
                                 fcheckdata = $("#fhdn_ftype"+i).val()+"- BF :"+$("#fbf"+i).val();
                                fchkfinal = fchkfinal+fcheckdata+" , ";
                                  }
                                else
                                {}
                          
                        } else {
                          
                        }
                      }
                      $("#pcorru").val("Plys :"+$("#cfply").val()+", K.Gsm :"+$("#cfcgsm").val()+", "+fchkfinal);
                       $('#mycfModal').modal('hide');
                     }
 function getprinting()
 {
  var one = $("#1").val();
    var two = $("#2").val();
    var three = $("#3").val();
    var four = $("#4").val();
    var five = $("#5").val();
 $("#ppast").val();
 }



 






function closepunch()
   {
  $('#mypunchModal').modal('hide');
  var cstr='';
 for (var i = 1; i <=5; i++) 
 {
 if($("#"+i+"").prop("checked"))
 {
 cstr +=$("#"+i+"").val()+','
 }
 }
 $("#ppunch").val(cstr);
}



  
function closePast()
 {
    var pstitradio = $("#pstitradio").val();
    var ppastremark = $("#ppastremark").val();
    
 $("#pcorru").val();
 }


 function closePast()
  {
    $('#mypastModal').modal('hide');
    if($("#ppastradio").prop("checked"))
    {
      $("#ppast").val($("#ppastradio").val());
    }
  else
   {
    $("#ppast").val($("#pstitradio").val());
   }
  }

 $(function () {
       $( "#printfc" ).change(function() {
          var max = parseInt($(this).attr('max'));
          var min = parseInt($(this).attr('min'));
          if ($(this).val() > max)
          {
              $(this).val(max);
          }
          else if ($(this).val() < min)
          {
              $(this).val(min);
          }       
        }); 
    });


 $(function () {
       $( "#printbc" ).change(function() {
          var max = parseInt($(this).attr('max'));
          var min = parseInt($(this).attr('min'));
          if ($(this).val() > max)
          {
              $(this).val(max);
          }
          else if ($(this).val() < min)
          {
              $(this).val(min);
          }       
        }); 
    });







 function get_duplicate(drp_item_code)
{
 var mat="<?php echo base_url('enquiry_master/find_duplicate_item');?>";
 var x = document.getElementById("btn_Save");
 $.ajax({
      url:mat,
      type:"POST",
      async:false,
      data:{ 
    "item_code":drp_item_code, 
 },
 success:function(data)
 {

  if (data>=1)
  {

               swal("Result", "Product Code Already Exist");

             
                  if (x.style.display === "none") 
                  {
                      x.style.display = "none";
                  } 

                  else
                   {
                      x.style.display = "none";
                   } 
  }

  else 
  {
      x.style.display = "block";
  }

               
 } }); 
}



</script>