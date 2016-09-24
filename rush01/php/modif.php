<?php
if ($_POST['submit'] != "OK" || $_POST['login'] == NULL || $_POST['oldpw'] == NULL || $_POST['newpw'] == NULL) {
    echo "ERROR submit\n";
    return;
}

require_once "check_input.php";
if (!check_username($_POST['login']) || !check_password($_POST['passwd'])) {
	return;
}

if (!$db = new mysqli('127.0.0.1', 'root', 'sparewheel', 'rush01'))
	die("Database connection error: " . $db->error . PHP_EOL);
$username = $_POST['login'];
$oldpw = hash('whirlpool', $_POST['oldpw'], false);
$newpw = hash('whirlpool', $_POST['newpw'], false);

$exists = false;
$users = $db->query("SELECT * FROM users");
while ($user = mysqli_fetch_array($users)) {
    if ($user['username'] == $_POST['login']) {
        $exists = true;
		break;
    }
}
if (!$exists) {
	$_SESSION['login_message'] = "Incorrect username or password";
	return;
}

if ($user['password'] == $oldpw) {
	$userid = $user['id'];
	$update = "
		UPDATE users
		SET password='$newpw'
		WHERE id='$userid';";
	if (!$db->query($update))
		die("Update error: " . $db->error . PHP_EOL);
}
else {
	$_SESSION['login_message'] = "Incorrect username or password";
	return;
}
?>
