<?PHP
	class staffRegister extends CI_Model{
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
		
		public function stLogin($username,$password){
			$sql=$this->db->where(['USERNAME'=>$username,'PASSWORD'=>$password])->get('staff');
			if($sql->num_rows()>=1){
				return $sql->row()->STAFF_TYPE_ID;
				echo "get login";
			}
			else{
				echo "Sorry try again.";
			}
		}	
	}
?>