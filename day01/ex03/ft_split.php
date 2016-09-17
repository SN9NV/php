<?php
	function ft_split ($str)
	{
		$arr = preg_replace('/\s\s+/', ' ', $str);
		$arr = explode(' ', $arr);
		sort($arr, SORT_NATURAL | SORT_FLAG_CASE);
		return $arr;
	}
?>
