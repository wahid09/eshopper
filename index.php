<?php include 'includes/header_files.php'; ?>
<?php include 'includes/header_top.php'; ?>
<?php include 'includes/manu.php'; ?>
	<?php
    if(isset($pages)){
    if($pages == "product"){
    include 'view/product_content.php';
}else if($pages == "topbrands"){
	include 'view/topbrand_content.php';
}else if($pages == "contact"){
	include 'view/contact_content.php';
}else if($pages == "cart"){
	include 'view/cart_content.php';
}else if($pages == "login"){
	include 'view/login_content.php';
}

}else{
	include 'view/home_content.php';
}




	?>
<?php include 'includes/footer_files.php'; ?>
