<?php
require_once "./voiture.php";


$tab_voit = Voiture::getAllVoitures();

foreach ($tab_voit as $key => $value) {
	$voiture = new Voiture($value);
	$voiture->afficher();
}

?>