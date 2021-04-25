<?php
require ('../config.php');
    $nom = (string) trim($_GET['nom']);
    $req = $dbh->prepare("SELECT * FROM nomRecette WHERE nom LIKE ? LIMIT 5");
    $req ->execute(array("%$nom%"));
    $req =$req->fetchAll();
    foreach ($req as $r) {
        ?>
        <div style="padding: 5px 0">
            <a href="modifierRecette.php?id=<?php echo $r['id']?>"
               style=" text-decoration: none; color: black; font-size: 14px"><?=$r['nom']?></a>
        </div>
        <?php
    }
?>