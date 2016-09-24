<?php
session_start();
unset($_SESSION['login_message']);

require_once "check_input.php";

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
if (!$db = new mysqli('127.0.0.1', 'root', 'sparewheel', 'rush01'))
	die("Database connection error: " . $db->error . PHP_EOL);
$login = ['login' => $_POST['login'],
			'passwd' => hash('whirlpool', $_POST['passwd'], false)];
$users = $db->query("SELECT * FROM users");
while ($user = mysqli_fetch_array($users)) {
    if ($user['username'] == $_POST['login']) {
        $_SESSION['login_message'] = "Username already exists";
        	return;
    }
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $login['login'];
$password = $login['passwd'];
$query = "
	INSERT INTO users
	VALUES ('', '$firstname', '$lastname', '$username', '', '', '', '', '$password', '');";
if (!$db->query($query)) {
	die("Database error creating account: " . $db->error . PHP_EOL);
}
$_SESSION['login_message'] = "<h5 class='welcummsg'>Welcome " . $login['login'] . '. You can </h5><a href="login.php"><h5 class="logmein">Log in</h5></a>';
$db->close();
?>
