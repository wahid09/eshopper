<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');
?>
<?php
class Cart
{
	
	private $db;
	private $fm;
	
	function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function addToCart($quantity, $id){
		$quantity  = $this->fm->validation($quantity);
		$quantity  = mysqli_real_escape_string($this->db->link, $quantity);
		$productId = mysqli_real_escape_string($this->db->link, $id);
		$sId       = session_id();

		$query = "SELECT * FROM tbl_product WHERE productId = '$productId'";
		$result = $this->db->select($query)->fetch_assoc();

		$productName = $result['productName'];
		$price = $result['price'];
		$image = $result['image'];

		$checkquery = "SELECT * FROM tbl_cart WHERE productId ='$productId' AND sId ='$sId'";
		$getmsg = $this->db->select($checkquery);
		if ($getmsg) {
			$msg = "***Product alredy added!!***";
			return $msg;
		}else{
		$query = "INSERT INTO tbl_cart(sId, productId, productName, price, quantity, image) VALUES('$sId', '$productId', '$productName', '$price', '$quantity', '$image')";
		$inserted_row = $this->db->insert($query);
		if ($inserted_row) {
			header("location: cart.php");
		}else{
			header("location: 404.php");
		}
	}
	}
	public function getCartProduct(){
		$sid = session_id();
		$query = "SELECT * FROM tbl_cart WHERE sId='$sid'";
		$result = $this->db->select($query);
		return $result;
	}
	public function updateCartQuantity($cartId, $quantity){
		$cartId = mysqli_real_escape_string($this->db->link, $cartId);
		$quantity = mysqli_real_escape_string($this->db->link, $quantity);
		$query = "UPDATE tbl_cart
		          SET 
		          quantity = '$quantity'
		          WHERE cartId ='$cartId'";
		$updated_row = $this->db->update($query);
		if ($updated_row) {
			header("location:cart.php");
		}else{
			$msg = "<span class='error'>Quantity not update!!</span>";
			return $msg;
		}
	}
	public function delProductByCart($id){
		$query = "DELETE FROM tbl_cart WHERE cartId='$id'";
		$del_row = $this->db->delete($query);
		if ($del_row) {
			echo "<script>window.location='cart.php'; </script>";
		}else{
			$msg = "<span class='error'>product Not deleted.</span>";
			return $msg;
		}
	}
	public function checkCartTable(){
		$sid = session_id();
		$query = "SELECT * FROM tbl_cart WHERE sId='$sid'";
		$result = $this->db->select($query);
		return $result;
	}
}

?>