#!/usr/bin/php
<?php
	if ($argc != 4)
		echo "Incorrect Parameters\n";
	else
	{
		$v1 = trim($argv[1]);
		$v2 = trim($argv[3]);
		$instr = trim($argv[2]);
		if ($instr == "+")
			$res = $v1 + $v2;
		else if ($instr == "-")
			$res = $v1 - $v2;
		else if ($instr == "*")
			$res = $v1 * $v2;
		else if ($instr == "/")
			$res = $v1 / $v2;
		else if ($instr == "%")
			$res = $v1 % $v2;
		echo "$res\n";
	}
?>
