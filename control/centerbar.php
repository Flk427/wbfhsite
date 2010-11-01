		<div id="centerbar">
			<div id="content">
<!--
<h1>WarBirds FreeHost - это бесплатный Online авиаcимулятор</h1>

<p>Игра на тему второй мировой войны, в которой вам позволено стать пилотом одного из истребителей или бомбардировщиков основных стран-участниц второй мировой войны (WWII).</p>
<p>В отличие от уже давно существующих игр эта игра завоевала популярность тем, что бои в небе происходят в онлайн (через Интернет) и воевать вам придется с реальными, живыми противниками.</p>
<p>Вы можете <a href="#">скачать</a> её с этого сайта и потратив совсем немного времени на <a href="#">настройку</a> ринуться в воздушный бой!</p>
-->

	<?php
		// вывести файл
		// В случае возникновения ошибки вернёт FALSE, если только функция не была вызвана как @readfile(), и выведет сообщение об ошибке.

		//@readfile("$content_path/".$content_tree[$category][$section][$part]['content']);
		$content = file_get_contents("$content_path/".$content_tree[$category][$section][$part]['content']);

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

			<div id="links" style="margin-top: 30px; height: 117px; background: url(images/bg_links.gif) repeat-x;">
				<img src="images/links_ico.gif" style="float: left; margin: 12px 16px 12px 12px;">
				<div style="float: right; width: 370px; margin-right: 10px; padding: 14px 0 6px 0; border-bottom: 1px solid #888; font-size: 16px; font-weight: 600; color: #fff;">Ссылки</div>
				<div style="float: left; width: 190px; padding-top: 6px; border-top: 1px solid #ddd;"><a style="color: #fff;" href="#">Ссылка на википедию</a></div>
				<div style="float: left; width: 180px; margin-right: 10px; padding-top: 6px; border-top: 1px solid #ddd;"><a style="color: #fff;" href="#">Ссылка на рейтинги</a></div>
				<div style="float: left; width: 190px; margin-top: 4px;"><a style="color: #fff;" href="#">Ссылка на скорости</a></div>
				<div style="float: left; width: 180px; margin-right: 10px; margin-top: 4px;"><a style="color: #fff;" href="#">Другая ссылка</a></div>
			</div> <!--links-->
		</div> <!--centerbar-->
