<?php

require_once "../TD2/Model.php";

class Trajet {
	private $id;
	private $ptDepart;
	private $ptArriver;
	private $date;
	private $nbPlaces;
	private $prix;
	private $conducteur_login;

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

	public static function getAllTrajets() {
		$rep = Model::$pdo->query("SELECT * FROM Trajet");
	   	$rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
	    $tab_traj = $rep->fetchAll();
	    return $tab_traj;
	}


}
?>