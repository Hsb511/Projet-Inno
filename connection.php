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

    <!-- pour réinitialiser la démonstration-->
    <form action="connection.php" method="get">
        <input type="hidden" name="restartDemo" value="true">
        <input type="submit" value="redémarrer la démo">
        
    </body>

</html>

<?php
    /*structure du $_SESSION pour simuler la DB :
    username : string - username de la personne actuellement connectée
    profiles : array int (id) => (array lastName, firstName, birthdate, address, helpedBy => array profileID)
    accounts : array pseudo => (profileID, helps => array(profileIdOfHelped, task), manage=> array(profilId)). tasks is an enumeration of defined tasks
    */
    function fillBaseBD(){
        //construction de la DB
        $profiles = array(
            "0" => array('firstName' => 'Paulette', 'lastName' => 'Dubois', 'birthdate'=> '26/03/1935', 'address' => "3 rue du vieux Chemin, 39200 Saint-Claude", "helpedBy" => array("0"=>1)), 
            "1" => array('firstName' => 'Véronique', 'lastName' => 'Duval', 'birthdate'=> '26/03/1971', 'address' => "39 rue du général de Gaulle, 75000 Paris", "helpedBy" => array()), 
            "2" => array('firstName' => 'Maxime', 'lastName' => 'Turtille', 'birthdate'=> '26/03/1995', 'address' => "10 rue du vieux Chemin, 39200 Saint-Claude", "helpedBy" => array())
        );
        $accounts = array(
            "PauletteDubois" => array("profilID" => "0", "helps"=>array(), 'manage' => array()),
            "Vero45" => array("profilID" => "1", "helps"=>array(), 'manage' => array("0")),
            "max38" => array("profilID" => "2", "helps"=>array("0" => "courses"), 'manage' => array())
        );
    }

?>