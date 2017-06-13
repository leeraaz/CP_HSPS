<?php
	public class Logged extends CI_Controller{
		public function staffLogin(){
			$sUsername=$this->input->POST("Username");
			$sPassword=$this->input->POST("Password");
		
			$this->load->model("login"); //loading a model
			$goingToLog=$this->login->getLog($sUsername,$sPassword)
			echo $goingToLog;
			
			if (empty($sUsername)|| empty($sPassword)){
				echo "Enter username and password";
			}
			
			
		}
	}
?>