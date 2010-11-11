	<div class="wrapper">
		<div id="logo"><a href="#"><img style="border: 0 none;" src="images/logo.png" alt="Logo" title="Warbirds Freehost"/></a></div>
		<div id="wbfhcaption"><a href="#"><img style="border: 0 none;" src="images/wbfh.gif" alt="Warbirds Freehost" title="Warbirds Freehost"/></a></div>
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
				<tr><td><?php trp('Server address'); ?> &mdash;</td></tr>
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

	echo (implode('&nbsp;|&nbsp;', $lang_select));

?>
	<br>

<?php
	unset($lang_select);

	$i = 0;	

	if ($lang != 'pl') $lang_select[$i++] = "<a href='index.php?category=$category&section=$section&part=$part&lang=pl'>Polski</a>";
	if ($lang != 'pt') $lang_select[$i++] = "<a href='index.php?category=$category&section=$section&part=$part&lang=pt'>Portuquesa</a>";
	if ($lang != 'tr') $lang_select[$i++] = "<a href='index.php?category=$category&section=$section&part=$part&lang=pt'>Turkish</a>";

	echo (implode('&nbsp;|&nbsp;', $lang_select));

 ?>
				</td></tr>
				<tr><td><img src="images/map_off.gif" alt="<?php trp('Navigation'); ?>" title="<?php trp('Navigation'); ?>">
					<img src="images/home_on.gif" alt="<?php trp('Main page'); ?>" title="<?php trp('Main page'); ?>"></td></tr>
			</table>
		</div>
		<div id="aircraft"><img src="images/yak_9_3.png"></div>
	</div> <!--wrapper-->
