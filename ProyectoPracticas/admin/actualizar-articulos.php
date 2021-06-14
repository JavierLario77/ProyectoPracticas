<?php

if($_POST['registro']=='actualizar'){
    $nombre_articulo=$_POST['nombre_articulo'];
    $descripcion=$_POST['descripcion'];
    $clave=$_POST['clave'];
    $precio=$_POST['precio'];
    $stock=$_POST['stock'];
    $estado=$_POST['estado'];
    $maximo=$_POST['maximo'];
    $id_registro=$_POST['id_registro'];

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
        include_once 'funciones/funciones.php';
        $stmt=$conn->prepare('UPDATE articulos SET nombre_articulo=?,descripcion=?,clave=?,precio=?,stock=?,estado=?,maximo=?,foto=? WHERE id_articulo=?');
        $stmt->bind_param('ssiiisisi',$nombre_articulo,$descripcion,$clave,$precio,$stock,$estado,$maximo,$imagen_url,$id_registro);
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta=array(
                'respuesta'=>'éxito',
                'id_actualizado'=>$id_registro
            );
        }else{
            $respuesta=array(
                'respuesta'=>'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta=array(
            'respuesta'=>$e->getMessage()
        );
    }
    die(json_encode($respuesta));
}
