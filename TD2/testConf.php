<?php
  // On inclut les fichiers de classe PHP avec require_once
  // pour éviter qu'ils soient inclus plusieurs fois
  require_once 'Conf.php';

  echo Conf::getLogin() . "<br/>";
  echo Conf::getHostname() . "<br/>";
  echo Conf::getDatabase() . "<br/>";
  echo Conf::getPassword() . "<br/>";
?>

	