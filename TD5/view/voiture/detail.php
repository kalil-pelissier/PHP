<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ma voiture</title>
    </head>
    <body>
        <?php  
         $vImmatriculation = htmlspecialchars($v->getImmatriculation());
         $vMarque = htmlspecialchars($v->getmarque());
         $vCouleur = htmlspecialchars($v->getCouleur());
            echo "Marque: ".$vMarque;
            echo "<br>Couleur: ".$vCouleur;
            echo "<br>Immatriculation: ".$vImmatriculation;
            echo "<br><a href=http://localhost/PHP/TD5/index.php?action=delete&immat=" . rawurlencode($v->getImmatriculation()) . '>' . 'SUPPRIMER' . '<a>';
            echo "<br><a href=http://localhost/PHP/TD5/index.php?action=update&immat=" . rawurlencode($v->getImmatriculation()) . '>' . 'MODIFIER' . '<a>';
        ?>
    </body>
</html>