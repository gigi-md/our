<?php
    defined("OUR_ENGINE") or die("FATAL SERVER ERROR");
	
	//echo "model <br />";
	
	//robots
	function robots($tbl_name,$title){
	 		$query = "SELECT `$title`, `meta_key`, `meta_desc` FROM `$tbl_name` ";
			$result = mysql_query($query) or die(mysql_error());
			$all_robots = mysql_fetch_assoc($result);
			$robots['title'] = $all_robots[$title];
			$robots['keywords'] = $all_robots[$key];
			$robots['description'] = $all_robots[$desc];
			return $robots;
	 	}
	
	//system inscriptions
	function getSysInscript(){
		$result = mysql_query("SELECT * FROM `ods_sys_inscript`") or die(mysql_error());
		$insc = array();
		while($row = mysql_fetch_assoc($result)){
			$insc[$row['alias']] = $row;
		}
		
		return $insc;
	}
	
	//system messages
	function getSysMessages(){
		$result = mysql_query("SELECT * FROM `ods_sys_messages`") or die(mysql_error());
		$mess = array();
		while($row = mysql_fetch_assoc($result)){
			$mess[$row['alias']] = $row;
		}
		
		return $mess;
	}
	
	//system redactalbe text area
	function getSysText(){
		$result = mysql_query("SELECT * FROM `ods_sys_text_redact`") or die(mysql_error());
		$text_redact = array();
		while($row = mysql_fetch_assoc($result)){
			$text_redact[$row['alias']] = $row;
		}
		
		return $text_redact;
	}
	
?>