<?php
	require_once "./voiture.php";

	$voit = new Voiture($_POST);
	$voit->save();

	// foreach ($_POST as $cle => $value){

	// 	echo "$cle : $value <br/>";
	// }
	
?>