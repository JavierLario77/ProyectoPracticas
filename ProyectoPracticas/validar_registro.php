<?php
if(isset($_POST['submit'])):
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $email=$_POST['email'];
        $total=$_POST['total_pedido'];
        $fecha=date('Y-m-d H:i:s');

        $pase1=$_POST['300']['cantidad'];
        $pase2=$_POST['301']['cantidad'];
        $pase3=$_POST['302']['cantidad'];
        $pase4=$_POST['303']['cantidad'];
        $pase5=$_POST['304']['cantidad'];
         include_once 'includes/funciones/funciones.php'; 
        $pedido=productos_json($pase1,$pase2,$pase3,$pase4,$pase5);
        
        try{
          require_once('includes/funciones/bd_conexion.php');
          $stmt=$conn->prepare("INSERT INTO registrados (nombre_registrado,apellido_registrado,email_registrado,fecha_registro,articulos,total_pagado) VALUES (?,?,?,?,?,?)");
          $stmt->bind_param("ssssss", $nombre, $apellido, $email,$fecha, $pedido, $total);
          $stmt->execute();
          $stmt->close();
          //$conn->close();
          if($pase1<>'' && $pase1>0){
            //require_once('includes/funciones/bd_conexion.php');
            $sql="SELECT * FROM articulos WHERE clave = 300";
            $articulos=$conn->query($sql);
            $followingdata=$articulos->fetch_assoc();
            $articulosnumber= $followingdata['stock'];
            $pase1number=(int) $pase1;
            $resta=$articulosnumber-$pase1number;
            $estado='Agotado';
            $max=0;
            $clave1=300;
            $stmt2=$conn->prepare("UPDATE articulos SET stock=? WHERE clave=?");
            $stmt2->bind_param("ii", $resta,$clave1);
            $stmt2->execute();
            $stmt2->close();
            //$conn->close();
            if($resta==0){
              $stmt3=$conn->prepare("UPDATE articulos SET estado=?,maximo=? WHERE clave=?");
              $stmt3->bind_param("sii", $estado,$max,$clave1);
              $stmt3->execute();
              $stmt3->close();
              //$conn->close();
            }
          }
          if($pase2<>'' && $pase2>0){
            //require_once('includes/funciones/bd_conexion.php');
            $sql="SELECT * FROM articulos WHERE clave = 301";
            $articulos=$conn->query($sql);
            $followingdata2=$articulos->fetch_assoc();
            $articulosnumber2= $followingdata2['stock'];
            $pase1number=(int) $pase2;
            $resta=$articulosnumber2-$pase1number;
            $estado='Agotado';
            $max=0;
            $clave1=301;
            $stmt2=$conn->prepare("UPDATE articulos SET stock=? WHERE clave=?");
            $stmt2->bind_param("ii", $resta,$clave1);
            $stmt2->execute();
            $stmt2->close();
            //$conn->close();
            if($resta==0){
              $stmt3=$conn->prepare("UPDATE articulos SET estado=?,maximo=? WHERE clave=?");
              $stmt3->bind_param("sii", $estado,$max,$clave1);
              $stmt3->execute();
              $stmt3->close();
              //$conn->close();
            }
          }
          if($pase3<>'' && $pase3>0){
            //require_once('includes/funciones/bd_conexion.php');
            $sql="SELECT * FROM articulos WHERE clave = 302";
            $articulos=$conn->query($sql);
            $followingdata3=$articulos->fetch_assoc();
            $articulosnumber3= $followingdata3['stock'];
            $pase1number=(int) $pase3;
            $resta=$articulosnumber3-$pase1number;
            $estado='Agotado';
            $max=0;
            $clave1=302;
            $stmt2=$conn->prepare("UPDATE articulos SET stock=? WHERE clave=?");
            $stmt2->bind_param("ii", $resta,$clave1);
            $stmt2->execute();
            $stmt2->close();
            //$conn->close();
            if($resta==0){
              $stmt3=$conn->prepare("UPDATE articulos SET estado=?,maximo=? WHERE clave=?");
              $stmt3->bind_param("sii", $estado,$max,$clave1);
              $stmt3->execute();
              $stmt3->close();
              //$conn->close();
            }
          }
          if($pase4<>'' && $pase4>0){
            //require_once('includes/funciones/bd_conexion.php');
            $sql="SELECT * FROM articulos WHERE clave = 303";
            $articulos=$conn->query($sql);
            $followingdata4=$articulos->fetch_assoc();
            $articulosnumber4= $followingdata4['stock'];
            $pase1number=(int) $pase4;
            $resta=$articulosnumber4-$pase1number;
            $estado='Agotado';
            $max=0;
            $clave1=303;
            $stmt2=$conn->prepare("UPDATE articulos SET stock=? WHERE clave=?");
            $stmt2->bind_param("ii", $resta,$clave1);
            $stmt2->execute();
            $stmt2->close();
            //$conn->close();
            if($resta==0){
              $stmt3=$conn->prepare("UPDATE articulos SET estado=?,maximo=? WHERE clave=?");
              $stmt3->bind_param("sii", $estado,$max,$clave1);
              $stmt3->execute();
              $stmt3->close();
              //$conn->close();
            }
          }
          if($pase5<>'' && $pase5>0){
            //require_once('includes/funciones/bd_conexion.php');
            $sql="SELECT * FROM articulos WHERE clave = 304";
            $articulos=$conn->query($sql);
            $followingdata5=$articulos->fetch_assoc();
            $articulosnumber5= $followingdata5['stock'];
            $pase1number=(int) $pase5;
            $resta=$articulosnumber5-$pase1number;
            $estado='Agotado';
            $max=0;
            $clave1=304;
            $stmt2=$conn->prepare("UPDATE articulos SET stock=? WHERE clave=?");
            $stmt2->bind_param("ii", $resta,$clave1);
            $stmt2->execute();
            $stmt2->close();
            //$conn->close();
            if($resta==0){
              $stmt3=$conn->prepare("UPDATE articulos SET estado=?,maximo=? WHERE clave=?");
              $stmt3->bind_param("sii", $estado,$max,$clave1);
              $stmt3->execute();
              $stmt3->close();
              //$conn->close();
            }
          }
          $conn->close();
        }catch(\Exception $e){
          echo $e->getMessage();
        }
        header('Location: validar_registro.php?exitoso=1');
      endif; ?>
      <section class="seccion contenedor">
      <h2>Resumen Registro</h2>
      <?php if(isset($_GET['exitoso'])){
        if($_GET['exitoso']=="1"){
          echo "Registro correcto<br>";
          echo "<a href='index.php'>Volver a la tienda</a>";
        };
      }; ?>
      </section>

