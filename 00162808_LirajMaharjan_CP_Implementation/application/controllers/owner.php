<?php
class Owner extends CI_Controller{
	public function homepage(){
		$this->load->view("index.html");//load refers to view
	}
	
	public function ownerLogin(){
		$this->load->view("OwnerStaffLogin.php");
	}
	public function cusRegistration(){
		$this->load->view("customerRegistration.php");//load refers to view
	}
	
	public function gallery(){
		$this->load->view("gallery.php");
	}
	
	public function staffRegister(){
		$this->load->view("staffRegistration.php");
	}
	
	public function cusLogin(){
		$this->load->view("customerLogin.php");
	}
	
	public function ownerPanel(){
		$this->load->view("ownerPanel.php");
	}
	
	public function supplier(){
		$this->load->view("supplierForm.php");
	}
	
	public function staffPanel(){
		$this->load->view("staffPanel.php");
	}
	
	public function customerPanel(){
		
		$this->load->view("customerPanel.php");
	}
	
	public function pipefitting(){
		$this->load->view("ItemPage.php");
	}
	
	public function editpipefitting(){
		$this->load->view("editItem.php");
	}
	
	public function updateStaff(){
		$this->load->view('updateStaff.php');
	}
	
	public function orderPage(){
		$this->load->view('orderPage.php');
	}
	
	//for updating supplier information.
	public function findUpdateSupplier(){
		$SUPPLIER_ID=$this->input->post('suppID');
		$this->load->model('Supplier_Model');
		$dataSupplier['supplier'] = $this->Supplier_Model->findSupplier($SUPPLIER_ID);
		$this->load->view('updateSupplier',$dataSupplier);
	}
	
	public function deleteCustomer(){
		$CUSTOMER_ID=$this->input->post('customer_ID');
		$this->load->model('customerRegister');
		$dataSupplier['supplier'] = $this->customerRegister->deleteCustomer($CUSTOMER_ID);
		//$this->load->view('updateSupplier',$dataSupplier);
		echo "deleted";
	}
	
	public function delStaff($IDstaff){
		$this->load->model('OwnerModel');
		$staffDel['staff'] = $this->OwnerModel->deleteStaff($IDstaff);
		//$this->load->view('updateSupplier',$dataSupplier);
		//echo "deleted";
		redirect ('Staff/getStaff');
	}
	
	public function deleSupplier(){
		$this->load->view('editSupplier.php');
	}
	
	public function saleView(){
		$this->load->model('OwnerModel');
		$saleDetail['sale'] = $this->OwnerModel->displaySale();
		$this->load->view('viewSale',$saleDetail);
	}
}
?>