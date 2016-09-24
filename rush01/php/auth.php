<?php
function auth ($login, $passwd) {
	if (!$db = new mysqli('127.0.0.1', 'root', 'sparewheel', 'rush01'))
		echo "Database error" . PHP_EOL;
	$passwd = hash('whirlpool', $passwd);
	$users = $db->query("SELECT * FROM USERS");
	while ($user = mysqli_fetch_array($users)) {
		if ($user['username'] == $login) {
			if ($user['password'] == $passwd)
				return true;
		}
	}
	return false;
}
?>
