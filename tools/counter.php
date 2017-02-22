<?php
	// 1. Setzen der Variablen
	// 2. Überprüfen ob der Eintrag bereits existiert
		// Er existiert
			// nichts machen
		// Er existiert nicht
			// Überprüfen ob der Browser bereits existiert
				// Er exisitert
					// id rausholen
				//	Er existiert nicht
					// eintragen
					// id rausholen
			// Eintrag eintragen
	//3. $verbindungen_id setzen

	require_once 'sql_connect.php';
	$table = "verbindungen";
	$subtable1 = "browser";
 
	$heute =			date("Ymd" , time());
	$browser = 			$_SERVER['HTTP_USER_AGENT'];
	$ip_adresse = 		$_SERVER['REMOTE_ADDR'];
		
	
	$query_exists_counterentry = "SELECT ". $table .".id As id FROM ". $table .", ".$subtable1 
								." WHERE ". $table .".datum = '$heute'" 
								." AND ". $table .".ip_adresse = '$ip_adresse'"
								." AND ". $subtable1 .".browser = '$browser'"
								." AND ". $table .".browser_id = ". $subtable1 .".id;";
	$erg_exists_counterentry = mysql_query($query_exists_counterentry);
	$exists_counterentry = mysql_fetch_array($erg_exists_counterentry);
	
	if ($exists_counterentry['id'] == NULL) {
	
		$query_exists_browserentry = "SELECT id FROM ". $subtable1 ." WHERE browser = '$browser';";
		$erg_exists_browserentry = mysql_query($query_exists_browserentry);
		$exists_browserentry = mysql_fetch_array($erg_exists_browserentry);
		
		if ($exists_browserentry['id'] == NULL) {
			
			$query_insert_browserentry = "INSERT INTO ". $subtable1 ." SET browser = '$browser';";
			$erg_insert_browserentry = mysql_query($query_insert_browserentry);
			
			$erg_exists_browserentry = mysql_query($query_exists_browserentry);
			$exists_browserentry = mysql_fetch_array($erg_exists_browserentry);
		}
		$browser_id = $exists_browserentry['id'];
		
		$query_insert_counterentry = "Insert into ". $table ." SET ip_adresse = '$ip_adresse', datum = '$heute', browser_id = '$browser_id';";
		$erg_insert_counterentry = mysql_query($query_insert_counterentry);
		
		$erg_exists_counterentry = mysql_query($query_exists_counterentry);
		$exists_counterentry = mysql_fetch_array($erg_exists_counterentry);
	}
	$verbindungen_id = $exists_counterentry['id'];
	
?> 