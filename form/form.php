<head>
    
    
    <link rel="stylesheet" media="screen" href="./stylesheet.css">
    
</head>

<?php
    //Valeurs par défaut
    $default= ['lien'=>"",'age'=>"",'city'=>"", 'street'=>"",'frequency'=>"",'services'=>""];
    include("./user/virtualisedDB/announces.php");
    foreach ($task_types as $id => $task) {
        $default[$id]=$task;
    }

    
    //On parcourt les infos et on regarde celle qui sont déjà remplies et correctes 
    foreach($default as $info => $value) {
        if(!empty($_POST[$info])) {
            //On les passe comme valeurs par défaut
            $default[$info] = $_POST[$info];
        }    
    }
/*
Guillaume : 
Sur cette page je verrais bien un questionnaire qui demande l'âge de la vieille personne, l'adresse, la fréquence de visites, les services recherchés
Puis on valide et le site indique s'il y a des aidants disponibles pour le service recherché (et si oui combien).
Puis il demande de créer le compte avec la demande d'aide préremplie
*/
?>
<div class="s-bg-image s-bg-light-text  s-new-hero-section s-section s-signup-section" style="margin-top:32px; background-repeat: no-repeat; background-size: cover; background-color: transparent; background-position: 50% 50%; background-image: url(&quot;./Proxygeia_files/vieux.jpg&quot;);">
    <div class="s-rva-text sixteen columns">
            <div class="s-title-group  ">
                <div class="s-subtitle">
                    <div class="s-component s-text">
                        <h4 class="">
                            <div class="s-component-content needsclick recursive s-font-heading  " style="outline: 0px; font-size:28px;"   tabindex="0"   role="textbox" aria-label="false">
                                <p><b>Grâce aux réponses de ce <strong>formulaire</strong>, nous pourrons</b></p>
                                <p><b>trouver l'offre qui vous correspond le mieux</b></p>
                            </div>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="s-title ">
                    <div class="s-component s-text">
                        <h1 style="font-size:42px"> 
                            <div class="s-component-content s-font-title" style="outline: 0px; color:rgb(255,111,34);" tabindex="0" role="textbox" aria-label="false">
                                <p><b>OU</b></p>
                            </div>
                        </h1>
                    </div>
                </div>
                <div class="s-subtitle">
                    <div class="s-component s-text">
                        <h4 class="">
                            <div class="s-component-content needsclick recursive s-font-heading  " style="outline: 0px; font-size:28px; margin-bottom:16px"   tabindex="0"   role="textbox" aria-label="false">
                                <p><b>Vous pouvez consulter directement nos offres ici</b></p>
                            </div>
                        </h4>
                    </div>
                </div>
                <div class="s-button-group ib s-component">
                    <a  class="s-common-button s-font-body s-action-button" 
                        href="index.php?page=offre&form=blank"
                        target="_blank" 
                        style="text-transform:uppercase">
                        Nos offres
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<h1 id="title"> 
    Formulaire
</h1>

