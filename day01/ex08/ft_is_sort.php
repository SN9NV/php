<?php
	function ft_is_sort ($str)
	{
		$sort = $str;
		sort($sort, SORT_NATURAL | SORT_FLAG_CASE);
		foreach ($sort as $key => $value)
		{
			if ($value != $str[$key])
				return (false);
		}
		return (true);
	}
?>
