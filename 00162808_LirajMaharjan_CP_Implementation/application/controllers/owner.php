<?php
class Owner extends CI_Controller{
	public function mypage1(){
		$this->load->view("index.html");//load refers to view
	}
	public function registrationPage(){
		$this->load->view("registration.php");//load refers to view
	}
}
?>