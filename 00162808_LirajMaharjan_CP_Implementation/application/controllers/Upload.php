<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('ImageUpload', array('error' => ' ' ));
        }

        public function do_upload()
        {
            $config['upload_path']          = './assets/Images';
            $config['allowed_types']        = 'gif|jpg|png';
           // $config['max_size']             = 100;
           //$config['max_width']            = 1024;
            //$config['max_height']           = 768;
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
			}
			else{
				echo "not inserted";
			}
			
			
			
		}
}
?>