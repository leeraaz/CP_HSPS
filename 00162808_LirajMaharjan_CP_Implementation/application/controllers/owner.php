<?php
class Owner extends CI_Controller{
	public function homepage(){
		$this->load->view("index.html");//load refers to view
	}
	
	public function registrationPage(){
		$this->load->view("registration.php");//load refers to view
	}
	
	public function customerPage(){
		$this->load->view("customerPage.php");
	}
	
	public function gallery(){
		$this->load->view("gallery.php");
	}
}
?>