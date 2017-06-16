<?php 
	class OwnerModel extends CI_Model{
		public function customerList(){
			$sql=$this->db->get('staff_type');
			return $sql->result();
		}
}
?>