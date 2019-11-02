<?php
foreach ($tab_u as $u) {
    $userLog = htmlspecialchars($u->getLogin());
    echo '<p> Utilisateur d\'identifiant ' . '<a href=http://localhost/PHP/TD5/index.php?controller=utilisateur&action=read&login=' . rawurlencode($u->getLogin()) . '>' .  $userLog . '<a>' . '.</p>';
}
    
?>


<!-- wampeserveur:
'<a href=http://localhost/PHP/TD5/index.php?controller=utilisateur&action=read&login='
'<a href=http://webinfo/~pelissierk/PHP/TD5/index.php?controller=utilisateur&action=read&login=' -->
