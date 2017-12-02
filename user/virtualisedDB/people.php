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
        "0"  => array("firstName" =>"Paulette", "lastName" => "Dubois", "address" => "3 rue du chateau 50214 Dufour", "birthdate" => "26/03/1935"),
        "1"  => array("firstName" =>"Véronique", "lastName" => "Gentil", "address" => "30 avenue du bois 75000 Paris", "birthdate" => "12/06/1970"), "type" => "helped", "helpedBy"=> array(),
        "2"  => array("firstName" =>"Maxime", "lastName" => "Petit", "address" => "14 rue du champs 50214 Dufour", "birthdate" => "04/12/1997", "type" => "helper", "helps" => array()),
    );
?>