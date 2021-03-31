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
            <span class="price" style="color: gold;">12.99€</span>
            <a href="voirRecette.php" class="custom-btn text-center yellow">Nos meilleures recettes</a>
        </div><!--text-slider-->
    </div><!--item-->
    <div class="item slide-three">
        <img src="images/detox-1995433_1920.jpg" alt="slider">
        <div class="text-slider last">
            <h2>Un large choix de jus de légumes<br><span class="text-pink">17€</span></h2>
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
<!--=================== Product Slider =======================-->
<div class="container-large">
    <div class="product-slider">
        <div class="title-head">
            <h2 class="text-black">Quelle tendance</h2>
        </div>
        <div class="slider-product owl-carousel owl-theme">
            <div class="item">
                <div class="product">
                    <div class="images text-center">
                        <a href="single-product.html"><img src="http://via.placeholder.com/160x230" alt="product1"></a>
                        <div class="button-group">
                            <a href="cart.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
                            <a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
                        </div><!--button-group-->
                    </div><!--images-->
                    <div class="info-product">
                        <a href="single-product.html" class="title">Daiya - Cheddar</a>
                        <span class="price">$20</span>
                    </div><!--info-product-->
                </div><!--product-->
            </div>
            <div class="item">
                <div class="product">
                    <div class="images text-center">
                        <a href="single-product.html"><img src="http://via.placeholder.com/160x230" alt="product2"></a>
                        <div class="button-group">
                            <a href="cart.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
                            <a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
                        </div><!--button-group-->
                    </div><!--images-->
                    <div class="info-product">
                        <a href="single-product.html" class="title">Vegan Burger - Veggie Mix</a>
                        <span class="price">$9.99</span>
                    </div><!--info-product-->
                </div><!--product-->
            </div>
        </div><!--slider-product-->
    </div><!--product-slider-->
</div>
<!--=============== End of Product Slider ===================-->
<div class="container-large">
    <div class="big-banner">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="text">
                    <h2>Débloque ton potentiel<br>avec notre selection</h2><br>
                    <a href="voirRecette.php" class="custom-btn text-center white">Voir les recettes</a>
                </div><!--text-->
            </div>
        </div>
    </div><!--big-banner-->
</div>
    <!--===================== Schedule ========================-->
    <div class="container-large">
        <div class="schedule">
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="inside">
                        <div class="title-head">
                            <h2 class="text-black">Des boissons saines pour un corps sain</h2>
                            <p>Par la Dream Team</p>
                        </div>
                        <ul class="week nav nav-tabs">
                            <li><a href="#sunday" data-toggle="tab">S</a></li>
                            <li class="active"><a href="#monday" data-toggle="tab" aria-expanded="true">M</a></li>
                            <li><a href="#tuesday" data-toggle="tab">T</a></li>
                            <li><a href="#wednesday" data-toggle="tab">W</a></li>
                            <li><a href="#thursday" data-toggle="tab">T</a></li>
                            <li><a href="#friday" data-toggle="tab">F</a></li>
                            <li><a href="#saturday" data-toggle="tab">S</a></li>
                        </ul><!--week-->
                        <div class="tab-content">
                            <div class="tab-pane fade" id="sunday">
                                <ul>
                                    <li class="first">Dimanche:</li>
                                    <li>Smoothie musclé</li>
                                    <li>3 abricots</li>
                                    <li>2 pêches</li>
                                    <li>1/2 citron</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade in active" id="monday">
                                <ul>
                                    <li class="first">Lundi:</li>
                                    <li>Soupe Tonic</li>
                                    <li>3 carottes</li>
                                    <li>1/2 citron vert</li>
                                    <li>6 rondelles de concombre</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tuesday">
                                <ul>
                                    <li class="first">Mardi:</li>
                                    <li>Booster</li>
                                    <li>5 carottes</li>
                                    <li>Cannelle</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="wednesday">
                                <ul>
                                    <li class="first">Mercredi:</li>
                                    <li> La journée des enfants</li>
                                    <li>1 concombre</li>
                                    <li>1 citron</li>
                                    <li>4 pommes</li>
                                    <li>Feuilles de menthe</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="thursday">
                                <ul>
                                    <li class="first">Jeudi:</li>
                                    <li>Tonus</li>
                                    <li>Gingembre</li>
                                    <li>3 carottes</li>
                                    <li>6 fraises</li>
                                    <li>3 rondelles de concombre</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="friday">
                                <ul>
                                    <li class="first">Vendredi</li>
                                    <li>Petit bonus de la semaine</li>
                                    <li>Mijito</li>
                                    <li>Feuilles de menthe</li>
                                    <li>10 glaçons</li>
                                    <li>Eau gazeuse</li>
                                    <li>2 cl de sucre de canne</li>
                                    <li>4 cl de rhum blanc</li>
                                    <li>1/2 citron vert</li>

                                </ul>
                            </div>
                            <div class="tab-pane fade" id="saturday">
                                <ul>
                                    <li class="first">Samedi:</li>
                                    <li>Le retour</li>
                                    <li>1 citron</li>
                                    <li>Feuilles de menthe</li>
                                    <li>Eau gazeuse</li>
                                </ul>
                            </div>
                        </div>
                        <a href="voirRecette.php" class="custom-btn text-center green">Découvrez!</a>
                    </div><!--inside-->
                </div>
            </div>
        </div><!--schedule-->
    </div>
    <!--====================== Posts ==========================-->
    <!--===================== Footer ========================-->
    <footer class="bg-yellow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe text-center">
                        <h2>Rejoins notre société secrète</h2>
                        <form>
                            <div class="form-group">
                                <input type="text" placeholder="Entres ton email...">
                                <div class="custom-btn bg-black text-yellow">entrer</div>
                            </div>
                        </form>
                    </div><!--subscribe-->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget-contact">
                        <h4 class="widget-title">contactez nous</h4>
                        <address>VIA Formation<br>Phone: +336 06 06 06 06<br>Email: via.info@viaformation.fr</address>
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
</body>
</html>