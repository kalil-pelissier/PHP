<?php
require_once File::build_path(array('controller','ControllerVoiture.php'));
require_once File::build_path(array('controller','ControllerUtilisateur.php'));

if(!isset($_GET['action'])) {
	$_GET['action'] = 'selectAll';
}

if(!isset($_GET['controller'])) {
	$_GET['controller'] = 'voiture';
}
 
// On recupère l'action et le controleur passée dans l'URL
$action = $_GET['action'];
$controller = $_GET['controller'];

//création du nom de classe
$controller_class = 'Controller'.ucfirst($controller);

//On récupère toutes les méthodes de la classe ControllerVoiture
$methodes = get_class_methods ($controller_class);

//vérification si la class et l'action existe bien
if(class_exists($controller_class) && in_array($_GET['action'], $methodes)) {
	$controller_class::$action();
}else {
	ControllerVoiture::error();
}

?>
