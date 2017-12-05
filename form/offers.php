<br>
<?php
    //page d'affichage des offres

    print_r($_POST);
    //on détecte si l'utilisateur rentre les valeurs de la démo. 
    //Si c'est le cas on affiche les annonces de démo.
    //Sinon on affiche qu'on va rechercher et recontacter la personne

    if (in_array($_POST["city"], ["Landivisiau", "LANDIVISIAU", '29400', '29400 Landivisiau', "29400 LANDIVISIAU"])
        && in_array($_POST["frequency"], ["une fois tous les deux jours", "moins de 3 fois par semaine", "une fois par semaine", "quelques fois par mois", "occasionnellement", "une fois seulement"]))

    //si l'on est sur cette page en étant loggé, on affiche la liste des offres
    if (isset($_SESSION["username"])){
        //affichage des offres
    }
    else{
        //affichage du nombre d'offres et invitation à se créer un compte
    }
?>

<?php
    function findHelpers($city, $frequency, $tasks){

    }
?>