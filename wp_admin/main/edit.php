<?php
	 require_once "../inc/header.php"; 
	 defined("OUR_ENGINE") or die("FATAL SERVER ERROR< access denied");
	 require_once "../inc/leftbar.php"; 
	 
	 //localfunctions
	 //system message
	function getSysMessage($id){
		$result = mysql_query("SELECT * FROM `ods_sys_messages` WHERE `id`='$id'") or die(mysql_error());
		$data = mysql_fetch_assoc($result);
		return $data;
	}
	$id = (int)$_GET['id'];
	$data = getSysMessage($id);
	
	
	//edit system message function
	function editSysMess($id){
		$ro = clear($_POST['ro']);
		$ru = clear($_POST['ru']);
		$en = clear($_POST['en']);
		$bg = clear($_POST['bg']);
		$ukr = clear($_POST['ukr']);
		$result = mysql_query("UPDATE `ods_sys_messages` SET 
								`ro`='$ro', 
								`ru`='$ru', 
								`en`='$en', 
								`bg`='$bg', 
								`ukr`='$ukr' 
										WHERE `id`='$id'") or die(mysql_error());
		if(mysql_affected_rows()>0 ){
			$_SESSION['answer'] = "<div class='success'>Redactat cu success</div>";
			return TRUE;
		}else{
			$_SESSION['answer'] = "<div class='error'>Erroare la redactare!</div>";
			return FALSE;
		}
	}
	
	//edit sysmess
	if(isset($_POST['x'])){
		editSysMess($id);
		redirect();
	}
?>
<div class="content">
	<h2>Editează mesajede de Sistem</h2>
<?php if(isset($_SESSION['answer'])){ echo $_SESSION['answer']; unset($_SESSION['answer']);} ?>
<form action="" method="post" enctype="multipart/form-data">
				
	<table class="add_edit_page" cellspacing="0" cellpadding="0">
	  <tr>
		<td colspan="2">
			<textarea id="editor1" class="anons-text" name="ro">  <?php echo htmlspecialchars($data['ro'])?> </textarea>
<script type="text/javascript">
	CKEDITOR.replace( 'editor1' );
</script>
		</td>
	  </tr>
	  <tr>
		<td colspan="2">
			<textarea id="editor2" class="anons-text" name="ru">  <?php echo htmlspecialchars($data['ru'])?> </textarea>
<script type="text/javascript">
	CKEDITOR.replace( 'editor2' );
</script>
		</td>
	  </tr>
	  <tr>
		<td colspan="2">
			<textarea id="editor3" class="anons-text" name="en">  <?php echo htmlspecialchars($data['en'])?> </textarea>
<script type="text/javascript">
	CKEDITOR.replace( 'editor3' );
</script>
		</td>
	  </tr>
	  <tr>
		<td colspan="2">
			<textarea id="editor4" class="anons-text" name="bg">  <?php echo htmlspecialchars($data['bg'])?> </textarea>
<script type="text/javascript">
	CKEDITOR.replace( 'editor4' );
</script>
		</td>
	  </tr>
	   <tr>
		<td colspan="2">
			<textarea id="editor5" class="anons-text" name="ukr">  <?php echo htmlspecialchars($data['ukr'])?> </textarea>
<script type="text/javascript">
	CKEDITOR.replace( 'editor5' );
</script>
		</td>
	  </tr>
	</table>
	
	<input type="image" src="<?php echo PATH_ADM?>img/save_btn.jpg" /> 
</form>

</div> <!-- .content -->