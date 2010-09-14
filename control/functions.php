<?php

	function ContentToParams($content_str)
	{
		// проверить на внешний url
		if (strncmp($content_str, 'http://', strlen('http://')) == 0)
		{
			return $content_str;
		}

		$file_name = explode('.', $content_str);

		$params = explode('_', $file_name[0]);
		$params[0] = 'category='.$params[0];
		$params[1] = 'section='.$params[1];
		$params[2] = 'part='.$params[2];
		$params_str = "index.php?".implode('&', $params);
		return $params_str;
	}
?>
