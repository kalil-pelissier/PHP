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
        ?>
    </body>
</html>