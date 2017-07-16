<?php
class Customer extends CI_Controller{
	//for passing the value to Customer_Model for registration
	public function saveCusData(){
		$cName=$this->input->POST("cName");
		$cLName=$this->input->POST("cLName");
		$cAddress=$this->input->POST("cAddress");
		$cGender=$this->input->POST("cGender");
		$cContact=$this->input->POST("cContact");
		$cEmail=$this->input->POST("cEmail");
		$cUsername=$this->input->POST("cUsername");
		$cPassword=MD5($this->input->POST("cPassword"));

		$this->load->model("Customer_Model"); //loading a model
		$customerSave=$this->Customer_Model->cusSave($cName,$cLName,$cAddress,$cGender,$cContact,$cEmail,$cUsername,$cPassword);   //calling function
		
		if($customerSave){
			$this->session->set_flashdata('error','You have successfully entered.');
			redirect(base_url(). 'owner/cusRegistration');
		}
		else{
			$this->session->set_flashdata('error','Sorry to bug you again about this.');
			redirect(base_url(). 'owner/cusRegistration');
		}
	}
	
	//for customer login
	public function cusLogin(){
		$cUsername=$this->input->POST("cusUsername");
		$cPassword=MD5($this->input->POST("cusPassword"));
		
		$this->load->model("Customer_Model");
		$cLogin=$this->Customer_Model->custLogin($cUsername,$cPassword);
		if($cLogin){
			$this->load->library('session');
			$this->session->set_userdata('CUSTOMER_ID',$cLogin);
			$this->session->set_userdata('USERNAME',$cUsername);
			return redirect('owner/customerPanel');
		}
		else{
				$this->session->set_flashdata('error','Invalid Username or Password');
				redirect(base_url(). 'owner/cusLogin');
		}
	}
	
	//for deleting customer from database.
	public function detailCustomer(){
		$cusID=$this->session->userdata('CUSTOMER_ID');
	
		$this->load->model('Customer_Model');
		$data['record']=$this->Customer_Model->customerDetails($cusID);
		$this->load->view('updateCustomer', $data);
	}
	
	//for updating customer details
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
		
		$this->load->model("Customer_Model");
		$customerDetail['customer'] = $this->Customer_Model->customerList($cID,$cName,$cLName,$cAddress,$cGender,
													 $cContact,$cEmail,$cUsername,$cPassword);
		if($customerDetail){
			$this->session->set_flashdata('error','Your profile was successfully updated.');
			redirect(base_url(). 'Customer/detailCustomer');
		}
		else{
			$this->session->set_flashdata('error','Sorry to bug you again about this.');
			redirect(base_url(). 'Customer/detailCustomer');
		}
		
	}
	
	//for displaying available pipe and fittings.
	public function viewItems(){
		$this->load->view("viewPipe&fittings.php");
	}
	
	//to display order done by and customer
	public function order(){
		$this->load->view("orderpage.php");
	}
	
	//for customer logout.
	public function cusLogout(){
		$this->session->unset_userdata('CUSTOMER');
		$this->session->unset_userdata('CUSTOMER_ID');
		redirect(base_url(). 'owner/cusLogin');
	}
	
}	
?>