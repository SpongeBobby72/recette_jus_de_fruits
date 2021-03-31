<?php
require('../../back/config-sample.php');
try {
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  var_dump($e);
}

$liste = $db->prepare("
    SELECT ingredients.nom,  image, c.id, ingredients.id FROM ingredients
  LEFT JOIN categories c on ingredients.categorie_id = c.id  ORDER BY ingredients.nom ASC  ");
$liste->execute();
$liste = $liste->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="">
  <title>Ingrédients</title>
</head>
<body>
  <div id="taches">
    <div class="tableau">
      <form action="ingredients.php" METHOD="get">
        <div class="table-responsive">
          <table class="table align-middle" id="tableau_tache">
            <?php
            foreach( $liste as $ingredient) {
              echo '<tr>';
              echo '<td class="nom"><strong>' . $ingredient['nom'] . '</strong>' . '</td>';
              echo '<td><img src="../assetsjus/' . $ingredient['image'].'.png" alt="image du fruit"></td>';
              echo '<td class="profil-tache" id="img-tache1"><a href="modification_tache.php?id=' . $ingredient['id'] . '">Modifier</td>';
              echo '<td class="profil-tache" id="img-tache2"><a href="suppression.php?id=' . $ingredient['id'] . '">Supprimer</a></td>';
              echo '</tr>';
            }
//
//                echo '<tr>';
//                echo '<td class="score"><strong>'.$tache['score'].'</strong>'.' ' .'<p>points</p>'.'</td>';
//                echo '<td class="date"><strong class="font">'.$tache['date_tache'].'</strong></td>';
//                echo '<td class="nom">'.$tache['name'].'</td>';
//                echo '<td class="statut" ><img src="images/icon_ponctuel.svg" alt="Ponctuelle"></td></li>';
//                if($tache['utilisateurs-id']==null) {
//                  echo '<td class="responsable" id="responsable-tableau"><img src="images/profil-picture.png" alt="avatar">Personne</td>';
//                }else{
//                  echo '<td class="responsable " id="responsable-tableau"><img src="images/profil-picture.png" alt="avatar">'.$tache['pseudo'].'</td>';
//                }
//                echo '<td class="profil-tache " id="img-tache1"><a href="modification_tache.php?id='.$tache['id'].'"><img src="images/icon_edit.svg" alt="formulaire modification"></a></td>';
//                echo '<td class="profil-tache" id="img-tache2"><a href="suppression_taches.php?id='.$tache['id'].'"><img src="images/icon_delete.svg" alt="formulaire suppression"></a></td>';
//                echo ' <td class="checkbox-tableau align-middle"><input type="checkbox" id="checkbox1"><label for="checkbox1"></label></td>';
//                echo '</tr>';
//
//              }}
            ?>
          </table>
      </form>
    </div>
  </div>
</body>
</html>
