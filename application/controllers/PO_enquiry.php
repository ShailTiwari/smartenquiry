<?php

class PO_enquiry extends CI_Controller 
{
   


    public function __construct() 
    {
        parent::__construct();        
        $this->load->model('main_model');
        error_reporting(0);
    }







    public function index() 
      {
      $query = $this->db->query("SELECT CompanyId,CompanyName  from companymaster order by CompanyName ASC");
      $drpdata= $query->result();
      $data['client'] =$drpdata;
      $data['sidebar_nav'] = $this->main_model->select_sidebar_nav();      
      $this->load->view('backend/po_report', $data);
      }





		public function getdata() 
		    {
		        $Fromdate =date("Y-m-d", strtotime($this->input->post('Fromdate')));
            $ToDate =date("Y-m-d", strtotime($this->input->post('ToDate')));
		        $client_ID = $this->input->post('showclient');

                

               
                if ($client_ID !='' ) 
                {
                   $query = $this->db->query("SELECT a.so_id,a.po_no,DATE_FORMAT(a.po_date, '%d-%m-%Y') as po_date,DATE_FORMAT(a.po_email_date, '%d-%m-%Y') as po_email_date ,ifnull(b.CompanyName,'') as companyname,a.new_client_name,c.EmpName as contact_person,a.remarks,
                    a.job_type,a.productID,a.productCode,a.product_name,a.ord_qty, a.ord_rate,a.ord_amount,a.processing_charge,concat(e.city,' ',e.State)  as  del_location_id , f.CartonType, a.new_location,d.Narration as payment_terms,DATE_FORMAT(a.req_del_date, '%d-%m-%Y') as req_del_date,a.po_status,a.IsActive,a.AUID,DATE_FORMAT(a.ADateTime, '%d-%m-%Y %h:%m:%s %p') as Date,a.estimate_id,a.estination_status,a.estimate_recordid,a.client_status 
                  FROM (((((item_central_so as a LEFT JOIN companymaster as b ON a.companyID=b.CompanyId) 
                  left join EmployeeMaster as c on  a.ExecutiveID=c.EmpId)
                  left join paymentterms as d on  a.payment_terms=d.PayID)
                  left join companydeladdress as e on  a.del_location_id=e.Recordid)
                  left join est_itemtypemaster as f on  a.ItemtypeID=f.ID)
                 WHERE  a.IsActive=1 AND date_format(a.ADateTime,'%Y-%m-%d')  >='".$Fromdate."' and  date_format(a.ADateTime,'%Y-%m-%d')  <= '".$ToDate."' and a.companyID='".$client_ID."' ORDER BY so_id DESC;");
                }




                else
                {
                    $query = $this->db->query("SELECT a.so_id,a.po_no,DATE_FORMAT(a.po_date, '%d-%m-%Y') as po_date,DATE_FORMAT(a.po_email_date, '%d-%m-%Y') as po_email_date ,ifnull(b.CompanyName,'') as companyname,a.new_client_name,c.EmpName as contact_person,a.remarks,
                    a.job_type,a.productID,a.productCode,a.product_name,a.ord_qty, a.ord_rate,a.ord_amount,a.processing_charge,concat(e.city,' ',e.State)  as  del_location_id , f.CartonType, a.new_location,d.Narration as payment_terms,DATE_FORMAT(a.req_del_date, '%d-%m-%Y') as req_del_date,a.po_status,a.IsActive,a.AUID,DATE_FORMAT(a.ADateTime, '%d-%m-%Y %h:%m:%s %p') as Date,a.estimate_id,a.estination_status,a.estimate_recordid,a.client_status 
                  FROM (((((item_central_so as a LEFT JOIN companymaster as b ON a.companyID=b.CompanyId) 
                  left join EmployeeMaster as c on  a.ExecutiveID=c.EmpId)
                  left join paymentterms as d on  a.payment_terms=d.PayID)
                  left join companydeladdress as e on  a.del_location_id=e.Recordid)
                  left join est_itemtypemaster as f on  a.ItemtypeID=f.ID)
                 WHERE  a.IsActive=1 AND date_format(a.ADateTime,'%Y-%m-%d')  >='".$Fromdate."' and  date_format(a.ADateTime,'%Y-%m-%d')  <= '".$ToDate."'  ORDER BY so_id DESC;");
                }    
                 $drpdata= $query->result();
               // $jsonData = json_encode($drpdata);
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
                                 
                                <th>Action</th>
                                <th>Est. No</th>
                                <th>Po No</th>
                                <th>PO Date</th>
                                <th>PO Email</th>
                                <th>Client Name</th>
                                <th>Executive</th> 
                                <th>Carton Type </th>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>Product type</th>
                                <th>Ord Qty</th>
                                <th>Ord Rate</th>
                                <th>Ord Amount</th>
                                <th>Processing Charge</th>
                                <th>Delivery Address</th>
                                <th>Delivery Date</th>
                                <th>PO Status</th>
                                <th>Payment</th>
                                <th>Est.Status</th>
                                <th>Client Status</th>
                                </tr>
                              </thead>
                              <tbody id="tbl_search_mode_tbody">




<?php

            foreach($drpdata  as $key =>$r) 
      {   ?>
        <tr style="font-size: 11px;" class="<?php if($r->estination_status=='0'){echo "status4";}  else if($r->estination_status=='1'){echo "status2";}  else if($r->estination_status=='2'){echo "status5";} else if($r->estination_status=='3'){echo "status1";}  ?>">
        


        <td width="5%"> <?php if ($r->estination_status=='0')
             {?>
              <div style="width:100%;display:inline-flex;height: 31px;" >
                <div  style="width:50%">
                  <form class="form-group" method="post" action="<?php echo base_url('PO_enquiry/edit');?>"> 
                  <input type="hidden" name="enquiry_id" value="<?php echo $r->so_id  ?>"><button class="btn btn-info"> <i class="fa fa-edit"></i></button>
                </form> 
                </div>
                   <div  style="width:50%">
                    <span class="btn btn-danger mytrash" id="<?php echo $r->so_id  ?>" ><i class="fa fa-trash-o"></i></span>
                </div>
           <?php } else { ?> 
              <div  style="width:50%">
                 
                </div>

            <?php } ?>


        </td>
        <td width="5%"><?php echo $r->estimate_id  ?></td>
        <td width="5%"><?php echo $r->po_no  ?></td> 
        <td width="25%"><?php echo $r->po_date  ?></td>
        <td width="25%"><?php echo $r->po_email_date  ?></td>
        <td width="5%"><?php echo $r->companyname  ?> <?php echo $r->new_client_name  ?></td>
        <td width="5%"><?php echo $r->contact_person  ?></td>
        <td width="5%"><?php echo $r->CartonType  ?></td>
        <td width="5%"><?php echo $r->productCode  ?></td>
        <td width="5%"><?php echo $r->product_name  ?></td> 
        <td width="7%"><?php echo $r->job_type  ?></td>
        <td width="7%"><?php echo $r->ord_qty  ?></td>        
        <td width="5%"><?php echo $r->ord_rate  ?></td>
        <td width="5%"><?php echo $r->ord_amount ?></td>
        <td width="10%"><?php echo $r->processing_charge ?></td>
        <td width="10%"><?php echo $r->del_location_id ?><?php echo $r->new_location ?></td>
        <td width="10%"><?php echo $r->req_del_date ?></td>
        <td width="10%"><?php echo $r->po_status ?></td>
        <td width="10%"><?php echo $r->payment_terms ?></td>
        <td width="5%"><?php if($r->estination_status=='0'){echo "Pending";} if($r->estination_status=='1'){echo "Estimated";}  else if($r->estination_status=='2'){echo "Finalized";}   ?></td>
        <td width="5%"><?php if($r->client_status=='0'){echo "Pending";} if($r->client_status=='1'){echo "Confirm";}  else if($r->client_status=='2'){echo "Rejected";}  else if($r->client_status=='3'){echo "Cancel";}   ?></td>
         </tr>
       <?php  }       $key++;   ?>
                              </tbody>
                          </table>
                        </div>
  <script>

      $(function(){
        $('.mytrash').click(function(){
          var url = "<?php echo base_url('PO_enquiry/mydelete');?>";
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







    public function New_po() 
    {


       $query = $this->db->query("SELECT CompanyId,CompanyName  from companymaster order by CompanyName ASC");
      $client= $query->result();
      $data['client'] =$client;

       $query = $this->db->query("SELECT PayID,Narration  from paymentterms order by PayID ASC");
      $payment_terms= $query->result();
      $data['payment_terms'] =$payment_terms;

       $query = $this->db->query("SELECT POStatus  from item_postatus order by POStatus ASC");
      $pos_status= $query->result();
      $data['pos_status'] =$pos_status;

       $query = $this->db->query("SELECT EmpId,EmpName  from EmployeeMaster order by EmpName ASC");
      $employee= $query->result();
      $data['employee'] =$employee;

       $query = $this->db->query("SELECT ID,CartonType  from est_itemtypemaster order by CartonType ASC");
      $paperkind= $query->result();
      $data['CartonType'] =$paperkind;

       $data['template'] = 'PO_enquiry/add';
        $data['title'] = $this->company_name1;
        $data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
     $this->load->view('backend/po_add',$data);

    }







 public function mysave() 
 { 
          $master = array(
            'po_no' => $this->input->post('pono'),
            'po_date' => date("Y-m-d", strtotime($this->input->post('po_date'))),
            'po_email_date' =>date("Y-m-d", strtotime($this->input->post('po_email_date'))),
            'companyID' => $this->input->post('client'),
            'new_client_name' => $this->input->post('newclient'),
            'ExecutiveID' => $this->input->post('MarketingExe'),
            'remarks' => $this->input->post('remarks'),
            'job_type' => $this->input->post('prdcttype'),        
            'ItemtypeID' => $this->input->post('CartonType'),             
            'productID' => $this->input->post('product_id'),       
            'productCode' => $this->input->post('product_code'),
            'product_name' => $this->input->post('prdctname'),        
            'ord_qty' => $this->input->post('order_qty'),
            'ord_rate' => $this->input->post('porate'),
            'ord_amount' => $this->input->post('poamount'),
            'processing_charge' => $this->input->post('processingcharge'),
            'del_location_id' => $this->input->post('delivery_address'),
            'new_location' => $this->input->post('newDeliveryaddress'), 
            'payment_terms' => $this->input->post('payment_type'),
            'req_del_date' =>date("Y-m-d",strtotime($this->input->post('del_date'))),
            'po_status' => $this->input->post('po_status'),   
            'client_status' => $this->input->post('client_status'), 
            'IsActive' => '1',
            'ICompanyID' => $_SESSION['company'],
            'AUID' => $_SESSION['user_id'],
            'ADateTime' => date('Y-m-d h:i:s'), 
        );   


         // print_r($master);
          $this->db->trans_begin();
          $query1=$this->db->insert('item_central_so',$master); # Inserting data
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



public function edit()    
    { 


    $data['enquiry_id']=$this->input->post('enquiry_id'); 
     $query = $this->db->query("SELECT CompanyId,CompanyName  from companymaster order by CompanyName ASC");
      $client= $query->result();
      $data['client'] =$client;

       $query = $this->db->query("SELECT PayID,Narration  from paymentterms order by PayID ASC");
      $payment_terms= $query->result();
      $data['payment_terms'] =$payment_terms;

       $query = $this->db->query("SELECT POStatus  from item_postatus order by POStatus ASC");
      $pos_status= $query->result();
      $data['pos_status'] =$pos_status;

       $query = $this->db->query("SELECT EmpId,EmpName  from EmployeeMaster order by EmpName ASC");
      $employee= $query->result();
      $data['employee'] =$employee;


       $query = $this->db->query("SELECT ID,CartonType  from est_itemtypemaster order by CartonType ASC");
      $paperkind= $query->result();
      $data['CartonType'] =$paperkind;

        $data['title'] = $this->company_name1;
        $data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
    $data['title'] = $this->company_name1;
    $this->load->view('backend/po_edit',$data);



    }




public function update_value_get() 
             {
        $eqid = $_REQUEST['enq_Id'];
        $icompanyidlogin =$_SESSION['company'];

        $Item_Unit_MasterAry = array();
        $Item_contecAry = array();
        $this->db->trans_start();
       $master =  $this->db->query("SELECT so_id,po_no,date_format(po_date,'%d-%m-%Y') as po_date,date_format(po_email_date,'%d-%m-%Y') as po_email_date,companyID,
    new_client_name,
    ExecutiveID,
    remarks,
    job_type,
    productID,
    productCode,
    product_name,
    ord_qty,
    ord_rate,
    ord_amount,
    processing_charge,
    del_location_id,
    new_location,
    payment_terms,
    date_format(req_del_date,'%d-%m-%Y') as req_del_date,
    po_status,
    IsActive,
    ICompanyID,
    AUID,
    ADateTime,
    MUID,
    MDateTime,
    estination_status,
    estimate_id,
    estimate_recordid,
    client_status
FROM  item_central_so where so_id='$eqid' ");
        $Item_Unit_MasterAry= $master->result();


        $this->db->select('empid,empname');
        $this->db->from('employeemaster');
        $Contectperson = $this->db->get();  
        $Item_contecAry= $Contectperson->result();
        $this->db->trans_complete(); 

        $mainArry = array();
        $mainArry['Master'] = $Item_Unit_MasterAry;
        $mainArry['Contectperson'] = $Item_contecAry;
        $getdata= $mainArry;
        $jsonData = json_encode($getdata);
            echo $jsonData;
              }






 public function myupdate() 
 {      
           $enq_id = $_POST['enq_id']; 
          $master = array(
            'po_no' => $this->input->post('pono'),
            'po_date' => date("Y-m-d", strtotime($this->input->post('po_date'))),
            'po_email_date' =>date("Y-m-d", strtotime($this->input->post('po_email_date'))),
            'companyID' => $this->input->post('client'),
            'new_client_name' => $this->input->post('newclient'),
            'ExecutiveID' => $this->input->post('MarketingExe'),
            'remarks' => $this->input->post('remarks'),
            'job_type' => $this->input->post('prdcttype'),            
            'productID' => $this->input->post('product_id'),       
            'productCode' => $this->input->post('product_code'),
            'product_name' => $this->input->post('prdctname'),        
            'ord_qty' => $this->input->post('order_qty'),
            'ord_rate' => $this->input->post('porate'),
            'ord_amount' => $this->input->post('poamount'),
            'processing_charge' => $this->input->post('processingcharge'),
            'del_location_id' => $this->input->post('delivery_address'),
            'new_location' => $this->input->post('newDeliveryaddress'), 
            'payment_terms' => $this->input->post('payment_type'),
            'req_del_date' =>date("Y-m-d",strtotime($this->input->post('del_date'))),
            'po_status' => $this->input->post('po_status'),   
            'client_status' => $this->input->post('client_status'),    
            'IsActive' => '1',
            'ICompanyID' => $_SESSION['company'],
            'MUID' => $_SESSION['user_id'],
            'MDateTime' => date('Y-m-d h:i:s'), 
        );   


           // print_r($master);
           $this->db->trans_begin();
           $this->db->where('so_id',$enq_id);
           $query1=$this->db->update('item_central_so',$master); # Updating data
           $this->db->trans_complete(); 

        if ($this->db->trans_status() === FALSE)
           {
            $this->db->trans_rollback();
            $this->session->set_flashdata('msg','Data Updated Fail');
            echo "Data Inserted Fail";
           }
     

        else
          {
          $this->db->trans_commit();
          $this->session->set_flashdata('msg','Data Updated successfully');
          echo "Data Inserted successfully";
          }
  }




 public function mydelete() 
 {
      //$enq_id = $_POST['enquiry_id'];
      $enq_id = $_POST['enq_id']; 

      $this->db->trans_begin();
      $this->db->where('so_id',$enq_id);
      $query1=$this->db->delete('item_central_so');       # Deleting data
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






    public function send_mail($EnqID) {
//        $this->add();
        $result = $this->db->get_row('quotemail', array('ID' => 5, 'IsActive' => 1), '', '', array('SenderEmailId', 'SenderEmailPwd', 'ReciverEmailIDs', 'Purpose'));
        $config['useragent'] = 'CodeIgniter';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = $result->SenderEmailId; // Your gmail id
        $config['smtp_pass'] = $result->SenderEmailPwd; // Your gmail Password
        $config['smtp_port'] = 465;
        $config['wordwrap'] = TRUE;
        $config['wrapchars'] = 76;
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['validate'] = FALSE;
        $config['priority'] = 3;
        $config['newline'] = "\r\n";
        $config['crlf'] = "\r\n";

//        $this->load->library('email');
        $this->email->initialize($config);

        $this->email->from($result->SenderEmailId, 'Kumar Printer');
        $this->email->to($result->ReciverEmailIDs);
        // $this->email->cc($result->ReciverEmailIDs);

        $this->email->subject($result->Purpose);
        $messege = $this->mail_body($this->company_id, $EnqID);
        $this->email->message($messege);

        $this->email->send();
        echo "<script>window.close();</script>";
    }








    public function executive_id()
     {
        $company_id = $_REQUEST['clienid'];

             $query = $this->db->query("SELECT RepID  from companymaster where CompanyId='$company_id'");
            $ret = $query->row();
            echo $ret->RepID;

      }

      

  public function delivery_address()
     {
        $clientid = $_REQUEST['clienid'];
        $query = $this->db->query("SELECT Recordid,companyid,Companyname,Address,concat(city,' ',State)  as 
        	                   Citystate   from companydeladdress where companyid ='$clientid' and IsActive='1'");
         $drpdata= $query->result();
         $jsonDataForPurchase = json_encode($drpdata);
         $key=1;
            foreach($drpdata  as $r) 
            {
              $key;
              $htmlData .="<option value='$r->Recordid' >$r->Companyname $r->Address</option>";                
                $key++;
             }

 echo $htmlData;


      }

      



 public function find_duplicate_item() 
   {
            $item_code = $_REQUEST['item_code'];
            $icompanyidlogin =$_SESSION['company'];
            $query = $this->db->query("SELECT Check_FGCode('$item_code') as item_count");
            $ret = $query->row();
            echo  $ret->item_count;  
            
    }




 public function getproduct() 

    {
            $htmlData = '';
            
            $companyId=$_REQUEST['Companyid'];
            $icompanyidlogin=$_SESSION['company'];
            $query = $this->db->query("Select a.ItemID,replace(a.Description,'".'"'."','') as Description,a.Manufacturer,a.Quality,b.UnitName,a.IPrefix,d.classname,a.AccCode,a.PackDetails from Item_Master as a,Item_Unit_Master as b,"
                    . "Item_Group_Master as c,item_class as d where  a.ICompanyID = '$icompanyidlogin' and a.Manufacturer= '$companyId' and a.GroupID = c.GroupID and  a.UOM=b.UnitID and d.classid=a.PackingUnit and a.IsActive = 1 and a.GroupID= '00008' and a.Type ='F' group by a.Description,a.ItemID,a.Manufacturer,a.Quality,b.UnitName");
         $drpdata= $query->result();
$key=1;
foreach($drpdata  as $key =>$r) 
{

  echo $key;

$htmlData .="<tr  style='font-size: small;' onclick='FillItem_name($key);'><td ><a>" . $r->AccCode . "</a></td><td><a>" . $r->IPrefix . "</a></td><td>"
                        . "<input  type='hidden' name='hdn_ItemID$key' id='hdn_ItemID$key' value='$r->ItemID'>"
                        . "<input  type='hidden' name='hdn_Description$key' id='hdn_Description$key' value='$r->Description'>"
                        . "<input  type='hidden' name='hdn_Manufacturer$key' id='hdn_Manufacturer$key' value='$r->Manufacturer'>"
                        . "<input  type='hidden' name='hdn_Quality$key' id='hdn_Quality$key' value='$r->Quality'>"
                        . "<input  type='hidden' name='hdn_UnitName$key' id='hdn_UnitName$key' value='$r->UnitName'>"
                        . "<input  type='hidden' name='hdn_IPrefix$key' id='hdn_IPrefix$key' value='$r->IPrefix'>"
                        . "<input  type='hidden' name='hdn_classname$key' id='hdn_classname$key' value='$r->classname'>"
                        . "<input  type='hidden' name='hdn_AccCode$key' id='hdn_AccCode$key' value='$r->AccCode'>"
                        . "<input  type='hidden' name='hdn_PackDetails$key' id='hdn_PackDetails$key' value='$r->PackDetails'><a >" . $r->Description . "</a></td>"
                        . "<td ><a >" . $r->Quality . "</a></td>"
                        . "<td hidden><a >" . $r->UnitName . "</a></td>"
                        . "<td ><a >" . $r->classname . "</a></td>"
                        . "<td hidden><a >" . $r->PackDetails . "</a></td></tr>";

                       $key++;
                        }
          echo $htmlData;
        }







 public function getestproduct() 

    {
            $htmlData = '';
            
            $companyId=$_REQUEST['Companyid'];
            $icompanyidlogin=$_SESSION['company'];
            $query = $this->db->query("SELECT a.RecordID,a.EstimateId,a.FinalQUnit,a.quantity ,a.FinalQRate,b.FPProductID,c.Description,c.IPrefix from (quotationnew as a left join quotationnewex2 as b on a.RecordID=b.RecordId left join item_fpmasterext as c on b.FPProductID=c.ProductID) where a.estatus='F' and a.ClientCompId='$companyId'");
         $drpdata= $query->result();
$key=1;
foreach($drpdata  as $key =>$r) 
{

  echo $key;

$htmlData .="<tr  style='font-size: small;' onclick='FillItem_nameest($key);'><td ><a>" . $r->RecordID . "</a></td><td><a>" . $r->EstimateId . "</a></td><td>"
                        ."<input  type='hidden' name='hdn_RecordID$key' id='hdn_RecordID$key' value='$r->RecordID'>"
                        ."<input  type='hidden' name='hdn_EstimateId$key' id='hdn_EstimateId$key' value='$r->EstimateId'>"
                        . "<input  type='hidden' name='hdn_Product$key' id='hdn_Product$key' value='$r->Description'>"
                        ."<input  type='hidden' name='hdn_Quantity$key' id='hdn_Quantity$key' value='$r->quantity'>"
                        . "<input  type='hidden' name='hdn_UnitName$key' id='hdn_UnitName$key' value='$r->FinalQUnit'>"
                        . "<input  type='hidden' name='hdn_QRate$key' id='hdn_QRate$key' value='$r->FinalQRate'>"
                        . "<input  type='hidden' name='hdn_ProductCode$key' id='hdn_ProductCode$key' value='$r->IPrefix'>"
                        . "<input  type='hidden' name='hdn_QCurrAmt$key' id='hdn_product_id$key' value='$r->PProductID'>"
                        . "<input  type='hidden' name='hdn_PackDetails$key' id='hdn_PackDetails$key' value='$r->QCurrAmt'><a >" . $r->IPrefix . "</a></td>"
                        . "<td ><a >" . $r->PProductID . "</a></td>"
                        . "<td ><a >" . $r->Description . "</a></td>"
                        . "<td ><a >" . $r->quantity . "</a></td>"
                        . "<td ><a >" . $r->FinalQRate . "</a></td>"
                        . "<td ><a >" . $r->FinalQUnit . "</a></td></tr>";

                       $key++;
                        }
          echo $htmlData;
        }



    

}
