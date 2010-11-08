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
	$def_category = 'newbee';
	$def_section = 'about';
	$def_part = '';
	$def_lang = 'ru';

	$content_tree['newbee']['']['']['caption']['ru'] = 'Новичкам';
	$content_tree['newbee']['']['']['caption']['en'] = 'Newcomers';
	$content_tree['newbee']['']['']['content'] = 'newbee_about.html';

	$content_tree['newbee']['about']['']['caption']['ru'] = 'Что это такое?';
	$content_tree['newbee']['about']['']['caption']['en'] = 'What is this?';
	$content_tree['newbee']['about']['']['content'] = 'newbee_about.html';
	$content_tree['newbee']['about']['']['nobr'] = '0';

	$content_tree['newbee']['about']['game']['caption']['ru'] = 'Об игре';
	$content_tree['newbee']['about']['game']['caption']['en'] = 'Game';
	$content_tree['newbee']['about']['game']['content'] = 'newbee_about_game.html';

	$content_tree['newbee']['about']['server']['caption']['ru'] = 'О сервере';
	$content_tree['newbee']['about']['server']['caption']['en'] = 'Server ';
	$content_tree['newbee']['about']['server']['content'] = 'newbee_about_server.html';

	$content_tree['newbee']['about']['developers']['caption']['ru'] = 'Разработчики';
	$content_tree['newbee']['about']['developers']['content'] = 'newbee_about_developers.html';

	$content_tree['newbee']['about']['comunity']['caption']['ru'] = 'Сообщество';
	$content_tree['newbee']['about']['comunity']['content'] = 'newbee_about_comunity.html';

	$content_tree['newbee']['download']['']['caption']['ru'] = 'Как скачать и установить';
	$content_tree['newbee']['download']['']['content'] = 'newbee_download.html';

	$content_tree['newbee']['takeoff']['']['caption']['ru'] = 'Как взлететь';
	$content_tree['newbee']['takeoff']['']['content'] = 'newbee_takeoff.html';

	$content_tree['newbee']['controls']['']['caption']['ru'] = 'Управление';
	$content_tree['newbee']['controls']['']['content'] = 'newbee_controls.html';

	$content_tree['newbee']['manoeuvre']['']['caption']['ru'] = 'Основные манёвры';
	$content_tree['newbee']['manoeuvre']['']['content'] = 'newbee_manoeuvre.html';

	$content_tree['newbee']['tactics']['']['caption']['ru'] = 'Основы тактики';
	$content_tree['newbee']['tactics']['']['content'] = 'newbee_tactics.html';

	$content_tree['newbee']['aircrafts']['']['caption']['ru'] = 'Самолёты';
	$content_tree['newbee']['aircrafts']['']['content'] = 'newbee_aircrafts.html';

	$content_tree['newbee']['aircrafts']['rps-brief']['caption']['ru'] = 'RPS кратко';
	$content_tree['newbee']['aircrafts']['rps-brief']['content'] = 'http://personne.newmail.ru/FreeHost/rps-brief.htm';

	$content_tree['newbee']['aircrafts']['rps-detail']['caption']['ru'] = 'RPS подробно';
	$content_tree['newbee']['aircrafts']['rps-detail']['content'] = 'http://personne.newmail.ru/FreeHost/rps-detail.htm';

	$content_tree['newbee']['forum']['']['caption']['ru'] = 'Форум';
	$content_tree['newbee']['forum']['']['caption']['en'] = 'Forum';
	$content_tree['newbee']['forum']['']['content'] = 'http://forum.wbfree.net/';

	$content_tree['newbee']['squads']['']['caption']['ru'] = 'Эскадрильи';
	$content_tree['newbee']['squads']['']['content'] = 'newbee_squads.html';

	$content_tree['newbee']['faq']['']['caption']['ru'] = 'FAQ';
	$content_tree['newbee']['faq']['']['content'] = 'newbee_faq.html';

	$content_tree['newbee']['faq']['wb']['caption']['ru'] = 'Что такое Warbirds?';
	$content_tree['newbee']['faq']['wb']['content'] = 'newbee_faq_wb.html';
	$content_tree['newbee']['faq']['wb']['nobr'] = '1';

	$content_tree['newbee']['faq']['fh']['caption']['ru'] = 'Что такое FreeHost?';
	$content_tree['newbee']['faq']['fh']['content'] = 'newbee_faq_fh.html';
	$content_tree['newbee']['faq']['fh']['nobr'] = '1';

	$content_tree['players']['']['']['caption']['ru'] = 'Игрокам';
	$content_tree['players']['']['']['caption']['en'] = 'Players';
	$content_tree['players']['']['']['content'] = 'players.html';

	$content_tree['veteran']['']['']['caption']['ru'] = 'Ветеранам и активистам';
	$content_tree['veteran']['']['']['caption']['en'] = 'Veterans';
	$content_tree['veteran']['']['']['content'] = 'veteran.html';
?>
