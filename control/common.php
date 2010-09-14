<?php

	$category = $_GET['category'];
	$section = $_GET['section'];
	$part = $_GET['part'];

	if ($content_tree[$category][$section][$part]['content'] == '')
	{
		$category = $def_category;
		$section = $def_section;
		$part = $def_part;
	}

	$where_am_i = $content_tree[$category]['']['']['caption'];

	if ($section != '') 
	{
		$where_am_i .= ' :: '.$content_tree[$category][$section]['']['caption'];
		if ($part != '') 
		{
			$where_am_i .= ' :: '.$content_tree[$category][$section][$part]['caption'];
		}
	}
?>
