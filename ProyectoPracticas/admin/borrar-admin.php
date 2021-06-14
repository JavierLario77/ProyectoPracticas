<?php

if($_POST['registro']=='eliminar'){
    $id_borrar=$_POST['id'];
    try {
        include_once 'funciones/funciones.php';
        $stmt=$conn->prepare('DELETE FROM admins WHERE id_admin=?');
        $stmt->bind_param('i',$id_borrar);
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta=array(
                'respuesta'=>'éxito',
                'id_eliminado'=>$id_borrar
            );
        }else{
            $respuesta=array(
                'respuesta'=>'error'
            );
        }
    } catch (Exception $e) {
        $respuesta=array(
            'respuesta'=>$e->getMessage()
        );
    }
    die(json_encode($respuesta));
}
