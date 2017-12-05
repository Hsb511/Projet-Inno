<br>
<?php
    //page d'affichage des offres

    //print_r($_POST);
    $_SESSION["form_answer"] = $_POST; 
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
                            <div style = "background-color:white; width:80%; min-height:300px; color:rgb(255,111,34); margin:auto; border: 4px solid; border-radius: 15px;">
                                <p style="padding:16px; font-weight: bold; font-size:23px">Voici la formule qui correspond le plus à vos besoin :</p>
                                <div style="color:black; margin-left:8px; margin-right:8px; font-style:italic; line-height:20px">
                                    <p>
                                        Voici l'offre qui correspond le plus à vos besoin :
                                    </p>   
                                </div>
                            </div>
                            <div style="min-height:10%"><p>.</p></div>
                            <div style = "background-color:white; width:30%; min-height:300px; color:rgb(255,111,34); margin-left:2%; border: 4px solid; border-radius: 15px;float:left">
                                <p style="padding:16px; font-weight: bold; font-size:23px">Voici la formule qui correspond le plus à vos besoin :</p>
                                <div style="color:black; margin-left:8px; margin-right:8px; font-style:italic; line-height:20px">
                                    <p>
                                        Voici l'offre qui correspond le plus à vos besoin :
                                    </p>   
                                </div>
                            </div>
                            <div style = "background-color:white; width:30%; min-height:300px; color:rgb(255,111,34); margin-right:2%; border: 4px solid; border-radius: 15px;float:right">
                                <p style="padding:16px; font-weight: bold; font-size:23px">Voici la formule qui correspond le plus à vos besoin :</p>
                                <div style="color:black; margin-left:8px; margin-right:8px; font-style:italic; line-height:20px">
                                    <p>
                                        Voici l'offre qui correspond le plus à vos besoin :
                                    </p>   
                                </div>
                            </div>
                            <div style = "background-color:white; width:30%; min-height:300px; color:rgb(255,111,34); margin:auto; border: 4px solid; border-radius: 15px;">
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