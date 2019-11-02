<?php
echo 'la voiture dimatriculation '.$immat.' à bien été suprimmer';
foreach ($tab_v as $v) {
    $vImmatriculation = htmlspecialchars($v->getImmatriculation());
    echo '<p> Voiture d\'immatriculation ' . '<a href=http://localhost/PHP/TD5/index.php?action=read&immat=' . rawurlencode($v->getImmatriculation()) . '>' .  $vImmatriculation . '</a>' . '.</p>';
}
?>