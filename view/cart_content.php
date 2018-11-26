<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$cartId = $_POST['cartId'];
	$quantity = $_POST['quantity'];
	$updateCart = $ct->updateCartQuantity($cartId, $quantity);
	if ($quantity<=0) {
		$delpd = $ct->delProductByCart($cartId);
	}
}
?>
<?php
$pdid='';
if (isset($_GET['pdid'])) {
	$id = $_GET['pdid'];
    $pattern = '/[^-a-zA-Z0-9_]/';
    $replacement = '';
    $id = preg_replace($pattern, $replacement, $id);
	$delpd = $ct->delProductByCart($id);
}

?>
<?php
if (!isset($_GET['id'])) {
 	echo "<meta http-equiv='refesh' content='0;URL=?id=live' />";
 } 
?>

<div class="main">
	<div class="content">
		<div class="cartoption">
			<div class="cartpage">
				<h2>Your Cart</h2>
				<?php 
				if (isset($updateCart)) {
					echo $updateCart;
				}
				if (isset($delpd)) {
					echo $delpd;
				}
				?>
				<table class="tblone">
					<tr>
						<th width="5%">SL</th>
						<th width="25%">Product Name</th>
						<th width="25%">Image</th>
						<th width="10%">Price</th>
						<th width="15%">Quantity</th>
						<th width="10%">Total Price</th>
						<th width="10%">Action</th>
					</tr>
					<?php 
					$getpd = $ct->getCartProduct();
					if ($getpd) {
						$sum = 0;
						$i=0;
						while ($result = $getpd->fetch_assoc()) {
							$i++;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $result['productName']; ?></td>
						<td><img src="admin/<?php echo $result['image']; ?>" alt=""/></td>
						<td>$<?php echo $result['price']; ?></td>
						<td>
							<form action="" method="post">
								<input type="hidden" name="cartId" value="<?php echo $result['cartId']; ?>"/>
								<input type="number" name="quantity" value="<?php echo $result['quantity']; ?>"/>
								<input type="submit" name="submit" value="Update"/>
							</form>
						</td>
						<td><?php 
						$total = $result['price']*$result['quantity'];
						echo "$".$total;
						?>
						</td>
						<td><a onclick="return confirm('Are you sure to delete product!!')" href="?pdid=<?php echo $result['cartId']; ?>">X</a></td>
					</tr>
					<?php 
					$sum = $sum+$total;
					Session::set("sum", $sum);
					?>
					<?php } } ?>	
				</table>
				<?php 
				$getData = $ct->checkCartTable();
				if ($getData) {
				?>
				<table style="float:right;text-align:left;" width="40%">
					<tr>
						<th>Sub Total : </th>
						<td>$<?php echo $sum; ?></td>
					</tr>
					<tr>
						<th>VAT(4%) : </th>
						<td>
							<?php
							$vat = $sum*.04;
							echo "$".$vat;
						?>
						</td>
					</tr>
					<tr>
						<th>Grand Total :</th>
						<td>
							<?php
							$sub = $sum+$vat;
							echo "$".$sub;
							?>
						</td>
					</tr>
				</table>
			<?php }else{
				header("location:index.php");
			} ?>
			</div>
			<div class="shopping">
				<div class="shopleft">
					<a href="index.php"> <img src="images/shop.png" alt="" /></a>
				</div>
				<div class="shopright">
					<a href="login.php"> <img src="images/check.png" alt="" /></a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>