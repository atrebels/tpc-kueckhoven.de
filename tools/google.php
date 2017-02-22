<?php
	// 1. Variablen setzen
	// 2. kommt benutzer von google?
		// Ja
			// Trage ein
		// Nein
			// Mache nichts
	if (isset($_SERVER['HTTP_REFERER'])) {
		$_ref = $_SERVER['HTTP_REFERER'];
		
		# Besucher kommt von Google	
		#if (eregi('google\.', $_ref) AND (isset($verbindungen_id))) {
		if (preg_match('/google\./UiS', $_ref) AND (isset($verbindungen_id))) {
			require_once 'sql_connect.php';
			$table = 'google';		
			

			$_ref .= '&';

			preg_match('/google\.(.*)\//Uis', $_ref, $_google['land']);
			preg_match('/q=(.*)&/UiS', $_ref, $_google['suchbegriff']);
			preg_match('/start=(.*)&/UiS', $_ref, $_google['start']); 
			preg_match('/num=(.*)&/Uis', $_ref, $_google['anzahl']);

			$_google['suchbegriff'][1] = urldecode($_google['suchbegriff'][1]);
			$tld = $_google['land'][1];
			$suchwort = $_google['suchbegriff'][1];
			if ($suchwort != "") {
				$insert_querry = 'INSERT INTO ' . $table . ' Set verbindungen_id = \'' . $verbindungen_id . '\', tld = \'' . $tld . '\', suchwort = \'' . $suchwort . '\';';
				$insert_ergebnis = mysql_query($insert_querry);
			}
		}
	}

?> 