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
	
	public function customerPage(){
		$this->load->view("customerPage.php");
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
	
	public function updateStaff(){
		$this->load->view('updateStaff.php');
	}
}
?>