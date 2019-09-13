<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $texte = "hello world !";

          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte;


          $prenom = "Marc";

            echo "Bonjour " . $prenom. " <br>";
            echo "Bonjour $prenom <br>";
            echo 'Bonjour $prenom <br>';

            echo $prenom . "<br>";
            echo "$prenom <br>";

          $marque="mercedes";
          $couleur="rouge";
          $immatriculation="12CDS";

          echo "Voiture " . $immatriculation . " de marque " . $marque . " (couleur " . $couleur . ") ";


          $voiture1['marque']='Mercedes';
          $voiture1['couleur']='rouge';
          $voiture1['immatriculation']='45JYQ54';

          $voiture2['marque']='Opel';
          $voiture2['couleur']='blanc';
          $voiture2['immatriculation']='1234ABCD';

          $voiture3['marque']='Ford GT';
          $voiture3['couleur']='bleu';
          $voiture3['immatriculation']='577KJGJF';

          echo "<br/>";

          var_dump($voiture);

          echo "<br/>";

          echo "Voiture " . $voiture1['immatriculation'] . " de marque " . $voiture1['marque'] . " (couleur " . $voiture1['couleur'] . ") ";

          echo "<br/>";

          $mes_voitures = array();
          $mes_voitures[0]=$voiture1;
          $mes_voitures[1]=$voiture2;
          $mes_voitures[2]=$voiture3;

          var_dump($mes_voitures);

          echo "<br/>";
          echo "<br/>"; 

          //affichage de mes voitures
          if(empty($mes_voitures)) {
              echo "Le tableau est vide!!";
          }else{
            foreach ($mes_voitures as $cle => $valeur){
              echo "<ul>";
                  foreach ($valeur as $key => $valu){
                      echo "<li> $key : $valu </li>";
                  }
              echo "</ul>";
            }
          }

        ?>
    </body>
</html>