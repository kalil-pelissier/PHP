<?php  
    $userLog = htmlspecialchars($u->getLogin());
    $userName = htmlspecialchars($u->getNom());
    $userSurname = htmlspecialchars($u->getPrenom());
    echo "Login: ".$userLog;
    echo "<br>Nom: ".$userName;
    echo "<br>Prenom: ".$userSurname;
   	echo "<br><a href=http://localhost/PHP/TD5/index.php?controller=utilisateur&action=delete&login=" . rawurlencode($u->getLogin()) . '>' . 'SUPPRIMER' . '<a>';
    echo "<br><a href=http://localhost/PHP/TD5/index.php?controller=utilisateur&action=update&login=" . rawurlencode($u->getLogin()) . '>' . 'MODIFIER' . '<a>';
?>
    