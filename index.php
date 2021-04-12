<?php
require ('config.php');

$reqLogin = $dbh -> prepare("SELECT * FROM login WHERE identifiant = ? AND password = ?");

if (isset($_POST['submit'])){
    if (!empty($_POST['identifiant']) && !empty($_POST['pass'])){
        $id = $_POST['identifiant'];
        $pass = sha1($_POST['pass']);
        $reqLogin -> execute(array($id, $pass));
        $reqLogin = $reqLogin -> rowCount();
        if ($reqLogin !== 0) {
            $reqDroit = $dbh -> prepare("SELECT * FROM login WHERE identifiant = ? AND password = ?");
            $reqDroit -> execute(array($id, $pass));
            $reqDroit = $reqDroit -> fetch();
            if ($reqDroit['droit_id'] == 1) {
                header('Location: utilisateur.php?id='.$reqDroit['id']);
                $_SESSION['UtilisateurCourant'] =
                    new Utilisateur($reqDroit['id'], $id);
            } else if ($reqDroit['droit_id'] == 2) {
                header('Location: admin.php?id='.$reqDroit['id']);
                $_SESSION['UtilisateurCourant'] =
                    new Utilisateur($reqDroit['id'], $id);
            }
        }
    }
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../AdminLTE-3.1.0/dist/css/adminlte.css">
    <link rel="stylesheet" href="style.css">
    <title>identification</title>
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
    <link rel="stylesheet" href="styleIdentification.css">
</head>
<body>
    <div class="identification">
        <h1>identification</h1>
        <form method="post">
            <label for="identifiant">Identifiant: </label>
            <input type="text" name="identifiant" id="identifiant"><br>
            <label for="pass">Mot de passe: </label>
            <input type="password" name="pass" id="pass"><br>
            <input type="submit" name="submit" id="submit" value="Connection">
        </form>
    <!--<a href="admin.php">Administrateur</a>-->
    <!--</div>-->
    <!---->
    <!--<div>-->
    <!--<a href="utilisateur.php">Utilisateur</a>-->
    </div>
</body>
</html>
