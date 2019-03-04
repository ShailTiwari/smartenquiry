<?php 
	class Main_model extends CI_Model
	{
        

	
	
	
		


    public function select_company()
        {           
            
            $this->db->select('CompanyName,ICompanyID');
            $query=$this->db->get('companyprofile');
            return $query->result();
        }




            public function select_sidebar_nav()
        {   
             $user_check= $_SESSION['user_id']; 
 if ($user_check !=00001)
   {
    $query1 = $this->db->query("SELECT a.category_id,a.link,a.icon,a.name  from (ample_admin_category a  join user_permission_granted as b on a.category_id=b.ModuleID and b.UserId='$user_check') where a.parent_id=0 and a.status=1  order by a.sort_order ASC");
   }

   else  {
    $query1 = $this->db->query("SELECT * FROM ample_admin_category WHERE parent_id =0 and status=1 order by sort_order ASC");
  }





   return $abc= $query1->result();       
          
        }





    


    public function check_permission($my_page_id)
        {   
            $user_check= $_SESSION['user_id']; 
       if ($user_check !=00001)
         {
          $query1 = $this->db->query("SELECT a.category_id,a.link,a.icon,a.name  from (ample_admin_category a  join user_permission_granted as b on a.category_id=b.ModuleID) where a.category_id='$my_page_id' and a.status=1 order by a.sort_order ASC");
           return $abc= $query1->num_rows();
         }

       else 
         {
              return $abc= 1;
         }     
          
        }









      public function pending_enquiery()
        {  
            $this->db->select('ID,EnqID');
            $this->db->where('Status',0);
            $this->db->where('AUID',$_SESSION['user_id']);
            $query=$this->db->get('est_enquiry');
            return $query->num_rows();
        }


      public function   Estimated_enquiery()
        {  
            $this->db->select('ID,EnqID');
            $this->db->where('Status',1);
            $this->db->where('AUID',$_SESSION['user_id']);
            $query=$this->db->get('est_enquiry');
            return $query->num_rows();
        }



          public function  Quoted_enquiery()
        {  
            $this->db->where('Status',2);
            $this->db->where('AUID',$_SESSION['user_id']);
            $query=$this->db->get('est_enquiry');
            return $query->num_rows();
        }





        public function  Converted_enquiery()
        {  
            $this->db->where('Status',3);
            $this->db->where('AUID',$_SESSION['user_id']);
            $query=$this->db->get('est_enquiry');
            return $query->num_rows();
        }
        





         public function  Rejected_enquiery()
        {  
            $this->db->where('Status',4);
            $this->db->where('AUID',$_SESSION['user_id']);
            $query=$this->db->get('est_enquiry');
            return $query->num_rows();
        }




 public function total_workorder()
        { 
            $my_user_id=$_SESSION['user_id'];
           $my_company_id=$_SESSION['company'];

  $query = $this->db->query("SELECT count(a.JobNo) as full_count from item_wodetail as a,item_womaster as b
            where a.woid=b.woid  and b.AUID='$my_user_id' AND b.ICompanyID='$my_company_id'");
            $ret = $query->row();
           return $ret->full_count;
        }



     
      public function   pending_workorder()
        { 
           $my_user_id=$_SESSION['user_id'];
           $my_company_id=$_SESSION['company'];
        $query = $this->db->query("SELECT count(a.JobNo) as full_count from item_wodetail as a,item_womaster as b
           where a.woid=b.woid  and b.AUID='$my_user_id' AND b.ICompanyID='$my_company_id' and  Approved='0.00'");
            $ret = $query->row();
           return $ret->full_count;
        }



          public function  approved_workorder()
        {  
          $my_user_id=$_SESSION['user_id'];
           $my_company_id=$_SESSION['company'];
       $query = $this->db->query("SELECT count(a.JobNo) as full_count from item_wodetail as a,item_womaster as b
           where a.woid=b.woid  and b.AUID='$my_user_id' AND b.ICompanyID='$my_company_id' and  Approved='1.00'");
            $ret = $query->row();
           return $ret->full_count;
        }


    public function  reject_workorder()
        {  
            $my_user_id=$_SESSION['user_id'];
           $my_company_id=$_SESSION['company'];
       $query = $this->db->query("SELECT count(a.JobNo) as full_count from item_wodetail as a,item_womaster as b
           where a.woid=b.woid  and b.AUID='$my_user_id' AND b.ICompanyID='$my_company_id' and  Approved='2.00'");
            $ret = $query->row();
           return $ret->full_count;
        }





         public function  user_count()
        {  
            $this->db->where('UActive',1);
            $query=$this->db->get('userinfo');
            return $query->num_rows();
        }



          public function  operator_count()
        {  
            $this->db->where('UActive',1);
            $this->db->where('PersonPost','Operator');
            $query=$this->db->get('userinfo');
            return $query->num_rows();
        }



          public function  supervisor_count()
        {  
            $this->db->where('UActive',1);
            $this->db->where('PersonPost','supervisor');
            $query=$this->db->get('userinfo');
            return $query->num_rows();
        }



  public function post(){

        $query = $this->db->query("SELECT distinct(post) FROM usermaster WHERE isactive = 1;");
        return $query->result();
    }

    public function comp(){

        $query = $this->db->query("SELECT ICompanyID,CompanyName FROM companyprofile WHERE isactive=1;");
        return $query->result();
    }

    public function depart(){

        $query = $this->db->query("SELECT DepttID,DepttName FROM item_deptt WHERE IsActive=1;");
        return $query->result();
    }



		

       /* public function admin_Login($email,$password,$company)
		{			
			$this->db->where('UserName',$email);
			$this->db->where('UserPass',$password);
            $this->db->where('ICompanyID',$company);
            $this->db->where('UActive',1);
			$query=$this->db->get('userinfo');
			return $query->result();
		}*/

 public function admin_Login($email,$password,$company)
        {           
            $this->db->where('UserLoginName',$email);
            $this->db->where('UserPassword',$password);
            //$this->db->where('ICompanyID',$company);
            $this->db->where('IsActive',1);
            $query=$this->db->get('usermaster');
            return $query->result();
        }




		public function admin_profile()
		{
			$id=$_SESSION['user_login_id'];
			$this->db->where('IsActive','1');
			$this->db->where('UserID',$id);
			$query=$this->db->get('usermaster');
			return $query->result();
		}



		public function ForgotPassword($email)
       {
        $this->db->select('email');
        $this->db->from('users'); 
        $this->db->where('email', $email); 
        $query=$this->db->get();
        return $query->row_array();
       }


public function sendpassword($data)
{
        $email = $data['email'];
        $query1=$this->db->query("SELECT *  from users where email = '".$email."' ");
        $row=$query1->result_array();
        if ($query1->num_rows()>0)
      
{
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $newpass['password'] = md5($passwordplain);
        $this->db->where('email', $email);
        $this->db->update('users', $newpass); 
        $mail_message='Dear '.$row[0]['first_name'].','. "\r\n";
        $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
        $mail_message.='<br>Please Update your password.';
        $mail_message.='<br>Thanks & Regards';
        $mail_message.='<br>Your company name';        
        date_default_timezone_set('Etc/UTC');
        require FCPATH.'assets/PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = "tls"; 
        $mail->Debugoutput = 'html';
        $mail->Host = "yooursmtp";
        $mail->Port = 587;
        $mail->SMTPAuth = true;   
        $mail->Username = "your@email.com";    
        $mail->Password = "password";
        $mail->setFrom('admin@site', 'admin');
        $mail->IsHTML(true);
        $mail->addAddress($email);
        $mail->Subject = 'OTP from company';
        $mail->Body    = $mail_message;
        $mail->AltBody = $mail_message;
if (!$mail->send()) {
     $this->session->set_flashdata('msg','Failed to send password, please try again!');
} else {
   $this->session->set_flashdata('msg','Password sent to your email!');
}
  redirect(base_url().'user/Login','refresh');        
}
else
{  
 $this->session->set_flashdata('msg','Email not found try again!');
 redirect(base_url().'user/Login','refresh');
}
}




	}
?>