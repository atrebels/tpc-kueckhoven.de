<?php
	## Verbindung zur Datenbank aufbauen
	$db = mysql_connect('localhost','djsontour','F64EbPa1tka!9vGb!');
	if (!$db) {
		
		die("Verbindung fehlgeschlagen.<br/>" . mysql_error());
	}
	mysql_select_db('djsontour', $db);
?>
