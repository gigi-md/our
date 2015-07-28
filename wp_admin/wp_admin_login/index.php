<?php
     if(isset($_POST['login_btn'])){
		 $secret = "t%dff^sf&.@*%g%";
     	 $login = mysql_real_escape_string(strip_tags(trim($_POST['login'])));
		 $password = $_POST['password'];
		 $captcha = mysql_real_escape_string(strip_tags(trim($_POST['captcha'])));
		 
		 $error = "";
		 if($login == ""){
		 	$error .= "<div class='error'>Nu ați completat cînpul Login</div>";
		 }
		 if($password == ""){
		 	$error .= "<div class='error'>Nu ași completat cînpul Password</div>";
		 }
		 if($captcha == ""){
		 	$error .= "<div class='error'>Nu ași completat cînpul Introdu codul din imagine</div>";
		 }
		 if($captcha != $_SESSION['captcha']){
		 	$error .= "<div class='error'>A-ți greșit codul din imagine!</div>";
		 }
		 
		 if($error == ""){
		 	$password  = md5($secret.md5(sha1($password)));
			 
			 $result = mysql_query("SELECT * FROM `ods_user_admin` WHERE `login`='$login' AND `password` = '$password'") or die(mysql_error());
			 
			 if(mysql_num_rows($result) == 1){
			 	$log_details  = mysql_fetch_assoc($result);
				$_SESSION['WP_ODS_ADM_AUTH']['ADM_LOGIN'] = $log_details['login'];
				$_SESSION['WP_ODS_ADM_AUTH']['ADM_NAME'] = $log_details['name'];
				$_SESSION['WP_ODS_ADM_AUTH']['ADM_ROLE'] = $log_details['role'];
				return TRUE;
			 }else{
			 	$_SESSION['answer'] = "<div class='error'>A-ți greșit login și/sau password</div>";
				$redirect = $_SERVER['HTTP_REFERER'];
				header("Location: $redirect");
				exit;
			 }
		 }else{
		 	$_SESSION['answer'] = $error;
			$redirect = $_SERVER['HTTP_REFERER'];
			header("Location: $redirect");
			exit;
		 }
		
     }
?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Panul de administrare|autentificare</title>
		<meta name="description" content="">
		<meta name="author" content="Gigi">
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		<style>
			body{
				background-color: #F2F2F2;
				margin: 0;
				padding: 0;
			}
			
			.delim{
				background-color: #f2f2f2;
				width: 100%;
				height: 5px;
				border-radius: 3px;
			}
			
			#main{
				width: 100%;
				background-color: #fff;
				
			}
			
			header img{
				margin: 10px 20px;
			}
			
			
			#head_left{
				color: #356581;
				font-weight: bold;
				float: right;
				margin-right: 10px;
			}
			
			.clr{
				clear: both;
			}
			
			#login{
				text-align: center;
				margin: 20px 10px;
			}
			
			#login table{
				margin-left: auto;
				margin-right: auto;
				font: 15px "Trebuchet MS", Arial, Helvetica, sans-serif;
  				color: #545555;
			}
			
			#login input{
				border: 1px solid grey;
			}
			
			#login_btn{
				float: right;
				padding: 7px;
				width: 173px;
			}
		</style>
		
	</head>

	<body>
		<div id="main">
			<header>
				<img src="img/logoAdm.jpg" />
				<p id="head_left">
					Intrare în meniu de administrare
				</p>
			</header>
			<div class="clr"></div>
			<div class="delim"></div>

			<div id="login">
				<?php if(isset($_SESSION['answer'])) {echo $_SESSION['answer']; } ?>
				<table>
					<form action="#" method="post">
					<tr>
						<td>Login:</td>
						<td><input type="text" name="login" required="" /></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" required="" /></td>
					</tr>
					<tr>
						<td colspan="2"><img src="http://localhost/our_engine_final/wp_admin/wp_admin_login/captcha/capche.php" /></td>
					</tr>
					<tr>
						<td>Introdu codul din imagine:</td>
						<td><input type="text" name="captcha" required="" /></td>
					</tr>
					<tr>
						<td colspan="2"><input id="login_btn" type="submit" name="login_btn" value="intrare" /></td>
					</tr>
					</form>
				</table>
			</div>
			<?php 
				if(isset($_SESSION['answer']))$_SESSION['answer'] = ""; unset($_SESSION['answer']); 
				//if(isset($_SESSION['capcha']))$_SESSION['capcha'] = ""; unset($_SESSION['captcha']); 
			 ?>
			<footer>
				<p>
					&copy; Copyright  by Gigi
				</p>
			</footer>
		</div>
	</body>
</html>
