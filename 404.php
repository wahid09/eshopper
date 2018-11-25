<!DOCTYPE HTML>
<head>
	<title>Free Smart Store Website Template</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
	<script src="js/jquerymain.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/nav.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/nav-hover.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript">
	$(document).ready(function($){
	$('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
	});
	</script>

	<style type="text/css">
		* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  padding: 0;
  margin: 0;
}

#notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 520px;
  width: 100%;
  line-height: 1.4;
  text-align: center;
}

.notfound .notfound-404 {
  position: relative;
  height: 200px;
  margin: 0px auto 20px;
  z-index: -1;
}

.notfound .notfound-404 h1 {
  font-family: 'Montserrat', sans-serif;
  font-size: 236px;
  font-weight: 200;
  margin: 0px;
  color: #211b19;
  text-transform: uppercase;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound .notfound-404 h2 {
  font-family: 'Montserrat', sans-serif;
  font-size: 28px;
  font-weight: 400;
  text-transform: uppercase;
  color: #211b19;
  background: #fff;
  padding: 10px 5px;
  margin: auto;
  display: inline-block;
  position: absolute;
  bottom: 0px;
  left: 0;
  right: 0;
}

.notfound a {
  font-family: 'Montserrat', sans-serif;
  display: inline-block;
  font-weight: 700;
  text-decoration: none;
  color: #fff;
  text-transform: uppercase;
  padding: 13px 23px;
  background: #ff6300;
  font-size: 18px;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.notfound a:hover {
  color: #ff6300;
  background: #211b19;
}

@media only screen and (max-width: 767px) {
  .notfound .notfound-404 h1 {
    font-size: 148px;
  }
}

@media only screen and (max-width: 480px) {
  .notfound .notfound-404 {
    height: 148px;
    margin: 0px auto 10px;
  }
  .notfound .notfound-404 h1 {
    font-size: 86px;
  }
  .notfound .notfound-404 h2 {
    font-size: 16px;
  }
  .notfound a {
    padding: 7px 15px;
    font-size: 14px;
  }
}

	</style>

</head>
<body>
	<div class="wrap">
		<?php include 'includes/header_top.php'; ?>
		<?php include 'includes/manu.php'; ?>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>Oops!</h1>
				<h2>404 - The Page can't be found</h2>
			</div>
			<a href="index.php">Go TO Homepage</a>
		</div>
	</div>

<div class="footer">
			<div class="wrapper">
				<div class="section group">
					<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Customer Service</a></li>
							<li><a href="#"><span>Advanced Search</span></a></li>
							<li><a href="#">Orders and Returns</a></li>
							<li><a href="#"><span>Contact Us</span></a></li>
						</ul>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<h4>Why buy from us</h4>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="faq.html">Customer Service</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="contact.html"><span>Site Map</span></a></li>
							<li><a href="preview-2.html"><span>Search Terms</span></a></li>
						</ul>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<h4>My account</h4>
						<ul>
							<li><a href="contact.html">Sign In</a></li>
							<li><a href="index.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="faq.html">Help</a></li>
						</ul>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<h4>Contact</h4>
						<ul>
							<li><span>+91-123-456789</span></li>
							<li><span>+00-123-000000</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
							<ul>
								<li class="facebook"><a href="#" target="_blank"> </a></li>
								<li class="twitter"><a href="#" target="_blank"> </a></li>
								<li class="googleplus"><a href="#" target="_blank"> </a></li>
								<li class="contact"><a href="#" target="_blank"> </a></li>
								<div class="clear"></div>
							</ul>
						</div>
					</div>
				</div>
				<div class="copy_right">
					<p>Compant Name © All rights Reseverd</a> </p>
				</div>
			</div>
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