<form method = "post" action='index.php?page=offre&form=filled'>
<table id="table">
    <!-- Ligne pour le lien avec la personne dépendante : select : pour un parent, pour un ami, pour moi, autre -->
    <tr> 
        <td><b>Pour qui</b> cherchez vous de l'aide ? </td>
        <td><select id="lien" class="form" name="lien"> 
            <?php
            if ($default['lien'] == 'pour un.e ami.e') {
                echo("<option value='pour un parent'>pour un parent</option>
                      <option value='pour un.e ami.e' selected>pour un.e ami.e</option>
                      <option value='pour moi'>pour moi</option>
                      <option value='autre'>autre</option>");
            } elseif ($default['lien'] == 'pour moi') {
                echo("<option value='pour un parent'>pour un parent</option>
                      <option value='pour un.e ami.e'>pour un.e ami.e</option>
                      <option value='pour moi' selected>pour moi</option>
                      <option value='autre'>autre</option>");
            } elseif ($default['lien'] == 'autre') {
                echo("<option value='pour un parent'>pour un parent</option>
                        <option value='pour un.e ami.e'>pour un.e ami.e</option>
                        <option value='pour moi'>pour moi</option>
                        <option value='autre' selected>autre</option>");
            } else {
                echo("<option value='pour un parent' selected>pour un parent</option>
                      <option value='pour un.e ami.e'>pour un.e ami.e</option>
                      <option value='pour moi'>pour moi</option>
                      <option value='autre'>autre</option>");
            }
            ?>
 	    </select> </td>
    </tr> 
    <!-- Ligne pour l'âge de la personne' : input : type nombre -->
    <tr>
        <td> <b>Quel âge</b> à cette personne ? </td> 
        <td> <?php echo("<input type='number' id='age' name='age' class='form' value='".$default['age']."'>"); ?>  </td>
    </tr>
    <!-- Lignes pour l'adresse de la personne : imput -->
    <tr>
        <td> A quelle <b>adresse</b> habite-elle ? </td> 
        <td>  </td>
    </tr>
        <tr >
            <td class="sub-tr"> Code postal / Ville </td>
            <td> <?php echo("<input type='text' class='form' id='city' name='city' value='".$default['city']."'>"); ?> </td>
        </tr>
        <tr >
            <td class="sub-tr"> Adresse </td>
            <td> <?php echo("<input type='text' class='form' id='street' name='street' value='".$default['street']."'>"); ?> </td>
        </tr>
    <tr>
        <td> A quelle <b>fréquence</b> voulez-vous d'une aide ? </td>
        <td>
            <select id="frequency" class="form" name="frequency" > 
            <?php 
                $frequency = ['10'=>'tous les jours', '20'=>'une fois tous les deux jours', '30'=> 'moins de 3 fois par semaine', '40'=> 'une fois par semaine', '50'=> 'quelques fois par mois', '60'=> 'occasionnelement', '70'=> 'une fois seulement'];
                foreach($frequency as $id => $freq) {
                    echo("<option value='".$id."'>".$freq."</option>"); 
                }
            ?> 
            </select>
        </td>
    </tr>
    <tr>
        <td> De quels <b>services</b> avez-vous besoin ? </td>
        <td id = "checkbox-line"> 
            <?php 
            $checked = "";
            foreach($task_types as $id => $task) {
                if ($default[$id] === 0) {
                    $checked = "checked";
                } else {
                    $checked = "";
                }
                echo("
                <div >
                    <input type='checkbox' id='$id' name='$id' value='$task' class='checkbox' $checked>
                    <label for='$task'>$task</label>
                </div>
                ");
            }
            ?>
        </td>
    </tr>
</table>
<div id="button">
    <input type="submit" name="submit" value="Valider" id="submit"  class="s-common-button s-font-body s-action-button" >
    <input type="reset" name="Reset" value="Annuler" id="reset"  class="s-common-button s-font-body s-action-button" >
</div>
</form>
<div style="margin : 0px auto 30px auto; text-align: center; font-size: 20px; color: rgb(51 ,51, 51); font-weight: 400;">
<button onclick="remplirQuestionnaire()" style="border-color: 
                black; background-color :rgba(0, 0, 0, 0.1); border-width :
                    1px; border-style :solid; border-radius : 3px; width : auto; 
                    padding : 5px; box-shadow : rgb(69, 85, 108) 1px 1px 0px 0px; margin: 50px 0px 4px 0px; line-height: 21px; font-size :16px;">Remplir le formulaire pour la démonstration</button>

<script>
function remplirQuestionnaire() {
    document.getElementById('lien').value="pour un parent";
    document.getElementById('age').value=89;
    document.getElementById('city').value="29400 Landivisiau";
    document.getElementById('street').value="5 avenue du général de Gaulle";
    document.getElementById('frequency').value=20;
    document.getElementById('0').checked = false; //achat et livraison de courses
    document.getElementById('1').checked = true;  //repassage
    document.getElementById('2').checked = false; //vaisselle
    document.getElementById('3').checked = false; //jardinage
    document.getElementById('4').checked = false; //cuisine
    document.getElementById('5').checked = false; //jeu de société
    document.getElementById('6').checked = false; //discussion
    document.getElementById('7').checked = true;  //tâche administrative
}
</script>
</div>


