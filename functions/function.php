<?php
   	defined("OUR_ENGINE") or die("FATAL SERVER ERROR");
	
	//echo "function <br />";
	
	//display arrays
	function print_arr($var){
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}
	
	//secured data
	function clear($var){
		$var = mysql_real_escape_string(strip_tags(trim($var)));
		return $var;
	}
	
	//redirect on same page
	function redirect($http = FALSE){
		if($http != FALSE) $redirect = $http;
		else $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
		header("Location: $redirect");
		exit; 
	}
	
	function urlName($name,$lang){
		$name = preg_replace("/[\s+\.\,]/", "-", $name);
		$name = preg_replace("/[\"\'\!\?\(\)\:\$\%\{\}\[\]\`]/", "", $name);
		$name = str_replace("/", "-", $name);
		
		//diferent language to latin
		if($lang =="ro"){
			$name = transRO($name);
		}elseif($lang == "ru"){
			$name = transRU($name);
		}
		
		
		return mysql_real_escape_string($name);
	}
	
	
	//russian to latin characters
	function transRU($name){
		static $trans= array(
		'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ж'=>'j', 'з'=>'z',
		'и'=>'i', 'й'=>'y', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p',
		'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'ы'=>'i', 'э'=>'e', 'А'=>'a',
		'Б'=>'b', 'В'=>'v', 'Г'=>'g', 'Д'=>'d', 'Е'=>'e', 'Ж'=>'j', 'З'=>'z', 'И'=>'i',
		'Й'=>'y', 'К'=>'k', 'Л'=>'l', 'М'=>'m', 'Н'=>'n', 'О'=>'o', 'П'=>'p', 'Р'=>'r',
		'С'=>'s', 'Т'=>'t', 'У'=>'u', 'Ф'=>'f', 'Ы'=>'i', 'Э'=>'e', 'ё'=>"yo", 'х'=>"h",
		'ц'=>"ts", 'ч'=>"ch", 'ш'=>"sh", 'щ'=>"shch", 'ъ'=>"", 'ь'=>"", 'ю'=>"yu", 'я'=>"ya",
		'Ё'=>"yo", 'Х'=>"h", 'Ц'=>"ts", 'Ч'=>"ch", 'Ш'=>"sh", 'Щ'=>"shch", 'Ъ'=>"", 'Ь'=>"",
		'Ю'=>"yu", 'Я'=>"ya", 'Ъ'=>"", 'Ь'=>""
		);
		
		return strtr($name, $trans);
	}
	
	//romanian to latin characters
	function transRO($name){
		static $trans= array(
		'ă'=>'a', 'î'=>'i', 'â'=>'i', 'ș'=>'s', 'ț'=>'t',
		'Ă'=>'a', 'Î'=>'i', 'Â'=>'i', 'Ș'=>'s', 'Ț'=>'t',
		);
		
		return strtolower(strtr($name, $trans));
	}
	
	//get view value for controller
	function getView($cpuurl){
		$params = array();
		$uri = $_SERVER['REQUEST_URI'];
		$uri = substr($uri, $cpuurl);
		$uri_array = array();
		$uri_array = explode("/", $uri);
		//creating view
		$params['view'] = $uri_array[0];
		if(isset($uri_array[1]) && trim($uri_array[1]) != ""){
			$uri_name = substr($uri_array[1], 0,-5);
			$uri_name_array = explode("-", $uri_name);
			$count_id_pos = (count($uri_name_array)-1);
			$uri_id_page = array();
			$uri_id_page = explode("_",$uri_name_array[$count_id_pos]);
			//creating id
			$params['id'] = $uri_id_page[0];
			if(isset($uri_id_page[1])){
				$params['page'] = $uri_id_page[1];
				
			}
		}
		return $params;
	}
	

?>