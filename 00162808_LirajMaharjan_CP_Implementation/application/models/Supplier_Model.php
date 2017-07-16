<?PHP
	class Supplier_Model extends CI_Model{
		//for adding supplier
		public function addIt($comName,$comAddress,$comContact,$comEmail){
			$supData=array(
				"COMPANY_NAME"=>$comName,
				"ADDRESS"=>$comAddress,
				"CONTACT"=>$comContact,
				"EMAIL"=>$comEmail,
			);
			return $this->db->insert("supplier",$supData);
		}
		
		//to get all the information of supplier
		public function getIt(){
			$sql=$this->db->get('supplier');
			return $sql->result();
		}
		
		//for findding supplier.
		public function findSupplier($SUPPLIER_ID){
			$this->db->where('SUPPLIER_ID',$SUPPLIER_ID);
			$sql=$this->db->get('supplier');
			return $sql->result();
		}
	}
?>