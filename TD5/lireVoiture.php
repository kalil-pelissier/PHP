<?php
require_once "./model/ModelVoiture.php";

$construc = array(
	'immatriculation' => 'JDB54555',
 	'marque' => 'renault',
 	'couleur' => 'bleu');

$maVoiture2 = new ModelVoiture($construc);

$maVoiture2->save();

$maVoiture = ModelVoiture::getVoitureByImmat("JDB54555");

$maVoiture->afficher();

/*$tab_voit = Voiture::getAllVoitures();

foreach ($tab_voit as $key => $value) {
	$voiture = new Voiture($value);
	$voiture->afficher();
}*/

?>