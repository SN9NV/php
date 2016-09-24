<?php
session_start();
unset($_SESSION['login_message']);

require_once "check_input.php";
require_once "auth.php";

if ($_POST['submit'] == "OK") {
	if (check_username($_POST['login']) && check_password($_POST['passwd']) && auth($_POST['login'], $_POST['passwd'])) {
	$_SESSION['logged_on_user'] = $_POST['login'];
	$_SESSION['login_message'] = "<h5 class='welcummsg'>Welcome " . $_POST['login']."</h5>";
	}
	else {
		unset($_SESSION['logged_on_user']);
		$_SESSION['login_message'] = "Incorrect username or password";
	}
}
echo json_encode($_SESSION);

?>
