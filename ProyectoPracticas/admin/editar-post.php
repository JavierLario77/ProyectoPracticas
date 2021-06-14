<?php
        $id=$_GET['id'];
        if(!filter_var($id,FILTER_VALIDATE_INT)){
            die("Error");
        }
  include_once 'funciones/sesiones.php';
  include_once 'templates/header.php';
  include_once 'funciones/funciones.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Editar Publicacion
      </h1>
    </section>

    <!-- Main content -->
    <div class="row">
      <div class="col-md-8">
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Publicacion</h3>
            </div>
            <div class="box-body">
            <?php
              $sql="SELECT * FROM post WHERE id_post=$id";
              $resultado=$conn->query($sql);
              $post=$resultado->fetch_assoc();
            ?>
            <form role="form" action="actualizar-post.php" name="guardar-registro" id="guardar-registro-archivo" enctype="multipart/form-data" method="post">
          <div id="datos_usuario" class="caja clearfix">
              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Tu Nombre" value="<?php echo $post['nombre']; ?>">
              <div class="form-group">
                <label for="post">Publicación:</label>
                <textarea class="form-control" id="post" name="post" placeholder="Post" rows="20"><?php echo $post['post']; ?></textarea>
              </div>
              <div class="form-group">
                        <label for="imagen_actual">Imagen Actual</label>
                        <br>
                        <img src="../img/<?php echo $post['foto']; ?>" width="200">
                      </div>
                    </div>
                    <div class="form-group">
                  <label for="archivo_imagen">Imagen:</label>
                  <input class="form-control" type="file" id="imagen_post" name="archivo_imagen">

                  <p class="help-block">Añada la imagen del invitado aquí</p>
                </div>
                <input type="hidden" name="registro" value="actualizar">
                <input type="hidden" name="id_post" value="<?php echo $id; ?>">
                <button type="submit" class="btn btn-primary" id="btnRegistro">Añadir</button>
          </div>
      </form>
  </section>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
    </div>
    </div>
    <!-- /.content -->
  </div>

  <div id="mapa" style="display: none;">


  <?php
    include_once 'templates/footer.php';
  ?>


