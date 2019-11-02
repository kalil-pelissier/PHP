<?php
require_once File::build_path(array('model','ModelVoiture.php')); 

class ControllerVoiture {

    public static function readAll() {
        $controleur = "voiture";
        $view = "list.php";
        $tab_v = ModelVoiture::selectAll();     //appel au modèle pour gerer la BD
        require File::build_path(array('view', 'view.php'));  //"redirige" vers la vue
    }

    public static function read() {
    	$immat = $_GET['immatriculation'];
    	$v = ModelVoiture::select($immat);
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
        $controleur = "voiture";
        $view = "update.php";
        $immat = "";
        $marque = "";
        $couleur = "";
        $option = 'require';//require si l'action est create readonly sinon
        $action = 'created';
    	require File::build_path(array('view', 'view.php'));
    }

    public static function created() {
    	$modelCar = new ModelVoiture($_GET); 
    	$modelCar->save();
    	self::readAll();   	
    }

    public static function delete() {
        $immat = $_GET['immat'];
        ModelVoiture::delete($immat);
        $tab_v = ModelVoiture::selectAll();
        $controleur = "voiture";
        $view = "deleted.php";
        require File::build_path(array('view', 'view.php'));
    }

    public static function update(){
        $action = "updated";
        $option = "readonly";//require si l'action est create readonly sinon
        $immat = $_GET['immat'];
        $v = ModelVoiture::select($immat);
        $marque = $v->getCouleur();
        $couleur = $v->getMarque();
        $controleur = "voiture";
        $view = "update.php";
        require File::build_path(array('view', 'view.php'));
    }

    public static function updated() {
        ModelVoiture::update($_GET);
        $immat = $_GET['immatriculation'];
        $controleur = "voiture";
        $view = "updated.php";
        $tab_v = ModelVoiture::selectAll();
        require File::build_path(array('view', 'view.php'));
    }

    public static function error() {
        $controleur = "voiture";
        $view = "rongArg.php";
        require File::build_path(array('view', 'view.php'));
    }

}
?>
