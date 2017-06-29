<?php
class test extends CI_Controller{
	public function orderPage(){
		$this->load->view('orderPage.php');
	}
	
	public function add(){
		
		$data = array(
        'id'      => 'sku_123ABC',
        'qty'     => 1,
        'price'   => 39.95,
        'name'    => 'T-Shirt',
        'options' => array('Size' => 'L', 'Color' => 'Red')
		);
		
		$this->cart->insert($data);
		echo "cart called";	
	}
	
	public function add2(){
		$data2=array(
			'id'      => 'sku_965QRS',
            'qty'     => 5,
            'price'   => 30.25,
            'name'    => 'Ranger Glass'
		);
		
		$this->cart->insert($data2);
		echo "added data 2";
	}
	
	public function show(){
		
		$cart = $this->cart->contents();
		echo "<pre>";
		print_r($cart);
	}
	
	public function update(){
		$data=array(
			'rowid' => '0256a32c98ce49afbe2a4eb8c96c5884',
			'qty' => '5',
		);
		$this->cart->update($data);
		echo "update() call";
	}
	
	public function total(){
		echo $this->cart->total();
	}
	
	public function remove(){
		$data=array(
			'rowid' => '0256a32c98ce49afbe2a4eb8c96c5884',
			'qty' => '0',
		);
		$this->cart->update($data);
		echo "remove() call";
	}
	
	public function destroy(){
		$this->cart->destroy();
		echo "destroy";
	}
}
?>