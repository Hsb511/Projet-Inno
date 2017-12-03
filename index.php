<?php
    session_start();
    #structure de base de toute page de l'espace perso d'un user. Elle importe d'autre fichiers php pour se remplir
    
    //le site de démonstration de l'espace personnel a pour but d'exposer les mécanismes qui seront disponibles
    //il n'a pas pour but d'être optimisé ou sécurisé
    //Il n'y a pas de persistance. La démo est réinitialisée à chaque nouvelle démo.
    //Les infos d'une démo sont sauvegardées dans les variables de session.
    
    //si l'utilise vient de la page de connexion, son username sera passé en post.
    if(isset($_POST["username"])){
        include "user/virtualisedDB/people.php";
        //vérification que l'utilisateur est enregistré, sinon on redirige vers la page de connexion
        if (array_key_exists($_POST["username"], $users) == false){
            echo "<script type='text/javascript'>location.href = 'index.php?page=connection';</script>";
        }
        //on redirige vers la bonne page d'acceuil
        else{
            $_SESSION["username"] = $_POST["username"];
            //on cherche le type d'utilisateur de ce compte
            $type = $profiles[ $users[ $_POST["username"] ]["profileID"] ]["type"];
            echo "<script type='text/javascript'>location.href = 'index.php?zone=user&type=$type&page=homepage';</script>";
        }
        exit(); //ça évite de générer le reste
    }
?>
<!DOCTYPE html>
<!-- saved from url=(0048)https://www.strikingly.com/s/sites/11615441/edit -->
<html itemscope="" itemtype="http://schema.org/WebPage" lang="fr" xmlns="http://www.w3.org/1999/xhtml" class="wf-lato-n4-active wf-lato-n7-active wf-lato-i4-active wf-opensans-n4-active wf-opensans-n7-active wf-lora-i4-active wf-lora-i7-active wf-lora-n4-active wf-lora-n7-active wf-montserrat-n4-active wf-montserrat-n7-active wf-nunito-n4-active wf-nunito-n7-active wf-playfairdisplay-n4-active wf-playfairdisplay-n7-active wf-playfairdisplay-i4-active wf-playfairdisplay-i7-active wf-roboto-n3-active wf-roboto-n7-active wf-roboto-i7-active wf-lato-n3-active wf-dancingscript-n4-active wf-arvo-n7-active wf-abrilfatface-n4-active wf-lato-i7-active wf-worksans-n7-active wf-worksans-n6-active wf-worksans-n4-active wf-arvo-n4-active wf-vollkorn-i4-active wf-vollkorn-n4-active wf-unna-n4-active wf-titilliumweb-i7-active wf-titilliumweb-i3-active wf-titilliumweb-n7-active wf-titilliumweb-n3-active wf-sueellenfrancisco-n4-active wf-sourcesanspro-i7-active wf-sourcesanspro-i6-active wf-sourcesanspro-i4-active wf-sourcesanspro-i3-active wf-sourcesanspro-n7-active wf-sourcesanspro-n6-active wf-sourcesanspro-n4-active wf-sourcesanspro-n3-active wf-robotoslab-n7-active wf-robotoslab-n3-active wf-robotocondensed-n7-active wf-robotocondensed-n3-active wf-roboto-i3-active wf-raleway-n7-active wf-raleway-n3-active wf-ptsansnarrow-n7-active wf-ptsansnarrow-n4-active wf-parisienne-n4-active wf-opensans-n6-active wf-opensans-n3-active wf-opensans-i7-active wf-opensans-i6-active wf-opensans-i4-active wf-opensans-i3-active wf-oldstandardtt-i4-active wf-oldstandardtt-n7-active wf-oldstandardtt-n4-active wf-josefinslab-i7-active wf-josefinslab-i4-active wf-josefinslab-n7-active wf-josefinslab-n4-active wf-istokweb-n7-active wf-istokweb-n4-active wf-istokweb-i7-active wf-istokweb-i4-active wf-greatvibes-n4-active wf-dancingscript-n7-active wf-chewy-n4-active wf-cardo-i4-active wf-cardo-n7-active wf-cardo-n4-active wf-bitter-i4-active wf-bitter-n7-active wf-bitter-n4-active wf-badscript-n4-active wf-arvo-i7-active wf-arvo-i4-active wf-archivonarrow-i7-active wf-archivonarrow-i4-active wf-archivonarrow-n7-active wf-archivonarrow-n4-active wf-lato-i3-active wf-active">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Compte Proxygeia</title>

    <meta content="width=device-width,initial-scale=1.0,user-scalable=yes,minimum-scale=1.0,maximum-scale=3.0" id="viewport" name="viewport">
    <link href="./Proxygeia_files/logo3.png" rel="shortcut icon" type="image/x-icon">

    <link rel="stylesheet" media="screen" href="./Proxygeia_files/editor.8d35e9c6b8cf8126cee9.bundle.css">
    <link rel="stylesheet" media="screen" href="./Proxygeia_files/main_v4_editor.6cf9cd30433bcfb50ea4.bundle.css">

    <meta name="csrf-param"s-navbar-section content="authenticity_token">
    <meta name="csrf-token" content="bwTgmMX7SuGqhLDjdkTz0v5rd7JSPs+eFQLtVOpCCldmuMF/cJW4BKAEYbTremNnkMAxZXKOJej+hADXc5PS7Q==">
    <meta name="asset-url" content="https://static-assets.strikinglycdn.com">
    </head>
