<br>
<?php
    //page d'affichage des offres ->  des abonnements

    //print_r($_POST);
    $_SESSION["form_answer"] = $_POST; 
    //on détecte si l'utilisateur rentre les valeurs de la démo. 

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
    ");

    if ($_GET['form'] == 'blank') {
        echo("
        #encadre-principal {
            width:45%; 
            min-height:300px; 
            float:left;
            margin-left:3%; 
            margin-top:12px;
        }
        #encadre-sub-gauche {
            width:45%; 
            min-height:300px; 
            float: right;
            margin-right:3%;
        }
        #encadre-sub-milieu {
            width:45%; 
            min-height:300px; 
            float:right;
            margin-right:3%;
            margin-top:2%;
        }
        #encadre-sub-droit {
            width:45%; 
            min-height:300px; 
            float:left;
            margin-left:3%; 
            margin-top:2%;
        }");
        
    } elseif ($_GET['form'] == 'filled') {
        echo("
        .encadre-sub {
            width:30%; 
            min-height:300px;
        }
        #encadre-principal {
            font-size:24px;
            width:80%; 
            min-height:300px; 
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
    <p class= "titre-encadre">
        <?php if ($_GET['form'] == 'filled') {
            echo("Voici la formule qui correspond le plus à vos besoin : ");
        } ?>
        <strong><b>Abonnement hebdomadaire</b></strong> 
    </p>
    <p class = "encadre-text">
        Vous bénéficiez d'une visite tous les jours
    </p>
</div>
<br>
<div class = "encadre encadre-sub" id = "encadre-sub-gauche">
    <p class= "titre-encadre">
        <strong><b>Abonnement bihebdomadaire</b></strong>
    </p>
    <p class = "encadre-text">
        Vous pouvez bénéficier d'une visite 2 fois par semaine
    </p>
</div>
<div class = "encadre encadre-sub" id = "encadre-sub-droit" >
    <p class= "titre-encadre">
        <strong><b>Abonnement bimensuel</b></strong>
    </p>
    <p class = "encadre-text">
        Vous pouvez bénéficier d'une visite toutes les deux semaines
    </p>
</div>
<div class = "encadre encadre-sub" id="encadre-sub-milieu">
    <p class= "titre-encadre">
    <strong><b>Abonnement journalier</b></strong>
    </p>
    <p class = "encadre-text">
    Vous pouvez bénéficier d'une visite tous les jours
</p>
</div>
<?php
    function findHelpers($city, $frequency, $tasks){

    }
?>