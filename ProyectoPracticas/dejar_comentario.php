<?php
if(isset($_POST['submit'])):
        $nick=$_POST['nick'];
        $coment=$_POST['comentario'];
        $id=$_POST['id_post'];
        $fecha=date('Y-m-d H:i:s');
        
        try{
          require_once('includes/funciones/bd_conexion.php');
          $stmt=$conn->prepare("INSERT INTO comentarios (nick,fecha_coment,comentario,id_publicacion) VALUES (?,?,?,?)");
          $stmt->bind_param("sssi", $nick,$fecha, $coment, $id);
          $stmt->execute();
          $stmt->close();
          $conn->close();
        }catch(\Exception $e){
          echo $e->getMessage();
        }
        header('Location: dejar_comentario.php?exitoso=1');
      endif; ?>
      <section class="seccion contenedor">
      <h2>Dejar Comentario</h2>
      <?php if(isset($_GET['exitoso'])){
        if($_GET['exitoso']=="1"){
          echo "Comentario registrado<br>";
          echo "<a href='blog.php'>Volver al Blog</a>";
        };
      }; ?>
      </section>

