<?php
require("config.php");
try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    var_dump($e);
}

$recipes = $dbh->prepare('SELECT * FROM `recettes`;');
$recipes->execute();

$allRecipes = [];

while ($recipe = $recipes->fetch()) {
    foreach ($recipe as $k => $v) {
        if (is_int($k) == true) {
            unset ($recipe[$k]);
        }
    }
    $allRecipes[] = $recipe;
}

var_dump($allRecipes);
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
<div>
    <div class="wrapper">
        <!--===================== Header ========================-->
        <!--button-group-->
    </div><!--images-->
    <header>
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
                                <li><a href="#">Voir nos recettes</a></li>
                            </ul><!--sub-menu-->
                        </li>
                    </ul><!--menu-->
                    <button type="button" class="menu-button">
                        <span></span>
                    </button>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-3 text-center">
                    <div class="logo"><a href="utilisateur.php"><img
                                    src="themes/front-theme/HTML/assets/images/logo.png" alt="logo"></a></div>
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

    <h2 style="text-align: center">MODIFIER VOTRE RECETTE</h2>

    <h3 style="text-align: center; margin-top: 30px">Vous pouvez ajouter ou retirer un fruit ou un légume</h3><br><br>


    <!--    ajouter un film dans la base de données-->
    <?php
    if (isset($_POST['titre'])) {
        $film = $dbh->prepare("INSERT INTO recettes
    (nom, image, ingredient_id, portion)
    VALUE (:nom, :image, :ingredient_id, :portion)");
        $film->execute(
            array('nom' => $_POST['nom'],
                'portion' => NULL,
                'ingredient_id' => $_POST['ingredient_id'],
                'image' => $_POST['image'] ?? ''
            )
        );
        header("Location: modifierRecete.php");
    }
    ?>


    <form method="post" action="modifierRecette.php">
        <label for="cocktail"> Cocktail:</label>
        <input type="text" name="cocktail">
        <label for="fruit"> Fruit :</label>
        <input type="text" name="fruit">
        <label for="legume"> Légume : </label>
        <input type="text" name="legume">

        <input type="submit" value="Ajouter une recette">

    </form>


    <form>
        <input style="display: block; margin: 50px auto; padding: 20px;" type="submit" name="submit"
               value="Soumettre votre composition">
    </form>
</div>

<?php
$nameRecipes = $dbh->prepare("SELECT * FROM nomRecette");
$nameRecipes->execute();
$nameRecipes = $nameRecipes->fetchAll();
foreach ($nameRecipes as $nom){
?>
<div style="display: inline-block;background-color: gold; margin: 50px; border-radius: 10px;">
    <img style="width: 100px; height: 100px; display: inline-block; margin: 30px 75px"
         src="assets jus/<?php echo $nom['img'] ?>" alt="<?php echo $nom['nom'] ?>">
    <p style="text-align: center"><?php echo $nom['nom'] ?></p>
    <ul style="margin: 20px 39px;">Ingrédients :<br>
    </ul>
    <?php $nameRecipes = $dbh->prepare("SELECT * FROM nomRecette");
    $nameRecipes->execute();
    $nameRecipes = $nameRecipes->fetchAll();
    foreach ($nameRecipes as $nom){
    ?>
    <div style="display: inline-block;background-color: gold; margin: 50px; border-radius: 10px;">
        <img style="width: 100px; height: 100px; display: inline-block; margin: 30px 75px"
             src="assets jus/<?php echo $nom['img'] ?>" alt="<?php echo $nom['nom'] ?>">
        <p style="text-align: center"><?php echo $nom['nom'] ?></p>
        <ul style="margin: 20px 39px;">Ingrédients :<br>
            <?php
            $ingredientsRecette = $dbh->prepare('SELECT ingredients.nom FROM ingredients LEFT JOIN recettes r on ingredients.id = r.ingredient_id WHERE r.ingredient_id = :ingredient');
            $ingredientsRecette->bindParam(":ingredient", $recipe["ingredient_id"]);
            $ingredientsRecette->execute();
            $ingredientsRecette = $ingredientsRecette->fetch(PDO::FETCH_ASSOC);
            ?>
            <li>
                <?php
                echo $ingredientsRecette['nom'];
                $recipe = $dbh->prepare("SELECT ingredients.nom, ingredients.image, recettes.portion 
                                                FROM `recettes` LEFT JOIN ingredients 
                                                ON ingredients.id = recettes.ingredient_id 
                                                WHERE recette_id = ?");
                $recipe->execute(array($nom['id']));
                $recipe = $recipe->fetchAll();
                foreach ($recipe as $ingredient){
                ?>
            </li>
        </ul>
    </div>


    <li style="display: inline-block">
        <?php echo $ingredient['portion'] . " " . $ingredient['nom'] ?>
    </li>
    <img style="width: 30px; display: inline-block;"
         src="assets%20jus/<?php echo $ingredient['image'] ?>"
         alt="<?php echo $ingredient['nom'] ?>"><br>
    <?php
    }
    ?>

    <a style="float: right; margin: 0 10px 10px 0;"
       href="modifierRecette.php?id=<?php echo $nom['id'] ?>">Modifier</a>
    <?php
    }
    }
    ?>
</div>

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