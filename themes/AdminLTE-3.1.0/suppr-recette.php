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

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Liste des recettes</title>
</head>
<body>

<h1>Liste des recettes</h1>

<?php
  foreach ($recettes as $recette) {
?>
<div id="recettes">
  <div id="recette">
    <h2><?php echo $recette['nom'] . ' <a href="/themes/AdminLTE-3.1.0/suppr-recette.php?delete_id='.$recette['id'].'">Supprimer la recette</a>';

      ?></h2>
  </div>

  <?php
  }
  ?>

</body>
</html>
