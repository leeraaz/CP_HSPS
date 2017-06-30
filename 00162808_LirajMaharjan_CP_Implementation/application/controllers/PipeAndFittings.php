<?php
 class PipeAndFittings extends CI_Controller{
	 
	public function pipe(){
		$this->load->model('pipeFittings');
		
		if($this->input->post('upload')){
			$this->pipeFittings->do_upload();
		}
		
		$this->load->view('ImageUpload.php');
	}
	
	public function info(){
		
		$config['enable_query_strings'] = TRUE;
		
		$image=$this->input->POST("userfile");
		$itemName=$this->input->POST("itemName");
		$size=$this->input->POST("size");
		$quantity=$this->input->POST("quantity");
		$buying=$this->input->POST("buying");
		$selling=$this->input->POST("selling");

		$this->load->model("pipeFittings"); //loading a model
		$itemInsert=$this->pipeFittings->itemSave($image,$itemName,$size,$quantity,$buying,$selling);   //calling function
		
		if($itemInsert){
			$data['msg']='Item has been inserted successfully.';
			return redirect(base_url() . 'Owner/pipefitting',$data);
		}
		else{
			$data['msg2']='Sorry.Try again.';
			return redirect(base_url() . 'Owner/pipefitting',$data);
		}
	}
	
	public function getItem(){
		$this->load->model('pipeFittings');
		$dataItem['items'] = $this->pipeFittings->itemDetail();
		$this->load->view('editItem',$dataItem);
	}
}
?>