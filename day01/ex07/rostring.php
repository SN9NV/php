#!/usr/bin/php
<?php
	function ft_split ($str)
	{
		$arr = preg_replace('/\s\s+/', ' ', $str);
		$arr = explode(' ', $arr);
		return $arr;
	}

	if ($argc > 1)
	{
		$str = $argv[1];
		$str = ft_split($str);
		$len = count($str);
		for ($i = 1; $i < $len; $i++)
			echo "$str[$i] ";
		echo "$str[0]\n";
	}
?>
