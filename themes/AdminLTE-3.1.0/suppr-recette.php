<?php

require('../../back/config-sample.php');

try {
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  var_dump($e);
}
// Requête pour récupérer les recettes de la base de données
$toutesLesRecettes = $db->prepare('SELECT * FROM `nomRecette` ;');
$toutesLesRecettes->execute();

$recettes = [];

while ($recette = $toutesLesRecettes->fetch()) {
  foreach ($recette as $k => $v) {
    if (is_int($k) == true) {
      unset ($recette[$k]);
    }
  }
  $recettes[] = $recette;
}

// Requête pour supprimer une recette de la base de données

if ( isset($_GET['delete_id']) ) {

  $recipeToDelete = $_GET['delete_id'];

  $suppr = $db->prepare('DELETE FROM `nomRecette` WHERE id = :id');
  $suppr->execute([
    'id' => $_GET['delete_id'],
  ]);

  header('Location:suppr-recette.php');
}

include 'header.php';

?>

<h1>Liste des recettes</h1>

<?php
  foreach ($recettes as $recette) {
?>
<div id="recettes">
  <div id="recette">
    <h2><?php echo $recette['nom'] ?> </h2><br>
 <?php echo '<p><a href="/themes/AdminLTE-3.1.0/suppr-recette.php?delete_id='.$recette['id'].'">Supprimer la recette</a></p>' ?>
  </div>

  <?php
  }
include 'footer.php';
?>
