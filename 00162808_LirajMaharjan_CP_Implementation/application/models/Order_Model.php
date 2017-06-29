<?php
	class Order_Model extends CI_Model{
		public function getProduct(){
			$result = $this->db->get('pipe&fittings')->result();
			return $result;
		}
	}
?>