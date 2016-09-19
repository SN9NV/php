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
			<div class="item-cont"; style="background-image: url('//cdn.shopify.com/s/files/1/0531/8325/products/Indigo_Essential_Knee_Split_TN_large.png?v=1472694223');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R20.000</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSytGtlZiSB67Cw7qnhPezQPYauSvMBO9B-zAUpbkcI4QVNXgdSAYmKzHSKjSnN8llArYI3A3ma&usqp=CAY');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R420.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('https://anf.scene7.com/is/image/anf/anf_58873_01_prod1?$product-anf-v1$&wid=800&hei=1000');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R540.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('http://lp.hm.com/hmprod?set=key[source],value[/model/2015/B00%200324309%20002%2061%200867.jpg]&set=key[rotate],value[]&set=key[width],value[]&set=key[height],value[]&set=key[x],value[]&set=key[y],value[]&set=key[type],value[STILL_LIFE_FRONT]&hmver=5&call=url[file:/product/large]');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R399.99</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('http://lp.hm.com/hmprod?set=key[source],value[/model/2015/C00%200355543%20001%2048%201085.jpg]&set=key[rotate],value[]&set=key[width],value[]&set=key[height],value[]&set=key[x],value[]&set=key[y],value[]&set=key[type],value[STILL_LIFE_FRONT]&hmver=4&call=url[file:/product/large]');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R640.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('http://lp.hm.com/hmprod?set=key[source],value[/model/2016/D00%200400985%20001%2031%205126.jpg]&set=key[rotate],value[]&set=key[width],value[]&set=key[height],value[]&set=key[x],value[]&set=key[y],value[]&set=key[type],value[STILL_LIFE_FRONT]&hmver=1&call=url[file:/product/large]');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R370.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTPnxfbDZAd7mlQ1hwDNqrbeyJ5JojOb2YSrnWvB1rOKo0pGro1IYlSlrCzNeLWhFIGUCY4rSU&usqp=CAY');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R299.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('http://scene7.zumiez.com/is/image/zumiez/pdp_hero/Rustic-Dime-Shredded-Taper-Fit-Jeans-_261024-front.jpg');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R580.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('http://scene7.zumiez.com/is/image/zumiez/pdp_hero/Free-World-Night-Train-Regular-Fit-Jeans-_245828-front.jpg');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R720.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTMNBcuIaKrssoTAGY9JjyIe1Px04BQuyeWk9DwsaTJszDGcf_RYaSx72di6_gIS00sq2JfEMc&usqp=CAY');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R420.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('https://anf.scene7.com/is/image/anf/anf_124828_01_prod1?$product-anf-v1$&wid=800&hei=1000');">
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
			<div class="item-cont"; style="background-image: url('https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQmkiTekg-RLTubkj5l0byDoNwhLCpGF1AMgHNtLWhtqAJ_Has5xCJqSwbEEZQY1B-j8WnUz6g&usqp=CAY');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R270.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('http://macys-o.scene7.com/is/image/MCY/products/8/optimized/712478_fpx.tif?op_sharpen=1&wid=400&hei=489&fit=fit,1&$filterlrg$');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R630.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSW0NUVhFgLcyForkcu6rPoD4Ptsvtnyi00fZfxcJvHpOwxhLtsywVijvo6nFMiQ2MEspbLwWY&usqp=CAY');">
				<div class="item-info">
					<div class="add-cart">
						<h6 class="addtext">add</h6>
						<img class="cartimage" src="img/ic_add_shopping_cart_black_18dp.png">
					</div>
					<div class="price">
						<p class="priceText">R860.00</p>
					</div>
				</div>
			</div>
			<div class="item-cont"; style="background-image: url('https://pimg.bucklecontent.com/images/products/14423ABM21071/RL2/f?width=730');">
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
	</div>
	<footer class="footer-cont">
		<div class="footer">
			<p class="foot-text">&copy; HolyStack 2016</p>
		</div>
	</footer>
</body>
</html>
