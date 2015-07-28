<!DOCTYPE html>
<html lang="<?php if(isset($lang)) echo $lang; ?>">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if(isset($robots['title'])) echo $robots['title']; else echo PROJNAME;  ?></title>
		<meta name="description" content="<?php if(isset($robots['description'])) echo $robots['description']; ?>">
		<meta name="keywords" content="<?php if(isset($robots['keywords'])) echo $robots['keywords'];?>">
		<meta name="author" content="Gigi">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		<!--stye-->
		<link rel="stylesheet" type="text/css" href="<?=PATH.VIEWDIR."styles/"?>style.css">
		
		<!--scripts-->
		<script src="<?=PATH.OURJS?>jquery-2.1.4.min.js"></script>
		<script src="<?=PATH.OURJS?>workscripts.js"></script>
	</head>

	<body>
	