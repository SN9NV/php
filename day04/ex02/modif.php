<?php
if ($_POST['submit'] != "OK" || $_POST['login'] == NULL || $_POST['oldpw'] == NULL || $_POST['newpw'] == NULL) {
    echo "ERROR submit\n";
    return;
}

$file = "../private/passwd";
$login = ['login' => $_POST['login'],
    'oldpw' => hash('whirlpool', $_POST['oldpw'], false),
    'newpw' => hash('whirlpool', $_POST['newpw'], false)];
if (!file_exists($file)) {
    echo "ERROR\n";
    return;
}

$users = file_get_contents($file);
$users = unserialize($users);
$i = 0;
while ($users[$i]['login'] != $login['login'] && $users[$i]) {
    ++$i;
}
if ($users[$i]['login'] != $login['login']) {
    echo "ERROR\n";
    return;
}

if ($users[$i]['passwd'] == $login['oldpw']) {
	$users[$i]['passwd'] = $login['newpw'];
    $serial = serialize($users);
    if (!file_exists($file))
        mkdir("private", 01777);
    file_put_contents($file, $serial);
    echo "OK\n";
}
else {
    echo "ERROR\n";
    return;
}
?>
