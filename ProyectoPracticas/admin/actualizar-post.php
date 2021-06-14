<?php
include_once 'funciones/funciones.php';
if($_POST['registro']=='actualizar'):
        $nombre=$_POST['nombre'];
        $post=$_POST['post'];
        $fecha=date('Y-m-d H:i:s');
        $id=$_POST['id_post'];

        $directorio="../img/";
    if(!is_dir($directorio)){
        mkdir($directorio,0755,true);
    }
    if(move_uploaded_file($_FILES['archivo_imagen']['tmp_name'],$directorio . $_FILES['archivo_imagen']['name'])){
        $imagen_url=$_FILES['archivo_imagen']['name'];
        $imagen_resultado="Se subió correctamente";
    }else{
        $respuesta=array(
            'error'=>error_get_last()
        );
    }
        try {
        //die(json_encode($_POST));
          $stmt=$conn->prepare("UPDATE post SET nombre=?,fecha=?,post=?,foto=? WHERE id_post=?");
          $stmt->bind_param("ssssi", $nombre,$fecha,$post, $imagen_url,$id);
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