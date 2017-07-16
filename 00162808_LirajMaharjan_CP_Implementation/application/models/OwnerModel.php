<?php 
class OwnerModel extends CI_Model{
	//for getting all the information from database of HSPS
	public function customerList(){
		$sql=$this->db->get('staff_type');
		return $sql->result();
	}
	
	public function customerSearch(){
		$sql=$this->db->get('customer');
		return $sql->result();
	}
	
	public function staffList($STAFF_ID){
		$this->db->where('STAFF_ID',$STAFF_ID);
		$sql=$this->db->get('staff');
		return $sql->result();
	}
	
	public function staffListOwner(){
		$sql=$this->db->get('staff');
		return $sql->result();
	}
	
	public function staffData(){
		$sql=$this->db->where('staff');
		return $sql->result();
	}
	
	public function deleteStaff($IDstaff){
		$this->db->where('STAFF_ID',$IDstaff);
		$sql=$this->db->delete('staff');
		return "Deleted";
	}
	
	public function displaySale(){
		$sql=$this->db->get('sale');
		return $sql->result();
	}
	
}
?>