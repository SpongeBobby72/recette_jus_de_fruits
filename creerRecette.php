<?php
require ('config.php');
$reqFruits = $dbh -> prepare("SELECT * FROM ingredients");
$reqFruits -> execute();
$reqFruits = $reqFruits->fetchAll();
$compte = 1;
if (isset($_POST['submit'])){
    if (!empty($_POST['imageRecette']) && !empty($_POST['titreRecette'])) {
        if ($_POST['number1'] || $_POST['number2'] || $_POST['number3'] || $_POST['number4'] ||
            $_POST['number7'] || $_POST['number8'] || $_POST['number9'] || $_POST['number10'] ||
            $_POST['number11'] || $_POST['number12'] || $_POST['number13'] || $_POST['number14'] ||
            $_POST['number15'] || $_POST['number16'] || $_POST['number17'] || $_POST['number18'] ||
            $_POST['number19'] || $_POST['number20']) {
            if ($_POST['number1']){
                $reqAjoutFruits1 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits1 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 1, $_POST['number1']));
            }
            if ($_POST['number2']){
                $reqAjoutFruits2 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits2 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 2, $_POST['number2']));
            }
            if ($_POST['number3']){
                $reqAjoutFruits3 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits3 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 3, $_POST['number3']));
            }
            if ($_POST['number4']){
                $reqAjoutFruits4 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits4 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 4, $_POST['number4']));
            }
            if ($_POST['number7']){
                $reqAjoutFruits7 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits7 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 7, $_POST['number7']));
            }
            if ($_POST['number8']){
                $reqAjoutFruits8 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits8 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 8, $_POST['number8']));
            }
            if ($_POST['number9']){
                $reqAjoutFruits9 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits9 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 9, $_POST['number9']));
            }
            if ($_POST['number10']){
                $reqAjoutFruits10 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits10 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 10, $_POST['number10']));
            }
            if ($_POST['number11']){
                $reqAjoutFruits11 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits11 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 11, $_POST['number11']));
            }
            if ($_POST['number12']){
                $reqAjoutFruits12 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits12 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 12, $_POST['number12']));
            }
            if ($_POST['number13']){
                $reqAjoutFruits13 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits13 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 13, $_POST['number13']));
            }
            if ($_POST['number14']){
                $reqAjoutFruits14 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits14 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 14, $_POST['number14']));
            }
            if ($_POST['number15']){
                $reqAjoutFruits15 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits15 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 15, $_POST['number15']));
            }
            if ($_POST['number16']){
                $reqAjoutFruits16 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits16 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 16, $_POST['number16']));
            }
            if ($_POST['number17']){
                $reqAjoutFruits17 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits17 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 17, $_POST['number17']));
            }
            if ($_POST['number18']){
                $reqAjoutFruits18 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits18 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 18, $_POST['number18']));
            }
            if ($_POST['number19']){
                $reqAjoutFruits19 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits19 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 19, $_POST['number19']));
            }
            if ($_POST['number20']){
                $reqAjoutFruits20 = $dbh -> prepare("INSERT INTO `recettes`
                                (`nom`, `img`, `ingredient_id`, `portion`) VALUES (?,?,?,?)");
                $reqAjoutFruits20 ->execute(array($_POST['titreRecette'], $_POST['imageRecette'], 20, $_POST['number20']));
            }
        } else {
            echo $erreur = "Les portions sont limitées a 5";
        }
    }else {
        echo $erreur = "Il faut un titre et une image";
    }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Cinagro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5">
    <!-- Framework Css -->
    <link rel="stylesheet" type="text/css" href="themes/front-theme/HTML/assets/css/lib/bootstrap.min.css">
    <!-- Font Awesome / Icon Fonts -->
    <link rel="stylesheet" type="text/css" href="themes/front-theme/HTML/assets/css/lib/font-awesome.min.css">
    <!-- Owl Carousel / Carousel- Slider -->
    <link rel="stylesheet" type="text/css" href="themes/front-theme/HTML/assets/css/lib/owl.carousel.min.css">
    <!-- Video YouTube -->
    <link rel="stylesheet" type="text/css" href="themes/front-theme/HTML/assets/css/lib/lazyYT.min.css">
    <!-- Carousel- Slider / Vertical -->
    <link rel="stylesheet" type="text/css" href="themes/front-theme/HTML/assets/css/lib/slick.css">
    <!-- Responsive Theme -->
    <link rel="stylesheet" type="text/css" href="themes/front-theme/HTML/assets/css/responsive.css">
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
                        <li><a href="#">Logout</a></li>
                    </ul><!--right-top-bar-->
                </div>
            </div>
        </div>
    </div><!--top-bar-->
    <div class="container-large header">
        <div class="row">
            <div class="col-md-5 col-sm-4 col-xs-4">
                <ul class="menu">
                    <li><a href="utilisateur.php">Accueil</a></li>
                    <li class="children">
                        <a>Recettes</a>
                        <ul class="sub-menu">
                            <li><a href="creerRecette.php">Créer une recette</a></li>
                            <li><a href="modifierRecette.php">Modifier une recette</a></li>
                            <li><a href="voirRecette.php">Voir nos recettes</a></li>
                        </ul><!--sub-menu-->
                    </li>
                </ul><!--menu-->
                <button type="button" class="menu-button">
                    <span></span>
                </button>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-3 text-center">
                <div class="logo"><a href="utilisateur.php"><img src="themes/front-theme/HTML/assets/images/logo.png" alt="logo"></a></div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-5 text-right">
                <ul class="info-header">
                    <li><a href="#"><i class="fa fa-volume-control-phone"></i>+336 06 06 06 06</a></li>
                    <li class="search-icon"><a href="#"><i class="fa fa-search"></i>Rechercher</a></li>
                </ul><!--info-header-->
            </div>
        </div>
        <form class="search">
            <input type="text" placeholder="Search...">
            <span class="close"><img src="themes/front-theme/HTML/assets/images/close2.png" alt="close"></span>
        </form>
    </div>
