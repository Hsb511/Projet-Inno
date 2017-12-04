<?php
    //Valeurs par défaut
    $default= ['lien'=>"",'age'=>"",'city'=>"", 'street'=>""];
    
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
<div class="s-bg-image s-bg-light-text s-bg-overlay s-new-hero-section s-section s-signup-section" style="margin-top:32px; background-repeat: no-repeat; background-size: cover; background-color: transparent; background-position: 50% 50%; background-image: url(&quot;./Proxygeia_files/vieux_flous.png&quot;);">
    <div class="s-rva-text sixteen columns">
            <div class="s-title-group  ">
                <div class="s-subtitle">
                    <div class="s-component s-text">
                        <h4 class="">
                            <div class="s-component-content needsclick recursive s-font-heading  " style="outline: 0px; font-size:28px;"   tabindex="0"   role="textbox" aria-label="false">
                                <p><strong>Grâce aux réponses de ce formulaire, nous pourrons</strong></p>
                                <p><strong>trouver l'offre qui vous correspond le mieux</strong></p>
                            </div>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="s-title ">
                    <div class="s-component s-text">
                        <h1 style="font-size:42px"> 
                            <div class="s-component-content s-font-title" style="outline: 0px; color:rgb(255,111,34);" tabindex="0" role="textbox" aria-label="false">
                                <p>OU</p>
                            </div>
                        </h1>
                    </div>
                </div>
                <div class="s-subtitle">
                    <div class="s-component s-text">
                        <h4 class="">
                            <div class="s-component-content needsclick recursive s-font-heading  " style="outline: 0px; font-size:28px; margin-bottom:16px"   tabindex="0"   role="textbox" aria-label="false">
                                <p><strong>Consultez directement nos offres ici</strong></p>
                            </div>
                        </h4>
                    </div>
                </div>
                <div class="s-button-group ib s-component">
                    <a  class="s-common-button s-font-body s-action-button" 
                        href="index.php?page=form"
                        target="_blank" 
                        style="text-transform:uppercase">
                        Nos offres
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/*/Title styles/*/
#title{
    font-size:56px;
    margin-top:60px;
    color:rgb(255,111,34);
    text-align:center;
}

/*/Table styles /*/
#table {
    margin:16px auto;
    font-size: 32px;
}

td {
    padding:8px 32px;
}
.sub-tr{
    text-align:right;
    font-size:23px;
    padding:0px;
}

/*/ input / select styles /*/
select, input {
    width: 80%;
    background-color:lightgrey;
}
select {
    font-size:32px;
    font-family: Lato;
}
input {
    border:visible;
    border-color:black;
    border-width:1px;
    border-style:visible;
}
/*/ button styles /*/
#button {
    margin-top:32px;
    margin-bottom:80px;
}
#submit, #reset {
    width: 20%;
    padding: 16px;
    margin-bottom:60px;
    font-size:32px;
}
#submit {
    float:left;
    margin-left:23%;
}
#reset{
    float:right;
    margin-right:23%;
}
.s-common-button {
    background-color:rgb(255,111,34);
}
</style>
<h1 id="title"> 
    Formulaire
</h1>

<form method = "post" action='index.php?page=offre'>
<table id="table">
    <!-- Ligne pour le lien avec la personne dépendante : select : pour un parent, pour un ami, pour moi, autre -->
    <tr> 
        <td><b>Pour qui</b> cherchez vous de l'aide ? </td>
        <td><select id="lien"> 
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
        <td> <?php echo("<input type='text' name='nom' value='".$default['age']."'>"); ?>  </td>
    </tr>
    <!-- Lignes pour l'adresse de la personne : imput -->
    <tr>
        <td> A quelle <b>adresse</b> habite-elle ? </td> 
        <td>  </td>
    </tr>
    <tr >
        <td class="sub-tr"> Code postal / Ville </td>
        <td> <?php echo("<input type='text' name='nom' value='".$default['city']."'>"); ?> </td>
    </tr>
    <tr >
        <td class="sub-tr"> Adresse </td>
        <td> <?php echo("<input type='text' name='nom' value='".$default['street']."'>"); ?> </td>
    </tr>
</table>
<div id="button">
    <input type="submit" name="submit" value="Valider" id="submit"  class="s-common-button s-font-body s-action-button" >
    <input type="reset" name="Reset" value="Annuler" id="reset"  class="s-common-button s-font-body s-action-button" >
</div>
</form>
