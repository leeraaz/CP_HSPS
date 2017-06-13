<?php
class Customer extends CI_Controller{
	public function saveCusData(){
		$cName=$this->input->POST("cName");
		$cLName=$this->input->POST("cLName");
		$cAddress=$this->input->POST("cAddress");
		$cGender=$this->input->POST("cGender");
		$cContact=$this->input->POST("cContact");
		$cEmail=$this->input->POST("cEmail");
		$cUsername=$this->input->POST("cUsername");
		$cPassword=MD5($this->input->POST("cPassword"));

		$this->load->model("customerRegister"); //loading a model
		$customerSave=$this->customerRegister->cusSave($cName,$cLName,$cAddress,$cGender,$cContact,$cEmail,$cUsername,$cPassword);   //calling function
		
		if($customerSave){
			$data['msg']='Customer data inserted successfully.';
			redirect(base_url() . 'Owner/cusRegistration',$data);
		}
		else{
			$data['msg2']='Sorry.Try again.';
			redirect(base_url() . 'Owner/cusRegistration',$data);
		}
	}
	
	public function cusLogin(){
		$cUsername=$this->input->POST("cusUsername");
		$cPassword=MD5($this->input->POST("cusPassword"));
		
		$this->load->model("customerRegister");
		$cLogin=$this->customerRegister->custLogin($cUsername,$cPassword);
		if($cLogin){
			redirect(base_url() . 'owner/customerPanel');
				 	echo "login";
		}
		else{

			echo " not login";
		}
	}
}	
?>