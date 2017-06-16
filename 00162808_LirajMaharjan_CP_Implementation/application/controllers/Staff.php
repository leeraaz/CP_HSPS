<?php
class Staff extends CI_Controller{
	public function saveData(){
		$sName=$this->input->POST("sName");
		$sLName=$this->input->POST("sLName");
		$sType=$this->input->POST("sType");
		$sAddress=$this->input->POST("sAddress");
		$sGender=$this->input->POST("sGender");
		$sContact=$this->input->POST("sContact");
		$sEmail=$this->input->POST("sEmail");
		$sUsername=$this->input->POST("sUsername");
		$sPassword=MD5($this->input->POST("sPassword"));
		

		$this->load->model("staffRegister"); //loading a model
		$saveIt=$this->staffRegister->save($sName,$sLName,$sType,$sAddress,$sGender,$sContact,$sEmail,$sUsername,$sPassword);   //calling function
		echo $saveIt;
		
		if($customerSave){
			$data['msg']='Customer data inserted successfully.';
			redirect(base_url() . 'Owner/staffRegister',$data);
		}
		else{
			$data['msg2']='Sorry.Try again.';
			redirect(base_url() . 'Owner/staffRegister',$data);
		}
	}
	
	public function stfLogin(){
			//true
			$username=$this->input->post('suser');
			$password=MD5($this->input->post('spwd'));
			
			$this->load->model('staffRegister');
			
			$login=$this->staffRegister->stLogin($username,$password);
			if($login){
				if($login==1){
					redirect(base_url() . 'owner/ownerPanel');
				}
				else{
					redirect(base_url(). 'owner/staffPanel');
				}
				
			}
			else{
				echo "not login";
			}
		}
		
			
		public function getCustomer(){
		$this->load->model('OwnerModel');
		$data['customers'] = $this->OwnerModel->customerList();
		$this->load->view('updateSupplier',$data);
	}

		
		function enter(){
			if($this->session->userdata('username')!=''){
				echo 'welvome -'.$this->session->userdata('username');
			}
			else{
				redirect(base_url().'owner/homepage');
			}
		}
	
}	
?>