<?php

    if($_POST['registro']=='nuevo'){
        $usuario=$_POST['usuario'];
        $nombre=$_POST['nombre'];
        $password=$_POST['password'];
        $opciones=array(
            'cost'=>12
        );
        $password_hashed=password_hash($password,PASSWORD_BCRYPT,$opciones);

        try {
            include_once 'funciones/funciones.php';
            $stmt=$conn->prepare("INSERT INTO admins(usuario,nombre,password) VALUES(?,?,?)");
            $stmt->bind_param("sss",$usuario,$nombre,$password_hashed);
            $stmt->execute();
            $id_registro=$stmt->insert_id;
            if($id_registro>0){
                $respuesta=array(
                    'respuesta'=>'éxito',
                    'id_admin'=>$id_registro
                );
            }else{
                $respuesta=array(
                    'respuesta'=>'error'
                );
            }
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error:" . $e->getMessage();
        }

        die(json_encode($respuesta));
        
    }
    