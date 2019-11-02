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

  public function save() {
  $log = $this->getLogin();
  $nom = $this->getNom();
  $prenom = $this->getPrenom();

  $sql = "INSERT INTO Utilisateur (login, nom, prenom) VALUES (:log_sql,:nom_sql,:prenom_sql)";
  // Préparation de la requête
  $req_prep = Model::$pdo->prepare($sql);

  $values = array(
        "log_sql" => $log,
        "nom_sql" => $nom,
        "prenom_sql" => $prenom,
        //nomdutag => valeur, ...
    );
  $req_prep->execute($values);
}

public static function update($data) {
  $sql = "UPDATE Utilisateur SET nom=:nom, prenom=:prenom WHERE login=:login";
    // Préparation de la requête
    $req_prep = Model::$pdo->prepare($sql);

    $values = array(
        "login" => $data['login'],
        "nom" => $data['nom'],
        "prenom" => $data['prenom'],
        //nomdutag => valeur, ...
    );
    // On donne les valeurs et on exécute la requête   
    $req_prep->execute($values);
}

	/*public static function getAllUtilisateurs() {
		$rep = Model::$pdo->query("SELECT * FROM Utilisateur");
	  $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
	  $tab_user = $rep->fetchAll();
	  return $tab_user;
	}*/

}
?>