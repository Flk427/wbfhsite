	<div class="wrapper">
		<div id="section_sel">

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
				echo "				<li class='$sect_class'>".$content_tree[$category][$sect_key]['']['caption']."</li>\n";
			}
			else
			{
				echo "				<li class='$sect_class'><a href='$url'>".$content_tree[$category][$sect_key]['']['caption']."</a></li>\n";
			}

			$first_sect = false;
		}
		echo "			</ul\n>";

		unset($first_sect);
	}
?>
<!--
			<ul class="h_menu">
				<li class="section_first_elem section_selected_elem">Что это такое?</li>
				<li class="section_other_elem"><a href="#">Как скачать и установить</a></li>
				<li class="section_other_elem"><a href="#">Как взлететь</a></li>
				<li class="section_other_elem"><a href="#">Управление</a></li>
				<li class="section_other_elem"><a href="#">Основные манёвры</a></li>
				<li class="section_other_elem"><a href="#">Основы тактики</a></li>
				<li class="section_other_elem"><a href="#">Самолёты</a></li>
				<li class="section_other_elem"><a href="#">Форум</a></li>
				<li class="section_other_elem"><a href="#">Эскадрильи</a></li>
				<li class="section_other_elem"><a href="#">FAQ</a></li>
-->
		</div> <!--section_sel-->
	</div> <!--wrapper-->
