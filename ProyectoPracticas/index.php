
  <?php include_once 'includes/templates/header.php'; ?>
  
  <section class="index">

  <h2>Inicio</h2>
  <div class="index2">
    <div class="reglas"><h2>Páginas web</h2>
      <div class="reglas-tabla">
        <p style="text-decoration:underline;">Páginas web de superhéroes</p>
        <a style="margin-left:20px;color:white;text-decoration:none;" href="https://blogdesuperheroes.es">Blog de Superheroes</a><br>
        <a style="margin-left:20px;color:white;text-decoration:none;" href="https://www.espinof.com/tag/superheroes">Espinof</a><br>
        <a style="margin-left:20px;color:white;text-decoration:none;" href="https://cinedesuperheroes.com/">Cine de Superhéroes</a>
      </div>
    </div>
      <div class="principal"><h2>Información</h2>
      <?php 
                    try {
                        require_once('includes/funciones/bd_conexion.php');
                        $sql="SELECT * FROM informacion;";
                        $resultado=$conn->query($sql);
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    }
                
                    while ($info=$resultado->fetch_assoc()) {
                    ?><div class="informacion">
                       <p><?php echo $info['descripcion'];?></p>
                    </div>
                    <?php  }  

      ?>
      <div class="noticias" style="margin-bottom:30px;"><h1>Noticias</h1>
      <?php
      try {
                        require_once('includes/funciones/bd_conexion.php');
                        $sql="SELECT * FROM noticias ORDER BY fecha DESC;";
                        $resultado=$conn->query($sql);
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    }
                
                    while ($notice=$resultado->fetch_assoc()) {
                    ?>
                    <div class="informacion2">
                      <div style="margin-bottom:30px;width:100%;" class="informacion">
                          <p><strong><?php echo $notice['fecha'];?></strong></p>
                        <p><?php echo $notice['noticia'];?></p>
                      </div>
                    </div>
                    <?php  }  ?>
      </div>
      </div>
    <div class="reglas2"><h2>Superhéroes</h2>
    <?php 
                    try {
                        require_once('includes/funciones/bd_conexion.php');
                        $sql="SELECT * FROM heroes;";
                        $resultado=$conn->query($sql);
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    }
                
                    while ($hero=$resultado->fetch_assoc()) {
                    ?><button>
                      <div class="informacion">
                        <p><strong>Nombre:</strong><?php echo $hero['nombre'];?></p>
                        <p><strong>Biografía:</strong><?php echo $hero['bio'];?></p>
                        <p><strong>Aparición:</strong><?php echo $hero['aparicion'];?></p>
                        <p><strong>Casa:</strong><?php echo $hero['casa'];?></p>
                        <img src="img/<?php echo $hero['foto']; ?>" alt="">
                      </div>
                      </button>
                    <?php  }  
      
                    
      $conn->close();

      ?>
    </div>
  </div>
  </section>
  
  

  <?php include_once 'includes/templates/footer.php'; ?>

