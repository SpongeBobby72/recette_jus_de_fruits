<?php
require('../../back/config-sample.php');
try {
$db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
var_dump($e);
}
$id = $_GET['id'];
$suppr = $db -> prepare("DELETE FROM ingredients WHERE id = :id");
$suppr -> execute(array(
  ':id' => $id
));
var_dump($db -> errorInfo());
exit();
header('Location:ingredients.php');
