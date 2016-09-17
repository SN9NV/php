#!/usr/bin/php
<?php
$i = 0;
while ($i < 1000)
{
	$j = 0;
	while ($j < 80 && $i < 1000)
	{
		echo "X";
		$i++;
		$j++;
	}
	echo "\n";
}
?>
