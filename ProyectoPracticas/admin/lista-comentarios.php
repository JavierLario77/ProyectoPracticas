<?php
  error_reporting (E_ALL ^ E_NOTICE);
  include_once 'funciones/sesiones.php';
  include_once 'funciones/funciones.php';
  include_once 'templates/header.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Listado de Comentarios
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los comentarios</h3>
              <br>
              <br>
              <h3 class="box-title">Advertencia: Si presionas la papelera se borrará el registro y no se podrá volver a recuperar!</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nick</th>
                  <th>Fecha</th>
                  <th>Comentario</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    try {
                      $sql="SELECT * FROM comentarios ";
                      $resultado=$conn->query($sql);
                    } catch (Exception $e) {
                     $error=$e->getMessage();
                     echo $error;
                    }
                    while($coment=$resultado->fetch_assoc()){ ?>
                      <tr>
                        <td><?php echo $coment['nick']; ?></td>
                        <td><?php echo $coment['fecha_coment']; ?></td>
                        <td><?php echo $coment['comentario']; ?></td>
                        <td><img src="../img/<?php echo $post['foto']; ?>" width="150"></td>
                          <td>
                            <a href="editar-comentarios.php?id=<?php echo $coment['id_comentario']; ?>" class="btn bg-orange btn-flat margin">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <a href="#" data-id="<?php echo $coment['id_comentario']; ?>" data-tipo="comentarios" class="btn bg-maroon btn-flat margin borrar_registro">
                              <i class="fa fa-trash"></i>
                            </a>
                        </td>
                      </tr>
                    <?php };
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nick</th>
                  <th>Fecha</th>
                  <th>Comentario</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>


  <?php
    include_once 'templates/footer.php';
  ?>


