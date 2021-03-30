<?php
$nom = "Ajout d'une tâche";
require('../../back/config-sample.php');

try {
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  var_dump($e);
}


//On regarde si les variables existent et qu'elles ne contiennent pas de balises html ou javascript
$nom = isset($_POST['nom']) ? strip_tags($_POST['nom']) : '';
$img = isset($_POST['img']) ? strip_tags($_POST['img']) : '';
$type = isset($_POST['type']) ? $_POST['type'] : '';
if (isset($nom)
  && isset($img)
  && isset($type)) {
  $ajout_fruits = $db->prepare('INSERT INTO ingredients(nom, image, categorie_id)
                                    VALUES (:name, :img, :categorie)');
  $ajout_fruits->execute(array(
    ':name' => $nom,
    ':img' => $img,
    ':categorie' => $type,
  ));
}
   else {
    echo 'vous n\'avez pas tout rempli';
  }

$liste_category = $db->prepare('SELECT id, nom FROM categories');
$liste_category -> execute();
$liste_category = $liste_category -> fetchAll();

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>formulaires</title>
</head>
<body>
<div class="container1">
  <div class="false_card">
    <h2>Ajouter une tâche</h2>
    <form action="formulaire-ingredients.php" id="ajout_ingredient_form" method="post">
      <div id="nom-form">
        <label for="nom">Nom </label>
        <input type="text" id="nom" name="nom">
      </div>
      <div id="type-form">
        <label for="type">type</label>
        <select aria-label="Default select example" name="type" id="type">
          <?php
          foreach ($liste_category as $liste) {
            {
              ?>
              <option value="<?php echo $liste['id']; ?>"> <?php echo $liste['nom']; ?></option>
              <?php
            }}
          ?>
        </select>
      </div>
      <div id="img-form">
        <label for="img">Nom </label>
        <input type="file" id="img" name="img">
      </div>
      <div id="validation_tache">
        <input type="submit" value="Valider">
      </div>
      <div id="annulation_tache">
        <a href="admin.php" id="cancel">Annuler</a>
      </div>

    </form>
  </div>
</div>
</body>
</html>
