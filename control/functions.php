<?php

	require_once('google.translator.php');

	function ContentToParams($content_str)
	{
		global $lang;
		// проверить на внешний url
		if (strncmp($content_str, 'http://', strlen('http://')) == 0)
		{
			return $content_str;
		}

		$file_name = explode('.', $content_str);

		$params = explode('_', $file_name[0]);

		$i = 0;

		unset($new_params);

		if ($params[0] != '') $new_params[$i++] = 'category='.$params[0];
		if ($params[1] != '') $new_params[$i++] = 'section='.$params[1];
		if ($params[2] != '') $new_params[$i++] = 'part='.$params[2];
		if ($lang != '')      $new_params[$i++] = "lang=$lang";

		$params_str = "index.php?".implode('&amp;', $new_params);

		return $params_str;
	}

	function tr($word)
	{
		// translate
		// Возвращает перевод слова из словаря $glossary по индексу $word на текущий язык

		global $lang;
		global $glossary;
		global $def_lang;

		$result = $glossary[$word][$lang];

		/* TODO: проверить на хосте
		if ($result == '' && extension_loaded ('curl'))
		{
			// если не знаем - спросим у Гугла
			$result = Google_Translate_API::translate($glossary[$word][$def_lang], $def_lang, $lang);
			//$result = google_translate($glossary[$word][$def_lang], $def_lang, $lang);
			echo $glossary[$word][$def_lang]."###".$result."!!!";
			// view the translated string
			//var_dump($str);
		}
		//*/

		return $result;
	}

	function trp($word)
	{
		// translate & print
		// Выводит перевод слова из словаря $glossary по индексу $word на текущий язык

		echo(tr($word));
	}

	function google_translate($s_text, $s_lang, $d_lang)
	{
		$url = "http://ajax.googleapis.com/ajax/services/language/translate?v=1.0&amp;q=".urlencode($s_text)."&amp;langpair=".urlencode($s_lang.'|'.$d_lang);
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL, $url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($c, CURLOPT_HEADER, 0);
		curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
		$b = curl_exec($c);
		echo "CE:".curl_error($c);
		curl_close($c);

		$json = json_decode($b, true);
		if ($json['responseStatus'] != 200)return false;
		return $json['responseData']['translatedText'];
	}

?>
