<?php
session_start();
if (isset($_GET["restartDemo"]) && $_GET["restartDemo"]){
    $_SESSION = array();
}
?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Proxygeia - connexion à votre espace perso</title>

    </head>


    <body>
    <h1>Connectez vous à votre espace perso</h1>
    <form action="user/main.php" method="post">
    Nom d'utilisateur : 
    <input type="text" name="username"> <br/    >
    Mot de passe : 
    <input type="password" name="password"> <br/>
    
    <input type="submit" value="Entrer dans mon espace">

    </form>

    <p><u>Comptes de démo :</u> <br/>
        Paulette "PauletteDubois" Dubois <br/>
        Véronique "Vero45" Duval <br/>
        Maxime "max38" Turtille <br/></p>

    <form action="connection.php" method="get">
        <input type="hidden" name="restartDemo" value="true">
        <input type="submit" value="redémarrer la démo">
        
    </body>

</html>