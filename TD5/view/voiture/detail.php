<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ma voiture</title>
    </head>
    <body>
        <?php  
            echo "Marque: ".$v->getmarque();
            echo "<br>Couleur: ".$v->getCouleur();
            echo "<br>Immatriculation: ".$v->getImmatriculation();
        ?>
    </body>
</html>