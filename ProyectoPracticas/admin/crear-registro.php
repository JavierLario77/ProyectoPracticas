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
      Añadir registro
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
            <form role="form" action="nuevo-registro.php" name="guardar-registro" id="guardar-registro" method="post">
          <div id="datos_usuario" class="caja clearfix">
              <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
              </div>
              <div class="campo">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
              </div>
              <div class="campo">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Tu Email">
              </div>
              <div class="campo">
                <label for="fecha">Fecha:</label>
                <input type="text" id="fecha" name="fecha" placeholder="Fecha">
              </div>
              <div class="campo">
                <label for="articulos">Articulos:</label>
                <input type="text" id="articulos" name="articulos" placeholder="Articulos">
              </div>

                
                  <div class="total">
                      <p>Resumen:</p>
                      <div id="lista-productos">

                      </div>
                      <p>Total Ya Pagado:</p>
                      <p>Total:</p>
                      <div id="suma-total">

                      <div class="campo">
                        <label for="pagado">Pagado:</label>
                        <input type="text" id="pagado" name="pagado" placeholder="Pagado">
                      </div>

                      </div>
                        <input type="hidden" name="total_pedido" id="total_pedido">
                        <input type="hidden" name="registro" value="nuevo">
                        <button type="submit" class="btn btn-primary" id="crear_registro">Añadir</button>
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


