<?php
	 require_once "../inc/header.php"; 
	 defined("OUR_ENGINE") or die("FATAL SERVER ERROR< access denied");
	 require_once "../inc/leftbar.php"; 
	 
	 //local functions
	 //getting system messages
	function getSysMessages(){
		$result = mysql_query("SELECT * FROM `ods_sys_inscript`") or die(mysql_error());
		$data = array();
		while($row = mysql_fetch_assoc($result)){
			$data[] = $row;
		}
		
		return $data;
	}
	$data = getSysMessages();
?>

<div class="content">
<h2>Mesajele de Sistem</h2>
<?php if(isset($_SESSION['answer'])) echo $_SESSION['answer']; unset($_SESSION['answer']); ?>
<table class="tabl" cellspacing="1">
	<tr>
		<th class="number">Nr.</th>
		<th class="str_name">Denumire</th>
		<th class="str_action">Acțiune</th>
	</tr>
			  
	<?php $a=0; foreach($data as $key): ?>
	<tr>
		<td><?php $a++; echo $a; ?></td>
		<td class="name_page">
			<div>ro: <?=$key['ro']?></div>
			<div>ro: <?=$key['ru']?></div>
		</td>
		<td>
			<a href="edit.php?id=<?=$key['id'] ?>"><img src="<?=PATH_ADM?>img/edit.jpg" alt="editeaza" class="edit_icon" /></a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
</div>
<?php require_once "../inc/footer.php";  ?>