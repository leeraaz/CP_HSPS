<?PHP
	class Customer_Model extends CI_Model{
		//for inserting customer details
		public function cusSave($cName,$cLName,$cAddress,$cGender,$cContact,$cEmail,$cUsername,$cPassword){
			$customerData=array(
				"CUSTOMER_FIRSTNAME"=>$cName,
				"CUSTOMER_LASTNAME"=>$cLName,
				"CUSTOMER_ADDRESS"=>$cAddress,
				"GENDER"=>$cGender,
				"CONTACT"=>$cContact,
				"EMAIL"=>$cEmail,
				"USERNAME"=>$cUsername,
				"PASSWORD"=>$cPassword,
			);
			return $this->db->insert("customer",$customerData);
		}

		//for customer login
		public function custLogin($cUsername,$cPassword){
			$sql=$this->db->where(['USERNAME'=>$cUsername,'PASSWORD'=>$cPassword])->get('customer');
			if($sql->num_rows()>=1){
				return $sql->row()->CUSTOMER_ID;
				echo "get login";
			}
			else{
				echo "Sorry try again.";
			}
		}
		
		//to get customer details for updating
		public function customerDetails($cusID){
			$this->db->where('CUSTOMER_ID',$cusID);
			$sql=$this->db->get('customer');
			return $sql->result();
		}

		//to update the customer details
		public function customerList($cID,$cName,$cLName,$cAddress,$cGender,
									 $cContact,$cEmail,$cUsername,$cPassword){
			$customerArray=array(
				"CUSTOMER_ID"=>$cID,
				"CUSTOMER_FIRSTNAME"=>$cName,
				"CUSTOMER_LASTNAME"=>$cLName,
				"CUSTOMER_ADDRESS"=>$cAddress,
				"GENDER"=>$cGender,
				"CONTACT"=>$cContact,
				"EMAIL"=>$cEmail,
				"USERNAME"=>$cUsername,
				"PASSWORD"=>$cPassword,
				);
				$this->db->where("CUSTOMER_ID",$cID);
				$this->db->update("customer",$customerArray);
				return "Data has been updated";
		}

		//to delete the customer.
		public function deleteCustomer($CUSTOMER_ID){
			$this->db->where('CUSTOMER_ID',$CUSTOMER_ID);
			$sql=$this->db->delete('customer');
		}
	}
?>