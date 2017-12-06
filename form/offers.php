<br>
<?php
    //page d'affichage des offres ->  des abonnements

    //print_r($_POST);
    $_SESSION["form_answer"] = $_POST; 
    //on détecte si l'utilisateur rentre les valeurs de la démo. 

    echo("<style>
    .encadre {
        background-color:white;
        border: 4px solid; 
        border-radius: 15px;
    }
    .titre-encadre {
        padding:16px;
        font-weight: bold; 
        font-size:23px
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
    <div style="color:black; margin-left:8px; margin-right:8px; font-style:italic; line-height:20px">
        Vous bénéficier
    </div>
</div>
<br>
<div class = "encadre encadre-sub" id = "encadre-sub-gauche">
    <p class= "titre-encadre">Voici la formule qui correspond le plus à vos besoin :</p>
    <div style="color:black; margin-left:8px; margin-right:8px; font-style:italic; line-height:20px">
            <strong><b></b></strong>
    </div>
</div>
<div class = "encadre encadre-sub" id = "encadre-sub-droit" >
    <p style="padding:16px; font-weight: bold; font-size:23px">Voici la formule qui correspond le plus à vos besoin :</p>
    <div style="color:black; margin-left:8px; margin-right:8px; font-style:italic; line-height:20px">
        <p>
            Voici l'offre qui correspond le plus à vos besoin :
        </p>   
    </div>
</div>
<div class = "encadre encadre-sub" id="encadre-sub-milieu">
    <p style="padding:16px; font-weight: bold; font-size:23px">Voici la formule qui correspond le plus à vos besoin :</p>
    <div style="color:black; margin-left:8px; margin-right:8px; font-style:italic; line-height:20px">
        <p>
            Voici l'offre qui correspond le plus à vos besoin :
        </p>   
    </div>
</div>
<?php
    function findHelpers($city, $frequency, $tasks){

    }
?>