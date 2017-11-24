<?php
session_start();
#structure de base de toute page de l'espace perso d'un user. Elle import d'autre fichiers php pour se remplir
if(isset($_POST["username"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
}

?>


<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Proxygeia - connexion à votre espace perso</title>

    </head>


    <body>
        <?php
            //affichage du menu
            include_once "userMenu.php";

                //affichage du contenu de la page

                //contenu section famille
                if(isset($_GET["section"]) && $_GET["section"] == "familly"){
                    if(isset($_GET["page"]) && $_GET["page"]=="manageRelatives"){
                        include "familly/manageRelatives.php";
                    }
                }

                //contenu section helper                
                elseif(isset($_GET["section"]) && $_GET["section"] == "helper"){
                    if(isset($_GET["page"]) && $_GET["page"]=="listAnnounces"){
                        include "helper/listAnnounces.php";
                    }
                }

                //contenu section personne âgée dépendante
                elseif(isset($_GET["section"]) && $_GET["section"] == "pad"){
                    if(isset($_GET["page"]) && $_GET["page"]=="askForHelp"){
                        include "pad/askForHelp.php"; 
                    }
                }

                //accueil
                else{
                    echo "<p>Bienvenue sur votre espace personnel. D'ici, vous pouvez gérer toutes vos intéractions et services liés à proxygeia.</p> <br/>";
                    echo "<img alt='bienveillance' src='http://www.miramas.org/sites/default/files/aide_au_maintient_a_domicile.jpg'/>";
                }

        ?>
    </body>

</html>