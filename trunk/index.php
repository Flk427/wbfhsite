<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<?php @include('./control/config.php'); ?>
<?php @include('./control/common.php'); ?>

<html>

<head>
	<title>WarBirds FreeHost - FreeWare WWII Air Combat Simulator</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="description" content="Проект нового сайта бесплатного авиасимулятора WarBirds FreeHost">
	<meta name="keywords" content="WarBirds FreeHost simulator бесплатный free">

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.jcarousel.min.js"></script>

	<link type="text/css" rel="StyleSheet" href="default.css">
	<link rel="stylesheet" type="text/css" href="scripts/skins/wbfh/skin.css">
	<link type="text/css" rel="StyleSheet" href="wbfh.css">


<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        // Configuration goes here
        scroll: 1,
        wrap: "circular"
    });
});
</script>

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

<!-- <div id="bg"> -->

<div style="position: absolute; left: 50%;">
<?php
	echo "Php now!";
?>
</div>

<div id="wrapper">

<div id="header">
<?php @include('./control/header.php'); ?>
</div>
<!-- end header -->

<div id="page">

<div id="sidebar1" class="sidebar" style="padding-left:10px;">
	<?php @include('./control/menu.php'); ?>
</div> <!-- menu -->

<div id="sidebar2" class="sidebar" style="padding-left:10px;">
	<?php @include('./control/info.php'); ?>
</div><!-- info -->

<div class="post">
	<?php
		// вывести файл
		// В случае возникновения ошибки вернёт FALSE, если только функция не была вызвана как @readfile(), и выведет сообщение об ошибке.
		// TODO: readfile() -> @readfile()

		readfile("./content/newbee_about.html");
	?>
</div> <!-- post -->

<!-- <div style="clear:right;">&nbsp;</div> -->
<br clear="all"> <!-- IE6 hack -->

</div> <!-- page -->

<div id="footer">
	<div class="footerlinks">
		<ul>
			<li><a href="http://forum.wbfree.net/" title="Форум">Форум</a></li>
			<li>Ссылка на рейтинги</li>
			<li>Ссылка на википедию</li>
			<li>Ссылка на скорости</li>
		</ul>
	</div>
	&nbsp;
	<p>Designed with Free CSS Templates Blend theme</p>
</div>

</div><!-- wrapper - тело с л. и п. меню - wrapper -->

</body>
</html>
