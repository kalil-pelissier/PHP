<?php
require_once File::build_path(array('controller','ControllerVoiture.php'));

if(!isset($_GET['action'])) {
	$_GET['action'] = 'readAll';
}
 
// On recupère l'action passée dans l'URL
$action = $_GET['action'];
//On récupère toutes les méthodes de la classe ControllerVoiture
$methodes = get_class_methods ('ControllerVoiture');

//vérification si la methode passer existe bien
if(!in_array($_GET['action'], $methodes)) {
	ControllerVoiture::error();
}else {
	ControllerVoiture::$action();
}

?>
