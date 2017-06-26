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
				if($login==1 || $login==2){
					$this->session->set_userdata('STAFF_ID',$login);
					$this->session->set_userdata('USERNAME',$username);
					return redirect('owner/ownerPanel');
				}
				else{
					$this->session->set_userdata('STAFF_ID',$login);
					$this->session->set_userdata('USERNAME',$username);
					redirect(base_url(). 'owner/staffPanel');

				}
			}
			else{
				$this->session->set_flashdata('error','Invalid Username or Password');
				redirect(base_url(). 'owner/ownerLogin');
			}
		}
		
			
	public function getCustomer(){
		$this->load->model('OwnerModel');
		$data['customers'] = $this->OwnerModel->customerSearch();
		$this->load->view('editCustomer',$data);
	}
		
	public function getStaff(){
		$this->load->model('OwnerModel');
		$dataStaff['staff'] = $this->OwnerModel->staffListOwner();
		$this->load->view('editStaff',$dataStaff);
	}
	
	public function viewStaffUpdate(){
		$STAFF_ID=$this->session->userdata('STAFF_ID');
		$this->load->model('OwnerModel');
		$dataStaff['staff'] = $this->OwnerModel->staffList($STAFF_ID);
		$this->load->view('updateStaff',$dataStaff);
	}
	
	public function updateStaff(){
		
		$sID=$this->input->POST("sID");
		$sName=$this->input->POST("sName");
		$sLName=$this->input->POST("sLName");
		$sType=$this->input->POST("sType");
		$sAddress=$this->input->POST("sAddress");
		$sGender=$this->input->POST("sGender");
		$sContact=$this->input->POST("sContact");
		$sEmail=$this->input->POST("sEmail");
		$sUsername=$this->input->POST("sUsername");
		$sPassword=MD5($this->input->POST("sPassword"));
		
		$this->load->model("staffRegister");
		$staffDetail['staff'] = $this->staffRegister->staffList($sID,$sName,$sLName,$sType,$sAddress,$sGender,
													 $sContact,$sEmail,$sUsername,$sPassword);
		if($staffDetail){
			//$this->load->view('updateStaff',$staffDetail);
			echo "Updated";
		}
		else{
			echo "not updated";
		}
	}
	
	public function orderView(){
		$this->load->view("orderView.php");
	}
	
	public function prepareBill(){
		$this->load->view("prepareBill.php");
	}
	
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('STAFF_ID');
		redirect(base_url().'owner/ownerLogin'); 
	}
	
	
}	
?>