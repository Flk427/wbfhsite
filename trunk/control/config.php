<?php

	$_GET['category'] = 'newbee';
	$_GET['section'] = 'about';
	$_GET['part'] = 'game';

	unset($content_tree);

	/////////////////////////////////////////////////////////////////
	// расположение содержимого страниц
	$content_path = './content';

	/////////////////////////////////////////////////////////////////
	// ip фрихоста
	$server_ip = '87.212.235.21';

	/////////////////////////////////////////////////////////////////
	//структура сайта

	// TODO:
	// Формат содержимого поля 'content':
	// <file>[.<ext.>] - файл в $content_path
	// <file>[.<ext.>][#<ancor>] - файл в $content_path, позиция в файле <ancor>
	// http://<URL> - внешний URL

	// главная страница (по умолчанию)
	$content_tree['']['']['']['caption'] = 'Новичкам';
	$content_tree['']['']['']['content'] = 'newbee_about.html';

	$content_tree['newbee']['']['']['caption'] = 'Новичкам';
	$content_tree['newbee']['']['']['content'] = 'newbee_about.html';

	$content_tree['newbee']['about']['']['caption'] = 'Что это такое?';
	$content_tree['newbee']['about']['']['content'] = 'newbee_about.html';

	$content_tree['newbee']['about']['game']['caption'] = 'Об игре';
	$content_tree['newbee']['about']['game']['content'] = 'newbee_about_game.html';

	$content_tree['newbee']['about']['server']['caption'] = 'О сервере';
	$content_tree['newbee']['about']['server']['content'] = 'newbee_about_server.html';

	$content_tree['newbee']['about']['developers']['caption'] = 'Разработчики';
	$content_tree['newbee']['about']['developers']['content'] = 'newbee_about_developers.html';

	$content_tree['newbee']['about']['comunity']['caption'] = 'Сообщество';
	$content_tree['newbee']['about']['comunity']['content'] = 'newbee_about_comunity.html';

	$content_tree['newbee']['download']['']['caption'] = 'Как скачать и установить';
	$content_tree['newbee']['download']['']['content'] = 'newbee_download.html';

	$content_tree['newbee']['takeoff']['']['caption'] = 'Как взлететь';
	$content_tree['newbee']['takeoff']['']['content'] = 'newbee_takeoff.html';

	$content_tree['newbee']['controls']['']['caption'] = 'Управление';
	$content_tree['newbee']['controls']['']['content'] = 'newbee_controls.html';

	$content_tree['newbee']['manoeuvre']['']['caption'] = 'Основные манёвры';
	$content_tree['newbee']['manoeuvre']['']['content'] = 'newbee_manoeuvre.html';

	$content_tree['newbee']['tactics']['']['caption'] = 'Основы тактики';
	$content_tree['newbee']['tactics']['']['content'] = 'newbee_tactics.html';

	$content_tree['newbee']['aircrafts']['']['caption'] = 'Самолёты';
	$content_tree['newbee']['aircrafts']['']['content'] = 'newbee_aircrafts.html';

	$content_tree['newbee']['forum']['']['caption'] = 'Форум';
	$content_tree['newbee']['forum']['']['content'] = 'newbee_forum.html';

	$content_tree['newbee']['squads']['']['caption'] = 'Эскадрильи';
	$content_tree['newbee']['squads']['']['content'] = 'newbee_squads.html';

	$content_tree['newbee']['faq']['']['caption'] = 'FAQ';
	$content_tree['newbee']['faq']['']['content'] = 'newbee_faq.html';

?>
