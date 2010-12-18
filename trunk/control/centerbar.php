		<div id="centerbar">
			<div id="content">
	<?php
		// вывести файл
		// В случае возникновения ошибки вернёт FALSE, если только функция не была вызвана как @readfile(), и выведет сообщение об ошибке.

		//@readfile("$content_path/".$content_tree[$category][$section][$part]['content']);
		$content = @file_get_contents("$content_path/$lang/".$content_tree[$category][$section][$part]['content']);

		if (!$content && $lang != $def_lang)
		{
			$content = @file_get_contents("$content_path/$def_lang/".$content_tree[$category][$section][$part]['content']);
		}

		if ($content_tree[$category][$section][$part]['nobr'])
		{
			echo nl2br($content);
		}
		else
		{
			echo $content;
		}
	?>
			</div> <!--content-->

			<div id="links">
				<img src="images/links_ico.gif" style="float: left; margin: 12px 16px 12px 12px;">
				<div style="float: right; width: 360px; margin-right: 10px; padding: 14px 0 6px 0; border-bottom: 1px solid #888; font-size: 16px; font-weight: 600; color: #fff;"><?php trp('Links'); ?></div>
				<div style="float: left; width: 360px; height: 2px; background: url(images/bg_links.gif) repeat-x;"></div>
				<div class="link"><a href="#"><?php trp('Wikipedia'); ?></a></div>
				<div class="link"><a href="#"><?php trp('Scores'); ?></a></div>
				<div class="link"><a href="#"><?php trp('Speeds'); ?></a></div>
				<!--<div class="link"><a href="#">Другая ссылка</a></div>-->
			</div> <!--links-->
		</div> <!--centerbar-->
