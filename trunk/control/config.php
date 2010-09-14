<?php

	/////////////////////////////////////////////////////////////////
	// расположение содержимого страниц
	$content_path = './content';

	/////////////////////////////////////////////////////////////////
	// ip фрихоста
	$server_ip = '89.108.124.170';

	/////////////////////////////////////////////////////////////////
	//структура сайта

	// Формат содержимого поля 'content':
	// <file>[.<ext.>] - файл в $content_path
	// http://<URL> - внешний URL

	// TODO:
	// <file>[.<ext.>][#<ancor>] - файл в $content_path, позиция в файле <ancor>

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

	$content_tree['newbee']['aircrafts']['rps-brief']['caption'] = 'RPS кратко';
	$content_tree['newbee']['aircrafts']['rps-brief']['content'] = 'http://personne.newmail.ru/FreeHost/rps-brief.htm';

	$content_tree['newbee']['aircrafts']['rps-detail']['caption'] = 'RPS подробно';
	$content_tree['newbee']['aircrafts']['rps-detail']['content'] = 'http://personne.newmail.ru/FreeHost/rps-detail.htm';

	$content_tree['newbee']['forum']['']['caption'] = 'Форум';
	$content_tree['newbee']['forum']['']['content'] = 'newbee_forum.html';

	$content_tree['newbee']['squads']['']['caption'] = 'Эскадрильи';
	$content_tree['newbee']['squads']['']['content'] = 'newbee_squads.html';

	$content_tree['newbee']['faq']['']['caption'] = 'FAQ';
	$content_tree['newbee']['faq']['']['content'] = 'newbee_faq.html';

	$content_tree['newbee']['faq']['wb']['caption'] = 'Что такое Warbirds?';
	$content_tree['newbee']['faq']['wb']['content'] = 'newbee_faq_wb.html';

	$content_tree['newbee']['faq']['fh']['caption'] = 'Что такое FreeHost?';
	$content_tree['newbee']['faq']['fh']['content'] = 'newbee_faq_fh.html';

?>
