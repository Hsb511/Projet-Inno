<?php
#structure de base de toute page de l'espace perso d'un user. Elle import d'autre fichiers php pour se remplir
?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Proxygeia - connexion à votre espace perso</title>

    </head>


    <body>
        <?php
            include_once "userMenu.php";

                //affichage du contenu de la page
                if(isset($_GET["section"]) && $_GET["section"] == "familly"){
                    if(isset($_GET["page"]) && $_GET["page"]=="manageRelatives"){
                        include "familly/manageRelatives.php";
                    }
                }                
                elseif(isset($_GET["section"]) && $_GET["section"] == "helper"){
                    if(isset($_GET["page"]) && $_GET["page"]=="listAnnounces"){
                        include "helper/listAnnounces.php";
                    }
                }
                elseif(isset($_GET["section"]) && $_GET["section"] == "pad"){
                    if(isset($_GET["page"]) && $_GET["page"]=="askForHelp"){
                        include "pad/askForHelp.php"; 
                    }
                }


        ?>
    </body>

</html>