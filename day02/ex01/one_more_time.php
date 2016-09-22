#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		date_default_timezone_set('Europe/Paris');
		$date = preg_replace('/\s\s+/', ' ', $argv[1]);
		$date = explode(' ', $date);
		if (count($date) != 5)
			exit("Wrong Format\n");

		if (preg_match('/lundi/i', $date[0]))
			$date[0] = 1;
		else if (preg_match('/mardi/i', $date[0]))
			$date[0] = 2;
		else if (preg_match('/mercredi/i', $date[0]))
			$date[0] = 3;
		else if (preg_match('/jeudi/i', $date[0]))
			$date[0] = 4;
		else if (preg_match('/vendredi/i', $date[0]))
			$date[0] = 5;
		else if (preg_match('/samedi/i', $date[0]))
			$date[0] = 6;
		else if (preg_match('/dimanche/i', $date[0]))
			$date[0] = 0;
		else
			exit("Wrong Format\n");

		if (!preg_match('/[0-9]{1,2}/', $date[1]))
			exit("Wrong Format\n");
		if (preg_match('/janvier\i/', $date[2]))
			$date[2] = 1;
		else if (preg_match('/(février|fevrier)/i', $date[2]))
			$date[2] = 2;
		else if (preg_match('/mars/i', $date[2]))
			$date[2] = 3;
		else if (preg_match('/avril/i', $date[2]))
			$date[2] = 4;
		else if (preg_match('/mai/i', $date[2]))
			$date[2] = 5;
		else if (preg_match('/juin/i', $date[2]))
			$date[2] = 6;
		else if (preg_match('/juillet/i', $date[2]))
			$date[2] = 7;
		else if (preg_match('/(août|aout)/i', $date[2]))
			$date[2] = 8;
		else if (preg_match('/septembre/i', $date[2]))
			$date[2] = 9;
		else if (preg_match('/octobre/i', $date[2]))
			$date[2] = 10;
		else if (preg_match('/novembre/i', $date[2]))
			$date[2] = 11;
		else if (preg_match('/(décembre|decembre)/i', $date[2]))
			$date[2] = 12;
		else
			exit("Wrong Format\n");

		if (!preg_match('/[0-9]{4}/', $date[3]))
			exit("Wrong Format\n");
		if (!preg_match('/[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}/', $date[4]))
			exit("Wrong Format\n");
		$time = explode(':', $date[4]);
		$datestr = mktime($time[0], $time[1], $time[2], $date[2], $date[1], $date[3]);
		if (jddayofweek(unixtojd($datestr)) != $date[0])
			exit("Wrong Format\n");
		echo "$datestr\n";
	}
?>
