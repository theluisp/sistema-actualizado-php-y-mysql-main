<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Registrar producto</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
#Salir si alguno de los datos no está presente
//if(!isset($_POST["nombre"]) || !isset($_POST["categoria"]) ||!isset($_POST["precioVenta"]) ||!isset($_POST["cantidad"]) ||!isset($_POST["descripcion"])||!isset($_POST["sucursal"]) )  exit();

#Si todo va bien, se ejecuta esta parte del código...

include '../conexion/conexion.php';

$nombre = $_POST["nombre"];
$categoria= $_POST["categoria"];
$precioVenta = $_POST["precioVenta"];
$cantidad = $_POST["cantidad"];
$descripcion = $_POST["descripcion"];
$color = $_POST["color"];
$sucursal =$_POST["sucursal"];

$id=$_POST["id"];
//if(move_uploaded_file($_FILES['img2']['tmp_name'],"../img/".$_FILES['img2']['name'] )){}

$sentencia = "UPDATE producto SET nombre_producto ='$nombre', codigo_categoria='$categoria' , precio_unitario=$precioVenta, cantidad=$cantidad, descripcion='$descripcion', color='$color', id_sucursal=$sucursal WHERE id_producto=$id"; 

$result = $conn->query($sentencia); 

if($result === TRUE){
echo "<script>
                alert('Producto actualizado correctamente');
                window.location= '../gestion_productos.php'
    </script>";
	exit;
}

else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
