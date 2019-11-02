

        <form method="get" action="./index.php">
          <input type="hidden" name="action" value=<?php echo $action ?>>
          <input type="hidden" name="controller" value="utilisateur">
          <fieldset>
            <legend>Mon formulaire :</legend>
            <p>
              <label for="log_id">Login</label> :
              <input type="text" value="<?php echo $log ?>" name="login" id="log_id" <?php echo $option ?>/>
            </p>
            <p>
              <label for="nom_id">Nom</label>
              <input type="text" value="<?php echo $nom ?>" name="nom" id="nom_id" required/>
            </p>
            <p>
              <label for="prenom_id">Prenom</label>
              <input type="text" value="<?php echo $prenom ?>" name="prenom" id="prenom_id" required/>
            </p>
            <p>
             <input type="submit" value="Envoyer" />
            </p>
          </fieldset> 
        </form>

 