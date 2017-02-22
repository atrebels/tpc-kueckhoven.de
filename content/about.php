<?php
$properties = array('Bild', 'Bezeichnung', 'Name', 'Alter', 'Geb.', 'Adresse', 'Tel.', 'E-Mail');
$christian = array('images/lutz.png',  'Lutz', 'Christian Eggerath', floor((date("Ymd") - date("Ymd", mktime(0, 0, 0, 11, 11, 1991))) / 10000) , '11.11.1991', 'Kirchweg 5<br/>41812 Erkelenz', '0157/86243562', '<a href="mailto:Eggerath.Christian@djsontour.net"><blau>Eggerath.Christian@djsontour.net</blau>');
$andre = array('images/andre.png','Andre', 'Andre Trebels', floor((date("Ymd") - date("Ymd", mktime(0, 0, 0, 4, 26, 1991))) / 10000) , '26.04.1991', 'An der Maar 7<br/>41812 Erkelenz', '0177/6811405', '<a href="mailto:Trebels.Andre@djsontour.net"><blau>Trebels.Andre@djsontour.net</blau>');
$members = array($christian , $andre);
?>
<div class="container">
	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">&Uuml;ber uns</h1>
		</div>
	</div>
	<!-- /.row -->

	<!-- Content Row -->
	<div class="row">
		<!-- Picture -->
		<div class="col-md-8">
			<img class="img-responsive img-portfolio" src="images/team.png" alt="">
		</div>
		<!-- Contact Details Column -->
		<div class="col-md-4">
			<h3>Team</h3>
			<p>
				Hinter DJs On Tour stehen Christian Eggerath und André Trebels. Vor nun mehr als 10 Jahren begangen wir mit dem auflegen auf Geburtstagen von Bekannten und Freunden.
				Nach und nach wuchs der Personenkreis und somit auch die Zahl der Aufträge. Damit stieg auch unsere Motivation immer höheren Ansprüchen gerecht zu werden. 
				Also beschlossen wir aus unserem Hobby unseren Beruf zu machen. So entstand am 11.11.2009 die Eggerath & Trebels GbR. 
			</p>
		</div>
	</div>
	<!-- Start schleife -->
	<?php for ($i = 0; $i < count($members);$i++){?>
	<hr>
	<div class="row">
		<div class="col-sm-4">
			<img class="img-circle img-responsive img-center" src="<?php echo $members[$i][0] ?>" alt="" style="max-width:200px;">
		</div>
		<div class="col-sm-8">
			<h2><small>DJ <?php echo $members[$i][1] ?></small></h2>
			<table>
				<?php
					for($j = 2; $j < count($properties); $j++){
						echo '<tr><td width="120" valign="top" padding="2"><b>'. $properties[$j] .':</b></td><td>'. $members[$i][$j] .'</td>';
					}
				?>
			</table>
		</div>
	</div>

	<?php } ?>
	<!-- Ende schleife -->
	
</div>
