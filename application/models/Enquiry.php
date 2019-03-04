<?php 
	class Enquiry extends CI_Model
	{


		public function client_list()
		{
			//$query=$this->db->where('PersonPost','Operator');
			$this->db->order_by('CompanyName','ASC');
			$query=$this->db->get('companymaster');
			return $query->result();
		}





      public function executive_list()
		{
			
			$query=$this->db->where('IsActive',1);
			$query=$this->db->get('EmployeeMaster');
			return $query->result();
		}


 function Select_data_payment_executive($clientId, $icompanyidlogin) 

     {  
        $Item_Unit_MasterAry2 = array();
        $Item_contecAry = array();
        $master2 =  $this->db->query("select * from companymaster_ex1 where HO='1' and IsActive='1' and  companyid ='$clientId'");
        $Item_Unit_MasterAry2= $master2->result();


        $master3 =  $this->db->query("select RepID from companymaster where IsActive='1' and  companyid ='$clientId'");
        $Item_contecAry= $master3->result();


        $mainArry2 = array();
        $mainArry2['Master2'] = $Item_Unit_MasterAry2;
        $mainArry2['Contectperson'] = $Item_contecAry;
        return $mainArry2;

      }


    public function item_type()
		{
			$query=$this->db->where('IsActive','0');
			$query=$this->db->get('item_class');
			return $query->result();
		}



   public function item_list()
		{
			//$query=$this->db->where('PersonPost','supervisor');
			$query=$this->db->get('est_ItemTypeMaster');
			return $query->result();
		}

		  public function paper_list()
		{
			
			$this->db->select('PaperKind');
			$this->db->distinct();
			$this->db->where('IsActive',1);
			$query=$this->db->get('papermasterfull');
			return $query->result();
		}


		  public function gsm_list()
		{
			
			$this->db->select('Gsm');
			$this->db->distinct();
			$this->db->where('IsActive',1);
			$query=$this->db->get('papermasterfull');
			return $query->result();
		}

		public function printing() 
		 {
            $result = array("Special","Panton", "Process color");
         }


         public function coating()
		{
			
			$query=$this->db->select('CoatingID,Description');
			$query=$this->db->where('IsActive',1);
			$query=$this->db->get('coating_master');
			return $query->result();
		}


			public function foiling()
		{
			
			$query=$this->db->select('FoilID,FoilType');
			$query=$this->db->get('foilmaster');
			return $query->result();
		}


			public function plam()
		{
			
			$query=$this->db->select('LamID,Micron,FilmType');
			$query=$this->db->get('lammaster');
			return $query->result();
		}


    	public function metpat()
		{
			
			$query=$this->db->select('LamID,Micron,FilmType');
			$query=$this->db->get('lammetpetmaster');
			return $query->result();
		}


		public function window()
		{
			
			$query=$this->db->select('WPatchID,FilmType,Micron');
			$query=$this->db->get('winpatchingmaster');
			return $query->result();
		}

		


             public function flutetypes()
		{
			$query=$this->db->where('IsActive',1);
			$query=$this->db->get('flutemaster');
			return $query->result();
		}



               public function Select_enquiry($filter)
		   { 


		  $this->db->select('ID,EnqID,est_purpose,ProductName,Producttype,ProductCode,Quantity,PaperType,Gsm,Status,CostingDeptComment,ContactPerson,ContactNo_Email,ContactEmail,ClientLocation,DATE_FORMAT(EnqDateTime, "%d-%m-%Y %h:%m")EnqDateTime');
		    $this->db->where($filter);
			$query=$this->db->get('est_enquiry');		  
			return $query->result();
		   }



		   public function Select_enquiry_approve($filter)
		   { 

		   	 // $query13 = $this->db->query("SELECT a.ID,a.EnqID,a.EnqDateTime,a.ProductName,a.ProductCode,a.Quantity,a.PaperType,a.Gsm,a.Status,a.CostingDeptComment,a.ContactPerson,a.ContactNo_Email,a.ContactEmail,a.ClientLocation,a.Aprroved from est_enquiry as a where a.IsActive=1" ." $filter");
       //       return  $query13->result();

          $query13 = $this->db->query("SELECT a.ID,a.EnqID,a.Producttype,a.ICompanyID,a.ClientID,a.ExecutiveID,a.Status,DATE_FORMAT(a.EnqDateTime, '%d/%m/%Y %h:%m:%s') as EnqDateTime,a.ProductName,a.ProductCode,a.AnnualQty,concat(a.Quantity, if (Quantity2<>'',',',''),a.Quantity2, if (Quantity3<>'',',',''),a.Quantity3, if (Quantity4<>'',',',''),a.Quantity4, if (Quantity5<>'',',',''),a.Quantity5) as Quantity,a.PaperType,a.Gsm,
				a.ItemType,a.Length,a.Breadth,a.Height,a.PrintColor,a.PrePressDetail,a.PressDetail,a.PostPressDetail,a.CorrugationDetail,a.PackingDetail,
				a.DespatchDetail,a.OtherRemark,a.RecordID,a.ContactPerson,a.PersonPost,a.ContactNo_Email,a.ClientLocation,a.CostingDeptComment,
				a.Approved,a.Remark_approve,b.printing,b.printing_remarks,c.Description as coating,b.coating_remarks,d.filmtype as lamination,b.metpat_lamination,
				b.lamination_remarks,b.foiling,b.punching,b.punching_remarks,b.window_patching,b.pasting,b.pasting_remarks,b.corrugation,b.corrugation_remarks 
				from ((est_enquiry as a inner join est_enquiry_process as b on b.enqid=a.EnqID
				left join coating_master as c on b.coating=c.CoatingID)
				left join lammaster as d on b.lamination=d.LamID)
				where  a.IsActive=1" ." $filter");
             return  $query13->result();
		   }

	 


	 


        function Select_data_Update_Mode($eqid,$icompanyidlogin) 

     {        

        $Item_Unit_MasterAry = array();
        $Item_classAry = array();
        $Item_contecAry = array();
        $companydelqtydateAry = array();
        $this->db->trans_start();
        $master =  $this->db->query("select * from est_enquiry where EnqID='$eqid' and ICompanyID='$icompanyidlogin'");
        $Item_Unit_MasterAry= $master->result();

        $details =  $this->db->query("select * from est_enquiry_process where enqid='$eqid'");
        $Item_classAry= $details->result();

        $this->db->select('empid,empname');
        $this->db->from('employeemaster');
        $Contectperson = $this->db->get();  
        $Item_contecAry= $Contectperson->result();
        $this->db->trans_complete(); 

        $mainArry = array();
        $mainArry['Master'] = $Item_Unit_MasterAry;
        $mainArry['Detail'] = $Item_classAry;
        $mainArry['Contectperson'] = $Item_contecAry;
        return $mainArry;
    }




   public function Select_enquiry_npdc($filter)
		   { 

		   	 // $query13 = $this->db->query("SELECT a.ID,a.EnqID,a.EnqDateTime,a.ProductName,a.ProductCode,a.Quantity,a.PaperType,a.Gsm,a.Status,a.CostingDeptComment,a.ContactPerson,a.ContactNo_Email,a.ContactEmail,a.ClientLocation,a.Aprroved from est_enquiry as a where a.IsActive=1" ." $filter");
       //       return  $query13->result();

          $query13 = $this->db->query("SELECT a.ID,a.EnqID,a.Producttype,a.ClientRemark,a.ICompanyID,a.delivery_date,a.samplereference,a.typeofproof,e.CompanyName,f.empname,a.Status,DATE_FORMAT(a.EnqDateTime, '%d/%m/%Y %h:%m:%s') as EnqDateTime,a.ProductName,a.ProductCode,a.AnnualQty,concat(a.Quantity, if (Quantity2<>'',',',''),a.Quantity2, if (Quantity3<>'',',',''),a.Quantity3, if (Quantity4<>'',',',''),a.Quantity4, if (Quantity5<>'',',',''),a.Quantity5) as Quantity,a.PaperType,a.Gsm,
				g.CartonType,a.Length,a.Breadth,a.Height,a.PrintColor,a.PrePressDetail,a.PressDetail,a.PostPressDetail,a.CorrugationDetail,a.PackingDetail,
				a.DespatchDetail,a.OtherRemark,a.RecordID,a.ContactPerson,a.PersonPost,a.ContactNo_Email,a.ClientLocation,a.CostingDeptComment,
				a.Approved,a.Remark_approve,b.printing,b.printing_remarks,c.Description as coating,b.coating_remarks,d.filmtype as lamination,b.metpat_lamination,
				b.lamination_remarks,b.foiling,b.punching,b.punching_remarks,b.window_patching,b.pasting,b.pasting_remarks,b.corrugation,b.corrugation_remarks 
				from (((((est_enquiry as a inner join est_enquiry_process as b on b.enqid=a.EnqID
				left join coating_master as c on b.coating=c.CoatingID)
				left join lammaster as d on b.lamination=d.LamID)
                left join companymaster as e on e.CompanyId=a.ClientID)
                left join employeemaster as f on f.EmpId=a.ExecutiveID)
                left join est_itemtypemaster as g on g.ID=a.ItemType)
				where  a.IsActive=1" ." $filter");
             return  $query13->result();
             echo $query13->result();
		   }


 public function company_profile()
          {  
               $company_id= $_SESSION['company'];    
               
               $query = $this->db->query("SELECT CompanyName from companyprofile where ICompanyID='$company_id'");
                  $ret = $query->row();
                  return $ret->CompanyName;
          }





	

	}
?>