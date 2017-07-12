<?php
class PipeAndFittings extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

	public function PPR(){
		$this->load->view('PPR.html');
	}
	
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
			echo "value inserted";
			redirect (base_url(). 'PipeAndFittings/index');
		}
		else{
			echo "not inserted";
			redirect (base_url(). 'PipeAndFittings/index');
		}	
	}

	public function getItem(){
		$this->load->model('pipeFittings');
		$dataItem['items'] = $this->pipeFittings->itemDetail();
		$this->load->view('editItem',$dataItem);
	}
}
?>