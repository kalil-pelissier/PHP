<?php

require_once File::build_path(array('model','Model.php'));

class ModelVoiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }

  public function getCouleur() {
       return $this->couleur;  
  }

  public function getImmatriculation() {
       return $this->immatriculation;  
  }
     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }

  public function setCouleur($couleur2) {
       $this->couleur = $couleur2;
  }

  public function setImmatriculation($immatriculation2) {
    if(strlen($immatriculation2<=8)) {
      $this->immatriculation = $immatriculation2;
    }
  }

  // La syntaxe ... = NULL signifie que l'argument est optionel
  // Si un argument optionnel n'est pas fourni,
  //   alors il prend la valeur par défaut, NULL dans notre cas
  public function __construct($data = NULL) {

  if (!is_null($data) && !empty($data)) {
  // Si aucun de $m, $c et $i sont nuls,
  // c'est forcement qu'on les a fournis
  // donc on retombe sur le constructeur à 3 arguments
    foreach ($data as $key => $value) {
      $this->$key = $value;
    }
  }
}

public static function getAllVoitures() {

    $rep = Model::$pdo->query("SELECT * FROM voiture");
    $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
    $tab_voit = $rep->fetchAll();
    return $tab_voit;
}

public static function getVoitureByImmat($immat) {
    $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
    // Préparation de la requête
    $req_prep = Model::$pdo->prepare($sql);

    $values = array(
        "nom_tag" => $immat,
        //nomdutag => valeur, ...
    );
    // On donne les valeurs et on exécute la requête   
    $req_prep->execute($values);

    // On récupère les résultats comme précédemment
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
    $tab_voit = $req_prep->fetchAll();
    // Attention, si il n'y a pas de résultats, on renvoie false
    if (empty($tab_voit))
        return false;
    return $tab_voit[0];
}

public function save() {

  $immat = $this->getImmatriculation();
  $marque = $this->getMarque();
  $color = $this->getCouleur();

  $sql = "INSERT INTO voiture (immatriculation, marque, couleur) VALUES (:immat_sql,:marque_sql,:color_sql)";
  // Préparation de la requête
  $req_prep = Model::$pdo->prepare($sql);

  $values = array(
        "immat_sql" => $immat,
        "marque_sql" => $marque,
        "color_sql" => $color,
        //nomdutag => valeur, ...
    );
  $req_prep->execute($values);
}
           
public static function deleteByImmat($immat){
  $sql = "DELETE from voiture WHERE immatriculation=:nom_tag";
    // Préparation de la requête
    $req_prep = Model::$pdo->prepare($sql);

    $values = array(
        "nom_tag" => $immat,
        //nomdutag => valeur, ...
    );
    // On donne les valeurs et on exécute la requête   
    $req_prep->execute($values);
}

public static function update($data) {
  $sql = "UPDATE voiture SET couleur=:couleur, marque=:marque WHERE immatriculation=:immatriculation";
    // Préparation de la requête
    $req_prep = Model::$pdo->prepare($sql);

    $values = array(
        "immatriculation" => $_GET['immatriculation'],
        "marque" => $_GET['marque'],
        "couleur" => $_GET['couleur'],
        //nomdutag => valeur, ...
    );
    // On donne les valeurs et on exécute la requête   
    $req_prep->execute($values);
}

}
?>

