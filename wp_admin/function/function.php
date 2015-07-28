<?php
	defined("OUR_ENGINE") or die("FATAL SERVER ERROR, acces denied");
    //display arrays
	function print_arr($var){
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}
	
	//secured data
	function clear($var){
		$var = mysql_real_escape_string(trim($var));
		return $var;
	}
	
	//redirect on same page
	function redirect($http = FALSE){
		if($http != FALSE) $redirect = $http;
		else $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
		header("Location: $redirect");
		exit; 
	}
	
	
	
	//system retactable textes
	function getSysTextes(){
		$result = mysql_query("SELECT * FROM `ods_sys_text_redact`") or die(mysql_error());
		$data = array();
		while($row = mysql_fetch_assoc($result)){
			$data[] = $row;
		}
		
		return $data;
	}
	//system redactable text
	function getSysText($id){
		$result = mysql_query("SELECT * FROM `ods_sys_text_redact` WHERE `id`='$id'") or die(mysql_error());
		$data = mysql_fetch_assoc($result);
		return $data;
	}
	
	//edit system redactable text
	function editSysText($id){
		$ro = clear($_POST['ro']);
		$ru = clear($_POST['ru']);
		$en = clear($_POST['en']);
		$bg = clear($_POST['bg']);
		$ukr = clear($_POST['ukr']);
		$result = mysql_query("UPDATE `ods_sys_text_redact` SET `ro`='$ro', `ru`='$ru', `en`='$en', `bg`='$bg', `ukr`='$ukr' WHERE `id`='$id'") or die(mysql_error());
		if(mysql_affected_rows()>0 ){
			$_SESSION['answer'] = "<div class='success'>Redactat cu success</div>";
			return TRUE;
		}else{
			$_SESSION['answer'] = "<div class='error'>Erroare la redactare!</div>";
			return FALSE;
		}
	}
	
	//system inscriptions
	function getSysInscriptions(){
		$result = mysql_query("SELECT * FROM `ods_sys_inscript`") or die(mysql_error());
		$data = array();
		while($row = mysql_fetch_assoc($result)){
			$data[] = $row;
		}
		
		return $data;
	}
	//system text
	function getSysInscription($id){
		$result = mysql_query("SELECT * FROM `ods_sys_inscript` WHERE `id`='$id'") or die(mysql_error());
		$data = mysql_fetch_assoc($result);
		return $data;
	}
	
	//edit system message
	function editSysInscription($id){
		$ro = clear($_POST['ro']);
		$ru = clear($_POST['ru']);
		$en = clear($_POST['en']);
		$bg = clear($_POST['bg']);
		$ukr = clear($_POST['ukr']);
		$result = mysql_query("UPDATE `ods_sys_inscript` SET `ro`='$ro', `ru`='$ru', `en`='$en', `bg`='$bg', `ukr`='$ukr' WHERE `id`='$id'") or die(mysql_error());
		if(mysql_affected_rows()>0 ){
			$_SESSION['answer'] = "<div class='success'>Redactat cu success</div>";
			return TRUE;
		}else{
			$_SESSION['answer'] = "<div class='error'>Erroare la redactare!</div>";
			return FALSE;
		}
	}
	
	//system inscriptions
	function getSysConfigs(){
		$result = mysql_query("SELECT * FROM `ods_sys_config`") or die(mysql_error());
		$data = array();
		while($row = mysql_fetch_assoc($result)){
			$data[] = $row;
		}
		
		return $data;
	}
	//system text
	function getSysConfig($id){
		$result = mysql_query("SELECT * FROM `ods_sys_config` WHERE `id`='$id'") or die(mysql_error());
		$data = mysql_fetch_assoc($result);
		return $data;
	}
	
	//edit system message
	function editSysConfig($id){
		$conf = clear($_POST['conf']);
		$result = mysql_query("UPDATE `ods_sys_config` SET `conf`='$conf' WHERE `id`='$id'") or die(mysql_error());
		if(mysql_affected_rows()>0 ){
			$_SESSION['answer'] = "<div class='success'>Redactat cu success</div>";
			return TRUE;
		}else{
			$_SESSION['answer'] = "<div class='error'>Erroare la redactare!</div>";
			return FALSE;
		}
	}
	
?>