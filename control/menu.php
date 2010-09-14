<?php

	if (count($content_tree[$category]) > 1)
	{
		echo "	<ul>\n";

		foreach ($content_tree[$category] as $cat_key => $cat_val)
		{
			if ($cat_key == '') continue;

			if ($cat_key == $section)
			{
				$tag_class = ' class="current"';
			}
			else
			{
				$tag_class = '';
			}

			echo "		<li$tag_class><h2>";

			$url = ContentToParams($content_tree[$category][$cat_key]['']['content']);

			echo '<a href="'. $url .'">';
			echo $content_tree[$category][$cat_key]['']['caption'];
			echo "</a></h2>\n";

			if ((count($cat_val) > 1) && ($cat_key == $section))
			{
				echo "			<ul>\n";

				foreach($cat_val as $sec_key => $sec_val)
				{
					if ($sec_key == '') continue;

					if ($sec_key == $part)
					{
						$tag_class = ' class="current"';
					}
					else
					{
						$tag_class = '';
					}

					echo "				<li$tag_class>";

					$url = ContentToParams($content_tree[$category][$cat_key][$sec_key]['content']);

					echo '<a href="'. $url .'">';
					echo $content_tree[$category][$cat_key][$sec_key]['caption'];
					echo "</a></li>\n";
				}

				echo "			</ul>\n";
			}
		}

		echo "		</li>\n";

		echo "	</ul>\n";
	}
?>
