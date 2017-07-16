<?php
class Supplier extends CI_Controller{
	//for add supplier details
	public function add(){
		$comName=$this->input->POST("supName");
		$comAddress=$this->input->POST("supAddress");
		$comContact=$this->input->POST("supContact");
		$comEmail=$this->input->POST("supEmail");
		
		$this->load->model("Supplier_Model"); //loading a model
		$suppAdd=$this->Supplier_Model->addIt($comName,$comAddress,$comContact,$comEmail);   //calling function
		//echo $suppAdd;
		
		if($suppAdd){
			$this->session->set_flashdata('error','New supplier has been added.');
			redirect(base_url(). 'Owner/supplier');
		}
		else{
			$this->session->set_flashdata('error','Sorry to bug you again about this.');
			redirect(base_url(). 'Owner/supplier');
		}
	}
	
	//to get load the supplier.
	public function getSupplier(){
		$this->load->view('updatSup');
	}
	
	
}
?>