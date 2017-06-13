<?PHP
//here class name should be same as filename
class User extends CI_Controller{//controller class is in system/core/controller.php
	public function welcome(){
		echo "Hello Nepal, a beautiful Nepal";
	}
	
	public function hell(){
		$this->load->view("hell.html");
	}
	
	public function mypage(){
		$this->load->view("mypage");//load refers to view
	}
		
	public function page2(){
		echo "Welcome to page 2";
	}
	
	public function saveData(){
		$username=$this->input->POST("uname");
		$password=MD5($this->input->POST("pwd"));
		$this->load->model("mydata"); //loading a model
		$saveStatus=$this->mydata->saveIt($username,$password);   //calling function
		echo $saveStatus;
	
	//	echo $this->input->POST("uname"); //passing username //input refers to data input
		
		if($saveStatus==1){
		$data['msg']='Value inserted successfully';
		$this->load->view("mypage",$data);
		}
		else{
		$data['msg2']='Try again';
		$this->load->view("mypage",$data);
		}
	}
	
	public function getData(){
		$this->load->model("mydata");
		$result['data2']=$this->mydata->getIt();
		//var_dump($data2->result()); //resource dekhauney
		
		$this->load->view("mypage",$result);
	}
	
	public function practice(){
		$this->load->view("practice.php");
	}
	
	public function updateData(){
		$this->load->model("mydata");
		$this->mydata->updateIt();
	}
	
	public function deleteData(){
		$this->load->model("mydata"); //Calling class
		$this->mydata->deleteIt(); //calling function
	}

}
?>