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

    public static function create() {
        $controleur = "utilisateur";
        $view = "update.php";
        $log = "";
        $nom = "";
        $prenom = "";
        $option = 'require';//require si l'action est create readonly sinon
        $action = 'created';
        require File::build_path(array('view', 'view.php'));
    }

    public static function created() {
        $modelUser = new ModelUtilisateur($_GET);
        $modelUser->save();//méthode non implémenter
        self::readAll();    
    }

    public static function update(){
        $action = "updated";
        $option = "readonly";//require si l'action est create readonly sinon
        $log = $_GET['login'];
        $u = ModelUtilisateur::select($log);
        $nom = $u->getNom();
        $prenom = $u->getPrenom();
        $controleur = "utilisateur";
        $view = "update.php";
        require File::build_path(array('view', 'view.php'));
    }

    public static function updated() {
        ModelUtilisateur::update($_GET);//méthode non implémenter
        $log = $_GET['login'];
        $controleur = "utilisateur";
        $view = "updated.php";
        $tab = ModelUtilisateur::selectAll();
        require File::build_path(array('view', 'view.php'));
    }

}
?>