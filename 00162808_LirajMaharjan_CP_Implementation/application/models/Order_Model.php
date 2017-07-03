<?php
	class Order_Model extends CI_Model{
		public function getProduct(){
			$result = $this->db->get('pipeandfittings')->result();
			return $result;
		}
		
		public function get($itemID){
			$sql=$this->db->where('pipeandfittings',array('id'=>$itemID))->result();		
			return $sql;
		}
	}
?>