<?php
class Supplier extends CI_Controller{
	public function add(){
		$comName=$this->input->POST("supName");
		$comAddress=$this->input->POST("supAddress");
		$comContact=$this->input->POST("supContact");
		$comEmail=$this->input->POST("supEmail");
		
		$this->load->model("Supplier_Model"); //loading a model
		$suppAdd=$this->Supplier_Model->addIt($comName,$comAddress,$comContact,$comEmail);   //calling function
		//echo $suppAdd;
		
		if($suppAdd==1){
			echo "data added";
		}
		else{
			echo "sth wrong";
		}
	}
	
	public function getSupplier(){
		// $this->load->model('Supplier_Model');
		// $dataSupplier['supplier'] = $this->Supplier_Model->getIt();
		// $this->load->view('updateSupplier',$dataSupplier);
		$this->load->view('updatSup');
	}
	
	
}
?>