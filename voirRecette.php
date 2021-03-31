<?php
require ('config.php');
?>

<!DOCTYPE html>
<html lang="en">
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
                            <li><a href="voirRecette.php">Voir nos recettes</a></li>
                        </ul><!--sub-menu-->
                    </li>
                </ul><!--menu-->
                <button type="button" class="menu-button">
                    <span></span>
                </button>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-3 text-center">
                <div class="logo"><a href="utilisateur.php"><img src="images/image18.jpg" alt="logo"></a></div>
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

<h2 style="text-align: center">NOS RECETTES</h2>
    <div style="text-align: center;" class="conteneur">
    <?php
    $nomRecettes = $dbh -> prepare("SELECT * FROM nomRecette");
    $nomRecettes -> execute();
    $nomRecettes = $nomRecettes->fetchAll();
    foreach ($nomRecettes as $nom){
        ?>
        <div style="display: inline-block;background-color: gold; margin: 50px; border-radius: 10px;">
            <img style="width: 100px; height: 100px; display: inline-block; margin: 30px 75px"
                     src="assets jus/<?php echo $nom['img'] ?>" alt="<?php echo $nom['nom'] ?>">
            <p style="text-align: center"><?php echo $nom['nom'] ?></p>
            <ul style="margin: 20px 39px;">Ingrédients :<br>
                <?php
                $recette = $dbh->prepare("SELECT ingredients.nom, ingredients.image, recettes.portion 
                                                FROM `recettes` LEFT JOIN ingredients 
                                                ON ingredients.id = recettes.ingredient_id 
                                                WHERE recette_id = ?");
                $recette->execute(array($nom['id']));
                $recette = $recette -> fetchAll();
                foreach ($recette as $ingredient){
                    ?>
                    <li style="display: inline-block">
                        <?php echo $ingredient['portion']." ".$ingredient['nom'] ?>
                    </li>
                    <img style="width: 30px; display: inline-block;"
                         src="assets%20jus/<?php echo $ingredient['image']?>"
                         alt="<?php echo $ingredient['nom']?>"><br>
                <?php
                }
                ?>
            </ul>
            <a style="float: right; margin: 0 10px 10px 0;"
               href="modifierRecette.php?id=<?php echo $nom['id'] ?>">Modifier</a>
        </div>
        <?php
        }
        ?>
    </div>

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