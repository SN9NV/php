#!/usr/bin/php
<?php
	$res = array();
	for ($i = 1; $i < $argc; $i++)
	{
		$arr = $argv[$i];
		$arr = preg_replace('/\s\s+/', ' ', $arr);
		$arr = explode(" ", $arr);
		$res = array_merge($res, $arr);
	}
	sort($res);
	$words = count($res);
//	for ($i = 1; $i < $words; $i++)
	//		echo "$res[$i]\n";
	foreach ($res as $word)
		echo "$word\n";
?>
