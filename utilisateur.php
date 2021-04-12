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
                    <li><a href="#">Accueil</a></li>
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
            <input id="research" type="text" placeholder="Search...">
            <div id="result-search"></div>
            <span class="close"><img src="themes/front-theme/HTML/assets/images/close2.png" alt="close"></span>
        </form>
    </div>
</header>
<!--============== End of Header ========================-->
<!--===================== Base-Slider ========================-->
<div class="base-slider owl-carousel owl-theme">
    <div class="item">
        <img src="images/mojito.jpg" alt="slider">
        <div class="text-slider">
            <h2>La nature a toujours<br>pris soin de nous!</h2>
            <a href="voirRecette.php" class="custom-btn text-center yellow">Nos meilleures recettes</a>
        </div><!--text-slider-->
    </div><!--item-->
    <div class="item slide-two">
        <img src="images/herbs-3809512_1920.jpg" alt="slider">
        <div class="text-slider">
            <h2>Jus de fruits<br>bio</h2>
            <a href="voirRecette.php" class="custom-btn text-center yellow">Nos meilleures recettes</a>
        </div><!--text-slider-->
    </div><!--item-->
    <div class="item slide-three">
        <img src="images/detox-1995433_1920.jpg" alt="slider">
        <div class="text-slider last">
            <a href="voirRecette.php" class="custom-btn green text-center">Nos meilleures recettes</a>
        </div><!--text-slider-->
    </div><!--item-->
</div>

<!--================== End of Base-Slider ====================-->
<!--=================== Category Product =====================-->
<div class="container">
    <div class="category-product">
        <ul>
            <li>
                <a href="shop.html">
                    <img style="width: 115px; height: 150px;" src="images/286_margaritafrozen.jpg" alt="groceries">
                    <span>Frais</span>
                </a>
            </li>
            <li class="center">
                <a href="shop.html">
                    <img style="width: 115px; height: 150px;" src="images/jus-de-tomate.jpg" alt="pineapple">
                    <span>Bio</span>
                </a>
            </li>
            <li>
                <a href="shop.html">
                    <img style="width: 115px; height: 150px;" src="images/grenade.jpg" alt="corn">
                    <span>Santé</span>
                </a>
            </li>
        </ul>
    </div><!--category-product-->
</div>
<!--=============== End of Category Product ==================-->
    <!--===================== Footer ========================-->
    <footer class="bg-yellow">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget-contact">
                        <h4 class="widget-title">contactez nous</h4>
                        <address>Le roi de la recette<br>Email: roidelarecette@bestrecette.fr</address>
                    </div><!--widget-contact-->
                </div>
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2018 cinagro. Theme by <a href="https://fruitfulcode.com/">fruitfulcode</a></p>
            </div>
        </div>
        <div id="back-to-top"><i class="fa fa-angle-up"></i></div>
    </footer>
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
<script src="script.js"></script>
</body>
</html>