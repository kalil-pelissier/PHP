<?php
require_once File::build_path(array('model','ModelUtilisateur.php'));

class ControllerUtilisateur {

	public static function readAll() {
		$controleur = "utilisateur";
        $view = "list.php";
        $tab_u = ModelUtilisateur::getAllUtilisateurs();     //appel au modèle pour gerer la BD
        require File::build_path(array('view', 'view.php'));  //"redirige" vers la vue
	}

}
?>