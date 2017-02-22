<?php
session_start();

$location = $_SERVER['PHP_SELF'];
#$empfaenger =	"Trebels.Andre@djsontour.net";
#$empfaenger =	"webmaster@djsontour.net";
#$empfaenger =	"Trebels.Andre@djsontour.net, Eggerath.Christian@djsontour.net";
$datum_akt =	date("d.m.Y" , time());
$betreff =		"DJs On Tour - Kontakt - " . $datum_akt;
$browser = 		$_SERVER['HTTP_USER_AGENT'];
$ip_adresse = 	$_SERVER['REMOTE_ADDR'];
$remoteport = 	$_SERVER['REMOTE_PORT'];
$vorname = 		$_POST['vorname'];
$zuname =		$_POST['zuname'];
$anschrift =	$_POST['anschrift'];
$plz =			$_POST['plz'];
$ort =			$_POST['ort'];
$event = 		$_POST['event'];
$datum =		$_POST['datum'];
$personenzahl =	$_POST['personenzahl'];
$email =		$_POST['email'];
$telefon =		$_POST['telefon'];
$kennen_durch =	$_POST['kennen_durch'];

$kontakt_aufgerufen = $_POST['timestamp'];
$css_spamcheck = $_POST['info'];
$javascript_spamcheck = $_POST['javascript'];

$timestamp = date("His", time());
$error = false;

$user_eingabe =	str_replace("\n", "<br/>", $_POST['user_eingabe']);

/*Anti Spam Maßnamen:
1. Es wird das Datum beim Aufruf von Kontakt.php mit dem Datum beim Aufruf von Bestaetigung.php verglichen
	Die Eingabezeit muss mindestens 10 sekunden betragen!
	Die Eingabezeit darf nicht leer sein!
2. Es wird ein mit CSS ausgeblendetes Feld versendet, welches leer sein/bleiben muss!
3. Refresh/erneutes absenden nur alle 20 sekunden möglich
4. Ein mit Javascript ausgefülltes Feld muss gleich der Kontaktzeit sein (Java script  muss aktiviert sein)
 */
 
// 1. Zeit zwischen Kontakt und Bestaetigung

if (!isset($kontakt_aufgerufen)){
	$error = true;
}
if ($kontakt_aufgerufen > ($timestamp-10)){
	$error = true;
}
// 2. CSS Field leer?
if ($css_spamcheck != ''){
	$error = true;
}


// 3. Refresh Vorbeugung (20sekunden)
if (isset($_SESSION['bestaetigungs_time'])){
	if ($_SESSION['bestaetigungs_time'] > ($timestamp-20)){
		$error = true;
	}
}
$_SESSION['bestaetigungs_time'] = $timestamp;

// 4. Javasript test
If ($kontakt_aufgerufen != $javascript_spamcheck) {
	$error = true;
}




// Spam Vorbeugung
#ran
if ($ip_adresse == "137.226.255.11"){
	$error = true;
}
#osx-edv
if ($ip_adresse == "137.226.254.215"){
	$error = true;
}



if (!$error){
$header  =		"MIME-Version: 1.0\r\n";
$header .= 	"Content-type: text/html; charset=iso-8859-1\r\n";
$header .= 	"From: kontakt@djsontour.net\r\n";
$header .= 	"Reply-To: " . $empfaenger . "\r\n";
#$header .=		"CC: " . "cc@example.com" . "\r\n";
#$header .=		"BCC: " . "bcc@example.com" . "\r\n";
$header .=		"X-Mailer: PHP/" . phpversion();

$nachricht = " 
<html>
	<body>
		Folgende Daten wurden übermittelt:<br/><br/>
		<table cellpadding='2'>
			<tr><td>Vorname:</td><td> " . $vorname . "</td></tr>
			<tr><td>Zuname:</td><td> " . $zuname . "</td></tr>
			<tr valign='top'><td>Anschrift:</td><td> " . $anschrift . "<br/>" . $plz . " " . $ort . "</td></tr>
			<tr><td>Event:</td><td> " . $event . "</td></tr>
			<tr><td>Datum:</td><td> " . $datum . "</td></tr>
			<tr><td>Personenzahl:</td><td> " . $personenzahl . "</td></tr>
			<tr><td>Email:</td><td> " . $email . "</td></tr>
			<tr><td>Telefon:</td><td> " . $telefon . "</td></tr>
			<tr><td>Kennen durch:</td><td> " . $kennen_durch . "</td></tr>
			<tr valign='top'><td>Benutzereingabe:</td><td> " . $user_eingabe . "</td></tr>
		</table><br/><br/>
		Daten zum Nutzer:
		<table>
			<tr><td>Browser:</td><td> " . $browser . "</td></tr>
			<tr><td>IP Adresse:</td><td> " . $ip_adresse . "</td></tr>
			<tr><td>Port:</td><td> " . $remoteport . "</td></tr>
			<tr><td>Timestamp:</td><td> " . date("d.m.Y - H:i:s" , time()) . "</td></tr>
		</table>
		<br/><br/><br/><br/>
		Diese Email wurde Automatisch generiert! Bitte Antworten Sie nicht auf diese Email Adresse.
	</body>
</html>";

$result = mail($empfaenger, $betreff, $nachricht, $header);
} else {
$result=false;
}


			
		if ($result) {
			echo"
			<center><b1>Vielen Dank. Ihre Anfrage wurde erfolgreich versendet!</br>
			Sie erhalten in Kürze eine Antwort</b1></br></br>
			<a href='http://www.djsontour.net'><l1>Sofern Sie nicht automatisch weitergeleitet werden, klicken Sie <blau>hier</blau></l1></a>";
		} else {
			echo"
			<center><b1> Leider ist ein Fehler aufgetreten!</b1></br></br>
			<b>Bitte versuchen Sie es später noch einmal.<br/>Sollte dieser Vorgang wiederholt nicht funktionieren, wenden Sie sich bitte telefonisch an uns.<b></b1></br></br>
			<a href='http://www.djsontour.net'><l1>Sofern Sie nicht automatisch weitergeleitet werden, klicken Sie <blau>hier</blau></l1></a>";
		}