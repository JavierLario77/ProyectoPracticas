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
      Crear comentarios
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
            <form role="form" action="nuevo-comentario.php" name="guardar-registro" id="guardar-registro" method="post">
          <div id="datos_usuario" class="caja clearfix">
              <div class="form-group">
                <label for="nick">Nick:</label>
                <input class="form-control" type="text" id="nick" name="nick" placeholder="Tu Nick">
              <div class="form-group">
                <label for="coment">Comentario:</label>
                <textarea class="form-control" id="coment" name="coment" placeholder="Comentario" rows="10"></textarea>
              </div>
                <div class="form-group">
                <label for="id_pub">ID Publicación:</label>
                <input class="form-control" type="number" id="id_pub" name="id_pub" placeholder="Para la publicación">
          </div>
          <div class="box-footer">
                  <input type="hidden" name="registro" value="nuevo">
                  <button type="submit" class="btn btn-primary" id="crear_registro">Añadir</button>
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


