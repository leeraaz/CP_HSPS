<?PHP
	class Staff_Model extends CI_Model{
		//for inserting staff details
		public function save($sName,$sLName,$sType,$sAddress,$sGender,$sContact,$sEmail,$sUsername,$sPassword){
			$staffData=array(
				"STAFF_FIRSTNAME"=>$sName,
				"STAFF_LASTNAME"=>$sLName,
				"STAFF_TYPE_ID"=>$sType,
				"STAFF_ADDRESS"=>$sAddress,
				"GENDER"=>$sGender,
				"CONTACT"=>$sContact,
				"EMAIL"=>$sEmail,
				"USERNAME"=>$sUsername,
				"PASSWORD"=>$sPassword
			);
			return $this->db->insert("staff",$staffData);
		}
		
		//for retrieving data from staff table for login
		public function stLogin($username,$password){
			$sql=$this->db->where(['USERNAME'=>$username,'PASSWORD'=>$password])->get('staff');
			if($sql->num_rows()>=1){
				//return $record=$sql->row()->STAFF_TYPE_ID; this will return staff type id which defines 
															 //whether it is owner or staff.
				return $record1=$sql->row()->STAFF_ID;
			}
			else{
				return false;
			}
		}
		
		public function getDetail(){//getting staff details
			$sql=$this->db->get('staff');
			return $sql->result();
		}
		
		//for updating staff details.
		public function staffList($sID,$sName,$sLName,$sType,$sAddress,$sGender,$sContact,$sEmail,$sUsername,$sPassword){
			
			$array=array(
				"STAFF_ID" => $sID,
				"STAFF_FIRSTNAME" => $sName,
				"STAFF_LASTNAME" => $sLName,
				"STAFF_TYPE_ID" => $sType,
				"STAFF_ADDRESS" => $sAddress,
				"GENDER" => $sGender,
				"CONTACT" => $sContact,
				"EMAIL" => $sEmail,
				"USERNAME" => $sUsername,
				"PASSWORD" => $sPassword
				);
				$this->db->where("STAFF_ID",$sID);
				$this->db->update("staff",$array);
				return "Data has been updated";
			}
		
		//for selecting customer to prepare bill
		public function selectCustomer(){
			 $query = $this->db->select('*')
						->from('customer')
						->GET();
             return $query-> result();  
        
		}
		/*
		public function billGenerate($sessionData){
			$this->db->select('*','sum(order.cost)');
			$this->db->from('order');
			$this->db->where('CUSTOMER_ID',$sessionData);
			$res=$this->db->get();	
		
			return $res->result_array();
		}*/
		//for generating bills
		public function billGenerate($CUSTOMER_ID){
			$query = $this->db->select('*','sum(order.PRICE)')
							->from('customer')
							->join('order','customer.CUSTOMER_ID=order.CUSTOMER_ID')
							->where('customer.CUSTOMER_ID',$CUSTOMER_ID)
							->GET();
		
			return $query->result_array();
		}
		
		//for selling items and inserting them into sale table.
		public function selling($saleCusID,$saleName,$saleSize,$saleQty,$saleCost,$saleSum,$saleVat,$saleGT){
			$saleDetails=array(
				"CUSTOMER_ID"=>$saleCusID,
				"ITEM_NAME"=>$saleName,
				"SIZE"=>$saleSize,
				"QUANTITY"=>$saleQty,
				"SELLING_PRICE"=>$saleCost,
				"TOTAL"=>$saleSum,
				"VAT"=>$saleVat,
				"GRAND_TOTAL"=>$saleGT
			);
			return $this->db->insert("sale",$saleDetails);
		}
	}
?>