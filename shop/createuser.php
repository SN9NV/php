<?php
include "php/create.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Holy Stack Merch</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
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
					<li class="log-right"><a class="nav-item-right" href="login.php">LOGIN</a></li>
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
		<div class="login-form red">
			<div class="form-cont">
				<form action="createuser.php" method="post" class="log-form">
					<h6>Create Account:</h6>
					<input class="field" type="text" name="login" placeholder="username">
					<br/>
					<br/>
					<input class="field" type="password" name="passwd" placeholder="password">
					<br/>
					<br/>
					<input class="button" type="submit" name="submit" value="OK">
					<?php
					if (isset($_SESSION['login_message'])) {
						echo "<br>" . $_SESSION['login_message'] . "";
					}
					?>
				</form>
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
