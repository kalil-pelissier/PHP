<?php
echo 'l\'utilisateur '.$log.' à bien été suprimmer';
foreach ($tab as $u) {
    $userLog = htmlspecialchars($u->getLogin());
    echo '<p> Utilisateur d\'identifiant ' . '<a href=http://localhost/PHP/TD5/index.php?controller=utilisateur&action=read&login=' . rawurlencode($u->getLogin()) . '>' .  $userLog . '</a>' . '.</p>';
}
?>