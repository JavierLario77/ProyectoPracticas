<?php
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
        Listado de Articulos
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los articulos</h3>
              <br>
              <br>
              <h3 class="box-title">Advertencia: Si presionas la papelera se borrará el registro y no se podrá volver a recuperar!</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Clave</th>
                  <th>Precio</th>
                  <th>Stock</th>
                  <th>Estado</th>
                  <th>Maximo</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    try {
                      $sql="SELECT * FROM articulos";
                      $resultado=$conn->query($sql);
                    } catch (Exception $e) {
                     $error=$e->getMessage();
                     echo $error;
                    }
                    while($articulos=$resultado->fetch_assoc()){ ?>
                      <tr>
                        <td><?php echo $articulos['nombre_articulo'] ?></td>
                        <td><?php echo $articulos['descripcion'] ?></td>
                        <td><?php echo $articulos['clave'] ?></td>
                        <td><?php echo $articulos['precio'] ?></td>
                        <td><?php echo $articulos['stock'] ?></td>
                        <td><?php echo $articulos['estado'] ?></td>
                        <td><?php echo $articulos['maximo'] ?></td>
                        <td>
                          <a href="editar-articulos.php?id=<?php echo $articulos['id_articulo'] ?>" class="btn bg-orange btn-flat margin">
                            <i class="fa fa-pencil"></i>
                          </a>
                          <a href="#" data-id="<?php echo $articulos['id_articulo']?>" data-tipo="admin" class="btn bg-maroon btn-flat margin borrar_registro">
                            <i class="fa fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    <?php };
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Clave</th>
                  <th>Precio</th>
                  <th>Stock</th>
                  <th>Estado</th>
                  <th>Maximo</th>
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


