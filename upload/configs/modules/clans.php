<?php
$cfg = array (
	'MOD_ENABLE' => true, 
	'MOD_TITLE' => 'Кланы (Free)',
	'MOD_DESC' => 'Кланы с ваших серверов на сайте.',
	'MOD_AUTHOR' => 'CWARWIK',
	'MOD_SITE' => 'http://development.abagail.me/webmcr/clans',
	'MOD_EMAIL' => 'ilya.bnck@gmail.com',
	'MOD_VERSION' => '1.0.0',
	'MOD_URL_UPDATE' => 'https://github.com/cwarwik/WebMCR-Reloaded-Clans',
	'MOD_CHECK_UPDATE' => false,
	'PAGINATION' => 10,
	'MOD_SETTING' => array (
		'PLUGIN' => 'simpleclans',
		'TABLE_CLANS' => 'sc_clans',
		'TABLE_PLAYERS' => 'sc_players',
		'TABLE_KILLS' => 'sc_kills', // Будет использоваться в v1.0.1
	)
);
?>