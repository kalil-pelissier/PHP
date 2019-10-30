<?php
require_once File::build_path(array('model','ModelVoiture.php')); 

class ControllerVoiture {
    public static function readAll() {
        $controleur = "voiture";
        $view = "list.php";
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require File::build_path(array('view', 'view.php'));  //"redirige" vers la vue
    }

    public static function read() {

    	$immat = $_GET['immat'];
    	$v = ModelVoiture::getVoitureByImmat($immat);
        $controleur = "voiture";

    	if($v==false) {
            $view = "error.php";
    		require File::build_path(array('view', 'view.php'));
    	}
    	else {
            $view = "detail.php";
    		require File::build_path(array('view', 'view.php'));
    	}

    }

    public static function create() {
    	require File::build_path(array('view', 'voiture', 'create.php'));
    }

    public static function created() {
    	$modelCar = new ModelVoiture($_GET); 
    	$modelCar->save();
    	self::readAll();	
    }

    public static function delete() {
        $immat = $_GET['immat'];
        ModelVoiture::deleteByImmat($immat);
        $tab_v = ModelVoiture::getAllVoitures();
        $controleur = "voiture";
        $view = "deleted.php";
        require File::build_path(array('view', 'view.php'));
    }

    public static function update(){
        $immat = $_GET['immat'];
        $v = ModelVoiture::getVoitureByImmat($immat);
        $marque = $v->getCouleur();
        $couleur = $v->getMarque();
        $controleur = "voiture";
        $view = "update.php";
        require File::build_path(array('view', 'view.php'));
    }

    public static function error() {
        $controleur = "voiture";
        $view = "rongArg.php";
        require File::build_path(array('view', 'view.php'));
    }

}
?>
