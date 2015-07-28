<?php
    defined("OUR_ENGINE") or die("FATAL SERVER ERROR");
	
	//echo "config <br />";
	
	//prefix for db and talble name (ex. prefix_tblname)
	define("PREFIX","our_");
	
	//define secret key (ex. md5(secret.md5(sha1(password))))
	define("SECRET","tango00!@#$%");
	
	//base URL
	define("PATH","http://localhost/our_engine_final/");
	
	//functions
	define("FUNCTIONS","./functions/function.php");
	
	//model 
	define("MODEL","./model/model.php");
	
	//view
	define("VIEW","./view/index.php");
	
	//view directory
	define("VIEWDIR","view/");
	
	//view include directory
	define("VIEWINC","view/inc/");
	
	//view-images
	define("VIEWIMG", PATH."view/img/");
	
	
	//userfiles
	define("UF",PATH."userfiles/");
	
	
	//ajax
	define("AJ", "ajax/");
	
	//JS 
	define("OURJS","js/");
	
	//admin default URL
	define("PATH_ADM",PATH."wp_admin/");
	
	//define admin default catalog
	define("MAIN_ADM", "/wp_admin/");
	
	//project name, if no title for a page it will display this name
	define("PROJNAME","COFFEE");
	
	//CPU URL local or hosting
	$cpuurl = 18;
	
	//DB DETAILS
	
	//host
	define("DB_HOST","localhost");
	
	//user
	define("DB_USER","gigi");
	
	//password
	define("DB_PASSWORD","madacascar");
	
	//db name
	define("DB_NAME","our_engine_final");
	
	$connect = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("FATAL SERVER ERROR, COULD NOT CONNECT (DB)");
	$db = mysql_select_db(DB_NAME) or die("NO SUCH DB");
	$db_charset = mysql_query("SET NAMES 'UTF8'") or die ("CAN`T SET CHARSET");
?>