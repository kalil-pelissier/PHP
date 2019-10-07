<?php
require_once'/wamp64/www/PHP/TD5/lib/File.php';
require_once 'ControllerVoiture.php';
// On recupère l'action passée dans l'URL
$action = $_GET['action'];
ControllerVoiture::$action(); 
?>
