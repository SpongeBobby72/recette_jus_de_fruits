<?php

require ('../../back/config-sample.php');

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    var_dump($e);
}

$recettes = $db->prepare('SELECT * FROM `recettes`, `fruits`
WHERE recettes.ingredient_id = fruits.id ;');
$recettes->execute();

$toutesLesRecettes = [];

while ($recette = $recettes->fetch()) {
    foreach ($recette as $k => $v) {
        if (is_int($k) == true) {
            unset ($recette[$k]);
        }
    }
    $toutesLesRecettes[] = $recette;
}

var_dump($toutesLesRecettes);

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

<div id="recettes">
    <div id="recette">
        <h2><?php echo $recette['nom'] ?></h2>
        <div>
            <h3>Ingrédients :</h3>
            <ul>
                <li><?php echo $recette['nom']?></li>
                <li><?php echo $recette['nom']?></li>

            </ul>
        </div>
        <div><img src="<?php $recette['nom'] ?>" alt="<?php echo $recette['nom'] ?>"></div>
    </div>



</body>
</html>
