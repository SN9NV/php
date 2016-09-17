<?php
if ($_GET['action'] == "set")
{
	if ($_GET['name'] && $_GET['value'])
		setcookie($_GET['name'], $_GET['value'], time() + (86400 * 30));
}
else if ($_GET['action'] == "get")
{
	if (setcookie($_GET['name']))
		if ($value = $_COOKIE[$_GET['name']])
			echo $value . "\n";
}
else if ($_GET['action'] == "del")
{
	setcookie($_GET['name'], "", time() - 3600);
}
?>
