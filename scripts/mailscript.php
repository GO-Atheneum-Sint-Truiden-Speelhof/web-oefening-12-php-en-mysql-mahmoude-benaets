<?php

// informatie voor verzending
$ontvanger = 'mahmoude@localhost';
$onderwerp = 'Inschrijving fotowedstrijd';

//stel het bericht samen
$bericht = 'Naam: '.$_POST['naam'].'
Straat: '.$_POST['straat'].'
Gemeente: '.$_POST['postcode'].' '.$_POST['gemeente'].'
Telefoonnummer: '.$_POST['telefoon'].'
E-mail adres: '.$_POST['e-mail'].'
Geboortedatum: '.$_POST['geboortedatum'].'
Titel: '.$_POST['titel'].'
Camera: '.$_POST['camera'].'
Lens: '.$_POST['lens'].'
Commentaar: '.$_POST['commentaar'];

//header-informatie
$verzender = 'From: '.$_POST['naam'].' <'.$_POST['e-mail'].'>';

//verzend bericht
mail($ontvanger, $onderwerp, $bericht, $verzender);
?>