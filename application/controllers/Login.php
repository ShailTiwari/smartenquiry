<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	
	public function __construct()
 	{
 		parent::__construct();
		$this->load->model('main_model'); 		
 	}



public function Login_company()
 	{
 	    $company_databse = $this->input->post("company_location");
	echo 	$_SESSION['database_set']=$company_databse;							

 	}


	public function index()
	{
		if (isset($_SESSION['user_login_id']) && isset($_SESSION['user_id'])) 
		{
		return redirect ('main/dashboard');
		}


		else
		{
	    $data['company'] = $this->main_model->select_company();
		$this->load->view('backend/login',$data);
		}
	}




 public function not_found()
	{
		$this->load->view('backend/not_found_404');
	}

public function dashboard()
	{

		


		if (!isset($_SESSION['user_login_id']) && !isset($_SESSION['user_id'])) 
		 {
			return redirect('main');
		 }

		$data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
		$data['Pending'] = $this->main_model->pending_enquiery();
		$data['Quoted'] = $this->main_model->Quoted_enquiery();
		$data['Estimated'] = $this->main_model->Estimated_enquiery();
		$data['Converted'] = $this->main_model->Converted_enquiery();
		$data['Rejected'] = $this->main_model->Rejected_enquiery();
		$data['user_count'] = $this->main_model->user_count();
		$data['operator_count'] = $this->main_model->operator_count();
		$data['supervisor_count'] = $this->main_model->supervisor_count();
		$data['profile'] = $this->main_model->admin_profile();
		$this->load->view('backend/dashboard',$data);
	}
 	
 	public function Login_Admin()
 	{
 	    $email = $this->input->post("email");
	    $password = $this->input->post("password");
	    $company = '00001';
	    $result=$this->main_model->admin_Login($email,$password,$company);
		 if ($result)
					{			
						foreach($result as $r)
						 {
							$_SESSION['email']=$r->UserName;
							$_SESSION['user_login_id']=$r->UserID;
							$_SESSION['ample_admin_login_id']=$r->UserID;
							$_SESSION['company']=$company;
							$_SESSION['department']=$r->Post;
							$_SESSION['user_id']=$r->UserID;

						 }
						 return redirect('main/dashboard');
					}

			
					else
					{
						 $this->session->set_flashdata('item','Wrong Username  or Password ');
						 return redirect('main');

					}

 	}



 	public function new_user_register()
 	{
 		if (isset($_POST['submit'])) 
 		{
 			
 		$email = $this->input->post('email');
 		$password = $this->input->post('password');
 		$twitter = $this->input->post('twitter');
 		$facebook = $this->input->post('facebook');
 		$gplus = $this->input->post('gplus');
 		$first_name = $this->input->post('first_name');
 		$last_name = $this->input->post('last_name');
 		$phone = $this->input->post('phone');
 		$address = $this->input->post('address');

 		$register_data = array(
 								'email'=>$email,
 								'password'=>$password,
 								'twitter'=>$twitter,
 								'facebook'=>$twitter,
 								'gplus'=>$gplus,
 								'first_name'=>$first_name,
 								'last_name'=>$last_name,
 								'phone'=>$phone,
 								'address'=>$address
 							   );

 		$this->db->insert('register_new_user',$register_data);

 		}
 		redirect('main/dashboard',$register_data);
 	}









 	public function profile()
 	{
 		if (isset($_SESSION['user_login_id']) && isset($_SESSION['user_id'])) 
 		{
			$data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
			$login_data['profile'] = $this->main_model->admin_profile();
	     	$this->load->view('main/dashboard',$login_data);
 		}

 		else
 		{
			return redirect(base_url());
 		}

 	}






 	public function logout()
 	{
 		$this->session->unset_userdata('user_login_id');
 		return redirect(base_url());
 	}






 	 public function ForgotPassword()
   {
         $email = $this->input->post('email');      
         $findemail = $this->main_model->ForgotPassword($email);  
        
         if($findemail)
           {
          $this->main_model->sendpassword($findemail);        
           }
           
           else
           {
          $this->session->set_flashdata('msg',' Email not found!');
          redirect(base_url().'user/Login','refresh');
           }
   }




	public function docs()
 	{
 	
		$data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
		$data['profile'] = $this->main_model->admin_profile();
		$this->load->view('backend/documentation',$data);
 	}

 }
 ?>