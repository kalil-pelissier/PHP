<?php
require_once'/home/ann2/pelissierk/public_html/TD5/lib/File.php';
require_once File::build_path(array('controller','ControllerVoiture.php'));
// On recupère l'action passée dans l'URL
$action = $_GET['action'];
ControllerVoiture::$action(); 
?>
