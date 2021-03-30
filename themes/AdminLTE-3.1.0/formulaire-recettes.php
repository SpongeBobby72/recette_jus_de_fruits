<?php
$nom="Ajout d'une tâche";
require('juice-recipes/back/config-sample.php');
if (!empty($_POST)) {
//On regarde si les variables existent et qu'elles ne contiennent pas de balises html ou javascript
$score = isset($_POST['tache_score']) ? strip_tags($_POST['tache_score']) : '';
$description = isset($_POST['tache_description']) ? strip_tags($_POST['tache_description']) : '';
$type =  isset($_POST['tache_type']) ? strip_tags($_POST['tache_type']) : '';
$date = isset($_POST['date']) && !empty($_POST['date']) ? $_POST['date'] : date("Y-m-d");
//On vérifie si le responsable des tâches est bien un chiffre
if (is_numeric($_POST['tache_resp'])) {
    $responsable = isset($_POST['tache_resp']) ? strip_tags($_POST['tache_resp']) : '';
} else {
    $responsable = null;
}}
if (isset($score)
    && isset($description)
    && isset($type)
    && isset($date)) {
    //Préparation de la requête
    $ajout_tache = $db->prepare('INSERT INTO taches (score,name,type,`utilisateurs-id`, date)
                                                        VALUES (:score,:description,:tache_type,:responsable,:date)');
    $ajout_tache -> execute(array(
        ':score' => $score,
        ':description' => $description,
        ':tache_type' => $type,
        ':responsable' => $responsable,
        ':date' => $date,
        ));
} else {
    echo"veuillez remplir tout les champs !";
}
//Je prépare la requête qui me permet de récupérer les tâches pour les afficher dans le tableau
if (isset($id)) {
    $taches = $db->prepare("SELECT taches.score, date, taches.name,  `utilisateurs-id`, pseudo FROM taches LEFT JOIN utilisateurs ON utilisateurs.id=taches.`utilisateurs-id`  WHERE taches.id=:id ");
    $taches -> execute([
            ':id' => $id,
    ]);
    $taches = $taches -> fetch(PDO::FETCH_ASSOC);
}
// Je fait la requête qui sélectionne les noms des employés avec leur id
$liste_responsables = $db->prepare('SELECT id, pseudo FROM utilisateurs');
$liste_responsables -> execute();
$liste_responsables = $liste_responsables -> fetchAll();

?>

        <div class="container1">
            <div class="false_card">
                <h2>Ajouter une tâche</h2>
                <form action="ajout_tache.php" id="ajout_tache_form" method="post">
                    <div id="points">
                        <label for="score">Points</label>
                        <input type="number" id="score" name="tache_score" >
                    </div>
                    <div id="description_tache">
                        <label for="description">Description</label>
                        <input type="text" id="description" name="tache_description">
                    </div>
                    <div id="type" class="input-group mb-3">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons" id="type_tache">
                            <label for="tache_type">Type de tâche</label>
                            <label class="btn  active">
                                <input type="radio" name="tache_type" value="1" checked><img src="images/icon_reccurent.svg" alt="reccurente">Récurrente
                            </label>
                            <label class="btn ">
                                <input type="radio" name="tache_type" value="2"><img src="images/icon_ponctuel.svg" alt="ponctuelle">Ponctuelle
                            </label>
                        </div>
                    </div>
                    <div id="responsable_tache">
                        <label for="responsable">Responsable</label>
                        <select class="form-select" aria-label="Default select example" name="tache_resp">
                            <option value="">Personne</option>
                            <?php
                            foreach ($liste_responsables as $liste_responsable) {
                                {
                                    ?>
                                    <option value="<?php echo $liste_responsable['id']; ?>"> <?php echo $liste_responsable['pseudo']; ?></option>
                                    <?php
                                }}
                            ?>
                        </select>
                    </div>
                    <div id="date">
                        <label for="date">Date d'échéance</label>
                        <input type="date" id="date" name="date">
                    </div>
                    <div id="validation_tache">
                        <input type="submit" value="Valider">
                    </div>
                    <div id="annulation_tache">
                        <a href="taches.php" id="cancel">Annuler</a>
                    </div>

                </form>
            </div>
        </div>
