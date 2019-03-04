<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct(); 		
		$this->load->library('user_agent');
        $this->load->model('main_model');

 	}


 	  public function not_access()
	{
		$this->load->view('backend/not_permission');
	}





     public function not_found()
	{
		$this->load->view('backend/not_found_404');
	}





	public function location()
	{		
	    $data['company'] = $this->main_model->select_company();
		$this->load->view('backend/location',$data);
	}



	public function index()
	{
		if (isset($_SESSION['user_login_id']) && isset($_SESSION['user_id'])  && isset($_SESSION['ample_admin_login_id'])) 
		{
		return redirect ('main/dashboard');
		}


		else
		{
	    $data['company'] = $this->main_model->select_company();
		$this->load->view('backend/login',$data);
		}
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

		$data['total_workorder'] = $this->main_model->total_workorder();
		$data['pending_workorder'] = $this->main_model->pending_workorder();
		$data['approved_workorder'] = $this->main_model->approved_workorder();
		$data['reject_workorder'] = $this->main_model->reject_workorder();

		$data['user_count'] = $this->main_model->user_count();
		$data['operator_count'] = $this->main_model->operator_count();
		$data['supervisor_count'] = $this->main_model->supervisor_count();
		$data['profile'] = $this->main_model->admin_profile();
		$this->load->view('backend/dashboard',$data);
	}








	public function profile()
	{
		
        $login_data['sidebar_nav'] = $this->main_model->select_sidebar_nav();
        $login_data['post'] = $this->main_model->post();
		$login_data['company'] = $this->main_model->comp();
		$login_data['dep'] = $this->main_model->depart();
		$login_data['profile'] = $this->main_model->admin_profile();
		$this->load->view('backend/admin_profile',$login_data);
	}









}
?>