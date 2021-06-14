<?php
  include_once 'funciones/sesiones.php';
  include_once 'templates/header.php';
  include_once 'funciones/funciones.php';
  $id=$_GET['id'];
  if(!filter_var($id,FILTER_VALIDATE_INT)){
    die("Error!");
  };
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Articulos
      </h1>
    </section>

    <!-- Main content -->
    <div class="row">
      <div class="col-md-8">
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Articulos</h3>
            </div>
            <div class="box-body">
            <?php
              $sql="SELECT * FROM articulos WHERE id_articulo=$id";
              $resultado=$conn->query($sql);
              $articulo=$resultado->fetch_assoc();
            ?>
            <form role="form" method="post" action="actualizar-articulos.php" name="guardar-registro" enctype="multipart/form-data" id="guardar-registro-archivo">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nombre_articulo">Articulo:</label>
                      <input type="text" class="form-control" id="nombre_articulo" name="nombre_articulo" placeholder="nombre_articulo" value="<?php echo $articulo['nombre_articulo'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="descripcion">descripcion:</label>
                      <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion" value="<?php echo $articulo['descripcion'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="clave">clave:</label>
                      <input type="text" class="form-control" id="clave" name="clave" placeholder="clave" value="<?php echo $articulo['clave'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="precio">precio:</label>
                      <input type="text" class="form-control" id="precio" name="precio" placeholder="precio" value="<?php echo $articulo['precio'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="stock">stock:</label>
                      <input type="text" class="form-control" id="stock" name="stock" placeholder="stock" value="<?php echo $articulo['stock'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="estado">estado:</label>
                      <input type="text" class="form-control" id="estado" name="estado" placeholder="estado" value="<?php echo $articulo['estado'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="maximo">maximo:</label>
                      <input type="text" class="form-control" id="maximo" name="maximo" placeholder="maximo" value="<?php echo $articulo['maximo'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="imagen_actual">Imagen Actual</label>
                        <br>
                        <img src="../img/<?php echo $articulo['foto']; ?>" width="200">
                      </div>
                    </div>
                    <div class="form-group">
                  <label for="archivo_imagen">Imagen:</label>
                  <input class="form-control" type="file" id="imagen_post" name="archivo_imagen">

                  <p class="help-block">Añada la imagen del invitado aquí</p>
                </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <input type="hidden" name="registro" value="actualizar">
                    <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
    </div>
    </div>
    <!-- /.content -->
  </div>


  <?php
    include_once 'templates/footer.php';
  ?>


