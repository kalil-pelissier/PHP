<?php
	echo 'la voiture dimatriculation '.$immat.' à bien été mise à jour';
	foreach ($tab_v as $v) {
	    $vImmatriculation = htmlspecialchars($v->getImmatriculation());
	    $immat = $vImmatriculation;
	    echo '<p> Voiture d\'immatriculation ' . '<a href=http://localhost/PHP/TD5/index.php?action=read&immatriculation=' . rawurlencode($v->getImmatriculation()) . '>' .  $vImmatriculation . '</a>' . '.</p>';
	}
?>