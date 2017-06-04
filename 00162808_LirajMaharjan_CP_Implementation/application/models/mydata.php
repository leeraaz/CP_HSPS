<?PHP
	class mydata extends CI_Model{
		public function saveIt($username,$password){
			//echo "username $username password $password";
			//return $this->db->query("insert into user values('','$username','$password')");
			//echo "Value inserted";
			
			//ACTIVE RECORDS..... INSERTING INTO TABLE WITHOUT QUERY
			$data=array(
				"username"=>$username,
				"password"=>$password,
			);
			
			return $this->db->insert("user",$data);
		}
		
		public function getIt(){
			$this->db->where("username","Liraj");
			return $this->db->get("user");
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
	}
?>