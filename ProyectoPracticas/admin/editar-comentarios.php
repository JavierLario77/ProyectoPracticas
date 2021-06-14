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
      Editar Comentarios
    </section>

    <!-- Main content -->
    <div class="row">
      <div class="col-md-8">
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Comentario</h3>
            </div>
            <div class="box-body">
            <?php
              $sql="SELECT * FROM comentarios WHERE id_comentario=$id";
              $resultado=$conn->query($sql);
              $coment=$resultado->fetch_assoc();
            ?>
            <form role="form" action="actualizar-comentarios.php" name="guardar-registro" id="guardar-registro" method="post">
          <div id="datos_usuario" class="caja clearfix">
              <div class="form-group">
                <label for="nick">Nick:</label>
                <input class="form-control" type="text" id="nick" name="nick" placeholder="Tu Nick" value="<?php echo $coment['nick']; ?>">
              <div class="form-group">
                <label for="post">Comentario:</label>
                <textarea class="form-control" id="comentario" name="comentario" placeholder="Comentario" rows="20"><?php echo $coment['comentario']; ?></textarea>
              </div>
                <input type="hidden" name="registro" value="actualizar">
                <input type="hidden" name="id_post" value="<?php echo $coment['id_publicacion']; ?>"> 
                <input type="hidden" name="id_comentario" value="<?php echo $id; ?>">
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


