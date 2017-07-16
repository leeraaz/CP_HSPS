<?php
class PipeAndFittings extends CI_Controller {
	//creating construction 
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

	//to load detail of PPR pipe and fittings.
	public function PPR(){
		$this->load->view('PPR.html');
	}
	
	//to load details of CPVC pipe and fittings.
	public function CPVC(){
		$this->load->view('CPVC.html');
	}
	
	
    public function index(){
        $this->load->view('ItemPage', array('error' => ' ' ));
    }

	//to inserting pipe and fittings details with image.
    public function do_upload(){
        $config['upload_path']          = './assets/Images';
        $config['allowed_types']        = 'jpg|jpeg|png|gif|';
        $this->load->library('upload', $config);
		$this->upload->do_upload('file');
		$data=array('upload_data'=>$this->upload->data());
       
		$image=$data['upload_data']['file_name'];
		$itemName=$this->input->POST("itemName");
		$size=$this->input->POST("size");
		$quantity=$this->input->POST("quantity");
		$buying=$this->input->POST("buying");
		$selling=$this->input->POST("selling");
		$this->load->model("pipeFittings"); //loading a model
		$itemInsert=$this->pipeFittings->itemSave($image,$itemName,$size,$quantity,$buying,$selling);   //calling function
		
		if($itemInsert){
			$this->session->set_flashdata('error','Items has been inserted.');
			redirect(base_url(). 'owner/staffRegister');
		}
		else{
			$this->session->set_flashdata('error','Sorry, try again.');
			redirect(base_url(). 'owner/staffRegister');
		}	
	}

	//for getting all the pipe and fittings
	public function getItem(){
		$this->load->model('pipeFittings');
		$dataItem['items'] = $this->pipeFittings->itemDetail();
		$this->load->view('editItem',$dataItem);
	}
	
	//pipe and fittings for Customer
	public function getItemforCustomer(){
		$this->load->model('pipeFittings');
		$dataItem['items'] = $this->pipeFittings->itemDetail();
		$this->load->view('viewPipe&fittings',$dataItem);
	}
}
?>