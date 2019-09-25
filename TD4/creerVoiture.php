<?php
	require_once "./ModelVoiture.php";

	$voit = new ModelVoiture($_POST);
	$voit->save();

	// foreach ($_POST as $cle => $value){

	// 	echo "$cle : $value <br/>";
	// }
	
?>