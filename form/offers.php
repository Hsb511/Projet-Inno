<br>
<?php
    //page d'affichage des offres ->  des abonnements

    $_SESSION["form_answer"] = $_POST; 
    echo("<style>  
    .encadre {
        background-color:white;
        border: 4px solid; 
        border-radius: 15px;
    }
    .titre-encadre {
        padding:16px;
        font-weight: bold; 
        font-size:23px;
        color:black;
    }
    #encadre-principal {
        border-color:rgb(255,111,34);
    }
    
    .encadre-text {
        font-size:18px;
        color:black; 
        margin: 0 16px;
        line-height:20px
    }
    .encadre-button {
        border-color: black; 
        background-color :rgba(0, 0, 0, 0.1); 
        border-width : 1px; 
        border-style :solid; 
        border-radius : 3px; 
        padding : 5px; 
        box-shadow : rgb(69, 85, 108) 1px 1px 0px 0px; 
        margin: 50px 0px 4px 0px; 
        line-height: 21px; 
        font-size :16px;
        width: 250px;
        text-align:center;
    }
    
    .encadre-principal-button {
        border-color: black; 
        background-color :rgba(0, 0, 0, 0.1); 
        border-width : 1px; 
        border-style :solid; 
        border-radius : 3px; 
        padding : 8px 20px 8px 20px; 
        box-shadow : rgb(69, 85, 108) 1px 1px 0px 0px; 
        margin: 180px 0px 4px 0px; 
        line-height: 23px; 
        font-size :24px;
        width: auto;
        text-align:center;
    }
    
    ");

    if ($_GET['form'] == 'blank') {
        echo("
        #encadre-principal, #encadre-sub-gauche, #encadre-sub-droit, #encadre-sub-milieu {
            width:45%; 
            min-height:38vh; 
        } 
        #encadre-principal {
            float:left;
            margin-left:3%; 
            margin-top:12px;
        }
        #encadre-sub-gauche {
            float: right;
            margin-right:3%;
            border-color:rgb(255,64,34);
        }
        #encadre-sub-milieu {
            float:right;
            margin-right:3%;
            margin-top:2%;
            border-color:rgb(56,89,156);
        }
        #encadre-sub-droit {
            float:left;
            margin-left:3%; 
            margin-top:2%;
            border-color:rgb(0,0,82);
        }
        #encadre-principal table
        {
            width : 100%; 
            margin: 40px auto  0px auto; 
            font-size : 18px;
        }
        #encadre-sub-gauche table
        {
            width : 100%; 
            margin: 40px auto  0px auto; 
            font-size : 18px;
        }
        #encadre-sub-milieu table
        {
            width : 100%; 
            margin: 40px auto  0px auto; 
            font-size : 18px;
        }
        #encadre-sub-droit table
        {
            width : 100%; 
            margin: 40px auto  0px auto; 
            font-size : 18px;
        }
        .encadre-button {
            border-color: black; 
            background-color :rgba(0, 0, 0, 0.1); 
            border-width : 1px; 
            border-style :solid; 
            border-radius : 3px; 
            padding : 5px; 
            box-shadow : rgb(69, 85, 108) 1px 1px 0px 0px; 
            margin: 50px 0px 4px 0px; 
            line-height: 21px; 
            font-size :16px;
            width: 250px;
            text-align:center;
        }
        #encadre-sub-droit strong
        {
            color :rgb(0,0,82); 
        }
        #encadre-sub-gauche strong
        {
            color :rgb(255,64,34); 
        }
        #encadre-sub-milieu strong
        {
            color :rgb(56,89,156); 
        }
        ");
        
    } elseif ($_GET['form'] == 'filled') {
        echo("
        #encadre-principal table
        {
            width : 80%; 
            margin: 100px auto  0px auto; 
            font-size : 28px;
        }
        .titre-encadre-principal {
            margin:16px;
            font-size:30px;
            color:black;
        }
        .encadre-text-principal {
            font-size:23px;
            color:black; 
            margin: 0 16px;
            line-height:20px
        }
        .encadre-sub {
            width:30%; 
            min-height:300px;
        }
        #encadre-principal {
            width:80%; 
            min-height:60vh; 
            margin:auto; 
        }
        #encadre-sub-gauche {
            margin-left:2%;
            float:left;
            border-color :rgb(0, 0, 82); 
        }
        #encadre-sub-milieu {
            margin:auto;
            border-color :rgb(0, 0, 82); 
        }
        #encadre-sub-droit {
            margin-right:2%;
            float:right;
            border-color :rgb(0, 0, 82); 
             
        }
        .encadre table
        {
            width : 100%; 
            margin: 10px auto  0px auto; 
        }
        .encadre-button {
            border-color: black; 
            background-color :rgba(0, 0, 0, 0.1); 
            border-width : 1px; 
            border-style :solid; 
            border-radius : 3px; 
            padding : 5px; 
            box-shadow : rgb(69, 85, 108) 1px 1px 0px 0px; 
            margin: 20px 0px 4px 0px; 
            line-height: 21px; 
            font-size :16px;
            width: 250px;
            text-align:center;
        }
        .encadre-sub strong
        {
            color :rgb(0, 0, 82); 
        }
        ");
    }
    echo("</style>");

?>

