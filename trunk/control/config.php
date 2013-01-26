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
	// Значение <file> ('content') должно удовлетворять условию:
	// $content_tree['A']['B']['C']['content'] = 'A_B_C.html';
	// http://<URL> - внешний URL

	// TODO:
	// <file>[.<ext.>][#<ancor>] - файл в $content_path, позиция в файле <ancor>

	// главная страница (по умолчанию)
	$def_category = 'newbee';
	$def_section = 'about';
	$def_part = '';
	$def_lang = 'ru';

	$content_tree['newbee']['']['']['caption'] = 'Newcomers';
	$content_tree['newbee']['']['']['content'] = 'newbee_about.html';

	$content_tree['newbee']['about']['']['caption'] = 'About';
	$content_tree['newbee']['about']['']['content'] = 'newbee_about.html';
	$content_tree['newbee']['about']['']['nobr'] = '0';

	$content_tree['newbee']['about']['game']['caption'] = 'About the game';
	$content_tree['newbee']['about']['game']['content'] = 'newbee_about_game.html';

	$content_tree['newbee']['about']['server']['caption'] = 'About the server';
	$content_tree['newbee']['about']['server']['content'] = 'newbee_about_server.html';

	$content_tree['newbee']['about']['developers']['caption'] = 'Developers';
	$content_tree['newbee']['about']['developers']['content'] = 'newbee_about_developers.html';

	$content_tree['newbee']['about']['comunity']['caption'] = 'Community';
	$content_tree['newbee']['about']['comunity']['content'] = 'newbee_about_comunity.html';

	$content_tree['newbee']['download']['']['caption'] = 'How to download and install';
	$content_tree['newbee']['download']['']['content'] = 'newbee_download.html';

	$content_tree['newbee']['takeoff']['']['caption'] = 'Flight instruction';
	$content_tree['newbee']['takeoff']['']['content'] = 'newbee_takeoff.html';

	$content_tree['newbee']['controls']['']['caption'] = 'Controls';
	$content_tree['newbee']['controls']['']['content'] = 'newbee_controls.html';

	$content_tree['newbee']['maneuvers']['']['caption'] = 'Basic flight maneuvers';
	$content_tree['newbee']['maneuvers']['']['content'] = 'newbee_maneuvers.html';

	$content_tree['newbee']['tactics']['']['caption'] = 'Basic tactics';
	$content_tree['newbee']['tactics']['']['content'] = 'newbee_tactics.html';

	$content_tree['newbee']['aircrafts']['']['caption'] = 'Aircraft';
	$content_tree['newbee']['aircrafts']['']['content'] = 'newbee_aircrafts.html';

	$content_tree['newbee']['aircrafts']['rps-brief']['caption'] = 'RPS briefly';
	$content_tree['newbee']['aircrafts']['rps-brief']['content'] = 'http://personne.newmail.ru/FreeHost/rps-brief.htm';

	$content_tree['newbee']['aircrafts']['rps-detail']['caption'] = 'RPS detail';
	$content_tree['newbee']['aircrafts']['rps-detail']['content'] = 'http://personne.newmail.ru/FreeHost/rps-detail.htm';

	$content_tree['newbee']['forum']['']['caption'] = 'Forum';
	$content_tree['newbee']['forum']['']['content'] = 'http://forum.wbfree.net/';

	$content_tree['newbee']['squads']['']['caption'] = 'Squadrons';
	$content_tree['newbee']['squads']['']['content'] = 'newbee_squads.html';

	$content_tree['newbee']['faq']['']['caption'] = 'FAQ';
	$content_tree['newbee']['faq']['']['content'] = 'newbee_faq.html';

	$content_tree['newbee']['faq']['wb']['caption'] = 'What is Warbirds?';
	$content_tree['newbee']['faq']['wb']['content'] = 'newbee_faq_wb.html';
	$content_tree['newbee']['faq']['wb']['nobr'] = '1';

	$content_tree['newbee']['faq']['fh']['caption'] = 'What is FreeHost?';
	$content_tree['newbee']['faq']['fh']['content'] = 'newbee_faq_fh.html';
	$content_tree['newbee']['faq']['fh']['nobr'] = '1';

	$content_tree['players']['']['']['caption'] = 'Players';
	$content_tree['players']['']['']['content'] = 'players.html';

	$content_tree['veterans']['']['']['caption'] = 'Veterans';
	$content_tree['veterans']['']['']['content'] = 'veterans.html';
?>