</header>
<!--============== End of Header ========================-->

<h2 style="text-align: center">CREER VOTRE RECETTE</h2>

<h3 style="text-align: center; margin-top: 30px">Ingrédients</h3>
<form style="margin-bottom: 50px" method="post">
    <div style="display: block; text-align: center; margin: 50px">
        <label style="display: block; margin-bottom: 20px" for="titreRecette">Nom de la Recette: </label>
        <input type="text" name="titreRecette" id="titreRecette" placeholder="Nom">
    </div>
<?php
foreach ($reqFruits as $fruit){
?>
    <img style="width: 100px; height: 100px; display: inline-block; margin: 30px 75px"
         src="assets%20jus/<?php echo $fruit['image'] ?>" alt="<?php echo $fruit['nom'] ?>">
        <input style="width: 75px; padding: 10px; margin-left: -170px" type="number"
               name="number<?php echo $fruit['id'] ?>" id="number">
<?php
}
?>
    <input style="display: block; margin: 30px auto; padding: 10px;" name="imageRecette" type="file">
    <input style="display: block; margin: 50px auto; padding: 20px;"
           type="submit" name="submit" value="Créer">
</form>



<!--================= End of Footer =====================-->
</div><!--wrapper-->
<script src="themes/front-theme/HTML/assets/js/lib/jquery.js"></script>
<script src="themes/front-theme/HTML/assets/js/lib/bootstrap.min.js"></script>
<script src="themes/front-theme/HTML/assets/js/lib/owl.carousel.min.js"></script>
<script src="themes/front-theme/HTML/assets/js/lib/jquery-ui.min.js"></script>
<script src="themes/front-theme/HTML/assets/js/lib/TweenMax.min.js"></script>
<script src="themes/front-theme/HTML/assets/js/lib/lazyYT.js"></script>
<script src="themes/front-theme/HTML/assets/js/lib/masonry.pkgd.min.js"></script>
<script src="themes/front-theme/HTML/assets/js/lib/jquery.filterizr.min.js"></script>
<script src="themes/front-theme/HTML/assets/js/lib/slick.min.js"></script>
<script src="themes/front-theme/HTML/assets/js/lib/jquery.counterup.min.js"></script>
<script src="themes/front-theme/HTML/assets/js/lib/waypoints.min.js"></script>
<script src="themes/front-theme/HTML/assets/js/main.js"></script>
</body>
</html>