<div class= "encadre" id="encadre-principal">
    <?php 
    if ($_GET['form'] == 'filled') {
        echo("
            <p class= 'titre-encadre-principal'>
            Voici la formule qui correspond le plus à vos besoin : ");
    } else {
        echo("<p class = 'titre-encadre'>");
    }
    ?>
        <strong><b>Abonnement hebdomaire</b></strong> 
    </p>
    <?php 
    if ($_GET['form'] == 'filled') {
        echo("<p class= 'encadre-text-principal'>");
    } else {
        echo("<p class = 'encadre-text'>");
    }     
    ?>
    Vous bénéficiez d'une visite <b>toutes les semaines</b>. Voici les tarifs pour cet abonnement :
    </p>
    <form method = "post" action='index.php?page=create-account'>

    <table>
                <tr>
                    <td align='center'>
                        Durée de l'abonnement
                    </td>
                    <td align='center'>
                        2 mois
                    </td align='center'>
                    <td align='center'>
                        6 mois
                    </td>
                    <td align='center'>
                        1 an
                    </td>
                    <td align='center'>
                        Après 18 mois
                    </td>
                </tr>
                <tr>
                    <td align='center'>
                        Prix mensuel
                    </td>
                    <td align='center'>
                        261 €
                    </td>
                    <td align='center'>
                        248 €
                    </td>
                    <td align='center'>
                        228 €
                    </td>
                    <td align='center'>
                        209 €
                    </td>
                </tr>
            </table>
        <div style='margin : auto; width : 100%; text-align: center;'>
            <?php 
            if ($_GET['form'] == 'filled') {
                echo("<input type='submit' name='hebdomadaire' value='Choisir et se créer un compte' class='encadre-principal-button'>");
            } else {
                echo("<input type='submit' name='hebdomadaire' value='Choisir et se créer un compte' class='encadre-button'>");
            }  
           
            ?>
             
        </div>
    </form>
</div>
<br>
<div class = "encadre encadre-sub" id = "encadre-sub-gauche">
    <p class= "titre-encadre">
        <strong><b>Abonnement bihebdomadaire</b></strong>
    </p>
    <p class = "encadre-text">
        Vous pouvez bénéficier d'une visite <b>deux fois par semaine</b>. Voici les tarifs pour cet abonnement :
    </p>
    <form method = "post" action='index.php?page=create-account'>
        <table>
            <tr>
                <td align='center'>
                    Durée de l'abonnement
                </td>
                <td align='center'>
                    2 mois
                </td align='center'>
                <td align='center'>
                    6 mois
                </td>
                <td align='center'>
                    1 an
                </td>
                <td align='center'>
                    Après 18 mois
                </td>
            </tr>
            <tr>
                <td align='center'>
                    Prix mensuel
                </td>
                <td align='center'>
                    763 €
                </td>
                <td align='center'>
                    724 €
                </td>
                <td align='center'>
                    666 €
                </td>
                <td align='center'>
                    619 €
                </td>
            </tr>
        </table>
        <div style='margin : auto; width : 100%; text-align: center;'>
            <input type="submit" name="bihebdomadaire" value="Choisir et se créer un compte" class="encadre-button">
        </div>
    </form>
</div>
<div class = "encadre encadre-sub" id = "encadre-sub-droit" >
    <p class= "titre-encadre">
        <strong><b>Abonnement bimensuel</b></strong>
    </p>
    <p class = "encadre-text">
        Vous pouvez bénéficier d'une visite <b>toutes les deux semaines</b>. Voici les tarifs pour cet abonnement :
    </p>
    <form method = "post" action='index.php?page=create-account'>
        <table>
            <tr>
                <td align='center'>
                    Durée de l'abonnement
                </td>
                <td align='center'>
                    2 mois
                </td align='center'>
                <td align='center'>
                    6 mois
                </td>
                <td align='center'>
                    1 an
                </td>
                <td align='center'>
                    Après 18 mois
                </td>
            </tr>
            <tr>
                <td align='center'>
                    Prix mensuel
                </td>
                <td align='center'>
                    180 €
                </td>
                <td align='center'>
                    160 €
                </td>
                <td align='center'>
                    120 €
                </td>
                <td align='center'>
                    111 €
                </td>
            </tr>
        </table>
        
        <div style='margin : auto; width : 100%; text-align: center;'>
            <input type="submit" name="bimensuel" value="Choisir et se créer un compte" class="encadre-button">
        </div>
    </form>
</div>
<div class = "encadre encadre-sub" id="encadre-sub-milieu">
    <p class= "titre-encadre">
    <strong><b>Abonnement journalier</b></strong>
    </p>
    <p class = "encadre-text">
    Vous pouvez bénéficier d'une visite <b>tous les jours</b>. Voici les tarifs pour cet abonnement :
</p>
<form method = "post" action='index.php?page=create-account'>
    <table>
        <tr>
            <td align='center'>
                Durée de l'abonnement
            </td>
            <td align='center'>
                2 mois
            </td align='center'>
            <td align='center'>
                6 mois
            </td>
            <td align='center'>
                1 an
            </td>
            <td align='center'>
                Après 18 mois
            </td>
        </tr>
        <tr>
            <td align='center'>
                Prix mensuel
            </td>
            <td align='center'>
                1736 €
            </td>
            <td align='center'>
                1644 €
            </td>
            <td align='center'>
                1507 €
            </td>
            <td align='center'>
                1416 €
            </td>
        </tr>
    </table>
    <div style='margin : auto; width : 100%; text-align: center;'>
        <input type="submit" name="journalier" value="Choisir et se créer un compte" class="encadre-button">
    </div>
    </form>
</div>
<?php
    function findHelpers($city, $frequency, $tasks){

    }
?>
<br>
<br>