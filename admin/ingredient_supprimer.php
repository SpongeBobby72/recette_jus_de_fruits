<?php
require '../config.php';
require 'includes/header.php';

$id = $_GET['id'];

$reqIngredient = $dbh -> prepare("SELECT * FROM ingredients WHERE id = ?");
$reqIngredient -> execute(array($id));
$reqIngredient = $reqIngredient -> fetch();

if (isset($_POST['non'])) {
    header('Location: index.php');
}

if (isset($_POST['oui'])) {
    $reqSupIng = $dbh ->prepare("DELETE FROM ingredients WHERE id = :id");
    $reqSupIng -> bindValue(":id", $id);
    $res = $reqSupIng -> execute();
    header('Location: index.php');
}

?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Voulez-vous vraiment supprimer <?php echo $reqIngredient['nom'] ?></h1>
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
                            <form method="post">
                                <!-- text input -->
                                <div class="form-group">
                                    <input style="display: inline-block; width: 60px; background-color: green; color: white;" type="submit" name="oui" class="form-control" value="OUI">
                                    <input style="display: inline-block; width: 60px; background-color: red; color: white;" type="submit" name="non" class="form-control" value="NON">
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
