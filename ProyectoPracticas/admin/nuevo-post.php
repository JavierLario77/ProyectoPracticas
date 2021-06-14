<?php
include_once 'funciones/funciones.php';

$nombre=$_POST['nombre'];
$post=$_POST['post'];
$fecha=date('Y-m-d H:i:s');

if($_POST['registro']=='nuevo'):


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
          $stmt=$conn->prepare("INSERT INTO post (nombre,fecha,post,foto) VALUES (?,?,?,?)");
          $stmt->bind_param("ssss", $nombre, $fecha, $post, $imagen_url);
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