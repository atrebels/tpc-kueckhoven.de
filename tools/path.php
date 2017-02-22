<?php
	// 1. Ist verbindungen_id und zeiten_id gesetzt?
		// Ja
		
		// Nein
		
		
		
	If (isset($verbindungen_id) AND isset($seiten_id)) {
	
		require_once 'sql_connect.php';
		$table = "pfade";
		$zeit = date("His" , time());
		
		
		$query_last_location = "SELECT seiten_id FROM ". $table
		." WHERE ". $table .".verbindungen_id = '$verbindungen_id'"
		." ORDER BY zeit DESC;";
		$erg_last_location = mysql_query($query_last_location);
		$last_location = mysql_fetch_array($erg_last_location);
		If ($last_location['seiten_id'] == NULL OR $last_location['seiten_id'] != $seiten_id) {
			$query_set_location = "INSERT INTO $table SET verbindungen_id = '$verbindungen_id', seiten_id = '$seiten_id', zeit = '$zeit';";
			$erg_set_location = mysql_query($query_set_location);
		}
	}

?> 