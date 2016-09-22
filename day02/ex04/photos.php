#!/usr/bin/php
<?php
	function download_image($url, $orig_url)
	{
		if (!$img = curl_init($url))
			exit("Page doesn't exist");
		$name = substr(strrchr($url, '/'), 1);
		$open_name = __DIR__."/$orig_url/$name";
		$open_name = preg_replace('/https?:\/\//', '', $open_name);
		$dirname = dirname($open_name);
		curl_setopt($img, CURLOPT_HEADER, 0);
		curl_setopt($img, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($img, CURLOPT_BINARYTRANSFER,1);
		if (!$raw = curl_exec($img))
			exit("Image does not exist: $url");
		if (!is_dir($dirname))
			mkdir($dirname, 0755, true);
		$file = fopen($open_name, 'wb');
		fwrite($file, $raw);
		curl_close($img);
		fclose($file);
	}

	if ($argc == 2)
	{
		$url = $argv[1];
		preg_replace('/\/$/', '', $url);
		if (!$page = curl_init($url))
			exit("Page doesn't exist");
		curl_setopt($page, CURLOPT_URL, $url);
		curl_setopt($page, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec($page);
		curl_close($page);
		preg_match_all('/<img.*?src\s*=\s*["\'](.*?)["\'].*?\/?>/i', $data, $matches);
		foreach($matches[1] as $match)
		{
			if (preg_match('/^\/[^\/]/', $match))
				$match = "$url$match";
			if (!preg_match('/https?:\/\/.*/i', $match))
				$match = "http://$match";
			$match = preg_replace('/\/\/+/', '//', $match);
			download_image($match, $url);
		}
	}
?>
