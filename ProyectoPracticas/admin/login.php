<?php
  error_reporting (E_ALL ^ E_NOTICE);
  session_start();
  $cerrar_sesion=$_GET['cerrar_sesion'];
  if($cerrar_sesion){
    session_destroy();
  }
  include_once 'funciones/funciones.php';
  include_once 'templates/header.php';
?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../index.php">Clan Comics S.A.</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="height:300px">
    <p class="login-box-msg">Inicia sesión aquí</p>

    <form method="post" action="login-admin.php" name="login-admin-form" id="login-admin">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <input type="hidden" name="login-admin" value="1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
        </div>
        <!-- /.col -->
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


  <?php
    include_once 'templates/footer.php';
  ?>


