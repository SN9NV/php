<!DOCTYPE html>
<html>
<head>
	<title>Holy Stack Merch</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/maincontent.css">
	<link rel="stylesheet" type="text/css" href="css/storestyles.css">

	<base href="">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script>
		function submitForm(oFormElement)
		{
			var xhr = new XMLHttpRequest();
			xhr.open (oFormElement.method, oFormElement.action, true);
			xhr.send (new FormData (oFormElement));
			xhr.onload = function(){
				var s = xhr.responseText;
				obj = JSON.parse(s);
				console.log(obj);
				if (obj.login_message) {
					$('.welcome').html(obj.login_message);
				}
				if (obj.logged_on_user) {
					console.log("go to chat");
					var content = $('.content');
					content.load('chat.php');
				}
				else {
					console.log("show error");
				}

			}
			return false;
		}
	</script>
</head>
<body class="bg">
	<div class="wrapper">
	<div class="nav">
		<div class="top-pad"></div>
		<div class="nav-bar">
			<div class="nav-left">
				<img class="logo" src="img/logo.png">
			</div>
			<div class="nav-center">
				<ul class="nav-list">
					<li><a class="nav-item" href="chat.php">Chat</a></li>
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
				</ul>
			</div>
		</div>
		<div class="drop-down">
		</div>
	</div>
	<div class="content">

	</div>
	<footer class="footer-cont">
		<div class="footer">
			<p class="foot-text">&copy; HolyStack 2016</p>
		</div>
	</footer>
        	<script type="text/javascript" src="scripts/scripts.js"></script>
</body>
</html>