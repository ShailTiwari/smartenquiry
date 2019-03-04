<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class enquiry_master extends CI_Controller 
{


      public function __construct()
      {
         parent::__construct();
         $this->load->model('Enquiry');
         $this->load->model('main_model'); 
         $this->load->library('user_agent');     
      }



    
 public function add()    
    {  
         $my_page_id='2';
         if (isset($_SESSION['user_login_id']) && isset($_SESSION['user_id']) ) 
          {
       
         $check_validation = $this->main_model->check_permission($my_page_id);
          if ($check_validation<=0)
           {
            return redirect ('main/not_access');
           }
     
     $data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
     $data['profile'] = $this->main_model->admin_profile();  
     $data['client'] = $this->Enquiry->client_list();
     $data['executive'] = $this->Enquiry->executive_list();
     $data['itemtype'] = $this->Enquiry->item_type();
     $data['item'] = $this->Enquiry->item_list();
     $data['paper'] = $this->Enquiry->paper_list();
     $data['gsm'] = $this->Enquiry->gsm_list();
     $data['coating'] = $this->Enquiry->coating();
     $data['foiling'] = $this->Enquiry->foiling();
     $data['plam'] = $this->Enquiry->plam();
     $data['metpat'] = $this->Enquiry->metpat();
     $data['window'] = $this->Enquiry->window();
     $this->load->view('backend/enquiry_add',$data);
    }

    else
    {
      return redirect ('main');
    }
}




public function edit()    
    {   

    $my_page_id='2';
      if (isset($_SESSION['user_login_id']) && isset($_SESSION['user_id']) ) 
    {
       
         $check_validation = $this->main_model->check_permission($my_page_id);
        if ($check_validation<=0)
         {
          return redirect ('main/not_access');
    }

     
     $data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
     $data['enquiry_id']=$this->input->post('enquiry_id');
     $data['profile'] = $this->main_model->admin_profile();  
     $data['client'] = $this->Enquiry->client_list();
     $data['executive'] = $this->Enquiry->executive_list();     
     $data['itemtype'] = $this->Enquiry->item_type();
     $data['item'] = $this->Enquiry->item_list();
     $data['paper'] = $this->Enquiry->paper_list();
     $data['gsm'] = $this->Enquiry->gsm_list();
     $data['coating'] = $this->Enquiry->coating();
     $data['foiling'] = $this->Enquiry->foiling();
     $data['plam'] = $this->Enquiry->plam();
     $data['metpat'] = $this->Enquiry->metpat();
     $data['window'] = $this->Enquiry->window();
     $this->load->view('backend/enquiry_edit',$data);
     }

    else
    {
      return redirect ('main');
    }
}









public function edit_again()    
    {   

    $my_page_id='2';
      if (isset($_SESSION['user_login_id']) && isset($_SESSION['user_id']) ) 
    {
       
         $check_validation = $this->main_model->check_permission($my_page_id);
        if ($check_validation<=0)
         {
          return redirect ('main/not_access');
    }

     
     $data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
     $data['enquiry_id']=$this->input->post('enquiry_id');
     $data['profile'] = $this->main_model->admin_profile();  
     $data['client'] = $this->Enquiry->client_list();
     $data['executive'] = $this->Enquiry->executive_list();     
     $data['itemtype'] = $this->Enquiry->item_type();
     $data['item'] = $this->Enquiry->item_list();
     $data['paper'] = $this->Enquiry->paper_list();
     $data['gsm'] = $this->Enquiry->gsm_list();
     $data['coating'] = $this->Enquiry->coating();
     $data['foiling'] = $this->Enquiry->foiling();
     $data['plam'] = $this->Enquiry->plam();
     $data['metpat'] = $this->Enquiry->metpat();
     $data['window'] = $this->Enquiry->window();
     $this->load->view('backend/enquiry_edit_again',$data);
     }

    else
    {
      return redirect ('main');
    }
}






 public function enquiry_list()    
    {   
       $my_page_id='2';
      if (isset($_SESSION['user_login_id']) && isset($_SESSION['user_id']) ) 
      {
       
         $check_validation = $this->main_model->check_permission($my_page_id);
        if ($check_validation<=0)
         {
          return redirect ('main/not_access');
          }

     $data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
     $data['profile'] = $this->main_model->admin_profile();  
     $data['client'] = $this->Enquiry->client_list();
     $data['executive'] = $this->Enquiry->executive_list();
     $data['itemtype'] = $this->Enquiry->item_type();
     $data['item'] = $this->Enquiry->item_list();
     $data['paper'] = $this->Enquiry->paper_list();
     $data['gsm'] = $this->Enquiry->gsm_list();
     $data['coating'] = $this->Enquiry->coating();
     $data['foiling'] = $this->Enquiry->foiling();
     $data['plam'] = $this->Enquiry->plam();
     $data['metpat'] = $this->Enquiry->metpat();
     $data['window'] = $this->Enquiry->window();
     $this->load->view('backend/enquiry_list',$data);
    }

    else
    {
      return redirect ('main');
    }
}



        public function enquiry_approval()
  {
    if (!isset($_SESSION['user_login_id'])) 
    {
    return redirect ('main');
    }

     $data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
     $data['profile'] = $this->main_model->admin_profile();    
     $data['client'] = $this->Enquiry->client_list();
     $data['executive'] = $this->Enquiry->executive_list();
    $this->load->view('backend/enquiry_approval',$data);
  }





 public function search_enquiry()
    {  

      $htmlData = '';  
      //$permission = $this->Enquiry->show_permission();
      $kyesearch=$this->input->post('kyesearch');
      $enq_date=$this->input->post('enq_date');
      $showclient=$this->input->post('showclient');
      $count=$this->input->post('count');
      $filter =''; 
      $filter .= "IsActive='1' "; 

        if($enq_date!='') 
        { 
    
        $filter .= "AND DATE_FORMAT(EnqDateTime, '%d-%m-%Y') ='".$enq_date."' "; 
         } 

         if($kyesearch!='') 
        { 
    
        $filter .= "AND EnqID like '%".$kyesearch."%' "; 
         }



       if($kyesearch!='') 
        { 
    
        $filter .= "OR ProductName like '%".$kyesearch."%' "; 
         } 


     if($kyesearch!='') 
        { 
    
        $filter .= "OR  ContactPerson like '%".$kyesearch."%' "; 
         } 


      if($showclient!='') 
      {     
          $filter .= "AND  ClientID ='".$showclient."' "; 
      } 

         
      /*if($permission!='1') 
      {  
       $filter .= "AND  ICompanyID ='".$_SESSION['company']."'  AND  AUID ='".$_SESSION['user_id']."'"; 
      }*/



      $filter .= "AND  ICompanyID ='".$_SESSION['company']."' order by  Id desc "; 
     

       if($count!='') 
      {     
          $filter .= "LIMIT  ".$count." "; 
      } 
   
   $drpdata = $this->Enquiry->Select_enquiry($filter);
      $jsonData = json_encode($drpdata);
      $key=1;
      ?>

   <style type="text/css">
   .dataTables_length
   {
       margin-left: 50%!important;;
   }
   .sorting_1
    {
         background: none  !important;
    }

     .status1 {
    background-color:#00ff89 !important;
    color: #000000 !important;
   }
     .status2 {
    background-color:#ffb100 !important;
    color: #000000 !important;
   }
     .status3 {
    background-color:#00e7ff !important;
    color: #000000 !important;
   }
     .status4
      {
    background-color:#ff5e00 !important;
    color: #000000 !important;
   }
    .status5
      {
    background-color:#ff5e00 !important;
    color: #000000 !important;
   }
</style>


                             <div class="table-responsive">
                            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                              <thead >
                                <tr style="font-size: 10px;">
                                <th>Print</th>
                                <th>Action</th>
                                <th>Enquiry Id</th>
                                <th>Enquiry Date  </th>                                      
                                <th>Status</th>                                    
                                <th>Product Type</th>
                                <th>Product Name </th>
                                <th>Product Code</th>
                                <th>Quantity </th>
                                <th>Paper Type</th>
                                <th>GSM</th>
                                <th>Contact Person</th>
                                <th>Contact No  </th>                                
                                <th>Contact  Email </th>
                                <th>Client Location</th> 
                                <th>Estimate Comment</th>
                                </tr>
                              </thead>
                              <tbody id="tbl_search_mode_tbody">
      <?php 
      
      foreach($drpdata  as $key =>$r) 
      {   ?>
        <tr style="font-size: 11px;" class="<?php if($r->Status=='1'){echo "status4";}  else if($r->Status=='2'){echo "status2";}  else if($r->Status=='5'){echo "status5";} else if($r->Status=='4'){echo "status1";}  ?>">
        <td width="5%">
          <?php if ($r->est_purpose=='2') {?>
            <a target="_blank" href="<?php echo base_url('enquiry_master/npdc_print') ?>?hdn_enqid=<?php echo $r->ID; ?>" class='button' class="btn-xs btn-info"><input type="button" value="NPDC" class="btn-xs btn-info"></a>
            <?php }?></td>

        <td width="5%"><?php if ($r->Status=='0')
             {?>
              <div style="width:100%;display:inline-flex;height: 31px;" >
                <div  style="width:50%">
                  <form class="form-group" method="post" action="<?php echo base_url('enquiry_master/edit');?>"> 
                  <input type="hidden" name="enquiry_id" value="<?php echo $r->EnqID  ?>"><button class="btn btn-info"> <i class="fa fa-edit"></i></button>
                </form> 
                </div>
                <div  style="width:50%">
                  
                <span class="btn btn-danger mytrash" id="<?php echo $r->ID  ?>" ><i class="fa fa-trash-o"></i></span>
                </div>
              </div>
           <?php } else{ ?> 
            <div  style="width:50%">
                  <form class="form-group" method="post" action="<?php echo base_url('enquiry_master/edit_again');?>"> 
                  <input type="hidden" name="enquiry_id" value="<?php echo $r->EnqID  ?>"><button class="btn-xs btn-primary"> Save As</i></button>
                </form> 
                </div>

            <?php } ?>
        </td>
        <td width="5%"><?php echo $r->EnqID  ?></td>
        <td width="5%"><?php echo $r->EnqDateTime  ?></td> 
        <td width="5%"><?php if($r->Status=='0'){echo "Pending";} if($r->Status=='4'){echo "Estimated";}  else if($r->Status=='2'){echo "Estimated & Quoted";}  else if($r->Status=='3'){echo "Converted";} else if($r->Status=='1'){echo "Rejected";}  ?></td>
        <td width="25%"><?php echo $r->Producttype  ?></td>
        <td width="25%"><?php echo $r->ProductName  ?></td>
        <td width="5%"><?php echo $r->ProductCode  ?></td>
        <td width="5%"><?php echo $r->Quantity  ?></td>
        <td width="5%"><?php echo $r->PaperType  ?></td>
        <td width="5%"><?php echo $r->Gsm  ?></td> 
        <td width="7%"><?php echo $r->ContactPerson  ?></td>
        <td width="7%"><?php echo $r->ContactNo_Email  ?></td>        
        <td width="5%"><?php echo $r->ContactEmail  ?></td>
        <td width="5%"><?php echo $r->ClientLocation ?></td>
        <td width="10%"><?php echo $r->CostingDeptComment ?></td>
         </tr>
      <?php  }       $key++;   ?>




                              </tbody>
                          </table>
                        </div>



    <!-- end - This is for export functionality only -->
   <script>

      $(function(){
        $('.mytrash').click(function(){
          var url = "<?php echo base_url('enquiry_master/mydelete');?>";
            var del_id= $(this).attr('id');
            var $ele = $(this).parent().parent().parent().parent();
            swal({
  title: "Are you sure?",
  text: "Do you really want to delete this enquiry?",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {

      $.ajax({
      url: url,
      method:"post", 
      data: {enq_id:del_id},
      success: function(data)
      {
         if(data==1)
         {
             $ele.fadeOut().remove();
             swal("Deleted!", "Your item has been deleted.", "success");
         }
         else
         {
             alert("can't delete the row")
         }
      }

    })
                 }
   else {
    swal("Cancelled", "Item is safe :)", "error");
       }
});     
})
    });

      $(document).ready(function () {
            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [
                        {
                            "visible": false
                            , "targets": 2
                        }
          ]
                    , "order": [[2, 'desc']]
                    , "displayLength": 25
                    , "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example23 tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    }
                    else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({

           dom: 'Bfrtip'
            , buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ], 
        iDisplayLength: 25
        });
    </script>
<?php 
}









 public function find_duplicate_item() 
   {
            $item_code = $_REQUEST['item_code'];
            $icompanyidlogin =$_SESSION['company'];
            $query = $this->db->query("SELECT Check_FGCode('$item_code') as item_count");
            $ret = $query->row();
            echo  $ret->item_count;  
            
    }








 public function update_value_get() 
 {
            $eqid = $_REQUEST['enq_Id'];
            $icompanyidlogin =$_SESSION['company'];
            $getdata = $this->Enquiry->Select_data_Update_Mode($eqid, $icompanyidlogin);
            $jsonData = json_encode($getdata);
            echo $jsonData;
  }




 public function mysave() 
 {
     
          $query1 = $this->db->query('SELECT MAX(ID) as maxId FROM est_enquiry');
        if ($query1->num_rows() > 0) 
        {
            $result = $query1->result();
            $abc = $result[0]->maxId + 1;
            $EnqID = "RFQ/" . date('M') . "/" . $abc;
        } 

        else 
        {   
           $abc ='1';
           $EnqID = $EnqID = "RFQ/" . date('M') . "/1";
        }
           
    
          $master = array(
            'EnqID' => $EnqID,
            'ICompanyID' => $_SESSION['company'],
            'ClientID' => $this->input->post('client_id'),
            'NewClient' => $this->input->post('saveclient'),
            'ExecutiveID' => $this->input->post('executive_id'),
            'delivery_date' => $this->input->post('delivery_date'),
            'samplereference' => $this->input->post('samplereference'),
            'typeofproof' => $this->input->post('typeofproof'),
            'Status' => '0',
            'IsActive' => '1',
            'est_purpose' => $this->input->post('est_purpose'),
            'EnqDateTime' => date('Y-m-d h:i:s'),
            'ProductName' => $this->input->post('product_name'),
            'Producttype' => $this->input->post('product_type'),
            'ProductCode' => $this->input->post('product_code'),
            'AnnualQty' => $this->input->post('annual_qty'),
            'Quantity' => $this->input->post('quantity'),
            'Quantity2' => $this->input->post('quantity2'),
            'Quantity3' => $this->input->post('quantity3'),
            'Quantity4' => $this->input->post('quantity4'),
            'Quantity5' => $this->input->post('quantity5'),
            'ContactPerson' => $this->input->post('contact_person'),
            'PersonPost' => $this->input->post('contact_person_post'),            
            'ContactNo_Email' => $this->input->post('contact'),
            'ContactEmail' => $this->input->post('email'),
            'DespatchDetail' => $this->input->post('client_despatch'),            
            'ClientRemark' => $this->input->post('client_remark'),
            'ModeOfInquiry' => $this->input->post('mode_enq'),
            'est_enquirycol' => $this->input->post('desc_through'),
            'ClientLocation' => $this->input->post('client_location'),
            'PaperType' => $this->input->post('paper_type'),
            'papertype_remark' => $this->input->post('ppaper_remark'),
            'Gsm' => $this->input->post('gsm'),
            'ItemClass' => $this->input->post('item_class'),
            'ItemType' => $this->input->post('item_type'),
            'Length' => $this->input->post('length'),
            'Breadth' => $this->input->post('breadth'),
            'Height' => $this->input->post('height'),            
            'Length_other' => $this->input->post('mylength'),
            'Breadth_other' => $this->input->post('mybreadth'),
            'Height_other' => $this->input->post('myheight'),
           'Flap' => '',
            'SidePast' => '',
            'Ex1' => '',
            'Ex2' => '',
            'Ex3' => '',
            'PrintColor' => $this->input->post('print_color'),
            'PrePressDetail' => $this->input->post('prepress_detail'),
            'PressDetail' => $this->input->post('press_detail'),
            'PostPressDetail' => $this->input->post('post_press_detail'),
            'CorrugationDetail' => $this->input->post('corrugation_detail'),
            'PackingDetail' => $this->input->post('packing_detail'),
            'OtherRemark' => $this->input->post('other_details'),           
            'RecordID' => '' ,
            'AUID' => $_SESSION['user_id'],
            'ADateTime' => date('Y-m-d h:i:s'),            
            'Mill' => '',
            'fp_detail' => '',            
            /*'papertype_remark' => $this->input->post('papertype_remark'), */           
            'RecUpdateDateTime' => '1900-00-00 00:00:00',
        );   



          $enquiry_process = array(
            'EnqID' => $EnqID,
            'enquiry_process_id' => $abc,
            'printing' => $this->input->post('printing'),
            'printing_remarks' => $this->input->post('printing_remarks'),
            'coating' => $this->input->post('coating'),
            'coating_remarks' => $this->input->post('coating_remarks'),
            'metpat_lamination' => $this->input->post('met'),
            'window_patching' => $this->input->post('window'),
            'lamination' => $this->input->post('lamination'),
            'lamination_remarks' => $this->input->post('lamination_remarks'),
            'foiling' => $this->input->post('foiling'),
            'foiling_remarks' => $this->input->post('foiling_remarks'),
            'punching' => $this->input->post('punching'),
            'punching_remarks' => $this->input->post('punching_remarks'),
            'pasting' => $this->input->post('pasting'),
            'pasting_remarks' => $this->input->post('pasting_remarks'),
            'corrugation' => $this->input->post('corrugation'),
            'corrugation_remarks' => $this->input->post('corrugation_remarks')
        );

         // print_r($master);
          $this->db->trans_begin();
          $query1=$this->db->insert('est_enquiry',$master); # Inserting data
          $query2=$this->db->insert('est_enquiry_process',$enquiry_process); 
           $this->db->trans_complete(); 

        if ($this->db->trans_status() === FALSE)
           {
            $this->db->trans_rollback();
            $this->session->set_flashdata('msg','Data Inserted Fail');
            echo "Data Inserted Fail";
           }
     
       else
          {
          $this->db->trans_commit();
          $this->session->set_flashdata('msg','Data Inserted successfully');
          echo "Data Inserted successfully";
          }
  }








 public function myupdate() 
 {
             $enq_id = $_POST['enq_id'];    
             $master = array(
            'ICompanyID' => $_SESSION['company'],
            'ClientID' => $this->input->post('client_id'),
            'NewClient' => $this->input->post('saveclient'),
            'ExecutiveID' => $this->input->post('executive_id'),
            'delivery_date' => $this->input->post('delivery_date'),
            'samplereference' => $this->input->post('samplereference'),
            'typeofproof' => $this->input->post('typeofproof'),
            'Status' => '0',
            'IsActive' => '1',
            'est_purpose' => $this->input->post('est_purpose'),
            'EnqDateTime' => date('Y-m-d h:i:s'),
            'ProductName' => $this->input->post('product_name'),
            'ProductCode' => $this->input->post('product_code'),
            'AnnualQty' => $this->input->post('annual_qty'),
            'Quantity' => $this->input->post('quantity'),
            'Quantity2' => $this->input->post('quantity2'),
            'Quantity3' => $this->input->post('quantity3'),
            'Quantity4' => $this->input->post('quantity4'),
            'Quantity5' => $this->input->post('quantity5'),
            'ContactPerson' => $this->input->post('contact_person'),
            'PersonPost' => $this->input->post('contact_person_post'),
            'ContactNo_Email' => $this->input->post('contact'),            
            'ContactEmail' => $this->input->post('email'),   
            'DespatchDetail' =>$this->input->post('client_despatch'),           
            'ClientRemark' => $this->input->post('client_remark'),
            'ModeOfInquiry' => $this->input->post('mode_enq'),
            'est_enquirycol' => $this->input->post('desc_through'),
            'ClientLocation' => $this->input->post('client_location'),
            'PaperType' => $this->input->post('paper_type'),
            'papertype_remark' => $this->input->post('ppaper_remark'),
            'Gsm' => $this->input->post('gsm'),
            'ItemType' => $this->input->post('item_type'),
            'ItemClass' => $this->input->post('item_class'),
            'Length' => $this->input->post('length'),
            'Breadth' => $this->input->post('breadth'),
            'Height' => $this->input->post('height'),
            'Length_other' => $this->input->post('mylength'),
            'Breadth_other' => $this->input->post('mybreadth'),
            'Height_other' => $this->input->post('myheight'),
           'Flap' => '',
            'SidePast' => '',
            'Ex1' => '',
            'Ex2' => '',
            'Ex3' => '',
            'PrintColor' => $this->input->post('print_color'),
            'PrePressDetail' => $this->input->post('prepress_detail'),
            'PressDetail' => $this->input->post('press_detail'),
            'PostPressDetail' => $this->input->post('post_press_detail'),
            'CorrugationDetail' => $this->input->post('corrugation_detail'),
            'PackingDetail' => $this->input->post('packing_detail'),
            'OtherRemark' => $this->input->post('other_details'),          
            'RecordID' => '' ,
            'MUID' => $_SESSION['user_id'],
            'MDateTime' => date('Y-m-d h:i:s'),            
            'Mill' => '',
            'fp_detail' => '',            
            /*'papertype_remark' => $this->input->post('papertype_remark'), */           
            'RecUpdateDateTime' => '1900-00-00 00:00:00',
        );   



          $enquiry_process = array(
            'printing' => $this->input->post('printing'),
            'printing_remarks' => $this->input->post('printing_remarks'),
            'coating' => $this->input->post('coating'),
            'coating_remarks' => $this->input->post('coating_remarks'),            
            'metpat_lamination' => $this->input->post('met'),
            'window_patching' => $this->input->post('window'),
            'lamination' => $this->input->post('lamination'),
            'lamination_remarks' => $this->input->post('lamination_remarks'),
            'foiling' => $this->input->post('foiling'),
            'foiling_remarks' => $this->input->post('foiling_remarks'),
            'punching' => $this->input->post('punching'),
            'punching_remarks' => $this->input->post('punching_remarks'),
            'pasting' => $this->input->post('pasting'),
            'pasting_remarks' => $this->input->post('pasting_remarks'),
            'corrugation' => $this->input->post('corrugation'),
            'corrugation_remarks' => $this->input->post('corrugation_remarks'),
        );

          

         // print_r($master);
          $this->db->trans_begin();
                 $this->db->where('EnqID',$enq_id);
          $query1=$this->db->update('est_enquiry',$master); # Inserting data

                  $this->db->where('enqid',$enq_id);
          $query2=$this->db->update('est_enquiry_process',$enquiry_process); 
           $this->db->trans_complete(); 

        if ($this->db->trans_status() === FALSE)
           {
            $this->db->trans_rollback();
            $this->session->set_flashdata('msg','Data Update Fail');
            echo "Data Update Fail";
           }
     
       else
          {
          $this->db->trans_commit();
          $this->session->set_flashdata('msg','Data Update successfully');
          echo "Data Update successfully";
          }
  }






 public function mydelete() 
 {
      $enq_id = $_POST['enq_id'];
      // print_r($master);
      $this->db->trans_begin();
      $this->db->where('ID',$enq_id);
      $query1=$this->db->delete('est_enquiry'); 

      # Inserting data
      $this->db->where('enquiry_process_id',$enq_id);
      $query2=$this->db->delete('est_enquiry_process'); 
      $this->db->trans_complete(); 

        if ($this->db->trans_status() === FALSE)
           {
            $this->db->trans_rollback();
            $this->session->set_flashdata('msg','Data Delete Fail');
            echo "2";
           }
     
       else
          {
          $this->db->trans_commit();
          $this->session->set_flashdata('msg','Data Delete successfully');
          echo "1";
          }

 }





 public function clientexecutive()
                  {
                          $clientId=$this->input->post('client');
                          $icompanyidlogin =$_SESSION['company'];
                          $getdata = $this->Enquiry->Select_data_payment_executive($clientId, $icompanyidlogin);
                          $jsonData = json_encode($getdata);
                          echo $jsonData;
                  }







     public function getexecutive()
                         {
                          $client=$this->input->post('client');
                          $query=$this->db->query("select empid,empname from employeemaster where isactive=1;");
                          $run=$query->result(); ?>
                           <?php foreach($run as $r){  ?>
                               <option value="<?=$r->empid?>"><?=$r->empname?></option>
                        <?php } 
                          }



public function update_approval_status(){

  $hdn_EnqID = $this->input->post("hdn_EnqID");
  $chk = $this->input->post("chk");
  $hdn_flag = $this->input->post('hdn_flag');
  $hdn_ID = $this->input->post('hdn_ID');
  $Remarks = $this->input->post('Remarks');
  // print_r($hdn_ID);die;

  foreach ($hdn_ID as $key => $value) {
          $hdn_ID_val = $value;
          $flag = $hdn_flag[$key];
          $Remarks_val = $Remarks[$key];

          if ($flag == 1) {
            // $chk_val = 1;
            if (isset($chk[$key])) {

              $data["Approved"] = "1";
              $data["Remark_approve"] = $Remarks_val;
                

                $this->db->where("ID", $hdn_ID_val);
                $this->db->update("est_enquiry" ,$data);

              }else{
            // $chk_val = 0;

              $data["Approved"] = "0";
                
                $this->db->where("ID", $hdn_ID_val);
                $this->db->update("est_enquiry" ,$data);
              }
        }

    }
    echo "Enquiry Approved";
    // redirect("enquiry_approval");      
  
}

public function update_approval_status_reject(){

  $hdn_EnqID = $this->input->post("hdn_EnqID");
  $chk = $this->input->post("chk");
  $hdn_flag = $this->input->post('hdn_flag');
  $hdn_ID = $this->input->post("hdn_ID");
  $Remarks = $this->input->post('Remarks');
  // print_r($hdn_ID);die;


  foreach ($this->input->post("hdn_ID") as $key => $value) {
          $hdn_ID_val = $value;
          $flag = $hdn_flag[$key];
          $Remarks_val = $Remarks[$key];

          if ($flag == 1) {
            // $chk_val = 1;
            if (isset($chk[$key])) {

              $data["Approved"] = "2";
              $data["Remark_approve"] = $Remarks_val;
                

                $this->db->where("ID", $hdn_ID_val);
                $this->db->update("est_enquiry" ,$data);

              }else{
            // $chk_val = 0;

              $data["Approved"] = "0";
                
                $this->db->where("ID", $hdn_ID_val);
                $this->db->update("est_enquiry" ,$data);
              }
        }

    }

    echo "Enquiry Rejected"; 
    // redirect("enquiry_approval");    
  
}

/*Workorder Approval List start*/

public function search_enquiry_approval()
{
             
             $woid = $_POST['kyesearch'];
             $from_date=date('Y-m-d',strtotime($_POST['from_date']));
             $to_date=date('Y-m-d',strtotime($_POST['to_date']));
             $client_name = $_POST['showclient'];
             $MarketingExe = $_POST['drp_MarketingExe'];
             $postatus = $_POST['drp_postatus'];
             $icompanyidlogin =$_SESSION['company'];
             $count = '';
             $filter =''; 
             $htmlData = '';

                if($woid!='') 
                { 
                 $filter .= "AND a.EnqID like '%".$woid."%' "; 
                 } 

                 if($from_date!='' && $to_date!='') 
                { 
                $filter .= " AND date_format(a.EnqDateTime,'%Y-%m-%d')  >='".$from_date."' and  date_format(a.EnqDateTime,'%Y-%m-%d')  <= '".$to_date."' "; 
                 } 

               if($client_name!='') 
                { 
                $filter .= "AND  a.ClientID ='".$client_name."' "; 
                 } 

                 if($MarketingExe!='') 
                { 
                $filter .= "AND  a.ExecutiveID ='".$MarketingExe."' "; 
                 } 



              if($postatus!='') 
                { 
                $filter .= "AND  a.Approved ='".$postatus."' "; 



               
                 }

                $filter .= " AND  a.ICompanyID ='".$_SESSION['company']."'"; 
                
                $drpdata = $this->Enquiry->Select_enquiry_approve($filter);
                 
              ?>

      <style type="text/css">
           .sorting_1
            {
                 background: none  !important;
            }
             .status1 {
            background-color:#00ff89 !important;
            color: #000000 !important;
           }
             .status2 {
            background-color:#ffb100 !important;
            color: #000000 !important;
           }
             .status3 {
            background-color:#00e7ff !important;
            color: #000000 !important;
           }
             .status4
              {
            background-color:#ff5e00 !important;
            color: #000000 !important;
           }
            .status5
              {
            background-color:#ff5e00 !important;
            color: #000000 !important;
           }
        </style>


                             <div class="table-responsive">
                          <form method="post" id="status_update">
                            <table id="myTable" class="display nowrap cell-border dataTable" cellspacing="0" width="100%">
                              <thead >
                                <tr style="font-size: 10px;">
                                 <th>Action</th>
                                <th>Approval Remarks</th>
                                <th>Enquiry Id</th>
                                <th>Enquiry Date</th> 
                                <th>Status</th>                                     
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th>Annual Quantity</th>
                                <th>Quantity</th>
                                <th>Paper Type</th>
                                <th>GSM</th>                                
                                <th>Length</th>
                                <th>Breadth</th> 
                                <th>Height</th>
                                <th>Print Color</th>
                                <th>Pre Press Detail</th>
                                <th>Press Detail</th>
                                <th>Post Press Detail</th>
                                <th>Corrugation Detail</th>
                                <th>Packing Detail</th>
                                <th>Dispatch Detail</th>
                                <th>Remarks</th>
                                <th>Record ID</th>
                                <th>Contact Person</th>
                                <th>Person Post</th>
                                <th>Contact Email</th>
                                <th>Client Location</th> 
                                <th>Printing</th> 
                                <th>Coating</th> 
                                <th>Lamination</th> 
                                <th>Metpat Lamination</th> 
                                <th>Foiling</th> 
                                <th>Punching</th> 
                                <th>Window Patching</th> 
                                <th>Pasting</th> 
                                <th>Corrugation</th> 
                                <th>Estimate Comment</th>
                                </tr>
                              </thead>
                              <tbody id="tbl_search_mode_tbody">
                              
      <?php 
      $key=1;
      foreach($drpdata  as $key =>$r) 
      {   ?>

       <tr style="font-size: 11px;" class="<?php if($r->Approved=='0'){echo "status2";}  else if($r->Approved=='1'){echo "status1";}  else if($r->Approved=='2'){echo "status4";} ?>">
        <td width="10%">
        <div class="checkbox-danger checkbox-circle">                      
            <input type="checkbox"  name="chk[<?php echo $key  ?>]" id="chk[<?php echo $key ?>]" onclick="return changeflag(<?php echo $key;?>);">
            <input type="hidden"  name="hdn_EnqID[<?php echo $key  ?>]" id="hdn_EnqID[<?php echo $key  ?>]"  value="<?php echo $r->EnqID  ?>">
            <input type='hidden' id="hdn_ID[<?php echo $key;?>]" name="hdn_ID[<?php echo $key;?>]" value="<?php echo $r->ID ?>">
            <input type='hidden' name="hdn_flag[<?php echo $key;?>]" id="hdn_flag[<?php echo $key;?>]" value="0">
          </div>
        </td>
        <td width="10%"><input type="text" name="Remarks[<?php echo $key  ?>]" id="Remarks[<?php echo $key  ?>]" value="<?php echo $r->Remark_approve ?>"></td>
        <td width="5%"><?php echo $r->EnqID  ?></td>
        <td width="5%"><?php echo $r->EnqDateTime  ?></td> 
        <td width="5%"><?php if($r->Status=='0'){echo "Pending";} if($r->Status=='4'){echo "Estimated";}  else if($r->Status=='2'){echo "Estimated & Quoted";}  else if($r->Status=='3'){echo "Converted";} else if($r->Status=='1'){echo "Rejected";}  ?></td>
        <td width="25%"><?php echo $r->ProductName  ?></td>
        <td width="5%"><?php echo $r->ProductCode  ?></td>
        <td width="5%"><?php echo $r->AnnualQty  ?></td>
        <td width="5%"><?php echo $r->Quantity  ?></td>
        <td width="5%"><?php echo $r->PaperType  ?></td>
        <td width="5%"><?php echo $r->Gsm  ?></td> 
        <td width="5%"><?php echo $r->Length  ?></td> 
        <td width="5%"><?php echo $r->Breadth  ?></td> 
        <td width="5%"><?php echo $r->Height  ?></td> 
        <td width="5%"><?php echo $r->PrintColor  ?></td> 
        <td width="5%"><?php echo $r->PrePressDetail  ?></td> 
        <td width="5%"><?php echo $r->PressDetail  ?></td> 
        <td width="5%"><?php echo $r->PostPressDetail  ?></td> 
        <td width="5%"><?php echo $r->CorrugationDetail  ?></td> 
        <td width="5%"><?php echo $r->PackingDetail  ?></td> 
        <td width="5%"><?php echo $r->DespatchDetail  ?></td> 
        <td width="5%"><?php echo $r->OtherRemark  ?></td> 
        <td width="5%"><?php echo $r->RecordID  ?></td> 
        <td width="7%"><?php echo $r->ContactPerson  ?></td>
        <td width="7%"><?php echo $r->PersonPost  ?></td>        
        <td width="5%"><?php echo $r->ContactNo_Email  ?></td>
        <td width="5%"><?php echo $r->ClientLocation ?></td>
        <td width="10%"><?php echo $r->printing ?></td>
        <td width="10%"><?php echo $r->coating ?></td>
        <td width="10%"><?php echo $r->lamination ?></td>
        <td width="10%"><?php echo $r->metpat_lamination ?></td>
        <td width="10%"><?php echo $r->foiling ?></td>
        <td width="10%"><?php echo $r->punching ?></td>
        <td width="10%"><?php echo $r->window_patching ?></td>
        <td width="10%"><?php echo $r->pasting ?></td>
        <td width="10%"><?php echo $r->corrugation ?></td>
        <td width="10%"><?php echo $r->CostingDeptComment ?></td>
         </tr>
      <?php  }       $key++;   ?>


                              </tbody>
                          </table>
                        </form>
                        </div>



    <!-- end - This is for export functionality only -->
    <script>

      $(document).ready(function () {
            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [
                        {
                            "visible": false
                            , "targets": 2
                        }
          ]
                    , "order": [[2, 'desc']]
                    , "displayLength": 25
                    , "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example23 tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    }
                    else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip'
            , buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });
    </script>

    

<?php 
}

/*Enquiry Approval List end*/





public function npdc_print()  
{   
          error_reporting(0);
          $filter =''; 
          //$enq_id = '5540';
          $enq_id = $_GET['hdn_enqid'];
          $filter .= "AND  a.ID ='".$enq_id."' ";
          $data['company_name'] = $this->Enquiry->company_profile(); 
          $data['enquiry_profile'] = $this->Enquiry->Select_enquiry_npdc($filter);           
          $this->load->library('m_pdf'); 
          $pdf = $this->m_pdf->load();
          $html = $this->load->view('NPDC/npdcchart', $data,true);
          $pdf->setAutoTopMargin = 'stretch' ;
          $pdf->autoMarginPadding = -20;
          $pdf->setAutoBottomMargin = 'pad';
          $pdf->showWatermarkText = true;
          $pdf->WriteHTML($html);        
          $pdf->Output("$output", 'I');
                                

       }

    }
      ?>              
                 