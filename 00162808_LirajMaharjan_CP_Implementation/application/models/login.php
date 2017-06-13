<?php	
	class Login extends CI_Model{
		public function getLog($sName,$sLName,){
			$staffLoginData=array(
				"Username"=>$Username,
				"Password"=>$Password,
			);
			return $this->db->get("staff",$staffLoginData);
		}
	}
?>