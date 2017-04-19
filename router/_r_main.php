<?php
if (isset($_GET['location'])) {
    switch ($_GET['location']) {
        case 'Datenschutz': 
            include "content/datenschutz.html";
            break;
        case 'Disclaimer':
            include "content/disclaimer.html";
            break;
        case 'Impressum':
            include "content/impressum.html";
            break;
        case 'Home':
            include "content/home.html";
            break;
        case 'Verein':
            include "content/verein.html";
            break;
        case 'Kontakt':
            include "content/kontakt.php";
            break;
        case 'MitgliedWerden':
            include "content/mitgliedwerden.html";
            break;
        default:
            header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
            include "content/404.html";
            break;
    }
} else {
    include "content/home.html";
}

?>
