<?php
	defined("OUR_ENGINE") or die("FATAL SERVER ERROR");
	
    //echo "controller <br />";
	
	//connecting configuration file
	require_once './config/config.php';
	
	//starting session
	session_start();
	
	//connectin function file
	require_once FUNCTIONS;
	
	//connectin model file (db function)
	require_once MODEL;
	
	
	//language
	$lang =isset($_COOKIE[PROJNAME.'_lang'])? $_COOKIE[PROJNAME.'_lang'] : "ro";
	
	//getting system inscripts
	$sys_insc = getSysInscript();
	
	//getting system messages
	$sys_mess = getSysMessages();
	
	//getting system redactable text areas
	$sys_text = getSysText();
	
	//echo $sys_insc['DONE'][$lang]."<br />";
	//echo $sys_mess['login_success'][$lang]."<br />";
	//echo $sys_text['moto'][$lang]."<br />";

	
	$params = getView($cpuurl);
	$view = empty($params['view']) ? 'main' : $params['view'];
	
		
	switch ($view) {
		case 'case':
			
			break;
		
		default:
			$view = "404";
			break;
	}
			
	//connectin views
	require_once VIEW;
?>