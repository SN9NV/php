<?php
session_start();
unset($_SESSION['login_message']);

function check_username($username) {
	if (!preg_match('/^[a-zA-Z0-9-]*$/', $username)) {
		$_SESSION['login_message'] = "Only letters, numbers and dashes are alowed as your username";
		return false;
	}
	$len = strlen($username);
	if ($len < 2 || $len > 12) {
		$_SESSION['login_message'] = "Username must be between 2 and 12 characters";
		return false;
	}
	return true;
}

function check_password($password) {
	if (!preg_match('/^[a-zA-Z0-9-]*$/', $password)) {
		$_SESSION['login_message'] = "Only letters, numbers and dashes are allowed as your password";
		return false;
	}
	$len = strlen($password);
	if ($len < 4) {
		$_SESSION['login_message'] = "Passwords must be longer than 4 characters";
	 	return false;
	}
	return true;
}

function auth ($login, $passwd) {
	$file = 'private/passwd';
	$passwd = hash('whirlpool', $passwd);
	if (!file_exists($file)) {
		echo "Internal Error";
		return false;
	}
	if ($users = file_get_contents($file)) {
		$users = unserialize($users);
		foreach ($users as $user) {
			if ($user['login'] == $login) {
				if ($user['passwd'] == $passwd)
					return true;
			}
		}
	}
	return false;
}

if ($_POST['submit'] == "OK") {
	if (check_username($_POST['login']) && check_password($_POST['passwd']) && auth($_POST['login'], $_POST['passwd'])) {
	$_SESSION['logged_on_user'] = $_POST['login'];
	$_SESSION['login_message'] = "<h5 class='welcummsg'>Welcome " . $_POST['login']."</h5>";
	header('Refresh: 1;url=index.php');
	}
	else {
		unset($_SESSION['logged_on_user']);
		$_SESSION['login_message'] = "Incorrect username or password";
	}
}
?>
