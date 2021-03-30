<?php
require('../../back/config-sample.php');
try {
$db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
var_dump($e);
}
$id = $_GET['id'];
//Requete SQL pour supprimer le contact dans la base
$suppr = $db -> prepare("DELETE FROM ingredients WHERE id = " . $id);
$suppr -> execute();
header('Location:ingredients.php');
