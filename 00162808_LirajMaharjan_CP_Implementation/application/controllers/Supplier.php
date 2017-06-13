<?php
public class Supplier extends CI_Controller{
	public function add{
		$comName=$this->input->POST("supName");
		$comAddress=$this->input->POST("supAddress");
		$comContact=$this->input->POST("supContact");
		$comEmail=$this->input->POST("supEmail");
		
		$this->load->model("supplierRegister"); //loading a model
		$suppAdd=$this->supplierRegister->addIt($comName,$comAddress,$comContact,$comName);   //calling function
		echo $suppAdd;
		
		if($suppAdd==1){
			echo "data added";
		}
		else{
			echo "sth wrong";
		}
	}
}
?>