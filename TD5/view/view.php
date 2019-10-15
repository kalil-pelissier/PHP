<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $pagetitle = 'Liste des voitures'; ?></title>
</head>
<body>

	<header> 
		<p style="border: 1px solid black;text-align:left;padding-right:1em;">
			<a href="index.php?action=readAll">| Liste des voitures</a><br>
			<a href="index.php?action=readAll&controller=utilisateur">| Utilisateur</a><br>
			<a href="index.php?action=readAll&controller=trajet">| Trajet</a><br>
		</p>
	</header>

	<?php
// Si $controleur='voiture' et $view='list',
// alors $filepath="/chemin_du_site/view/voiture/list.php"
	$filepath = File::build_path(array("view", "voiture", "list.php"));
	require $filepath;
	?>

	<footer>
		<p style="border: 1px solid black;text-align:left;padding-right:1em;">
			Site de covoiturage de Kalil	
		</p>
	</footer>

</body>

</html>

