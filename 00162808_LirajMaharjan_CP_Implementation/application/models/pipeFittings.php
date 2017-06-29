<?PHP
	class pipeFittings extends CI_Model{
		
		var $gallery_path;
		//constructor function
		public function __construct(){
            parent::__construct();
            //$this->load->helper(array('form', 'url'));
			$this->gallery_path = realpath(APPPATH . '../images');
        }
		
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
		
		public function do_upload(){
			$config = array(
				'allowed_types' => 'jpg|jpeg|png|gif',
				'upload_path' => $this->gallery_path
			);
			$this->load->library('upload',$config);
			$this->upload->do_upload();
		}
		
		public function itemDetail(){
			$sql=$this->db->get('pipe&fittings');
			return $sql->result();
		}
	}
?>