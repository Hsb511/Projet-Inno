<?php


    //définition d'utilisateurs repérés par leur pseudo
    //Vero gère sa mère : PauletteDubois
    $users = array(
        "PauletteDubois" => array("profileID"=>"0", "notifications" => array()),
        "Vero45"         => array("profileID"=>"1", "notifications" => array()),
        "max38"          => array("profileID"=>"2", "notifications" => array()),
    );

    //chaque utilisateur correspind à un profil
    $profiles = array(
        "0"  => array("firstName" =>"Paulette", "lastName" => "Dubois", "street" => "3 rue du chateau", "city" => "50214 Dufour", "birthdate" => "1935-03-26"),
        "1"  => array("firstName" =>"Véronique", "lastName" => "Gentil", "street" => "30 avenue du bois", "city" => "75000 Paris", "birthdate" => "1970-06-12", "type" => "helped", "helpedBy"=> array("max38"), "announces" => array("0")),
        "2"  => array("firstName" =>"Maxime", "lastName" => "Petit", "street" => "14 rue du champs", "city" => "50214 Dufour", "birthdate" => "1997-04-12", "type" => "helper", "helps" => array("Vero45"), "announces" => array("0")),
        "3"  => array("firstName" =>"Jean", "lastName" => "Bouts", "street" => "2 place de l'église", "city" => "29400 Landivisiau", "birthdate" => "1996-07-12", "type" => "helper", "helps" => array(), "announces" => array()),
        "4"  => array("firstName" =>"Hugo", "lastName" => "Selle", "street" => "2 place de la mairie", "city" => "29400 Landivisiau", "birthdate" => "1994-11-22", "type" => "helper", "helps" => array(), "announces" => array()),
    );        

?>
