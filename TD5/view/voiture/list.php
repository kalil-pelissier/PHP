

<?php
foreach ($tab_v as $v) {
    $vImmatriculation = htmlspecialchars($v->getImmatriculation());
    echo '<p> Voiture d\'immatriculation ' . '<a href=http://localhost/PHP/TD5/index.php?action=read&immatriculation=' . rawurlencode($v->getImmatriculation()) . '>' .  $vImmatriculation . '<a>' . '.</p>';
}
    
?>


<!-- wampeserveur:
'<a href=http://localhost/PHP/TD5/index.php?action=read&immatriculation='
'<a href=http://webinfo/~pelissierk/PHP/TD5/index.php?action=read&immatriculation=' -->
