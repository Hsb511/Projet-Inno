<?php
//sauvegarde des annonces. Une annonce est composée d'un titre, d'une description, d'une date de fin, d'une fréquence (en visites par semaine), 
//d'un temps par viste, d'une liste de tâches qui peut varier, de la personne qui effectue l'annonce et de la personne aidée
$announces = array(
    "0" => array(   "title" => "visite hebdomadaire", 
                    "tasks" => array("1","2"), 
                    "description" => "rendez-visite à ma mère une fois par semaine et tenez-moi informé de son état",
                    "frequency" => 1,
                    "duration" => 2,
                    "helper" => "2",
                    "helped" => "0",
                    "endDate" => "2018-12-04"),
);

$tasks = array(
    "1" => array("comment" => "ma grand-mère aime bien jouer au scrabble", "task_type" => 5, "repeat"=>"yes"),
    "2" => array("comment" => "achetez du riz et 2 escalopes de veau", "task_type" => 0, "repeat"=>"no"),
);

$task_types = array(
    0=> "achat et livraison de courses",
    1=>"repassage",
    2=>"vaisselle",
    3=>"jardinage",
    4=>"cuisine",
    5=>"jeu de société",
    6=>"discussion",
    7=>"tâche administative",
);
?>