<?php
class Trajet {
	private $id;
	private $ptDepart;
	private $ptArriver;
	private $date;
	private $nbPlaces;
	private $prix;
	private $conducteur_login;

	public function __construct($data) {
		foreach ($data as $key => $value){
			$this->$key = $value;
    	}
	}

	public function get($nom_attribut) {
		return $this->$nom_attribut;
	}
}
?>