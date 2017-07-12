<?php
class Staff extends CI_Controller{
	//for inserting staff details
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
		

		$this->load->model("Staff_Model"); //loading a model
		$saveIt=$this->Staff_Model->save($sName,$sLName,$sType,$sAddress,$sGender,$sContact,$sEmail,$sUsername,$sPassword);   //calling function
		echo $saveIt;
		
		if($customerSave){
			$data['msg']='Staff data inserted successfully.';
			redirect(base_url() . 'Owner/staffRegister',$data);
		}
		else{
			$data['msg2']='Sorry.Try again.';
			redirect(base_url() . 'Owner/staffRegister	',$data);
		}
	}
	
	//for staff and owner login.
	public function stfLogin(){
			$username=$this->input->post('suser');
			$password=MD5($this->input->post('spwd'));
			
			$this->load->model('Staff_Model');
			
			$login=$this->Staff_Model->stLogin($username,$password);
			if($login){
				if($login==1){
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
		
		$this->load->model("Staff_Model");
		$staffDetail['staff'] = $this->Staff_Model->staffList($sID,$sName,$sLName,$sType,$sAddress,$sGender,
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
		$this->load->model('Order_Model');
		$data['order'] = $this->Order_Model->orderDisplay();
		$this->load->view('customerOrderPage',$data);
	}

	public function prepareBill() {
        $sessionData = $this->session->userdata('CUSTOMER_ID');
        if ($sessionData != '') {
            $this->load->model('Staff_Model');

            $data['bill'] = $this->Staff_Model->billGenerate
                    ($sessionData);

            $this->load->view('preparebill', $data);
        } else {
            echo "no session";
        }
    }
	
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('STAFF_ID');
		redirect(base_url().'owner/ownerLogin'); 
	}
}	
?>