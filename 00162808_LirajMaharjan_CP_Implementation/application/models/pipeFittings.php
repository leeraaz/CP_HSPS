<?PHP
	class pipeFittings extends CI_Model{
		//for inserting all the values received from pipe and fittings from into database
		public function itemSave($image,$itemName,$size,$quantity,$buying,$selling){
			$itemSave=array(
				"IMAGE"=>$image,
				"ITEM_NAME"=>$itemName,
				"SIZE_in_INCH"=>$size,
				"QUANTITY"=>$quantity,
				"BUYING_PRICE"=>$buying,
				"SELLING_PRICE"=>$selling,
			);
			return $this->db->insert("pipeandfittings",$itemSave);
			
		}
		
		//getting all the pipe and fittings
		public function itemDetail(){
			$sql=$this->db->get('pipeandfittings');
			return $sql->result();
		}
	}
?>