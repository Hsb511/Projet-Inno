<head>
    
    
    <link rel="stylesheet" media="screen" href="./stylesheet2.css">
    
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
        if(!empty($_SESSION["form_answer"][$info])) {
            //On les passe comme valeurs par défaut
            $default[$info] = $_SESSION["form_answer"][$info];
        }    
    }
/*
Guillaume : 
Sur cette page je verrais bien un questionnaire qui demande l'âge de la vieille personne, l'adresse, la fréquence de visites, les services recherchés
Puis on valide et le site indique s'il y a des aidants disponibles pour le service recherché (et si oui combien).
Puis il demande de créer le compte avec la demande d'aide préremplie
*/
?>
<div class="s-bg-image s-bg-light-text s-bg-overlay s-new-hero-section s-section s-signup-section" style="margin-top:32px; background-repeat: no-repeat; background-size: cover; background-color: transparent; background-position: 50% 50%; background-image: url(&quot;./Proxygeia_files/Images/vieux_flous.png&quot;);">
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
    Créez votre compte dès à présent afin que nous vous recontactions et profiter de nos services !
</h1>
<?php
?>
<form method = "post" action='index.php?page=connection&event=new-account'>
<table id="table">
    <!-- Ligne pour le lien avec la personne dépendante : select : pour un parent, pour un ami, pour moi, autre -->
    <tr class="table-header"> 
        <td colspan="2"><b>A propos de la personne pour qui est destinée l'aide</b></td>
    </tr>
    <tr>
        <td>relation vis-à-vis de vous </td>
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
    <tr>
        <td> Nom de la personne aidée </td> 
        <td> <input type='text' id='lastNameHelped' name='lastNameHelped' class='form' > </td>
    </tr>
    <tr>
        <td> Prénom de la personne aidée </td> 
        <td> <input type='text' id='firstNameHelped' name='firstNameHelped' class='form' > </td>
    </tr>

    <!-- Ligne pour l'âge de la personne' : input : type nombre -->
    <tr>
        <td> <b>Age</b> de la personne ? </td> 
        <td> <?php echo("<input type='number' id='ageHelped' name='ageHelped' class='form' value='".$default['age']."'>"); ?>  </td>
    </tr>
    <!-- Lignes pour l'adresse de la personne : imput -->
    <tr>
        <td> Adresse de la personne aidée </td> 
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
        <td> Abonnement choisi </td>
        <td>
            <select id="formula" class="form" name="formula" > 
            <?php 
                $frequency = ['journalier' => "journalier", 'hebdomadaire'=>'hebdomadaire', 'bihebdomadaire'=>'bihebdomadaire', 'bimensuel' => 'bimensuel'];
                foreach($frequency as $id => $freq) {
                    echo($freq);
                    if (isset($_POST[$freq])){
                        echo("<option value='".$freq."' selected>".$freq." </option>"); 
                    }
                    else{
                        echo("<option value='".$freq."'>".$freq."</option>"); 
                    }
                }
            ?> 
            </select>
        </td>
    </tr>
    <tr>
        <td> Services demandés </td>
        <td id = "checkbox-line"> 
            <?php 
            $checked = "";
            foreach($task_types as $id => $task) {
                if (isset($_SESSION["form_answer"][$id])) {
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
    <tr><td>  </td><td></td></tr>
    <!-- a propos de la personne faisant la demande remplissant le formulaire -->
    <tr>
        <td colspan="2" class="table-header"><b>A propos de vous</b></td>
    </tr>
    <tr>
        <td> Nom d'utilisateur</td> 
        <td> <input type='text' id='username' name='username' class='form' > </td>
    </tr>
    <tr>    
        <td> Nom </td> 
        <td> <input type='text' id='lastName' name='lastName' class='form' > </td>
    </tr>
    <tr>
        <td> Prénom </td> 
        <td> <input type='text' id='firstName' name='firstName' class='form' > </td>
    </tr>
    <tr>
        <td> date de naissance </td> 
        <td> <input type='date' id='birthdate' name='birthdate' class='form' > </td>
    </tr>
    
    </table>
<div id="button">
    <input type="submit" name="submit" value="Valider" id="submit"  class="s-common-button s-font-body s-action-button" >
    <input type="reset" name="Reset" value="Annuler" id="reset"  class="s-common-button s-font-body s-action-button" >
</div>


</form>