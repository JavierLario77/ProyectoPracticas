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
        Dashboard
        <small>Información sobre el evento</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
            <div class="box-body chart-responsive">
            <div class="chart" id="line-chart" style="height: 300px;"></div>
    </div>
    <h2 class="pages-header">Resumen de Registros</h2>
    <div class="row">
        <div class="col-lg-3 col-xs-6">

        <?php 
            $sql="SELECT COUNT(ID_Registrado) AS registros FROM registrados";
            $resultado=$conn->query($sql);
            $registrados=$resultado->fetch_assoc();
        ?>
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                <h3><?php echo $registrados['registros']; ?></h3>

                <p>Total Registrados</p>
                </div>
                <div class="icon">
                <i class="fa fa-user"></i>
                </div>
                <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">

        <?php 
            $sql="SELECT COUNT(ID_Registrado) AS registros FROM registrados";
            $resultado=$conn->query($sql);
            $registrados=$resultado->fetch_assoc();
        ?>
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                <h3><?php echo $registrados['registros']; ?></h3>

                <p>Total Pagados</p>
                </div>
                <div class="icon">
                <i class="fa fa-users"></i>
                </div>
                <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">

        <?php 
            $sql="SELECT COUNT(ID_Registrado) AS registros FROM registrados";
            $resultado=$conn->query($sql);
            $registrados=$resultado->fetch_assoc();
        ?>
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                <h3><?php echo $registrados['registros']; ?></h3>

                <p>Total Sin Pagar</p>
                </div>
                <div class="icon">
                <i class="fa fa-user-times"></i>
                </div>
                <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">

        <?php 
            $sql="SELECT SUM(total_pagado) AS ganancias FROM registrados";
            $resultado=$conn->query($sql);
            $registrados=$resultado->fetch_assoc();
        ?>
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                <h3>$<?php echo $registrados['ganancias']; ?></h3>

                <p>Ganancias Totales</p>
                </div>
                <div class="icon">
                <i class="fa fa-usd"></i>
                </div>
                <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <h2 class="page-header">Regalos</h2>

    <div class="row">
    <div class="col-lg-3 col-xs-6">

        <?php 
            $sql="SELECT COUNT(total_pagado) AS pulseras FROM registrados WHERE regalo=1";
            $resultado=$conn->query($sql);
            $regalo=$resultado->fetch_assoc();
        ?>
            <!-- small box -->
            <div class="small-box bg-teal">
                <div class="inner">
                <h3><?php echo $regalo['pulseras']; ?></h3>

                <p>Pulseras</p>
                </div>
                <div class="icon">
                <i class="fa fa-gift"></i>
                </div>
                <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">

        <?php 
            $sql="SELECT COUNT(total_pagado) AS etiquetas FROM registrados WHERE regalo=2";
            $resultado=$conn->query($sql);
            $regalo=$resultado->fetch_assoc();
        ?>
            <!-- small box -->
            <div class="small-box bg-maroon">
                <div class="inner">
                <h3><?php echo $regalo['etiquetas']; ?></h3>

                <p>Etiquetas</p>
                </div>
                <div class="icon">
                <i class="fa fa-gift"></i>
                </div>
                <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">

        <?php 
            $sql="SELECT COUNT(total_pagado) AS plumas FROM registrados WHERE regalo=3";
            $resultado=$conn->query($sql);
            $regalo=$resultado->fetch_assoc();
        ?>
            <!-- small box -->
            <div class="small-box bg-purple-active">
                <div class="inner">
                <h3><?php echo $regalo['plumas']; ?></h3>

                <p>Plumas</p>
                </div>
                <div class="icon">
                <i class="fa fa-gift"></i>
                </div>
                <a href="lista-registrados.php" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
  </div>


  <?php
    include_once 'templates/footer.php';
  ?>


