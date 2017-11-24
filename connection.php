<?php
session_start();
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

    </body>

</html>