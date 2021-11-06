<!-- Eliminar productos -->
<?php
    include("../conexion/conexion1.php");

    $id= $_REQUEST['id'];
    
    //$query = "INSERT INTO producto(id_admin,nombre,precio,imagen,descripcion) VALUES('1','$nombre','$precio','$imagen','$descripcion')";
    $query = "DELETE FROM sucursal WHERE id_sucursal='$id'";

    $resultado = $conexion->query($query);

    if($resultado){
        echo "<script>
                alert('Sucursal eliminada correctamente');
                window.location= 'Admin_index.php'
        </script>";
    }else{
        echo "No se elimino";
    }
?>