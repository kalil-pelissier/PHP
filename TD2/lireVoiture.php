<?php
require_once "Model.php";

$rep = Model::$pdo->query("SELECT * FROM voiture");
$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
?>