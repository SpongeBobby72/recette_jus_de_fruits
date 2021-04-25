<?php
require '../config.php';
require 'includes/header.php';
?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Modification d'un ingrédient</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/">Ingrédient</a></li>
                        <li class="breadcrumb-item active">Modification</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">

                    <div class="box box-warning">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <?php
                            if ( isset($_POST['id']) ) {
                                $maj_ingredient = $dbh->prepare("UPDATE ingredients SET nom = :nom, categorie_id = :categorie_id
                                     WHERE id = :id ");
                                $maj_ingredient->execute([
                                   'id' => $_POST['id'],
                                   'nom' => isset($_POST['nom']) ? $_POST['nom'] : '',
                                   'categorie_id' => $_POST['categorie'],
                                ]);
                                header('Location: /admin/index.php');
                            } else if ( isset($_POST['nom'])) {
                                $photo = '';
                                if ( isset($_FILES['photo']) ) {
                                    $tailleMax = 2097152;
                                    if ($_FILES['photo']['size'] <= $tailleMax) {
                                        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
                                        $extensionUpload = strtolower(substr(strrchr($_FILES['photo']['name'], "."), 1));
                                        if (in_array($extensionUpload, $extensionsValides)) {
                                            $myUploadedFile = $_FILES["photo"];
                                            $tmpName = $myUploadedFile["tmp_name"];
                                            $fileName = time() . '_' . $myUploadedFile['name'];
                                            $resultat = move_uploaded_file($tmpName, "../assets_jus/" . $fileName);
                                            if ($resultat){
                                                $ajout_ingredient = $dbh->prepare("INSERT INTO ingredients (nom, categorie_id, image) VALUES (:nom, :categorie_id, :image)");
                                                $ajout_ingredient->execute([
                                                    "nom" => $_POST['nom'],
                                                    "categorie_id" => $_POST['categorie'],
                                                    "image" => $fileName,
                                                ]);
                                                header('Location: /admin/index.php');
                                            }
                                        }
                                    }
                                }

                            }
                            if ( isset($_GET['id']) ) {
                                $recup_ingredient = $dbh->prepare("SELECT * FROM ingredients WHERE id = :id");
                                $recup_ingredient->execute([
                                    "id" => $_GET['id'],
                                ]);
                                if ( $recup_ingredient->rowCount() > 0 ) {
                                    $ingredient = $recup_ingredient->fetch();
                                }
                            }
                            ?>
                            <form method="post" enctype="multipart/form-data">
                                <!-- text input -->
                                <?php
                                if ( isset($ingredient) ) {
                                    echo '<input type="hidden" name="id" value="'.$ingredient['id'].'">';
                                }
                                ?>
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" name="nom" class="form-control" placeholder="nom" value="<?php if ( isset($ingredient) ) {echo $ingredient['nom'];}?>">
                                </div>

                                <div class="form-group">
                                    <label for="categorie">catégorie</label>
                                    <select name="categorie" id="categorie">
                                        <option value="1">Fruit</option>
                                        <option value="2">Legume</option>
                                        <option value="3">Epice</option>
                                    </select>
                                </div>
                                
                                <?php
if ( isset($ingredient) && !empty($ingredient['photo'])) {
    echo '<img src="../images/'.$ingredient['photo'].'" width="150">';
}
                                ?>
                                
                                <div class="form-group">
                                    <label>Photo</label>
                                    <input type="file" name="photo">
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary"><?php if ( isset($ingredient) ) { echo 'Modifier';} else { echo 'Ajouter';}?></button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->

                    </div>

                </div>
                <!-- /.col-md-6 -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php
require 'includes/footer.php';
