<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission_master extends CI_Controller 
{




    public function __construct()
    {
       parent::__construct();
       $this->load->library('user_agent'); 
       $this->load->model('main_model'); 
       $this->load->model('Permission');       
    }




       public function user_permission()
  {
      if (!isset($_SESSION['user_login_id'])) 
    {
      return redirect('main');
      
    }

       $my_page_id='26';
       $check_validation = $this->main_model->check_permission($my_page_id);
        if ($check_validation<=0)
         {
          return redirect ('main/not_access');
        }

     $data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
     $data['profile'] = $this->main_model->admin_profile();
    // $data['machinenames_list'] = $this->Permission->item_machinenames_list();
     $data['operator_mydepartment'] = $this->Permission->operator_list();
     $this->load->view('backend/permission_master',$data);
  }






    public function save_supervisor_master()
    {
      error_reporting(0);
       if (isset($_POST['submit'])) 
        {
            
        $username = $this->input->post('username');
        $password = $this->input->post('password');        
        $department = 'ALL';
        $status = $this->input->post('status');
        $operator = $this->input->post('check_list');
        $service_name = implode(',',$_POST['check_list']);


        $operator_data = array(
                                 'UserName'=>$username,
                                'UserLoginName'=>$username,
                                'UserPassword'=>$password,
                                'IsActive'=> $status
                               ); 
      $this->db->trans_begin();
      $query1=$this->db->insert('userinfo', $operator_data); # Inserting data
      $last_id=$this->db->insert_id();     
      if($query1)                        
                   { 
                      

                    foreach ($this->input->post('check_list') as $key => $value)
                        {
                            //echo "Index {$key}'s value is {$value}.";
                             $machine_data = array(
                                                'UserID'=>$last_id,
                                                'ModuleID'=>$value
                                               );                      
                             $query2=$this->db->insert('user_permission_granted',$machine_data);
                         }
                    } 

              $this->db->trans_complete(); 
              # Completing transaction
               


                  if ($this->db->trans_status() === FALSE)
                  {
                    $this->db->trans_rollback();
                    $this->session->set_flashdata('msg','Data Inserted Fail');
                  }
                  else
                  {
                  $this->db->trans_commit();
                  $this->session->set_flashdata('msg','Data Inserted successfully');
                   }
                   return redirect('main/supervisor');
     } 
   }







 public function update_supervisor_master()
    {

       $my_page_id='26';
       $check_validation = $this->main_model->check_permission($my_page_id);
        if ($check_validation<=0)
         {
          return redirect ('main/not_access');
        }


       if (isset($_POST['submit'])) 
        {                     
        $UserId = $this->input->post('user_id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');        
        $department = 'ALL';
        $status = $this->input->post('status');
        $operator = $this->input->post('check_list');
        $operator_data = array(
                                'UserName'=>$username,
                                'UserLoginName'=>$username,
                                'UserPassword'=>$password,
                                'IsActive'=> $status
                               ); 

      $this->db->trans_begin();
     // $this->db->where('UserID',$UserId);
     // $query1=$this->db->Update('usermaster', $operator_data);
                      
                    $this->db->where('UserId', $UserId);
                    $this->db->delete('user_permission_granted');

                    foreach ($this->input->post('check_list') as $key => $value)
                        {
                            $machine_data = array(
                                                'UserID'=>$UserId,
                                                'ModuleID'=>$value
                                               );                      
                             $query2=$this->db->insert('user_permission_granted',$machine_data);
                        }                        
                  


                $this->db->trans_complete(); # Completing transaction            
                    if ($this->db->trans_status() === FALSE)
                     {
                       $this->db->trans_rollback();
                       $this->session->set_flashdata('msg','Data Update Fail');
                      }
                    else
                     {
                       $this->db->trans_commit();
                       $this->session->set_flashdata('msg','Data Update successfully');
                      }
                       //return redirect('main/supervisor');
                      redirect($_SERVER['HTTP_REFERER']);
                   } 
                }





public function getlist()
                    {?>
               
                 <?php $operatorlist = $this->Operator->operator_list();
                            foreach($operatorlist as $r) { ?>

                          <tr>
                               <td><a href="<?php echo site_url('Operator_master/edit/'.$r->UserId.'/'.$r->Department_scope); ?>"><?=$r->UserName?></a></td>
                                <td><?=$r->PrName?></td>                              
                          </tr>
                           <?php } ?>
                  <?php   }











public function get_sup_list()
                    {?>
               
                 <?php $operatorlist = $this->Permission->supervisor_list();
                            foreach($operatorlist as $r) { ?>

                          <tr>
                               <td><a href="<?php echo site_url('Permission_master/permission_edit/'.$r->UserID.'/'.$r->UserDepartmentID); ?>"><?=$r->UserName?></a></td>
                                <td><?=$r->Post?></td>                              
                          </tr>
                           <?php } ?>
                  <?php   }







public function permission_edit()
                    {
       $my_page_id='26';
       $check_validation = $this->main_model->check_permission($my_page_id);
        if ($check_validation<=0)
         {
          return redirect ('main/not_access');
        }


        $id = $this->uri->segment(3);
        $department_id = $this->uri->segment(4);
        
        if (empty($id))
        {
            show_404();
        }
        $data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
     $data['profile'] = $this->main_model->admin_profile();
     $data['operator_info'] = $this->Permission->supervisor_info($id);
     $data['operator_check'] = $this->Permission->sup_operator_check($id);
     $data['operator_mydepartment'] = $this->Permission->operator_list();
      $this->load->view('backend/user_permission_edit',$data);
         }


             }
              ?>