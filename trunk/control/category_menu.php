	<div class="wrapper">
		<div id="category_sel">

<?php
	if (count($content_tree) != 0)
	{
		$first_cat = true;

		echo '			<ul class="h_menu">'."\n";
		foreach($content_tree as $cat_key => $cat_val)
		{
			if ($first_cat)
			{
				$cat_class = 'category_first_elem';
			}
			else
			{
				$cat_class = 'category_other_elem';
			}

			if ($cat_key == $category)
			{
				$cat_class .= " category_selected_elem";
			}

			echo "				<li class='$cat_class'>";

			$url = ContentToParams($content_tree[$cat_key]['']['']['content']);

			if ($cat_key != $category)
			{
				echo "<a href='$url'>";
				echo tr($content_tree[$cat_key]['']['']['caption'])."</a></li>\n";
			}
			else
			{
				echo tr($content_tree[$cat_key]['']['']['caption'])."</li>\n";
			}

			$first_cat = false;
		}
		echo "			</ul>\n";
	}
	unset($first_cat);
?>
		</div> <!--category_sel-->
		<div id="search_panel">
			<form method="get" action="http://google.com/search"><input id="search_input" name="q" type="text">
				<input type="hidden" name="hl" value="ru">
				<input type="hidden" name="sitesearch" value="wbfree.net">
				<input type="hidden" name="newwindow" value="1">
				<input type="hidden" name="aq" value="f">
				<input type="hidden" name="aqi" value="">
				<input type="hidden" name="aql" value="">
				<input type="hidden" name="oq" value="">
				<input type="hidden" name="gs_rfai" value="">
				<button id="search_button" type="submit" title="<?php trp('Search button'); ?>"><img src="images/search_ico.gif"></button>
			</form>
		</div> <!--search_panel-->
	</div> <!--wrapper-->
