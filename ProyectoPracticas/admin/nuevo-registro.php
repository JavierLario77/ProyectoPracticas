<?php
include_once 'funciones/funciones.php';
if($_POST['registro']=='nuevo'):
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $email=$_POST['email'];
        $total=$_POST['total_pedido'];
        $fecha=date('Y-m-d H:i:s');
        $articulos=$_POST['articulos'];
        $pagado=$_POST['pagado'];

        try {
          $stmt=$conn->prepare("INSERT INTO registrados (nombre_registrado,apellido_registrado,email_registrado,fecha_registro,articulos,total_pagado,pagado) VALUES (?,?,?,?,?,?,?)");
          $stmt->bind_param("sssisis", $nombre, $apellido, $email, $fecha, $articulos, $total,$pagado);
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