<?php
include_once '../lib/Database.php';
include_once '../helpers/Format.php';
?>

<?php

class Brand{
	
	private $db;
	private $fm;
	
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	// Brand added
	public function brandInsert($brandName){
		$brandName = $this->fm->validation($brandName);
		$brandName = mysqli_real_escape_string($this->db->link, $brandName);
		if (empty($brandName)) {
			$msg = "<span class='error'>Brand field must not be empty!!</span>";
			return $msg;
		}else{
			$query = "INSERT INTO tbl_brand (brandName) Value ('$brandName')";
			$insertBrand = $this->db->insert($query);
			if($insertBrand){
				$msg = "<span class='success'>Brand Inserted Successfully.</span>";
				return $msg;
			}else{
				$msg = "<span class='error'>Brand Not Inserted.</span>";
				return $msg;
			}
		}
	}

	// Read all data from brand table
	public function getAllBrand(){
		$query = "SELECT * FROM tbl_brand ORDER BY brandId DESC";
		$result = $this->db->select($query);
		return $result;
	}
	// Update data
	public function getbrandById($id){
		$query = "SELECT * FROM tbl_brand WHERE brandId = '$id'";
		$result = $this->db->select($query);
		return $result;
	}
	public function brandUpdate($brandName, $id){
		$brandName = $this->fm->validation($brandName);
		$brandName = mysqli_real_escape_string($this->db->link, $brandName);
		$id = mysqli_real_escape_string($this->db->link, $id);
		if (empty($brandName)) {
			$msg = "<span class='error'>Brand field must not be empty!!</span>";
			return $msg;
		}else{
			$query = "UPDATE tbl_brand
			SET
			brandName = '$brandName'
			WHERE
			brandId = '$id'";
			$update_row = $this->db->update($query);
			if($update_row){
				$msg = "<span class='success'>Brand updated Successfully.</span>";
				return $msg;
				header("location:brandlist.php");
			}else{
				$msg = "<span class='error'>Brand Not updated.</span>";
				return $msg;
			}
		}
	}
	//Delete data
	public function delBrandById($id){
		$query = "DELETE FROM tbl_brand WHERE brandID='$id'";
		$del_row = $this->db->delete($query);
		if ($del_row) {
			$msg = "<span class='success'>Brand deleted Successfully.</span>";
		    return $msg;
		}else{
			$msg = "<span class='error'>Brand Not deleted.</span>";
			return $msg;
		}
	}
}



?>