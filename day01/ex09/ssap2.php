#!/usr/bin/php
<?php
	function ft_is_sort ($str)
	{
		$sort = $str;
		sort($sort, SORT_NATURAL | SORT_FLAG_CASE);
		foreach ($sort as $key => $value)
			if ($value != $str[$key])
				return (false);
		return (true);
	}

	$res = array();
	for ($i = 1; $i < $argc; $i++)
	{
		$arr = $argv[$i];
		$arr = preg_replace('/\s\s+/', ' ', $arr);
		$arr = explode(" ", $arr);
		$res = array_merge($res, $arr);
	}
	sort($res, SORT_STRING | SORT_FLAG_CASE);
	foreach ($res as $word)
		if (is_numeric($word))
			$numeric[] = $word;
	$res = array_diff($res, $numeric);
	foreach ($res as $word)
	{
		$char = ord($word);
		if (($char > 31 && $char < 48) || ($char > 57 && $char < 65) ||
			($char > 90 && $char < 97) || ($char > 122 && $char < 127))
			$special[] = $word;
	}
	$res = array_diff($res, $special);
	foreach ($res as $word)
		echo "$word\n";
	foreach ($numeric as $word)
		echo "$word\n";
	foreach ($special as $word)
		echo "$word\n";
?>
