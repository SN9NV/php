<?php
session_start();
$_SESSION['logged_on_user'] = NULL;
header('Refresh: 0;url=../index.php');
?>
