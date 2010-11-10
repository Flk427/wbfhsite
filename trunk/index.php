<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<?php
	require_once('./control/init.php');
	require_once('./control/config.php');
	require_once('./control/common.php');
	require_once('./control/functions.php');
?>

<html>

<head>
	<title>WarBirds FreeHost - FreeWare WWII Air Combat Simulator - <?php echo $where_am_i;?>
	</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="description" content="Проект нового сайта бесплатного авиасимулятора WarBirds FreeHost">
	<meta name="keywords" content="WarBirds FreeHost war birds free host simulator бесплатный симулятор">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link type="text/css" rel="StyleSheet" href="wbfh.css">
	<link type="text/css" rel="StyleSheet" href="lightbox.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	<!--<script type="text/javascript" src="scripts/jquery-1.4.2.min.js"></script>-->
	<script type="text/javascript" src="scripts/wbfh.js"></script>
	<script type="text/javascript" src="scripts/lightbox.js"></script>
	<script type="text/javascript" src="scripts/jquery.jcarousel.min.js"></script>

	<link rel="stylesheet" type="text/css" href="scripts/skins/wbfh/skin.css">

<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-3557915-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
</head>

<body>

<div id="header">
	<?php require_once('./control/header.php'); ?>
</div><!--header-->

<div id="category_menu">
	<?php require_once('./control/category_menu.php'); ?>
</div> <!--category_menu-->

<div id="section_menu">
	<?php require_once('./control/section_menu.php'); ?>
</div> <!--section_menu-->

<div id="dl_and_shots">
	<div class="wrapper">
		<div id="download">
			<table>
				<tr><td style="font-size: 28px; line-height: 28px; padding-top: 15px;">War<span style="font-weight: 600;">Birds & FHL</span></td></tr>
				<tr><td style="font-size: 14px; padding-bottom: 4px;">Полная сборка</span></td></tr>
				<tr><td class="about"><span class="about_caption">Разработчик:</span> <span class="about_value">iEntertainment Network</span></span></td></tr>
				<tr><td class="about"><span class="about_caption">Издатель:</span> <span class="about_value">Atari</span></td></tr>
				<tr><td class="about"><span class="about_caption">Год выпуска:</span> <span class="about_value">2001</span></td></tr>
				<tr><td class="about"><span class="about_caption">Жанр:</span> <span class="about_value">Авиасимуляторы</span></td></tr>
				<tr><td class="about"><span class="about_caption">Платформа:</span> <span class="about_value">Windows, все версии</span></td></tr>
				<tr><td class="about"><span class="about_caption">Размер:</span> <span class="about_value">50 Мб</span></td></tr>
				<tr><td style="padding-top: 15px;"><img onclick="downloadClick()" style="cursor:pointer;" src="images/download_button.gif" alt="Скачать бесплатно." title="Скачать бесплатно."/></td></tr>
			</table>
		</div> <!--download-->
		<div id="shots">
			<table>
			<tr><td style="padding: 15px 0;">Скриншоты игры</td></tr>
			<tr><td>
				<ul id="wbcarousel" class="jcarousel-skin-tango">
				<li>
					<div><a rel="lightbox" title="ФАУ-1 в полёте" href="images/shots/Scr0000-0.jpg"><img style="border: 0px none;" src="images/shots/thumbs/Scr0000-0-thumb.jpg"/></a></div>
				</li>
				<li>
					<div><a rel="lightbox" title="ФАУ-1 в полёте" href="images/shots/Scr0000-0.jpg"><img style="border: 0px none;" src="images/shots/thumbs/Scr0000-0-thumb.jpg"/></a></div>
				</li>
				<li>
					<div><a rel="lightbox" title="ФАУ-1 в полёте" href="images/shots/Scr0000-0.jpg"><img style="border: 0px none;" src="images/shots/thumbs/Scr0000-0-thumb.jpg"/></a></div>
				</li>
				<li>
					<div><a rel="lightbox" title="ФАУ-1 в полёте" href="images/shots/Scr0000-0.jpg"><img style="border: 0px none;" src="images/shots/thumbs/Scr0000-0-thumb.jpg"/></a></div>
				</li>
				<li>
					<div><a rel="lightbox" title="ФАУ-1 в полёте" href="images/shots/Scr0000-0.jpg"><img style="border: 0px none;" src="images/shots/thumbs/Scr0000-0-thumb.jpg"/></a></div>
				</li>
				</ul>
			</td></tr>
			</table>
		</div> <!--shots-->
	</div> <!--wrapper-->
</div> <!--dl_and_shots-->

<div id="main">
	<div class="wrapper">
	<?php require_once('./control/leftbar.php'); ?>
	<?php require_once('./control/centerbar.php'); ?>
	<?php require_once('./control/rightbar.php'); ?>
	</div> <!--wrapper-->

<br clear="all"> <!-- IE6 hack -->

</div> <!--main-->

<div id="footer">
	<div class="wrapper">
		<div id="design_info">
			<img src="images/ames_design_logo.gif" style="float: left; margin-right: 10px;">
			дизайн - <a href="http://www.ames.am/">AMES Design</a>
		</div>
		<div id="copyright">
			&copy; 2010 Warbirds Freehost. Все права защищены.
		</div>
	</div> <!--wrapper-->
</div> <!--footer-->

</body>
</html>

