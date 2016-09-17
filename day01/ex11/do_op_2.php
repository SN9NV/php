#!/usr/bin/php
<?php
	if ($argc != 2)
		echo "Incorrect Parameters\n";
	else
	{
		$line = trim($argv[1]);
		$i = 0;
		if (!is_numeric($line[$i]))
			exit ("Syntax Error 12\n");
		while (is_numeric($line[$i]))
			$i++;
		$num1 = substr($line, 0, $i);
		while ($line[$i] == ' ')
			$i++;
		if ($line[$i] != '+' && $line[$i] != '-' && $line[$i] != '*' &&
			$line[$i] != '/' && $line[$i] != '%')
			exit ("Syntax Error 19\n");
		$symbol = $line[$i++];
		while ($line[$i] == ' ')
			$i++;
		$num2 = substr($line, $i);
		if ($symbol == '+')
			$res = $num1 + $num2;
		else if ($symbol == '-')
			$res = $num1 - $num2;
		else if ($symbol == '*')
			$res = $num1 * $num2;
		else if ($symbol == '/')
			$res = $num1 / $num2;
		else if ($symbol == '%')
			$res = $num1 % $num2;
		echo "$res\n";
	}
?>
