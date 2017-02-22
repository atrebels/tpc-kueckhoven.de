<!DOCTYPE html>
<?php ?> <!-- location für Tracking -->
<html lang='de'>
	<head>
		<?php ?> <!-- Title generieren -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		<meta name="description" content="Ihr Ansprechpartner für Professionelle Beschallungs- und Beleuchtungsaufgaben in Erkelenz und Umgebung. ---PA Verleih -- DJ Service -- Beleuchtung---">
		<meta name="author"	content="Andre Trebels">
		<meta name="keywords" content="djsontour, DJs On Tour, www.djsontour.net, djsontour.net, 
			DJ, PA, Anlage, Musik, Erkelenz, Eggerath, Trebels, DJ Lutz, DJ Andre, Licht, Ton, Sound, Light, 
			Sound & Light, Andre Trebels, Christian Eggerath, DJs On Tour Sound and Light, DJs On Tour Sound & Light, 
			djsontour.net, dj erkelenz, heinsberg, Hochzeit, Hochzeiten, Geburtstage, Verleih, Pa Anlagen, PA Systeme">
		<meta name="date" content="2015-05-04T15:28:10+01:00">
		<link rel='shortcut icon' href='images/favicon-ico.png'>
	</head>
	<body  style='padding-top:65px;'> 
	
<!--- NAVIGATION --->
		<nav class='navbar navbar-inverse navbar-fixed-top'>
		  <div class='container-fluid'>
			<div class='navbar-header'>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" rel="home" href="bootstrap.php?location=Home">
					<img style="max-width:200px; margin-top: -7px;" src="images/logo.png" />
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
			  <ul class='nav navbar-nav'>
				<li><a href='bootstrap.php?location=Team'>Team</a></li>
				<li><a href='bootstrap.php?location=Events'>Events</a></li>
				<li><a href='bootstrap.php?location=Kontakt'>Kontakt</a></li>
				<li><a href='bootstrap.php?location=Bilder'>Bilder</a></li>
				<li><a href='bootstrap.php?location=Equipment'>Equipment</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
<!---- CONTENT ---->
		<div class="container" style="max-width:800px;">
			<?php #include 'content.php'; 
			include 'bootstrap.html';?>
		</div>
		
<!---- FOOTER ---->
		<footer>
				&copy; 2015 by Eggerath & Trebels GbR
				<ul>
					<li><a href='#'>Datenschutzbestimmungen</a></li>
					<li><a href='#'>Disclaimer</a></li>
					<li><a href='bootstrap.php?location=Impressum'>Impressum</a></li>
				</ul>
		</footer>
		
	</body>
</html>
<?php
/*
include 'tools/counter.php';
include 'tools/google.php';
include 'tools/location.php';	
include 'tools/path.php';
	
*/
?>