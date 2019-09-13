<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require_once('utilisateur.php');
	$data = array (
			"login" => "pelk",
			"nom" => "pelissier",
			"prenom" => "kalil",	
	);

		$utilisateur1=new Utilisateur($data);

		echo $utilisateur1->get("login");
		echo $utilisateur1->get("nom");
		echo $utilisateur1->get("prenom");
	?> 
</body>
</html>