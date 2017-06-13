<?PHP
	class supplierRegister extends CI_Model{
		public function addIt($supName,$supAddress,$supContact,$supEmail){
			$supData=array(
				"COMPANY_NAME"=>$supName,
				"ADDRESS"=>$supAddress,
				"CONTACT"=>$supContact,
				"EMAIL"=>$supName,
			);
			return $this->db->insert("supplier",$supData);
		}
		
		public function getIt(){
			$sql = $this->db->query('select * from staff_type;');
			$result =$sql->result_array();
			return $result;
		}
		
		public function stLogin($sUsername,$sPassword){
			$sql=$this->db->where(['USERNAME'=>$sUsername,'PASSWORD'=>$sPassword])->get('staff');
			if($sql->num_rows()>=0){
				return $sql->row()->STAFF_TYPE_ID;
			}
			else{
				return false;
			}
		}
	}
?>