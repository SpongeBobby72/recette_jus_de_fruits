<?php

require('../../back/config-sample.php');

try {
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  var_dump($e);
}



$nomRecettes = $db->prepare('SELECT recettes.nom as recette, recettes.ingredient_id as ingrId, recettes.img img, ingredients.nom as ingrNom FROM `recettes`
    LEFT JOIN ingredients ON recettes.ingredient_id = ingredients.id
    ');
$nomRecettes->execute();


$recettes = [];

while ($recette = $nomRecettes->fetch()) {
  foreach ($recette as $k => $v) {
    if (is_int($k) == true) {
      unset ($recette[$k]);
    }
  }
  $recettes[] = $recette;
}

var_dump($recettes);


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
  foreach ($toutesLesRecettes as $recette) {
?>
<div id="recettes">
  <div id="recette">
    <h2><?php echo $recette['recette'] ?></h2>
    <div><img src="../../assets-jus/<?php echo $recette['img'] ?>" alt="<?php echo $recette['recette'] ?>"></div>
    <div>
      <h3>Ingrédients :</h3>
      <ul>
        <li><?php echo $recette['ingrNom'] ?></li>

      </ul>
    </div>
  </div>

  <?php
  }
  ?>

</body>
</html>
