<?php
require_once'/wamp64/www/PHP/TD5/lib/File.php';
require_once File::build_path(array('controller','ControllerVoiture.php'));
// On recupère l'action passée dans l'URL
$action = $_GET['action'];
ControllerVoiture::$action(); 
?>
