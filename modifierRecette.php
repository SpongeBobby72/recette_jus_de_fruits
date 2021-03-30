<?php
require ('config.php');
$nomRecettes = $dbh -> prepare("SELECT * FROM nomRecette WHERE id = ?");
$nomRecettes -> execute(array($_GET['id']));
$nomRecettes = $nomRecettes->fetch();

if (isset($_POST['plusabricot'])) {
    if ($_POST['plusabricot'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 1));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 1));
    }
}
if (isset($_POST['plusananas'])) {
    if ($_POST['plusananas'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 2));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 2));
    }
}
if (isset($_POST['pluscanelle'])) {
    if ($_POST['pluscanelle'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 3));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 3));
    }
}
if (isset($_POST['pluscarottes'])) {
    if ($_POST['pluscarottes'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 4));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 4));
    }
}
if (isset($_POST['pluscerise'])) {
    if ($_POST['pluscerise'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 7));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 7));
    }
}
if (isset($_POST['pluscitron'])) {
    if ($_POST['pluscitron'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 8));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 8));
    }
}
if (isset($_POST['pluscitrons verts'])) {
    if ($_POST['pluscitrons verts'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 9));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 9));
    }
}
if (isset($_POST['plusconcombre'])) {
    if ($_POST['plusconcombre'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 10));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 10));
    }
}
if (isset($_POST['plusfraise'])) {
    if ($_POST['plusfraise'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 11));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 11));
    }
}
if (isset($_POST['plusfraises'])) {
    if ($_POST['plusfraises'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 12));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 12));
    }
}
if (isset($_POST['plusgingembre'])) {
    if ($_POST['plusgingembre'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 13));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = array($ingRecettes['portion'], 1);
        $newIng = array_sum($newIngredient);
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIng, $_GET['id'], 13));
    }
}
if (isset($_POST['pluskiwis'])) {
    if ($_POST['pluskiwis'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 14));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 14));
    }
}
if (isset($_POST['plusoranges'])) {
    if ($_POST['plusoranges'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 15));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 15));
    }
}
if (isset($_POST['pluspamplemousse'])) {
    if ($_POST['pluspamplemousse'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 16));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 16));
    }
}
if (isset($_POST['pluspeches'])) {
    if ($_POST['pluspeches'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 17));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 17));
    }
}
if (isset($_POST['pluspomme'])) {
    if ($_POST['pluspomme'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 18));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 18));
    }
}
if (isset($_POST['pluspommes'])) {
    if ($_POST['pluspommes'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 19));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 19));
    }
}
if (isset($_POST['plustomate'])) {
    if ($_POST['plustomate'] == "+") {
        $ingRecettes = $dbh -> prepare("SELECT * FROM recettes WHERE recette_id = ? 
                                                AND ingredient_id = ?");
        $ingRecettes -> execute(array($_GET['id'], 20));
        $ingRecettes = $ingRecettes->fetch();
        $newIngredient = $ingRecettes['portion'] + 1;
        $ajoutIngredient = $dbh->prepare("UPDATE recettes SET portion`= ? 
                    WHERE recette_id = ? AND ingredient_id = ?");
        $ajoutIngredient->execute(array($newIngredient, $_GET['id'], 20));
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

<h2 style="text-align: center; margin: 60px 0"><?php echo $nomRecettes['nom'] ?></h2>
<ul style="margin: 20px auto; width: 335px;">Ingrédients :<br>
    <?php
    $recette = $dbh->prepare("SELECT ingredients.nom, ingredients.image, recettes.portion 
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
            <input style="width: 40px; height: 20px;" type="submit" name="plus<?php echo $ingredient['nom'] ?>" value="+">
            <input style="width: 40px; height: 20px;" type="submit" name="moins<?php echo $ingredient['nom'] ?>" value="-">
        </form>
        <br>
        <?php
    }
    ?>
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