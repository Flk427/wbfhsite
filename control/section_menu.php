	<div class="wrapper">

<?php
	if (count($content_tree[$category]) != 0)
	{
		echo '			<ul class="h_menu">'."\n";

		$first_sect = true;

		foreach($content_tree[$category] as $sect_key => $sect_val)
		{
			if ($sect_key == '') continue;

			if ($first_sect)
			{
				$sect_class = "section_first_elem";
			}
			else
			{
				$sect_class = "section_other_elem";
			}

			$url = ContentToParams($content_tree[$category][$sect_key]['']['content']);

			if ($sect_key == $section)
			{
				$sect_class .= " section_selected_elem";
				echo "				<li class='$sect_class'>".tr($content_tree[$category][$sect_key]['']['caption'])."</li>\n";
			}
			else
			{
				echo "				<li class='$sect_class'><a href='$url'>".tr($content_tree[$category][$sect_key]['']['caption'])."</a></li>\n";
			}

			$first_sect = false;
		}
		echo "			</ul\n>";

		unset($first_sect);
	}
?>
	</div> <!--wrapper-->
