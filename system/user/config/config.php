<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['is_system_on'] = 'y';
$config['multiple_sites_enabled'] = 'n';
$config['show_ee_news'] = 'n';
$config['save_tmpl_files'] = 'y';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '5.2.0';
$config['encryption_key'] = 'bedb72dd566952de088847b5d6dba05cba9e78db';
$config['session_crypt_key'] = '24b86d4333dde8a0a9fd3fb4ff1157a5ba7c618c';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => '127.0.0.1',
		'database' => 'ee',
		'username' => 'eeuser',
		'password' => 'password',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);
$config['share_analytics'] = 'y';

// EOF