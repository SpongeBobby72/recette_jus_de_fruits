<?php
require '../config.php';
require 'includes/header.php';
?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tableau de bord</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/">Accueil</a></li>
              <li class="breadcrumb-item active">Tableau de bord</li>
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
              <div class="box">
                  <div class="box-header">
                      <h3 class="box-title">Ingrédients</h3>
                  </div>
                  <!-- /.box-header -->
                  <?php
                  $ingredients = $dbh->prepare("SELECT * FROM ingredients");
                  $ingredients->execute();

                  ?>
                  <div class="box-body no-padding">
                      <table class="table table-condensed">
                          <tr>
                              <th style="width: 10px">#</th>
                              <th>Nom</th>
                              <th>Description</th>
                              <th></th>
                          </tr>
                          <?php
                          while ( $ingredient = $ingredients->fetch() ) {
                              echo '<tr>
                              <td>'.$ingredient['id'].'</td>
                              <td>'.$ingredient['nom'].'</td>
                              <td><a href="ingredient_modifier.php?id='.$ingredient['id'].'" class="btn btn-warning">modifier</a>
                              <a href="ingredient_supprimer.php?id='.$ingredient['id'].'" class="btn btn-danger">supprimer</a></td>
                          </tr>';
                          }
                          ?>

                      </table>

                      <a href="ingredient_modifier.php" class="btn btn-success">Ajouter</a>

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
