<?php
	class Order extends CI_Controller{
		public function index(){
			$this->load->model('Order_Model');
			$data['products'] = $this->Order_Model->getProduct();
			$this->load->view('orderPage',$data);
		}
		
		public function add(){
			$this->load->model('Order_Model');
			$product=$this->Order_Model->get($this->input->post('itemID'));
			
			$insert=array(
				'id' => $this->input->post('itemID'),	
				'name' => $product->ITEM_NAME,	
				'size' => $product->SIZE_in_INCH,	
				'qty' => 1,
				'price' => $product->SELLING_PRICE	
			);	
			$this->cart->insert($insert);
		}
	}
?>