<?php
    $pageToInclude = "";
    // contenus des pages relatives au compte
    //page de connexion
    if(isset($_GET["page"])) {
        $menu = [["Proxygéia","#proxygeia","./Proxygeia.html"],["Fonctionnalités","#fonctionnalites","./Proxygeia.html"],["Témoignages","#temoignages","./Proxygeia.html"],["Particuliers","#particulier","./Proxygeia.html"],["Contactez-nous","#contact","./Proxygeia.html"]] ; 
        if ($_GET["page"]=="connection") {
           $pageToInclude = "connection.php" ;
        } elseif ($_GET["page"]=="form") {
            $pageToInclude = "form/form.php";
        }
    }
    //Zone user
    elseif(isset($_GET["zone"]) && $_GET["zone"] == "user"){
        //définition d'une variable bien pratique pour générer les pages
        $profile = $_SESSION["profiles"][  $_SESSION["users"][$_SESSION["username"]]["profileID"]   ];

        //Type helper
        if (isset($_GET["type"]) && $_GET["type"] == "helper"){
            $menu = [["Tableau de bord","./index.php?zone=user&type=helper&page=homepage",""],
                    ["Proposer de l'aide","./index.php?zone=user&type=helper&page=my-actions",""],
                    ["Mes messages","./index.php?zone=user&type=helper&page=notifications",""],
                    ["Gérer mes aides","./index.php?zone=user&type=helper&page=list-announces",""],
                    ["Déconnexion","./index.php?page=connection",""]] ;  
            //affichage suivant la page
            if(isset($_GET["page"]) && $_GET["page"] == "my-actions"){
                $pageToInclude = "./user/helper/my_actions.php";
            }
            elseif(isset($_GET["page"]) && $_GET["page"] == "notifications"){
                $pageToInclude = "./user/helper/notifications.php";                
            }
            elseif(isset($_GET["page"]) && $_GET["page"] == "list-announces"){
                $pageToInclude = "./user/helper/listAnnounces.php";                
            }
            //page d'accueil
            else{
                $pageToInclude = "./user/helper/homepage.php";                
            }
        }


        //Type helped
        if (isset($_GET["type"]) && $_GET["type"] == "helped"){
            $menu = [["Tableau de bord","./index.php?zone=user&type=helped&page=homepage",""],
                    ["Demander une aide","./index.php?zone=user&type=helped&page=search-help",""],
                    ["mes messages","./index.php?zone=user&type=helped&page=notifications",""],
                    ["Gérer ma famille","./index.php?zone=user&type=helped&page=manage-operations",""],
                    ["Déconnexion","./index.php?page=connection",""]] ; 
            //affichage suivant la page
            //page de demande d'aide
            if(isset($_GET["page"]) && $_GET["page"] == "search-help"){
                
            }
            //page de suivi des opérations
            elseif(isset($_GET["page"]) && $_GET["page"] == "manage-operations"){
                $pageToInclude = "./user/helped/manage-operations.php";
            }
            //page de suivi de nouvelle demande d'aide
            elseif(isset($_GET["page"]) && $_GET["page"] == "new-help"){
                $pageToInclude = "./user/helped/new-help.php";
            }
            //page d'accueil
            else{
                
            }
        }
    }
?>

<body class="edit locale-fr product-strikingly s-mouse-enabled" style="font-family: lato;" id="sites"> 


<div class="s-navbar-section">
    <!-- navbar -->
    <div class="navigator" id="header-container">
        <div class="columns sixteen">
            <div class="header-wrapper">
                <div class="logo-container" style="float:left; margin-left :8px;">
                    <div class="logo-image"  >
                        <div class="s-component s-image">
                            <span>
                                <div class="s-component-content">
                                    <div>
                                        <img src="./Proxygeia_files/logo3.png" alt="" title="" class="crop-default" data-description="">
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="logo-text">
                        <div class="s-component s-text">
                            <div class="s-component-content needsclick recursive s-font-title  " style="outline: 0px; color:rgb(255, 111, 34);" tabindex="0" role="textbox" aria-label="false">
                                <p>Le bien vieillir à domicile !</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-container" >
                    <ul class="s-nav" style="font-size:23px;">
                        <?php 
                            foreach($menu as $col => $value)
                            {
                                echo("
                                    <li>
                                        <a class='s-nav-item' href='".$value[2].$value[1]."'>
                                            <span class='s-font-body'>".$value[0]."</span>
                                        </a>
                                    </li>
                                ");
                            }
                        ?>      
                    </ul>
                </div>
                <div class="s-button-group ib s-component" style="float:right;  margin-right:8px;margin-left: 23px;">
                    <a class="s-common-button s-font-body s-action-button" href="./index.php?page=connection" style="background-color:rgb(255, 111, 34);" target="_blank">
                        MON COMPTE
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-wrapper">    
    <ul class="slides ">          
        <li>
            <div style="margin-top:80px; margin-bottom:80px;"></div>
        </li>
        <li>
            <?php
                include $pageToInclude;
            ?>
        </li>
    </ul>
</div>
</body>
</html>
