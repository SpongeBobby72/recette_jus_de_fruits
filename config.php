<?php
//Informations que l on envoie pour la connection a la base de donnée


//$dsn = "mysql:host=localhost;dbname=lvtx7997_Recette_Jus_de_Fruits;port=3306;charset=utf8";
//$username = "lvtx7997_kevin";
//$password = "Gaby2105!mysql";

$dsn = "mysql:host=localhost;dbname=Juice-recipe;port=3306;charset=utf8";
$username = "root";
$password = "root";

try {
//    On se connecte à MariaDB
$dbh = new PDO($dsn, $username, $password );
}
//En cas d'erreur, on l'affiche et on arrete tout
catch (PDOException $e){
var_dump($e);
}

session_start();

