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

}
?>
