<?php
include_once 'funciones/funciones.php';
if($_POST['registro']=='actualizar'):
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $email=$_POST['email'];
        $total=$_POST['total_pedido'];
        $fecha=date('Y-m-d H:i:s');
        $fecha_registro=$_POST['fecha'];
        $id_registro=$_POST['id_registro'];
        $articulo=$_POST['articulos'];
        $pagado=$_POST['pagado'];
        try {
        //die(json_encode($_POST));
          $stmt=$conn->prepare("UPDATE registrados SET nombre_registrado=?,apellido_registrado=?,email_registrado=?,fecha_registro=?,articulos=?,total_pagado=?,pagado=? WHERE id_registrado=?");
          $stmt->bind_param("sssssisi", $nombre, $apellido, $email, $fecha, $articulo, $total,$pagado,$id_registro);
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