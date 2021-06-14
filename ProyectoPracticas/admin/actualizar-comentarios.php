<?php
include_once 'funciones/funciones.php';
if($_POST['registro']=='actualizar'):
        $nick=$_POST['nick'];
        $coment=$_POST['comentario'];
        $fecha=date('Y-m-d H:i:s');
        $id=$_POST['id_comentario'];
        $id_post=$_POST['id_post'];

        try {
        //die(json_encode($_POST));
          $stmt=$conn->prepare("UPDATE comentarios SET nick=?,fecha_coment=?,comentario=?,id_publicacion=? WHERE id_comentario=?");
          $stmt->bind_param("sssii", $nick,$fecha,$coment,$id_post,$id);
          $stmt->execute();
            if($stmt->affected_rows){
                $respuesta=array(
                    'respuesta'=>'éxito'
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