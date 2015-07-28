<?php
    define("OUR_ENGINE", TRUE);
	
	//connecting configuration file
	require_once '../config/config.php';
	
	//starting session
	session_start();
	
	if(!isset($_SESSION['WP_ODS_ADM_AUTH']['ADM_LOGIN'])){
		require_once 'wp_admin_login/index.php';
		exit;
	}
	//connecting function file
	header("Location: ".PATH_ADM."main/");
?>