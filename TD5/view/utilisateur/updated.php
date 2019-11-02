<?php
	echo 'l\'utilisateur '.$log.' à bien été mise à jour';
	foreach ($tab as $u) {
	    $userLogin = htmlspecialchars($u->getLogin());
	    echo '<p> Voiture d\'immatriculation ' . '<a href=http://localhost/PHP/TD5/index.php?controller=utilisateur&action=read&login=' . rawurlencode($u->getLogin()) . '>' .  $userLogin . '</a>' . '.</p>';
	}
?>