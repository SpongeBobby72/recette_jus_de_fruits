<?php
//Informations que l on envoie pour la connection a la base de donnée
$dsn = "mysql:host=localhost;dbname=Juice-recipe;port=3306;charset=utf8";
$username = "eleve";
$password = "bonjour";

try {
//    On se connecte à MariaDB
$dbh = new PDO($dsn, $username, $password );
}
//En cas d'erreur, on l'affiche et on arrete tout
catch (PDOException $e){
var_dump($e);
}

session_start();

