<br>
<?php
    //page d'affichage des offres ->  des abonnements

    $_SESSION["form_answer"] = $_POST; 
    print_r($_POST);
    echo("<style>
    strong{
        color:rgb(255,111,34);
    }
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
        color:rgb(255,111,34);
    }
    #encadre-sub-gauche {
        color:rgb(255,64,34);
    }
    #encadre-sub-droit {
        color:rgb(0,0,82);
    }   
    #encadre-sub-milieu {
        color:rgb(56,89,156);
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
        width: 200px;
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
        }
        #encadre-sub-milieu {
            float:right;
            margin-right:3%;
            margin-top:2%;
        }
        #encadre-sub-droit {
            float:left;
            margin-left:3%; 
            margin-top:2%;
        }");
        
    } elseif ($_GET['form'] == 'filled') {
        echo("
        .encadre-button-principal {
            border-color: black; 
            background-color :rgba(0, 0, 0, 0.1); 
            border-width : 1px; 
            border-style :solid; 
            border-radius : 3px; 
            padding : 5px; 
            box-shadow : rgb(69, 85, 108) 1px 1px 0px 0px; 
            margin: 50px 0px 4px 0px; 
            line-height: 21px; 
            font-size : 24px;
            width: 300px;
            text-align:center;
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
            min-height:80vh; 
            margin:auto; 
        }
        #encadre-sub-gauche {
            margin-left:2%;
            float:left;
        }
        #encadre-sub-milieu {
            margin:auto;
        }
        #encadre-sub-droit {
            margin-right:2%;
            float:right;
             
        }");
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
                    <td>
                        Durée de l'abonnement
                    </td>
                    <td>
                        2 mois
                    </td>
                    <td>
                        6 mois
                    </td>
                    <td>
                        1 an
                    </td>
                    <td>
                        après 18 mois
                    </td>
                </tr>
                <tr>
                    <td>
                        Prix mensuel
                    </td>
                    <td>
                        261 €
                    </td>
                    <td>
                        248 €
                    </td>
                    <td>
                        228 €
                    </td>
                    <td>
                        209 €
                    </td>
                </tr>
            </table>
        <div style='margin : auto; width : 20%; text-align: center;'>
            <?php 
            if ($_GET['form'] == 'filled') {
                echo("<input type='submit' name='hebdomadaire' value='choisir et se créer un compte' class='encadre-button-principal'>");
            } else {
                echo("<input type='submit' name='hebdomadaire' value='choisir et se créer un compte' class='encadre-button'>");
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
        <div style='margin : auto; width : 20%; text-align: center;'>
            <input type="submit" name="bihebdomadaire" value="choisir et se créer un compte" class="encadre-button">
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
        <div style='margin : auto; width : 20%; text-align: center;'>
            <input type="submit" name="bimensuel" value="choisir et se créer un compte" class="encadre-button">
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
    <div style='margin : auto; width : 20%; text-align: center;'>
        <input type="submit" name="journalier" value="choisir et se créer un compte" class="encadre-button">
    </div>
    </form>
</div>
<?php
    function findHelpers($city, $frequency, $tasks){

    }
?>
<br>
<br>