<?PHP
	class Supplier_Model extends CI_Model{
		public function addIt($comName,$comAddress,$comContact,$comEmail){
			$supData=array(
				"COMPANY_NAME"=>$comName,
				"ADDRESS"=>$comAddress,
				"CONTACT"=>$comContact,
				"EMAIL"=>$comEmail,
			);
			return $this->db->insert("supplier",$supData);
		}
		
		public function getIt(){
			$sql=$this->db->get('supplier');
			return $sql->result();
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