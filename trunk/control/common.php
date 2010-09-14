<?php

	// значения по умолчанию
	$category = $_GET['category'];
	$section = $_GET['section'];
	$part = $_GET['part'];

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
