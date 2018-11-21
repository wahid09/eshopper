<?php
include_once '../lib/Database.php';
include_once '../helpers/Format.php';
?>
<?php
class Product
{
	
	private $db;
	private $fm;
	
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	//Insert Data
	public function productInsert($data, $file){
		$productName = mysqli_real_escape_string($this->db->link, $data['productName']);
		$catId = mysqli_real_escape_string($this->db->link, $data['catId']);
		$brandId = mysqli_real_escape_string($this->db->link, $data['brandId']);
		$body = mysqli_real_escape_string($this->db->link, $data['body']);
		$price = mysqli_real_escape_string($this->db->link, $data['price']);
		$type = mysqli_real_escape_string($this->db->link, $data['type']);
		//image file
		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $file['image']['name'];
		$file_size = $file['image']['size'];
		$file_temp = $file['image']['tmp_name'];
		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/".$unique_image;

		if ($productName =="" || $catId =="" || $brandId =="" || $body =="" || $price =="" || $type =="") {
			$msg ="<span class='error'>Filds must not be empty</span>";
			return $msg;
		}else{
			move_uploaded_file($file_temp, $uploaded_image);
			$query = "INSERT INTO tbl_product(productName, catId, brandId, body, price, image, type) VALUES('$productName', '$catId', '$brandId', '$body', '$price', '$uploaded_image', '$type')";
			$productInsert = $this->db->insert($query);
			if ($productInsert) {
				$msg = "<span class='success'>Product insert successfully</span>";
				return $msg;
			}else{
				$msg = "<span class='error'>Product not inserted</span>";
				return $msg;
			}
		}
	}
}
?>