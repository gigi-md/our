<?php ?>

<form action="index.php" method="post">
	<input type="text" name="login" placeholder="login" />
	<input type="password" name="parola" placeholder="password" />
	<hr />
	<hr />
	<!-- Capcha -->
	<img src="capche.php" />
	<p>
		Introdu codul din imagine:
	</p>
	<input type="text" name="captcha" />
	<input type="submit" value="go" name="go" />
</form>

<?php
	
	session_start();
	if(isset($_POST['go'])) {
		if($_POST['captcha']==$_SESSION['captcha']) { echo "captcha works"; } else {
			echo "captcha nu se executa";
		}
	}
?>