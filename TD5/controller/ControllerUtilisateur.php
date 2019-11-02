<?php
require_once File::build_path(array('model','ModelUtilisateur.php'));

class ControllerUtilisateur {

	public static function readAll() {
		$controleur = "utilisateur";
        $view = "list.php";
        $tab_u = ModelUtilisateur::selectAll();     //appel au modèle pour gerer la BD
        require File::build_path(array('view', 'view.php'));  //"redirige" vers la vue
	}

	 public static function read() {

    	$log = $_GET['login'];
    	$u = ModelUtilisateur::select($log);
        $controleur = "utilisateur";

    	if($u==false) {
            $view = "error.php";
    		require File::build_path(array('view', 'view.php'));
    	}
    	else {
            $view = "detail.php";
    		require File::build_path(array('view', 'view.php'));
    	}
    }

    public static function delete() {
        $log = $_GET['login'];
        ModelUtilisateur::delete($log);
        $tab = ModelUtilisateur::selectAll();
        $controleur = "utilisateur";
        $view = "deleted.php";
        require File::build_path(array('view', 'view.php'));
    }

}
?>