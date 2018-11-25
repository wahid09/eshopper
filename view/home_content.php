<div class="header_bottom">
	<div class="header_bottom_left">
		<div class="section group">
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
					<a href="preview.php"> <img src="images/pic4.png" alt="" /></a>
				</div>
				<div class="text list_2_of_1">
					<h2>Iphone</h2>
					<p>Lorem ipsum dolor sit amet sed do eiusmod.</p>
					<div class="button"><span><a href="preview.html">Add to cart</a></span></div>
				</div>
			</div>
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
					<a href="preview.php"><img src="images/pic3.png" alt="" / ></a>
				</div>
				<div class="text list_2_of_1">
					<h2>Samsung</h2>
					<p>Lorem ipsum dolor sit amet, sed do eiusmod.</p>
					<div class="button"><span><a href="preview.html">Add to cart</a></span></div>
				</div>
			</div>
		</div>
		<div class="section group">
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
					<a href="preview.php"> <img src="images/pic3.jpg" alt="" /></a>
				</div>
				<div class="text list_2_of_1">
					<h2>Acer</h2>
					<p>Lorem ipsum dolor sit amet, sed do eiusmod.</p>
					<div class="button"><span><a href="preview.html">Add to cart</a></span></div>
				</div>
			</div>
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
					<a href="preview.php"><img src="images/pic1.png" alt="" /></a>
				</div>
				<div class="text list_2_of_1">
					<h2>Canon</h2>
					<p>Lorem ipsum dolor sit amet, sed do eiusmod.</p>
					<div class="button"><span><a href="preview.html">Add to cart</a></span></div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="header_bottom_right_images">
		<!-- FlexSlider -->
		
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li><img src="images/1.jpg" alt=""/></li>
					<li><img src="images/2.jpg" alt=""/></li>
					<li><img src="images/3.jpg" alt=""/></li>
					<li><img src="images/4.jpg" alt=""/></li>
				</ul>
			</div>
		</section>
		<!-- FlexSlider -->
	</div>
	<div class="clear"></div>
</div>
<div class="main">
	<div class="content">
		<div class="content_top">
			<div class="heading">
				<h3>Feature Products</h3>
			</div>
			<div class="clear"></div>
		</div>
		<div class="section group">
			<?php
			$getFpd = $pd->getFeaturedProduct();
			if ($getFpd) {
				while ($result = $getFpd->fetch_assoc()) {
			?>
			<div class="grid_1_of_4 images_1_of_4">
				<a href="preview.php?pdid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
				<h2><?php echo $result['productName']; ?> </h2>
				<p><?php echo $fm->textShorten($result['body'], 60); ?></p>
				<p><span class="price">$<?php echo $result['price']; ?></span></p>
				<div class="button"><span><a href="preview.php?pdid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
			</div>
			<?php } } ?>
		</div>
		<div class="content_bottom">
			<div class="heading">
				<h3>New Products</h3>
			</div>
			<div class="clear"></div>
		</div>
		<div class="section group">
			<?php
			$getNpd = $pd->getNewProduct();
			if ($getNpd) {
				while ($result = $getNpd->fetch_assoc()) {
			?>
			<div class="grid_1_of_4 images_1_of_4">
				<a href="preview.php?pdid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
				<h2><?php echo $result['productName']; ?></h2>
				<p><span class="price">$<?php echo $result['price']; ?></span></p>
				<div class="button"><span><a href="preview.php?pdid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
			</div>
			<?php } } ?>
		</div>
	</div>
</div>