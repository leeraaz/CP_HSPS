<?php
	class Order extends CI_Controller{
		public function index(){
			$this->load->model('Order_Model');
			$data['products'] = $this->Order_Model->getProduct();
			$this->load->view('orderPage',$data);
		}
	}
?>