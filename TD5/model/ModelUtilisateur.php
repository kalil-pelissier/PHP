<?php

require_once File::build_path(array('model','Model.php'));

class ModelUtilisateur extends Model{

	private $login;
	private $nom;
	private $prenom;
  protected static $object = 'Utilisateur';
  protected static $primary='login';

	public function getNom() {
       return $this->nom;  
  }

  public function getPrenom() {
       return $this->prenom;  
  }

  public function getLogin() {
       return $this->login;  
  }
     
  // un setter 
  public function setNom($name) {
       $this->nom = $name;
  }

  public function setPrenom($surname) {
       $this->prenom = $surname;
  }

  public function setImmatriculation($log) {
     	$this->login = $log;
  }

	public function __construct($data = NULL) {
		if(!is_null($data) && !empty($data)) {
			foreach ($data as $key => $value){
				$this->$key = $value;
    	}
		}
	}

	/*public static function getAllUtilisateurs() {
		$rep = Model::$pdo->query("SELECT * FROM Utilisateur");
	  $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
	  $tab_user = $rep->fetchAll();
	  return $tab_user;
	}*/

}
?>