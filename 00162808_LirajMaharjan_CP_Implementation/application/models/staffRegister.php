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
				//return $record=$sql->row()->STAFF_TYPE_ID;
				return $record1=$sql->row()->STAFF_ID;
				//echo "get login";
			}
			else{
				return false;
			}
		}
		public function getDetail(){
			$sql=$this->db->get('staff');
			return $sql->result();
		}
		
		
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
		}
?>