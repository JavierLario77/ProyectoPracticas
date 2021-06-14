<?php 
    $conn=new mysqli('localhost','root','','tiendavirtual');
    if($conn->connect_error){
        echo $error->$conn->connect_error;
    }
?>