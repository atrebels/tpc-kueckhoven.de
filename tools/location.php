<?php
	// 1. Location gesetzt?
		// JA
			// Variablen setzen
			// location bereits in db eingetragen?
				//Ja
					// -
				//Nein
					// Trage ein
			// setze $seiten_id
		// Nein
			// 
	If (isset($location)) {
		require_once 'sql_connect.php';
		$table = "seiten";
		
		// Seite bereits in db vorhanden? Falls ja welche id? Falls nein trage ein!
		$query_exists_location = "SELECT id FROM $table WHERE seite = '$location';" ;
		$erg_exists_location = mysql_query($query_exists_location);
		$exists_location = mysql_fetch_array($erg_exists_location);
		if ($exists_location['id'] == NULL) {
			$query_insert_location = "INSERT INTO $table SET seite = '$location';";
			$erg_insert_location = mysql_query($query_insert_location);
			
			$erg_exists_location = mysql_query($query_exists_location);
			$exists_location = mysql_fetch_array($erg_exists_location);
		}
		$seiten_id = $exists_location['id'];
	}
?> 