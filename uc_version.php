<?php

/*
	$HeadURL:  $
	$Revision: $
	$Author: $
	$Date: $
	$Id:  $
*/

//error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT ^ E_DEPRECATED);

require UC_ROOT.'./release/release.php';

$___ucenter_server___ = array();
$___ucenter_server___['PHP_SELF'] = htmlspecialchars($_SERVER['SCRIPT_NAME'] ? $_SERVER['SCRIPT_NAME'] : $_SERVER['PHP_SELF']);
$___ucenter_server___['basefilename'] = basename($___ucenter_server___['PHP_SELF'], '.php');

if ($___ucenter_server___['basefilename'] == 'avatar') {
	define('IN_UC', TRUE);
	define('UC_ROOT', dirname(__FILE__).'/');
	define('UC_DATADIR', UC_ROOT.'data/');
	define('UC_DATAURL', UC_API.'/data');
	define('MAGIC_QUOTES_GPC', get_magic_quotes_gpc());

	$mtime = explode(' ', microtime());
	$starttime = $mtime[1] + $mtime[0];
}

@require_once UC_ROOT.'./lib/hook_sc.php';
@include_once UC_ROOT.'./extensions/'.$___ucenter_server___['basefilename'].'_hooks.php';

?>