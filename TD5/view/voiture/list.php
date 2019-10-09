<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        foreach ($tab_v as $v) {
            $vImmatriculation = htmlspecialchars($v->getImmatriculation());
            $immat = $vImmatriculation;
            echo '<p> Voiture d\'immatriculation ' . '<a href=http://webinfo/~pelissierk/PHP/TD5/index.php?action=read&immat=' . $immat . '>' .  $vImmatriculation . '<a>' . '.</p>';
        }
           
        ?>
    </body>
</html>

<!-- wampeserveur:
'<a href=http://localhost/PHP/TD5/controller/routeur.php?action=read&immat='
'<a href=http://webinfo/~pelissierk/PHP/TD5/controller/routeur.php?action=read&immat=' -->
