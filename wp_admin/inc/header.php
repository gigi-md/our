<?php 
	define("OUR_ENGINE",TRUE);
	require_once "../../config/config.php" ;
	session_start();
	if(!isset($_SESSION['WP_ODS_ADM_AUTH']['ADM_LOGIN'])){
		header("Location: ".PATH_ADM);
		exit;
	}
	require_once "../function/function.php"; 
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<link rel="stylesheet" type="text/css" href="<?php echo PATH_ADM?>style/style.css" />
		<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE?>js/functions.js"></script>
		<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE?>js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE?>js/jquery-ui-1.8.22.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE?>js/jquery.cookie.js"></script>
		<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE?>js/workscripts.js"></script>
		<script type="text/javascript" src="<?php echo PATH_ADM?>/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE?>js/ajaxupload.js"></script>
<title>Lista Paginilor</title>
</head>

<body>
<div class="karkas">
	<div class="head">
		<a href="<?php echo PATH_ADM?>"><img src="<?php echo PATH_ADM?>img/logoAdm.jpg" /></a>
		<p><a href="<?php echo PATH?>" target="_blank">Pe Pagină</a> | <a href="?view=edit_user&amp;user_id=<?php echo $_SESSION['auth']['user_id']?>"><?php echo $_SESSION['WP_ODS_ADM_AUTH']['ADM_NAME']?></a> | <a href="?do=admin_logout"><strong>Ieșire</strong></a></p>
	</div> <!-- .head -->