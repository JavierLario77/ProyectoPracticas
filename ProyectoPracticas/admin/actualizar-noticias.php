<?php
include_once 'funciones/funciones.php';
if($_POST['registro']=='actualizar'):
        $notice=$_POST['notice'];
        $fecha=date('Y-m-d H:i:s');
        $id=$_POST['id_noticia'];

        try {
        //die(json_encode($_POST));
          $stmt=$conn->prepare("UPDATE noticias SET fecha=?,noticia=? WHERE id=?");
          $stmt->bind_param("ssi", $fecha,$notice,$id);
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