<?php 
	class Permission extends CI_Model
	{






      



		public function operator_list()
		{
			
		    $this->db->select('category_id,icon,name,link,parent_id');
           // $this->db->where_not_in('parent_id',0);
            $this->db->where('status',1);
            $this->db->order_by('sort_order','ASC');
            $query=$this->db->get('ample_admin_category');
            return $query->result();

		}




      

      public function supervisor_list()
		{
			  	$this->db->select('UserID,UserName,Post,UserDepartmentID');

				$this->db->from('usermaster');
				$this->db->where('IsActive',1);
                $this->db->order_by('UserName','ASC');
				$query = $this->db->get();	
				return $query->result();
		}




			public function item_machinenames_list()
		{
			$this->db->select('RecId','MachineName');
			$query=$this->db->where('PrID','FC');
			$query=$this->db->get('item_machinenames');
			return $query->result();
		}


             public function operator_info($id)
		{
			
			$query=$this->db->where('UserID',$id);
			$query=$this->db->get('usermaster');
			return $query->result();
		}


		     public function supervisor_info($id)
		{
			
			$query=$this->db->where('UserID',$id);
			$query=$this->db->get('usermaster');
			return $query->result();
		}


		

		       public function operator_check($id)
		{
			$this->db->select('RecId','MachineName');
            $this->db->from('item_machinenames');
            $this->db->join('item_operator_machine', 'item_operator_machine.MachineID = item_machinenames.RecId');
            $query=$this->db->where('UserId',$id);			
			$query=$this->db->get();
			return $query->result();
		}







		      public function sup_operator_check($id)
		  {
			$query=$this->db->where('UserId',$id);
			$query=$this->db->get('user_permission_granted');
			return $query->result();
		  }


		  

			public function operator_mydepartment($department_id)
			{   
			 
			  $this->db->select('RecId,MachineName');
			  $this->db->where('prID',$department_id);
			  $this->db->from('item_machinenames');
			  $this->db->order_by('MachineName','ASC');
			  $query = $this->db->get();	
			  return $query->result();
			   
			}







	}
?>