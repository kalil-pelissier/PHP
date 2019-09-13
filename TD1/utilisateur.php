<?php
class Utilisateur {
	private $login;
	private $nom;
	private $prenom;

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