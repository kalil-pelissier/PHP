<?php
require_once "./voiture.php";

$construc = array(
	'immatriculation' => 'JDB54555',
 	'marque' => 'renault',
 	'couleur' => 'bleu');

$maVoiture2 = new Voiture($construc);

$maVoiture2->save();

$maVoiture = Voiture::getVoitureByImmat("JDB54555");

$maVoiture->afficher();

/*$tab_voit = Voiture::getAllVoitures();

foreach ($tab_voit as $key => $value) {
	$voiture = new Voiture($value);
	$voiture->afficher();
}*/

?>