<?PHP
	class Homepage extends CI_Model{
		public function pageload(){
			return $this->db->get("user");
		}
	}
?>