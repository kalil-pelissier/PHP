

        <form method="get" action="./index.php">
          <input type="hidden" name="action" value="updated">
          <fieldset>
            <legend>Mon formulaire :</legend>
            <p>
              <label for="immat_id">Immatriculation</label> :
              <input type="text" value=<?php echo $immat ?> name="immatriculation" id="immat_id" readonly/>
            </p>
            <p>
              <label for="marque_id">Marque</label>
              <input type="text" value=<?php echo $marque ?> name="marque" id="marque_id" required/>
            </p>
            <p>
              <label for="color_id">Couleur</label>
              <input type="text" value=<?php echo $couleur ?> name="couleur" id="color_id" required/>
            </p>
            <p>
             <input type="submit" value="Envoyer" />
            </p>
          </fieldset> 
        </form>

 