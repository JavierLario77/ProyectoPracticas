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
      Editar Noticia
      </h1>
    </section>

    <!-- Main content -->
    <div class="row">
      <div class="col-md-8">
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Noticia</h3>
            </div>
            <div class="box-body">
            <?php
              $sql="SELECT * FROM noticias WHERE id=$id";
              $resultado=$conn->query($sql);
              $notice=$resultado->fetch_assoc();
            ?>
            <form role="form" action="actualizar-noticias.php" name="guardar-registro" id="guardar-registro" method="post">
          <div id="datos_usuario" class="caja clearfix">
              <div class="form-group">
                <label for="notice2">Noticia:</label>
                <input class="form-control" type="text" id="notice" name="notice" placeholder="Noticia" value="<?php echo $notice['noticia']; ?>">
              <div class="form-group">
              </div>
                <input type="hidden" name="registro" value="actualizar">
                <input type="hidden" name="id_noticia" value="<?php echo $notice['id']; ?>"> 
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


