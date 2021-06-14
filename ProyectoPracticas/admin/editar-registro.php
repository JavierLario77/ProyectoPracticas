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
      Editar Registro de Usuario Manual
        <small>llena el formulario para editar un usuario registrado</small>
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
            <?php
              $sql="SELECT * FROM registrados WHERE ID_Registrado=$id";
              $resultado=$conn->query($sql);
              $registrado=$resultado->fetch_assoc();
            ?>
            <form role="form" action="actualizar-registro.php" name="guardar-registro" id="guardar-registro" method="post">
          <div id="datos_usuario" class="caja clearfix">
              <div class="campo">
                <label for="nombre">Nombre:</label>
                <input value="<?php echo $registrado['nombre_registrado']; ?>" type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
              </div>
              <div class="campo">
                <label for="apellido">Apellido:</label>
                <input value="<?php echo $registrado['apellido_registrado']; ?>" type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
              </div>
              <div class="campo">
                <label for="email">Email:</label>
                <input value="<?php echo $registrado['email_registrado']; ?>" type="email" id="email" name="email" placeholder="Tu Email">
              </div>
              <div class="campo">
                <label for="fecha">Fecha:</label>
                <input value="<?php echo $registrado['fecha_registro']; ?>" type="text" id="fecha" name="fecha" placeholder="Fecha">
              </div>
              <div class="campo">
                <label for="articulos">Articulos:</label>
                <input value='<?php echo $registrado['articulos']; ?>' type="text" id="articulos" name="articulos" placeholder="Articulos">
              </div>

              <div class="campo">
                <label for="total">Total:</label>
                <input value="<?php echo $registrado['total_pagado']; ?>" type="text" id="total" name="total" placeholder="Total">
              </div>
              <div class="campo">
                <label for="pagado">Pagado:</label>
                <input value="<?php echo $registrado['pagado']; ?>" type="text" id="pagado" name="pagado" placeholder="Pagado">
              </div>
                        <input type="hidden" name="total_pedido" id="total_pedido">
                        <input type="hidden" name="registro" value="actualizar">
                        <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                        <button type="submit" class="btn btn-primary" id="btnRegistro">Añadir</button>
                  </div>
              </div>
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


