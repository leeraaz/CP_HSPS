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
		
	
		public function placeOrder($sessionData,$itemName,$itemSize,$qty,$price){
				$array=array(
					"CUSTOMER_ID"=>$sessionData,	
					"ITEM_NAME"=>$itemName,
					"SIZE"=>$itemSize,
					"QUANTITY"=>$qty,
					"PRICE"=>$price
				);
				$this->db->set('DATE', 'NOW()', FALSE);
				$this->db->insert("order",$array); 
				return "You have placed an order";		
		}
		
	}
?>