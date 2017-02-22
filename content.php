<?php
if(isset($_GET['location'])) {
	switch($_GET['location']) {
		
		case 'Home':
			include 'content/home.php';
			break;
			
		case 'About':
			include 'content/about.php';
			break;
			
		case 'Events':
			include 'content/events.php';
			break;
			
		case 'Kontakt':
			include 'content/contact.php';
			break;
			
		case 'Bilder':
			if (isset($_GET['value'])) {
				include 'content/pictures-single.php';
			} else {
				include 'content/pictures.php';
			}
			break;
			
		case 'Equipment':
			include 'content/equipment.php';
			break;
			
		case 'Impressum':
			include 'content/impressum.php';
			break;
			
		default:
			include 'content/home.php';
			break;
			
	}
} else {
		include 'content/home.php';
}
?>