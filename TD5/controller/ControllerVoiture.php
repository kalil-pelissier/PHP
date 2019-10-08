<?php
require_once File::build_path(array('model','ModelVoiture.php')); 

class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }

    public static function read() {

    	$immat = $_GET['immat'];
    	$v = ModelVoiture::getVoitureByImmat($immat);

    	if($v==false) {
    		require ('../view/voiture/error.php');
    	}
    	else {
    		require ('../view/voiture/detail.php');
    	}

    }

    public static function create() {
    	require ('../view/voiture/create.php');
    }

    public static function created() {
    	$modelCar = new ModelVoiture($_GET); 
    	$modelCar->save();
    	self::readAll();	
    }

}
?>
