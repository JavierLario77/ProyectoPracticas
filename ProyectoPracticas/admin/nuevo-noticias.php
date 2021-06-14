<?php
include_once 'funciones/funciones.php';

$notice=$_POST['notice'];
$fecha=date('Y-m-d H:i:s');

if($_POST['registro']=='nuevo'):

        try {
          $stmt=$conn->prepare("INSERT INTO noticias (fecha,noticia) VALUES (?,?)");
          $stmt->bind_param("ss", $fecha, $notice);
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