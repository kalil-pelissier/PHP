<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        foreach ($tab_v as $v) {
            $immat = $v->getImmatriculation();
            echo '<p> Voiture d\'immatriculation ' . '<a href=http://webinfo/~pelissierk/PHP/TD4/controller/routeur.php?action=read&immat=' . $immat . '>' . $v->getImmatriculation() . '<a>' . '.</p>';
        }
           
        ?>
    </body>
</html>