
<form method = "post" action='index.php?page=admin&tool=addUser'>
<table id="table">
    <!-- Ligne pour le prénom : input -->
    <tr> 
        <td> Prénom </td>
        <td> <?php echo("<input type='text' name='prenom' value='".$default['prenom']."'>"); ?> </td>
    </tr> 
    <!-- Ligne pour le nom : input -->
    <tr>
        <td> Nom </td> 
        <td> <?php echo("<input type='text' name='nom' value='".$default['nom']."'>"); ?>  </td>
    </tr>
    <!-- Ligne pour le sexe : select -->
    <tr>
        <td> Sexe </td>
        <td> <select name="sexe"> 
            <?php
            if ($default['sexe'] == 'Homme') {
                echo("<option value='Femme'>Femme</option>
                      <option value='Homme' selected>Homme</option>");
            } else {
                echo("<option value='Femme' selected>Femme</option>
                      <option value='Homme'>Homme</option>");
            }
            ?>
 	    </select>  </td>
    </tr> 
    <!-- Ligne pour la date de naissance input date -->
    <tr>
        <td> Date de naissance </td>
        <td> <?php echo("<input type='date' name='date_naissance' value='".$default['date_naissance']."'>"); ?>  </td>
    </tr>
    <!-- Ligne pour la catégorie : select (avec les options de la BDD) -->
    <tr>
        <td> Catégorie (Etudiant, Enseignant...) </td>
        <td> <select name="categorie"/>
            <?php 
                // On se connecte à la BDD et on recherche les différentes catégorie
                include("db_modifications/connectionToDB.php");
                $req="SELECT titre FROM Categorie;";
                $res=$pdo->query($req);
                $res=$res->fetchAll();
                $default_cat = "";
                //Pour chaque catégorie
                foreach($res as $id => $cat) {
                    //On affiche la catégorie correspondante de la BDD dans le forme
                    if($cat['0'] == $default['categorie']) {
                        $default_cat = "selected";
                    }
                    echo("<option value='".$cat['0']."'"." $default_cat> ".$cat['0']." </option>");
                }
            ?> 
        
        </select> </td>
    </tr> 
    <!-- Ligne pour le mail -->
    <tr>
        <td> mail </td>
        <td><?php echo("<input type='text' name='mail' value='".$default['mail']."'>"); ?> </td>
    </tr>
    <!-- Ligne pour la page perso -->
    <tr>
        <td> URL de la page perso </td>
        <td> <?php echo("<input type='text' name='page_perso' value='".$default['page_perso']."'>"); ?>  </td>
    </tr>
</table>
<input type="file" name="photo" id="photo" />
<input type="submit" name="submit" value="Valider" class="center">
<input type="reset" name="Reset" value="Annuler">
</form>
