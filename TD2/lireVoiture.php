<?php
require_once "Model.php";

$rep = Model::$pdo->query("SELECT * FROM voiture");
$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

foreach ($tab_obj as $key => $value) {
	echo "immatriculation => {$value->immatriculation} <br> couleur => {$value->couleur} <br> marque => {$value->marque} <br><br>";
}

?>