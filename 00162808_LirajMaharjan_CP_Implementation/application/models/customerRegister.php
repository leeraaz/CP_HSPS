<?PHP
	class customerRegister extends CI_Model{
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
	}
?>