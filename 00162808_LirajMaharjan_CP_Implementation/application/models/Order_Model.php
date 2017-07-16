<?php
	class Order_Model extends CI_Model{
		public function getProduct(){//for selcting pipe and fittings
			$result = $this->db->get('pipeandfittings')->result();
			return $result;
		}
		//for adding them into order list.
		public function get($itemID){
			$sql=$this->db->where('pipeandfittings',array('id'=>$itemID))->result();		
			return $sql;
		}
		//for displaying order
		public function orderDisplay(){
			$result = $this->db->get('order')->result();
			return $result;
		}
	
		//for placing order
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