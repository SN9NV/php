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

if ($_POST['submit'] != "OK") {
	return;
}
if ($_POST['login'] == NULL || $_POST['passwd'] == NULL) {
    $_SESSION['login_message'] = "Missing username or password";
    return;
}
if (!check_username($_POST['login']) || !check_password($_POST['passwd'])) {
	return;
}

$file = "private/passwd";
$login = ['login' => $_POST['login'],
			'passwd' => hash('whirlpool', $_POST['passwd'], false)];
if (file_exists($file)) {
    $users = file_get_contents($file);
    $users = unserialize($users);
    foreach ($users as $user)
        if ($user['login'] == $_POST['login']) {
                $_SESSION['login_message'] = "Username already exists";
                return;
        }
}
$users[] = $login;
$serial = serialize($users);
if (!file_exists($file)) {
    mkdir("private", 01777);
}
if (!file_put_contents($file, $serial)) {
	$_SESSION['login_message'] = "Database error";
	return;
}
$_SESSION['login_message'] = "<h5 class='welcummsg'>Welcome " . $login['login'] . '. You can </h5><a href="login.php"><h5 class="logmein">Log in</h5></a>';
?>
