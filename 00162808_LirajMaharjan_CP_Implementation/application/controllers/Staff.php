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
		
		if($saveIt){
			$this->session->set_flashdata('error','You have successfully entered new staff.');
			redirect(base_url(). 'owner/staffRegister');
		}
		else{
			$this->session->set_flashdata('error','Sorry to bug you again about this.');
			redirect(base_url(). 'owner/staffRegister');
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
			$this->session->set_flashdata('error','Your data has been updated');
			redirect(base_url(). 'Staff/viewStaffUpdate');
		}
		else{
			$this->session->set_flashdata('error','Something went wrong');
			redirect(base_url(). 'Staff/viewStaffUpdate');
		}
	}
	
	public function orderView(){
		$this->load->model('Order_Model');
		$data['order'] = $this->Order_Model->orderDisplay();
		$this->load->view('orderView',$data);
	}

	public function customerName(){
		
		  $this->load->model('Staff_Model');
			$selectCustomer = $this->Staff_Model->selectCustomer();
        $this->load->view('findCustomer', ['getCUSTOMER' => $selectCustomer]);
    }
	
	//for preparing bill for a particular order
	public function prepareBill() {
			$CUSTOMER_ID=$this->input->post('CUSTOMER_ID');
			
            $this->load->model('Staff_Model');

            $data['bill'] = $this->Staff_Model->billGenerate($CUSTOMER_ID);
			if($data){
            $this->load->view('prepareBill', $data);
			}
         else {
			redirect(base_url(). 'Staff/prepareBill');
        }
    }
	
	public function billMessage(){
		$this->load->view('billMessage.php');
	}
	
	//for insertin values into sale
	public function sale(){
		$saleCusID=$this->input->POST("saleCusID");
		$saleName=$this->input->POST("saleName");
		$saleSize=$this->input->POST("saleSize");
		$saleQty=$this->input->POST("saleQty");
		$saleCost=$this->input->POST("saleCost");
		$saleSum=$this->input->POST("saleSum");
		$saleVat=$this->input->POST("saleVat");
		$saleGT=$this->input->POST("saleGT");
		
		$this->load->model("Staff_Model"); //loading a model
		$sale=$this->Staff_Model->selling($saleCusID,$saleName,$saleSize,$saleQty,$saleCost,$saleSum,$saleVat,$saleGT);   //calling function
		
		if($sale){
			$this->session->set_flashdata('error','You have successfully sold these item.');
			redirect(base_url(). 'Staff/billMessage');
		}
		else{
			$this->session->set_flashdata('error','Sorry to bug you again about this.');
			redirect(base_url(). 'Staff/prepair');
		}
	}
	
	//for logout of owner and staff
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('STAFF_ID');
		redirect(base_url().'owner/ownerLogin'); 
	}
}	
?>