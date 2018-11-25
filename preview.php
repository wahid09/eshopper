<?php include 'includes/header_files.php'; ?>
<?php include 'includes/header_top.php'; ?>
<?php include 'includes/manu.php'; ?>
<?php
if (!isset($_GET['pdid']) || $_GET['pdid'] ==
NULL) {
echo "<script>window.location = '404.php'; </script>";
}else{
$id = $_GET['pdid'];
$pattern = '/[^-a-zA-Z0-9_]/';
$rep = '';
$id = preg_replace($pattern, $rep, $id);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$quantity = $_POST['quantity'];
	$addCart = $ct->addToCart($quantity, $id);
}
?>
<div class="main">
	<div class="content">
		<div class="section group">
			<div class="cont-desc span_1_of_2">
				<?php
				$productDetails = $pd->getSingleProductById($id);
				if ($productDetails) {
					while ($result = $productDetails->fetch_assoc()){
				?>
				<div class="grid images_3_of_2">
					<img src="admin/<?php echo $result['image']; ?>" alt="" />
				</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $result['productName']; ?> </h2>
					<div class="price">
						<p>Price: <span>$<?php echo $result['price']; ?></span></p>
						<p>Category: <span><?php echo $result['catName']; ?></span></p>
						<p>Brand:<span><?php echo $result['brandName']; ?></span></p>
					</div>
					<div class="add-cart">
						<form action="" method="post">
							<input type="number" class="buyfield" name="quantity" value="1"/>
							<input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
						</form>
					</div>
					<span style="color: red">
						<?php 
						if (isset($addCart)) {
							echo $addCart;
						}
						?>
					</span>
				</div>
				<div class="product-desc">
					<h2>Product Details</h2>
					<p><?php echo $result['body']; ?></p>
					
				</div>
				
			</div>
			<?php } } ?>
			<div class="rightsidebar span_3_of_1">
				<h2>CATEGORIES</h2>
				<ul>
					<li><a href="productbycat.html">Mobile Phones</a></li>
					<li><a href="productbycat.html">Desktop</a></li>
					<li><a href="productbycat.html">Laptop</a></li>
					<li><a href="productbycat.html">Accessories</a></li>
					<li><a href="productbycat.html#">Software</a></li>
					<li><a href="productbycat.html">Sports & Fitness</a></li>
					<li><a href="productbycat.html">Footwear</a></li>
					<li><a href="productbycat.html">Jewellery</a></li>
					<li><a href="productbycat.html">Clothing</a></li>
					<li><a href="productbycat.html">Home Decor & Kitchen</a></li>
					<li><a href="productbycat.html">Beauty & Healthcare</a></li>
					<li><a href="productbycat.html">Toys, Kids & Babies</a></li>
				</ul>
				
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<?php include 'includes/footer.php'; ?>
</div>
<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>