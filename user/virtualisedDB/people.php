<?php


    //définition d'utilisateurs repérés par leur pseudo
    //Vero gère sa mère : PauletteDubois
    $users = array(
        "PauletteDubois" => array("profileID"=>"0",),
        "Vero45"         => array("profileID"=>"1"),
        "max38"          => array("profileID"=>"2",),
    );

    //chaque utilisateur correspind à un profil
    $profiles = array(
        "0"  => array("firstName" =>"Paulette", "lastName" => "Dubois", "address" => "3 rue du chateau 50214 Dufour", "birthdate" => "1935-03-26"),
        "1"  => array("firstName" =>"Véronique", "lastName" => "Gentil", "address" => "30 avenue du bois 75000 Paris", "birthdate" => "1970-06-12", "type" => "helped", "helpedBy"=> array(), "announces" => array("0", "1")),
        "2"  => array("firstName" =>"Maxime", "lastName" => "Petit", "address" => "14 rue du champs 50214 Dufour", "birthdate" => "1997-04-12", "type" => "helper", "helps" => array(), "announces" => array("0", "1")),
    );

    $announces = array(
        "0" => array("title" => "faire les courses", "description" => "Il faudrait que vous achetiez les produits suivant pour ma mère lors de votre prochaine visite", "reapeat" => "1 fois", "date" => "2017-12-06"),
        "1" => array("title" => "visite hebdomadaire", "description" => "rendez-visite à ma mère une fois par semaine et tenez-moi informé de son état", "reapeat" => "1 fois par semaine")
    )
?>