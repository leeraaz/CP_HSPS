<?php	
	class Login extends CI_Model{
		public function getData(){
			//$this->db->where('CUSTOMER_ID',$cusID);
			$sql=$this->db->get('customer');
			return $sql->result();
		}
	}
?>