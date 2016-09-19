<!DOCTYPE html>
<html>
<head>
	<title>Holy Stack Merch</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/maincontent.css">
	<link rel="stylesheet" type="text/css" href="css/storestyles.css">
	<script type="text/javascript" src="scripts/scripts.js"></script>
	<base href="index.php">
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>
<body class="bg">
	<div class="wrapper">
	<div class="nav">
		<div class="top-pad"></div>
		<div class="nav-bar">
			<div class="nav-left">
				<a href="index.php">
					<img class="logo" src="img/logo.png">
				</a>
			</div>
			<div class="nav-center">
				<ul class="nav-list">
					<li><a class="nav-item" href="shirts.php">SHIRTS</a></li>
					<li><a class="nav-item" href="jeans.php">JEANS</a></li>
					<li><a class="nav-item" href="watches.php">WATCHES</a></li>
				</ul>
			</div>
			<div class="nav-right">
				<ul class="login">
					<?php
					session_start();
					if (isset($_SESSION['logged_on_user'])) {
						echo '<li class="log-right"><a class="nav-item-right" href="php/logout.php">' . $_SESSION['logged_on_user'] . ' LOGOUT</a></li>';
					}
					else {
						echo '<li class="log-right"><a class="nav-item-right" href="login.php">LOGIN</a></li>';
					}
					?>
					<li>
						<a href="">
							<img src="img/ic_add_shopping_cart_black_18dp.png">
						</a>
					</li class="log-right">
					<li class="log-right-nopad">0</li>
				</ul>
			</div>
		</div>
		<div class="drop-down">
		</div>
	</div>
	<div class="content">
		<div class="item-box">
			<div class="item-cont" style="background-image: url('//cdn.shopify.com/s/files/1/0531/8325/products/Black_Washed_Denim_Work_Shirt_1.png?v=1472664861');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R350.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('https://www.google.co.za/url?sa=i&rct=j&q=&esrc=s&source=imgres&cd=&cad=rja&uact=8&ved=0ahUKEwib7MbhrJnPAhVIahoKHaO9BDYQjRwIBw&url=http%3A%2F%2Fshopping.indiatimes.com%2Ffashion%2Fshirts%2Fpepe-teal-plain-men-shirt%2F43964%2Fp_B2378643&psig=AFQjCNFdlW6b8qPpLp50mmHE3UvAFg915Q&ust=1474302989318543');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R189.99</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('http://www.511tactical.com/media/catalog/product/cache/1/small_image/9df78eab33525d08d6e5fb8d27136e95/71200/092/71200_092_01.jpg');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R150.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('http://riverisland.scene7.com/is/image/RiverIsland/287294_main?$CrossSellProductPage514$');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R190.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('https://www.google.co.za/url?sa=i&rct=j&q=&esrc=s&source=imgres&cd=&cad=rja&uact=8&ved=0ahUKEwj8-qvlrJnPAhVBvBoKHadDCI4QjRwIBw&url=http%3A%2F%2Fwww.houseoffraser.co.uk%2Fdesigner%2Bshirts%2Bfor%2Bmen%2F204%2Cdefault%2Csc.html&psig=AFQjCNFslLnFkufyXX8TLtv0dNPWdpL2GQ&ust=1474302997057550');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R160.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('http://riverisland.scene7.com/is/image/RiverIsland/264790_main?$CrossSellProductPage514$');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R250.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('http://static1.shop.indiatimes.com/images/products/additional/original/B3059547_View_1/fashion/shirts/red-flame-yellow-checkered-men-shirt-rfsh-30009a.jpg');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R100.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('http://image1.superdry.com/static/images/products/upload6851007333299172757.jpg');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R100.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('https://lechehelsinki.files.wordpress.com/2012/08/filippak_poplin_white_shirt.jpg');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R240.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('//cdn.shopify.com/s/files/1/0531/8325/products/Black_First_of_All_Pocket_Tee_1.png?v=1473381095');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R199.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('//cdn.shopify.com/s/files/1/0531/8325/products/Black_First_of_All_Pocket_Tee_1.png?v=1473381095');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R89.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('//cdn.shopify.com/s/files/1/0531/8325/products/Black_First_of_All_Pocket_Tee_1.png?v=1473381095');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R180.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('//cdn.shopify.com/s/files/1/0531/8325/products/Black_First_of_All_Pocket_Tee_1.png?v=1473381095');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R140.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('//cdn.shopify.com/s/files/1/0531/8325/products/Black_First_of_All_Pocket_Tee_1.png?v=1473381095');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R200.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont" style="background-image: url('//cdn.shopify.com/s/files/1/0531/8325/products/Black_First_of_All_Pocket_Tee_1.png?v=1473381095');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R700.00</p>
					</div>
				</div>
		</div>
	</div>
	<footer class="footer-cont">
		<div class="footer">
			<p class="foot-text">&copy; HolyStack 2016</p>
		</div>
	</footer>
</body>
</html>
