#!/usr/bin/php
<?php
	$arr = trim($argv[1]);
	$arr = preg_replace('/\s\s+/', ' ', $arr);
	echo "$arr\n";
?>
