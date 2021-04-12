<?php
require ('config.php');
$nomRecettes = $dbh -> prepare("SELECT * FROM nomRecette WHERE id = ?");
$nomRecettes -> execute(array($_GET['id']));
$nomRecettes = $nomRecettes->fetch();

$ings = $dbh -> prepare("SELECT * FROM ingredients");
$ings -> execute();
$ings = $ings -> fetchAll();

$idIngredient = $dbh -> prepare("SELECT * FROM ingredients WHERE nom = ?");

//Ajout d'une portion
if ((isset($_POST['plus']) && count($_POST['plus']) > 0)) {
    $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion = portion + 1 WHERE recette_id = ? 
                                                AND ingredient_id = ?");
    foreach ($_POST['plus'] as $ingredient => $signe) {
        $idIngredient->execute(array($ingredient));
        $idIngredient = $idIngredient->fetch();
        if ($signe == "+") {
            $ajoutIngredient->execute(array($_GET['id'], $idIngredient['id']));
        }
        header('Location: modifierRecette.php?id='.$_GET['id']);
    }
}

//Retrait d'une portion
if((isset($_POST['moins']) && count($_POST['moins']) > 0)){
    $retireIngredient = $dbh->prepare("UPDATE recettes SET portion = portion - 1 WHERE recette_id = ? 
                                                AND ingredient_id = ?");
    foreach ($_POST['moins'] as $ingredient => $signe) {
        $idIngredient->execute(array($ingredient));
        $idIngredient = $idIngredient->fetch();
        if ($signe == "-") {
            $retireIngredient->execute(array($_GET['id'], $idIngredient['id']));
        }
    }
    header('Location: modifierRecette.php?id='.$_GET['id']);
}
//Ajout d'un nouvel ingredient
if (isset($_POST['plusIng'])) {
    if (isset($_POST['ingSelect'])) {
        $ajoutIng = $dbh->prepare("INSERT INTO recettes(recette_id, ingredient_id, portion) VALUES (?, ?, ?)");
        $ajoutIng->execute(array($_GET['id'], $_POST['ingSelect'], 1));
    }
    header('Location: modifierRecette.php?id='.$_GET['id']);
}

//Suppression d'un ingredient
$suppIng = $dbh -> prepare("DELETE FROM recettes WHERE portion = 0");
$suppIng -> execute();


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
                            <?php
                            if (isset($_GET['id'])){
                                ?>
                                <li><a href="creerRecette.php?id=<?php echo $_GET['id']?>">Créer une recette</a></li>
                                <li><a href="voirRecette.php?id=<?php echo $_GET['id']?>">Voir nos recettes</a></li>
                                <?php
                            } else {
                                ?>
                                <li><a href="creerRecette.php">Créer une recette</a></li>
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
            <span class="close"><img src="themes/front-theme/HTML/assets/images/close2.png" alt="close"></span>
        </form>
    </div>
</header>
<!--============== End of Header ========================-->

<h2 style="text-align: center; margin: 60px 0"><?php echo $nomRecettes['nom'] ?></h2>
<ul style="margin: 20px auto; width: 335px;">Ingrédients :<br>
    <?php
    $recette = $dbh->prepare("SELECT ingredients.id, ingredients.nom, ingredients.image, recettes.portion 
                                                FROM `recettes` LEFT JOIN ingredients 
                                                ON ingredients.id = recettes.ingredient_id 
                                                WHERE recette_id = ?");
    $recette->execute(array($nomRecettes['id']));
    $recette = $recette -> fetchAll();
    foreach ($recette as $ingredient){
        ?>
        <li style="display: inline-block; margin: 15px 0">
            <?php echo $ingredient['portion']." ".$ingredient['nom'] ?>
        </li>
        <img style="width: 30px; display: inline-block;"
             src="assets%20jus/<?php echo $ingredient['image']?>"
             alt="<?php echo $ingredient['nom']?>">
        <form style="float: right;margin-top: 14px;" class="button+or-" method="post">
            <input style="width: 40px; height: 20px;" type="submit" name="plus[<?php echo $ingredient['nom'] ?>]" value="+">
            <input style="width: 40px; height: 20px;" type="submit" name="moins[<?php echo $ingredient['nom'] ?>]" value="-">
        </form>
        <br>
        <?php
    }
    ?>
    <form method="post">
        <select style="margin: 15px 0;" name="ingSelect" id="ingSelect">
            <option value="">Choisir un fruit</option>
            <?php
            foreach ($ings as $ing){
            ?>
            <option name="ingredient['<?php echo $ing['id']?>']" value="<?php echo $ing['id']?>"><?php echo $ing['nom']?></option>
            <?php
            }
            ?>
        </select>
        <input style="width: 40px; height: 20px;float: right; margin: 15px 45px 0 0" type="submit" name="plusIng" value="+">
    </form>
</ul>

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
