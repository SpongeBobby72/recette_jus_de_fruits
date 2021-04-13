<?php
require('../config.php');
$reqFruits = $dbh -> prepare("SELECT * FROM ingredients");
$reqFruits -> execute();
$reqFruits = $reqFruits->fetchAll();
$compte = 1;
//var_dump($_POST);
if (isset($_POST['submit'])){
    if (!empty($_FILES['imageRecette']) && !empty($_POST['titreRecette'])) {
//        Création du nom et de l'image de la recette dans la base de données
        $reqRecette = $dbh -> prepare("SELECT * FROM nomRecette WHERE nom = ?");
        $reqRecette -> execute(array($_POST['titreRecette']));
        $reqRecette = $reqRecette ->rowCount();
        if ($reqRecette == 0) {
            $tailleMax = 2097152;
            if ($_FILES['imageRecette']['size'] <= $tailleMax) {
                $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
                $extensionUpload = strtolower(substr(strrchr($_FILES['imageRecette']['name'], "."), 1));
                if (in_array($extensionUpload, $extensionsValides)) {
                    $myUploadedFile = $_FILES["imageRecette"];
                    $tmpName = $myUploadedFile["tmp_name"];
                    $fileName = time() . '_' . $myUploadedFile['name'];
                    $resultat = move_uploaded_file($tmpName, "assets_jus/" . $fileName);
                    if ($resultat) {
                        $reqAjoutRecette = $dbh->prepare("INSERT INTO nomRecette (nom, img) VALUES (?, ?)");
                        $reqAjoutRecette->execute(array($_POST['titreRecette'], $fileName));
                        $reqRecette = $dbh->prepare("SELECT * FROM nomRecette WHERE nom = ?");
                        $reqRecette->execute(array($_POST['titreRecette']));
                        $reqRecette = $reqRecette->fetch();
                    }
                }
            }
        } else {
                    $tailleMax = 2097152;
                    if ($_FILES['imageRecette']['size'] <= $tailleMax) {
                        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
                        $extensionUpload = strtolower(substr(strrchr($_FILES['imageRecette']['name'], "."), 1));
                        if (in_array($extensionUpload, $extensionsValides)) {
                            $myUploadedFile = $_FILES["imageRecette"];
                            $tmpName = $myUploadedFile["tmp_name"];
                            $fileName = time() . '_' . $myUploadedFile['name'];
                            $resultat = move_uploaded_file($tmpName, "assets_jus/" . $fileName);
                            if ($resultat) {
                                $reqAjoutRecette = $dbh->prepare("UPDATE `nomRecette` SET `img`= ? WHERE nom = ?");
                                $reqAjoutRecette->execute(array($fileName, $_POST['titreRecette']));
                                $reqRecette = $dbh->prepare("SELECT * FROM nomRecette WHERE nom = ?");
                                $reqRecette->execute(array($_POST['titreRecette']));
                                $reqRecette = $reqRecette->fetch();
                            }
                        }
                }
        }

        $reqVoirRecette = $dbh -> prepare("SELECT * FROM recette WHERE recette_id = ?");
        $reqVoirRecette -> execute(array($reqRecette['id']));
        $reqVoirRecette = $reqVoirRecette -> rowCount();
        if ($reqVoirRecette == 0){
            if (isset($_POST['ingredient']) && count($_POST['ingredient']) > 0) {
                $reqAjoutFruits = $dbh->prepare("INSERT INTO `recette`
                                    (`recette_id`,`ingredient_id`, `portion`) VALUES (?,?,?)");
                foreach ($_POST['ingredient'] as $ingredient => $portion) {
                    if ($portion > 0) {
                        $reqAjoutFruits->execute(array($reqRecette['id'], $ingredient, $portion));
                    }
                }
            }
        }
    }else {
        echo $erreur = "Il faut un titre et une image";
    }
}

$portionNull = 0;
$reqSupIngRecette = $dbh -> prepare("DELETE FROM recette WHERE portion = ?");
$reqSupIngRecette -> execute(array($portionNull));

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Cinagro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5">
    <!-- Framework Css -->
    <link rel="stylesheet" type="text/css" href="../themes/front-theme/HTML/assets/css/lib/bootstrap.min.css">
    <!-- Font Awesome / Icon Fonts -->
    <link rel="stylesheet" type="text/css" href="../themes/front-theme/HTML/assets/css/lib/font-awesome.min.css">
    <!-- Owl Carousel / Carousel- Slider -->
    <link rel="stylesheet" type="text/css" href="../themes/front-theme/HTML/assets/css/lib/owl.carousel.min.css">
    <!-- Video YouTube -->
    <link rel="stylesheet" type="text/css" href="../themes/front-theme/HTML/assets/css/lib/lazyYT.min.css">
    <!-- Carousel- Slider / Vertical -->
    <link rel="stylesheet" type="text/css" href="../themes/front-theme/HTML/assets/css/lib/slick.css">
    <!-- Responsive Theme -->
    <link rel="stylesheet" type="text/css" href="../themes/front-theme/HTML/assets/css/responsive.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <!--===================== Header ========================-->
    <!--button-group-->
</div><!--images-->	<header>
    <div class="top-bar bg-black">
        <div class="container-large">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-right" style="width: 100%">
                    <ul>
                        <li><a href="deco.php">Logout</a></li>
                    </ul><!--right-top-bar-->
                </div>
            </div>
        </div>
    </div><!--top-bar-->
    <div class="container-large header">
        <div class="row">
            <div class="col-md-5 col-sm-4 col-xs-4">
                <ul class="menu">
                    <?php
                    if (isset($_GET['id'])){
                    ?>
                    <li><a href="utilisateur.php?id=<?php echo $_GET['id']?>">Accueil</a></li>
                    <?php
                    }else {
                    ?>
                    <li><a href="utilisateur.php">Accueil</a></li>
                    <?php
                    }
                    ?>
                    <li class="children">
                        <a>Recettes</a>
                        <ul class="sub-menu">
                            <li><a href="#">Créer une recette</a></li>
                            <?php
                            if (isset($_GET['id'])){
                                ?>
                                <li><a href="voirRecette.php?id=<?php echo $_GET['id']?>">Voir nos recettes</a></li>
                                <?php
                            } else {
                                ?>
                                <li><a href="voirRecette.php">Voir nos recettes</a></li>
                                <?php
                            }
                            ?>
                        </ul><!--sub-menu-->
                    </li>
                </ul><!--menu-->
                <button type="button" class="menu-button">
                    <span></span>
                </button>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-3 text-center">
                <div class="logo"><a href="utilisateur.php"><img style="width: 65px; height: 113px" src="images/image18.jpg" alt="logo"></a></div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-5 text-right">
                <ul class="info-header">
                    <li class="search-icon"><a href="#"><i class="fa fa-search"></i>Rechercher</a></li>
                </ul><!--info-header-->
            </div>
        </div>
        <form class="search">
            <input type="text" placeholder="Search...">
            <span class="close"><img src="../themes/front-theme/HTML/assets/images/close2.png" alt="close"></span>
        </form>
    </div>
</header>
<!--============== End of Header ========================-->

<h2 style="text-align: center">CREER VOTRE RECETTE</h2>

<h3 style="text-align: center; margin-top: 30px">Ingrédients</h3>
<form style="margin-bottom: 50px" method="post" enctype="multipart/form-data">
    <div style="display: block; text-align: center; margin: 50px">
        <label style="display: block; margin-bottom: 20px" for="titreRecette">Nom de la Recette: </label>
        <input type="text" name="titreRecette" id="titreRecette" placeholder="Nom">
    </div>
<?php
foreach ($reqFruits as $fruit){
?>
    <img style="width: 100px; height: 100px; display: inline-block; margin: 30px 75px"
         src="assets_jus/<?php echo $fruit['image'] ?>" alt="<?php echo $fruit['nom'] ?>">
        <input style="width: 75px; padding: 10px; margin-left: -170px" type="number" value="0"
               name="ingredient[<?php echo $fruit['id'] ?>]" id="number">
    <?php
}
?>
    <input style="display: block; margin: 30px auto; padding: 10px;" name="imageRecette" type="file">
    <input style="display: block; margin: 50px auto; padding: 20px;"
           type="submit" name="submit" value="Créer">
</form>



<!--================= End of Footer =====================-->
</div><!--wrapper-->
<script src="../themes/front-theme/HTML/assets/js/lib/jquery.js"></script>
<script src="../themes/front-theme/HTML/assets/js/lib/bootstrap.min.js"></script>
<script src="../themes/front-theme/HTML/assets/js/lib/owl.carousel.min.js"></script>
<script src="../themes/front-theme/HTML/assets/js/lib/jquery-ui.min.js"></script>
<script src="../themes/front-theme/HTML/assets/js/lib/TweenMax.min.js"></script>
<script src="../themes/front-theme/HTML/assets/js/lib/lazyYT.js"></script>
<script src="../themes/front-theme/HTML/assets/js/lib/masonry.pkgd.min.js"></script>
<script src="../themes/front-theme/HTML/assets/js/lib/jquery.filterizr.min.js"></script>
<script src="../themes/front-theme/HTML/assets/js/lib/slick.min.js"></script>
<script src="../themes/front-theme/HTML/assets/js/lib/jquery.counterup.min.js"></script>
<script src="../themes/front-theme/HTML/assets/js/lib/waypoints.min.js"></script>
<script src="../themes/front-theme/HTML/assets/js/main.js"></script>
</body>
</html>