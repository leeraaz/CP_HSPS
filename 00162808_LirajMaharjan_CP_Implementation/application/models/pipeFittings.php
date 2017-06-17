<?PHP
	class pipeFittings extends CI_Model{
		public function itemSave($image,$itemName,$size,$quantity,$buying,$selling){
			$itemSave=array(
				"IMAGE"=>$image,
				"ITEM_NAME"=>$itemName,
				"SIZE_in_INCH"=>$size,
				"QUANTITY"=>$quantity,
				"BUYING_PRICE"=>$buying,
				"SELLING_PRICE"=>$selling,
			);
			return $this->db->insert("pipe&fittings",$itemSave);
		}
	}
?>