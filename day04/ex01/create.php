<?php
if ($_POST['submit'] != "OK" || $_POST['login'] == NULL || $_POST['passwd'] == NULL) {
    echo "ERROR\n";
    return;
}
$file = "../private/passwd";
$login = ['login' => $_POST['login'],
			'passwd' => hash('whirlpool', $_POST['passwd'], false)];
if (file_exists($file)) {
    $users = file_get_contents($file);
    $users = unserialize($users);
    foreach ($users as $user)
        if ($user['login'] == $_POST['login']) {
                echo "ERROR\n";
                return;
        }
}
$users[] = $login;
$serial = serialize($users);
if (!file_exists($file)) {
    mkdir("../private", 01777);
}
if (!file_put_contents($file, $serial)) {
	echo "ERROR\n";
	return;
}
echo "OK\n";
?>
