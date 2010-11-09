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
	$content_tree['newbee']['']['']['caption']['de'] = 'Новичкам';
	$content_tree['newbee']['']['']['caption']['pl'] = 'Новичкам';
	$content_tree['newbee']['']['']['caption']['pt'] = 'Новичкам';
	$content_tree['newbee']['']['']['content'] = 'newbee_about.html';

	$content_tree['newbee']['about']['']['caption']['ru'] = 'Что это такое?';
	$content_tree['newbee']['about']['']['caption']['en'] = 'What is this?';
	$content_tree['newbee']['about']['']['caption']['de'] = 'Что это такое?';
	$content_tree['newbee']['about']['']['caption']['pl'] = 'Что это такое?';
	$content_tree['newbee']['about']['']['caption']['pt'] = 'Что это такое?';
	$content_tree['newbee']['about']['']['content'] = 'newbee_about.html';
	$content_tree['newbee']['about']['']['nobr'] = '0';

	$content_tree['newbee']['about']['game']['caption']['ru'] = 'Об игре';
	$content_tree['newbee']['about']['game']['caption']['en'] = 'Game';
	$content_tree['newbee']['about']['game']['caption']['de'] = 'Об игре';
	$content_tree['newbee']['about']['game']['caption']['pl'] = 'Об игре';
	$content_tree['newbee']['about']['game']['caption']['pt'] = 'Об игре';
	$content_tree['newbee']['about']['game']['content'] = 'newbee_about_game.html';

	$content_tree['newbee']['about']['server']['caption']['ru'] = 'О сервере';
	$content_tree['newbee']['about']['server']['caption']['en'] = 'Server ';
	$content_tree['newbee']['about']['server']['caption']['de'] = 'О сервере';
	$content_tree['newbee']['about']['server']['caption']['pl'] = 'О сервере';
	$content_tree['newbee']['about']['server']['caption']['pt'] = 'О сервере';
	$content_tree['newbee']['about']['server']['content'] = 'newbee_about_server.html';

	$content_tree['newbee']['about']['developers']['caption']['ru'] = 'Разработчики';
	$content_tree['newbee']['about']['developers']['caption']['en'] = 'Разработчики';
	$content_tree['newbee']['about']['developers']['caption']['de'] = 'Разработчики';
	$content_tree['newbee']['about']['developers']['caption']['pl'] = 'Разработчики';
	$content_tree['newbee']['about']['developers']['caption']['pt'] = 'Разработчики';
	$content_tree['newbee']['about']['developers']['content'] = 'newbee_about_developers.html';

	$content_tree['newbee']['about']['comunity']['caption']['ru'] = 'Сообщество';
	$content_tree['newbee']['about']['comunity']['caption']['en'] = 'Сообщество';
	$content_tree['newbee']['about']['comunity']['caption']['de'] = 'Сообщество';
	$content_tree['newbee']['about']['comunity']['caption']['pl'] = 'Сообщество';
	$content_tree['newbee']['about']['comunity']['caption']['pt'] = 'Сообщество';
	$content_tree['newbee']['about']['comunity']['content'] = 'newbee_about_comunity.html';

	$content_tree['newbee']['download']['']['caption']['ru'] = 'Как скачать и установить';
	$content_tree['newbee']['download']['']['caption']['en'] = 'Как скачать и установить';
	$content_tree['newbee']['download']['']['caption']['de'] = 'Как скачать и установить';
	$content_tree['newbee']['download']['']['caption']['pl'] = 'Как скачать и установить';
	$content_tree['newbee']['download']['']['caption']['pt'] = 'Как скачать и установить';
	$content_tree['newbee']['download']['']['content'] = 'newbee_download.html';

	$content_tree['newbee']['takeoff']['']['caption']['ru'] = 'Как взлететь';
	$content_tree['newbee']['takeoff']['']['caption']['en'] = 'Как взлететь';
	$content_tree['newbee']['takeoff']['']['caption']['de'] = 'Как взлететь';
	$content_tree['newbee']['takeoff']['']['caption']['pl'] = 'Как взлететь';
	$content_tree['newbee']['takeoff']['']['caption']['pt'] = 'Как взлететь';
	$content_tree['newbee']['takeoff']['']['content'] = 'newbee_takeoff.html';

	$content_tree['newbee']['controls']['']['caption']['ru'] = 'Управление';
	$content_tree['newbee']['controls']['']['caption']['en'] = 'Управление';
	$content_tree['newbee']['controls']['']['caption']['de'] = 'Управление';
	$content_tree['newbee']['controls']['']['caption']['pl'] = 'Управление';
	$content_tree['newbee']['controls']['']['caption']['pt'] = 'Управление';
	$content_tree['newbee']['controls']['']['content'] = 'newbee_controls.html';

	$content_tree['newbee']['manoeuvre']['']['caption']['ru'] = 'Основные манёвры';
	$content_tree['newbee']['manoeuvre']['']['caption']['en'] = 'Основные манёвры';
	$content_tree['newbee']['manoeuvre']['']['caption']['de'] = 'Основные манёвры';
	$content_tree['newbee']['manoeuvre']['']['caption']['pl'] = 'Основные манёвры';
	$content_tree['newbee']['manoeuvre']['']['caption']['pt'] = 'Основные манёвры';
	$content_tree['newbee']['manoeuvre']['']['content'] = 'newbee_manoeuvre.html';

	$content_tree['newbee']['tactics']['']['caption']['ru'] = 'Основы тактики';
	$content_tree['newbee']['tactics']['']['caption']['en'] = 'Основы тактики';
	$content_tree['newbee']['tactics']['']['caption']['de'] = 'Основы тактики';
	$content_tree['newbee']['tactics']['']['caption']['pl'] = 'Основы тактики';
	$content_tree['newbee']['tactics']['']['caption']['pt'] = 'Основы тактики';
	$content_tree['newbee']['tactics']['']['content'] = 'newbee_tactics.html';

	$content_tree['newbee']['aircrafts']['']['caption']['ru'] = 'Самолёты';
	$content_tree['newbee']['aircrafts']['']['caption']['en'] = 'Самолёты';
	$content_tree['newbee']['aircrafts']['']['caption']['de'] = 'Самолёты';
	$content_tree['newbee']['aircrafts']['']['caption']['pl'] = 'Самолёты';
	$content_tree['newbee']['aircrafts']['']['caption']['pt'] = 'Самолёты';
	$content_tree['newbee']['aircrafts']['']['content'] = 'newbee_aircrafts.html';

	$content_tree['newbee']['aircrafts']['rps-brief']['caption']['ru'] = 'RPS кратко';
	$content_tree['newbee']['aircrafts']['rps-brief']['caption']['en'] = 'RPS кратко';
	$content_tree['newbee']['aircrafts']['rps-brief']['caption']['de'] = 'RPS кратко';
	$content_tree['newbee']['aircrafts']['rps-brief']['caption']['pl'] = 'RPS кратко';
	$content_tree['newbee']['aircrafts']['rps-brief']['caption']['pt'] = 'RPS кратко';
	$content_tree['newbee']['aircrafts']['rps-brief']['content'] = 'http://personne.newmail.ru/FreeHost/rps-brief.htm';

	$content_tree['newbee']['aircrafts']['rps-detail']['caption']['ru'] = 'RPS подробно';
	$content_tree['newbee']['aircrafts']['rps-detail']['caption']['en'] = 'RPS подробно';
	$content_tree['newbee']['aircrafts']['rps-detail']['caption']['de'] = 'RPS подробно';
	$content_tree['newbee']['aircrafts']['rps-detail']['caption']['pl'] = 'RPS подробно';
	$content_tree['newbee']['aircrafts']['rps-detail']['caption']['pt'] = 'RPS подробно';
	$content_tree['newbee']['aircrafts']['rps-detail']['content'] = 'http://personne.newmail.ru/FreeHost/rps-detail.htm';

	$content_tree['newbee']['forum']['']['caption']['ru'] = 'Форум';
	$content_tree['newbee']['forum']['']['caption']['en'] = 'Forum';
	$content_tree['newbee']['forum']['']['caption']['de'] = 'Форум';
	$content_tree['newbee']['forum']['']['caption']['pl'] = 'Форум';
	$content_tree['newbee']['forum']['']['caption']['pt'] = 'Форум';
	$content_tree['newbee']['forum']['']['content'] = 'http://forum.wbfree.net/';

	$content_tree['newbee']['squads']['']['caption']['ru'] = 'Эскадрильи';
	$content_tree['newbee']['squads']['']['caption']['en'] = 'Эскадрильи';
	$content_tree['newbee']['squads']['']['caption']['de'] = 'Эскадрильи';
	$content_tree['newbee']['squads']['']['caption']['pl'] = 'Эскадрильи';
	$content_tree['newbee']['squads']['']['caption']['pt'] = 'Эскадрильи';
	$content_tree['newbee']['squads']['']['content'] = 'newbee_squads.html';

	$content_tree['newbee']['faq']['']['caption']['ru'] = 'FAQ';
	$content_tree['newbee']['faq']['']['caption']['en'] = 'FAQ';
	$content_tree['newbee']['faq']['']['caption']['de'] = 'FAQ';
	$content_tree['newbee']['faq']['']['caption']['pl'] = 'FAQ';
	$content_tree['newbee']['faq']['']['caption']['pt'] = 'FAQ';
	$content_tree['newbee']['faq']['']['content'] = 'newbee_faq.html';

	$content_tree['newbee']['faq']['wb']['caption']['ru'] = 'Что такое Warbirds?';
	$content_tree['newbee']['faq']['wb']['caption']['en'] = 'Что такое Warbirds?';
	$content_tree['newbee']['faq']['wb']['caption']['de'] = 'Что такое Warbirds?';
	$content_tree['newbee']['faq']['wb']['caption']['pl'] = 'Что такое Warbirds?';
	$content_tree['newbee']['faq']['wb']['caption']['pt'] = 'Что такое Warbirds?';
	$content_tree['newbee']['faq']['wb']['content'] = 'newbee_faq_wb.html';
	$content_tree['newbee']['faq']['wb']['nobr'] = '1';

	$content_tree['newbee']['faq']['fh']['caption']['ru'] = 'Что такое FreeHost?';
	$content_tree['newbee']['faq']['fh']['caption']['en'] = 'Что такое FreeHost?';
	$content_tree['newbee']['faq']['fh']['caption']['de'] = 'Что такое FreeHost?';
	$content_tree['newbee']['faq']['fh']['caption']['pl'] = 'Что такое FreeHost?';
	$content_tree['newbee']['faq']['fh']['caption']['pt'] = 'Что такое FreeHost?';
	$content_tree['newbee']['faq']['fh']['content'] = 'newbee_faq_fh.html';
	$content_tree['newbee']['faq']['fh']['nobr'] = '1';

	$content_tree['players']['']['']['caption']['ru'] = 'Игрокам';
	$content_tree['players']['']['']['caption']['en'] = 'Players';
	$content_tree['players']['']['']['caption']['de'] = 'Игрокам';
	$content_tree['players']['']['']['caption']['pl'] = 'Игрокам';
	$content_tree['players']['']['']['caption']['pt'] = 'Игрокам';
	$content_tree['players']['']['']['content'] = 'players.html';

	$content_tree['veteran']['']['']['caption']['ru'] = 'Ветеранам и активистам';
	$content_tree['veteran']['']['']['caption']['en'] = 'Veterans';
	$content_tree['veteran']['']['']['caption']['de'] = 'Ветеранам и активистам';
	$content_tree['veteran']['']['']['caption']['pl'] = 'Ветеранам и активистам';
	$content_tree['veteran']['']['']['caption']['pt'] = 'Ветеранам и активистам';
	$content_tree['veteran']['']['']['content'] = 'veteran.html';
?>
