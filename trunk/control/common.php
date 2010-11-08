<?php

	$category = $_GET['category'];
	$section = $_GET['section'];
	$part = $_GET['part'];

	$lang = $_GET['lang'];

	if ($lang == '')
	{
		$lang = $def_lang;
	}

	if ($content_tree[$category][$section][$part]['content'] == '')
	{
		$category = $def_category;
		$section = $def_section;
		$part = $def_part;
	}

	$where_am_i = $content_tree[$category]['']['']['caption'][$lang];

	if ($section != '') 
	{
		$where_am_i .= ' :: '.$content_tree[$category][$section]['']['caption'][$lang];
		if ($part != '') 
		{
			$where_am_i .= ' :: '.$content_tree[$category][$section][$part]['caption'][$lang];
		}
	}
?>
