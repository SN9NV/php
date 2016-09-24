<?php
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
?>