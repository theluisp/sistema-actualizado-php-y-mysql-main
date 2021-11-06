<?php

    include("../conexion/conexion1.php");
    $id = $_REQUEST['id'];

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
   
   // $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    
    //$query = "INSERT INTO producto(id_admin,nombre,precio,imagen,descripcion) VALUES('1','$nombre','$precio','$imagen','$descripcion')";
    $query = "UPDATE sucursal SET nombre_sucursal='$nombre',telefono='$telefono',calle='$direccion' WHERE id_sucursal = '$id'";

    $resultado = $conexion->query($query);

    if($resultado){
        header('Location: Admin_index.php');
        //echo "Se inserto la imagen";
    }


?>
