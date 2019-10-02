<?php
require_once 'ControllerVoiture.php';
// On recupère l'action passée dans l'URL
$action = $_GET['action'];
ControllerVoiture::$action(); 
?>
