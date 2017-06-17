<?PHP
	class mydata extends CI_Model{
		public function saveIt($username,$password){
			echo "username $username password $password";
			$data= $this->db->query("insert into user values('','$username','$password')");
			echo "Value inserted";
			
			//ACTIVE RECORDS..... INSERTING INTO TABLE WITHOUT QUERY
			$data=array(
				"username"=>$username,
				"password"=>$password,
			);
			
			return $this->db->insert("test",$data);
		}
		
		public function getIt(){
		 $query = $this->db->get('test');
		 return $query;
		}
		
		public function updateIt(){
			$data=array(
				"username"=>"Keshav" 
			);
			$this->db->where("id",11);
			$this->db->update("user",$data);
		}
		
		public function deleteIt(){
			$this->db->where("id",4); //where condition "id" column and 4 is value
			$this->db->delete("user");
		}
		
		public function testin(){
			$sql=$this->db->get('staff_type');
			return $sql->result();
		}
	}
?>