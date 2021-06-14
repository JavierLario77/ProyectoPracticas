<?php
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
      Añadir publicación
      </h1>
    </section>

    <!-- Main content -->
    <div class="row">
      <div class="col-md-8">
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Usuario</h3>
            </div>
            <div class="box-body">
            <form role="form" action="nuevo-post.php" name="guardar-registro" id="guardar-registro-archivo" enctype="multipart/form-data" method="post">
          <div id="datos_usuario" class="caja clearfix">
              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
              <div class="form-group">
                <label for="post">Publicación:</label>
                <textarea class="form-control" id="post" name="post" placeholder="Post" rows="20"></textarea>
              </div>
              <div class="form-group">
                <label for="imagen_post">Imagen:</label>
                <input class="form-control" type="file" id="imagen_post" name="archivo_imagen">
                <p class="help-block">Añada la imagen del invitado aquí</p>
               </div>
               <div class="box-footer">
                  <input type="hidden" name="registro" value="nuevo">
                  <button type="submit" class="btn btn-primary" id="crear_registro">Añadir</button>
                </div>
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

  <div id="mapa" style="display: none;">


  <?php
    include_once 'templates/footer.php';
  ?>


