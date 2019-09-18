<?php

require_once "../TD2/Model.php";

class Utilisateur {
	private $login;
	private $nom;
	private $prenom;

	public function __construct($data = NULL) {
		if(!is_null($data) && !empty($data)) {
			foreach ($data as $key => $value){
				$this->$key = $value;
    		}

		}
	}

	public function get($nom_attribut) {
		return $this->$nom_attribut;
	}

	public static function getAllUtilisateurs() {
		$rep = Model::$pdo->query("SELECT * FROM Utilisateur");
	   	$rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
	    $tab_util = $rep->fetchAll();
	    return $tab_util;
	}

}
?>