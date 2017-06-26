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
			$this->session->set_userdata('CUSTOMER_ID',$cLogin);
			$this->session->set_userdata('USERNAME',$cUsername);
			return redirect('owner/customerPanel');
		}
		else{
				$this->session->set_flashdata('error','Invalid Username or Password');
				redirect(base_url(). 'owner/cusLogin');
		}
	}
	
	public function detailCustomer(){
			$cusID=$this->session->userdata('CUSTOMER_ID');
	
	$this->load->model('customerRegister');
		$data['record']=$this->customerRegister->customerDetails($cusID);
		$this->load->view('updateCustomer', $data);
	}
	
	public function updateCustomer(){ 
		$cID=$this->input->POST("cID");
		$cName=$this->input->POST("cName");
		$cLName=$this->input->POST("cLName");
		$cAddress=$this->input->POST("cAddress");
		$cGender=$this->input->POST("cGender");
		$cContact=$this->input->POST("cContact");
		$cEmail=$this->input->POST("cEmail");
		$cUsername=$this->input->POST("cUsername");
		$cPassword=MD5($this->input->POST("cPassword"));
		
		$this->load->model("customerRegister");
		$customerDetail['customer'] = $this->customerRegister->customerList($cID,$cName,$cLName,$cAddress,$cGender,
													 $cContact,$cEmail,$cUsername,$cPassword);
			echo " updated";
		
	}
	
	public function viewItems(){
		$this->load->view("viewPipe&fittings.php");
	}
	
	public function order(){
		$this->load->view("customerOrderPage.php");
	}
	public function cusLogout(){
		$this->session->unset_userdata('CUSTOMER');
		$this->session->unset_userdata('CUSTOMER_ID');
		redirect(base_url(). 'owner/cusLogin');
	}
	
}	
?>