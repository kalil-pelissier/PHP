<?php
require_once "./trajet.php";
require_once "./utilisateur.php";

$myUser = trajet::findPassager(5);

foreach ($myUser as $value) {
	$value->afficherutilisateur();
}

?>