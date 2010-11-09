	<div class="wrapper">
		<div id="logo"><img src="images/logo.png" onclick="home()" alt="Logo" title="Warbirds Freehost"></div>
		<div id="wbfhcaption"><img src="images/wbfh.gif" onclick="home()" alt="Warbirds Freehost" title="Warbirds Freehost"></div>
		<div id="serverstate">
			<table>
				<tr style="color: #fff;"><td colspan="4"><a href="#">WBMEDRL2</a> | <a href="#">1942-05-01</a></td></tr>
				<tr><td>on-line &mdash;</td><td>
					<table><tr>
						<td class="count_red">7</td>
						<td class="red_vs_gold">vs</td>
						<td class="count_gold">5</td>
					</tr></table>
				</td></tr>
				<tr><td>wars won:</td><td>
					<table><tr>
						<td class="count_red">6</td>
						<td class="red_vs_gold">vs</td>
						<td class="count_gold">7</td>
					</tr></table>
				</td></tr>
			</table>
		</div>
		<div id="serveraddr">
			<table>
				<tr><td>Адрес сервера &mdash;</td></tr>
				<tr><td style="font-size: 16px; font-weight: 600; color: #550;">
<?php echo $server_ip; ?>
				</td></tr>
			</table>
		</div>
		<div id="langselect">
			<table>
				<tr><td>
<?php
	unset($lang_select);

	$i = 0;	

	if ($lang != 'ru') $lang_select[$i++] = "<a href='index.php?category=$category&section=$section&part=$part&lang=ru'>Russian</a>";
	if ($lang != 'en') $lang_select[$i++] = "<a href='index.php?category=$category&section=$section&part=$part&lang=en'>English</a>";
	if ($lang != 'de') $lang_select[$i++] = "<a href='index.php?category=$category&section=$section&part=$part&lang=de'>Deutsch</a>";
	if ($lang != 'pl') $lang_select[$i++] = "<a href='index.php?category=$category&section=$section&part=$part&lang=pl'>Polski</a>";
	if ($lang != 'pt') $lang_select[$i++] = "<a href='index.php?category=$category&section=$section&part=$part&lang=pt'>Portuquesa</a>";

	echo (implode('&nbsp;|&nbsp;', $lang_select));

 ?>
				</td></tr>
				<tr><td><img src="images/map_off.gif" alt="Навигация">
					<img src="images/home_on.gif" alt="На главную"></td></tr>
			</table>
		</div>
		<div id="aircraft"><img src="images/yak_9_3.png"></div>
	</div> <!--wrapper-->
