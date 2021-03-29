<?php
$nom="Ajout d'une tâche";
require ('../../back/config-sample.php');

try {
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  var_dump($e);
}

if (!empty($_POST)) {
//On regarde si les variables existent et qu'elles ne contiennent pas de balises html ou javascript
  $nom = isset($_POST['nom']) ? strip_tags($_POST['nom']) : '';
  $img = isset($_POST['img']) ? strip_tags($_POST['img']) : '';
  if (is_numeric($_POST['type'])) {
    $type = isset($_POST['type']) ? strip_tags($_POST['type']) : '';
  }
}
if (isset($nom)
  && isset($img)
  && isset($type) ){
  if ($_POST['type']==='1'){
    //Préparation de la requête
    $ajout_legume = $db -> prepare('INSERT INTO Fruits(name, img)
                                    VALUES (:name, :img)');
    $ajout_legume -> execute(array(
      ':name' => $nom,
      ':img' => $img,
    ));
  }} else {
  echo"veuillez remplir tout les champs !";
}
//Je prépare la requête qui me permet de récupérer les tâches pour les afficher dans le tableau

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
        <input type="text" id="nom" name="nom" >
      </div>
      <div id="type-form">
        <label for="responsable">type</label>
        <select class="form-select" aria-label="Default select example" name="type">
          <option value="1">Fruit</option>
          <option value="2">Légume</option>
          <option value="3">Autre ingrédient</option>
        </select>
      </div>
      <div id="img-form">
        <label for="img">Nom </label>
        <input type="file" id="img" name="img" >
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
