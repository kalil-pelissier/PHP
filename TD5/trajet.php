<?php

require_once "./Model.php";
require_once "./utilisateur.php";

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

	public static function findPassager($id) {

		$sql = "SELECT DISTINCT login, nom, prenom FROM Utilisateur u JOIN Passager p ON u.login = p.utilisateur_login WHERE p.trajet_id=:nom_tag";
		// Préparation de la requête
  		$req_prep = Model::$pdo->prepare($sql);

  		$values = array(
        	"nom_tag" => $id,
        	//nomdutag => valeur, ...
   	 	);
   	 	$req_prep->execute($values);

   	 	$req_prep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
    	$tab_user = $req_prep->fetchAll();
    	return $tab_user;
	}

}
?>