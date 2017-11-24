<?php
session_start();
#structure de base de toute page de l'espace perso d'un user. Elle importe d'autre fichiers php pour se remplir
if(isset($_POST["username"])){
    //stockage du username dans les infos de session
    $_SESSION["username"] = $_POST["username"];
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
            //vérification que l'on s'est connecté avec l'un des 3 comptes de démo.
            if ((isset($_POST['username']) && ($_POST['username'] == 'PauletteDubois' || $_POST['username'] == 'Vero45' || $_POST['username'] == 'max38')) || (isset($_SESSION['username']) && ($_SESSION['username'] == 'PauletteDubois' || $_SESSION['username'] == 'Vero45' || $_SESSION['username'] == 'max38'))){
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
                        echo "<p>";
                        print_r($_SESSION);
                        $_SESSION["coucou"]["a"] = $_SESSION["coucou"]["a"]+1;
                        echo "</p>";
                    }
                }

                //accueil
                else{
                    echo "<p>Bienvenue sur votre espace personnel. D'ici, vous pouvez gérer toutes vos intéractions et services liés à proxygeia.</p> <br/>";
                    echo "<img alt='bienveillance' src='http://www.miramas.org/sites/default/files/aide_au_maintient_a_domicile.jpg'/>";
                    echo "<p>";
                    print_r($_SESSION);
                    echo "</p>";
                }  
            } 
            else{
                //c'est moche de faire ça 
                echo "<script type='text/javascript'>location.href = '../connection.php';</script>";
            }

        ?>
    </body>

</html>