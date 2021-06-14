<?php
include_once 'funciones/funciones.php';

$nick=$_POST['nick'];
$coment=$_POST['coment'];
$fecha=date('Y-m-d H:i:s');
$id_pub=$_POST['id_pub'];

if($_POST['registro']=='nuevo'):

        try {
          $stmt=$conn->prepare("INSERT INTO comentarios (nick,fecha_coment,comentario,id_publicacion) VALUES (?,?,?,?)");
          $stmt->bind_param("sssi", $nick, $fecha, $coment, $id_pub);
          $stmt->execute();
          $id_insertado=$stmt->insert_id;
            if($stmt->affected_rows){
                $respuesta=array(
                    'respuesta'=>'éxito',
                    'id_insertado'=>$id_insertado
                );
            }else{
                $respuesta=array(
                    'respuesta'=>'error'
                );
            }
          $stmt->close();
          $conn->close();
      } catch (\Exception $e) {
          echo $e->getMessage();
      }
      die(json_encode($respuesta));

 endif; 