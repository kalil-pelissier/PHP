<?php

require_once 'Conf.php';

class Model {
	public static $pdo 

	public static function Init() {

		try {
			self::$pdo = new PDO("mysql:host=Conf::getHostname();dbname=Conf::getDatabase()",Conf::getLogin(),Conf::getPassword());
		} catch(PDOException $e) {
  				echo $e->getMessage(); // affiche un message d'erreur
	  			die();
			}
		
	}

	Model::Init();
}
?>