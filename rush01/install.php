<?php
$sql_con = new mysqli('127.0.0.1', 'root', 'sparewheel');
if ($sql_con->connect_error) {
	die("Connection failed: " . $sql_con->connect_error . PHP_EOL);
}
if ($argv[1] == 'reinstall') {
	if (!$sql_con->query("DROP DATABASE IF EXISTS rush01;")) {
		echo "Error creating database: " . $sql_con->error . PHP_EOL;
	}
}
if (!$sql_con->query("CREATE DATABASE IF NOT EXISTS rush01;")) {
	echo "Error creating database: " . $sql_con->error . PHP_EOL;
}
$sql_con->query("USE rush01;");
if (!$sql_con->query("
		CREATE TABLE IF NOT EXISTS users (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(32) NOT NULL,
			lastname VARCHAR(32) NOT NULL,
			username VARCHAR(32) NOT NULL,
			won_games INT(6) UNSIGNED DEFAULT 0,
			lost_games INT(6) UNSIGNED DEFAULT 0,
			won_guesses INT(8) UNSIGNED DEFAULT 0,
			lost_guesses INT(8) UNSIGNED DEFAULT 0,
			password VARCHAR(128) NOT NULL,
			admin TINYINT(1) UNSIGNED DEFAULT 0)")) {
	echo "Error creating users table: " . $sql_con->error . PHP_EOL;
}
$sql_con->close();
?>