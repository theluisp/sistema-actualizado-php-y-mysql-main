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




$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/img/';

$imagen2=$_FILES['img2']['name'];
$archivo2=$_FILES['img2']['tmp_name'];

$imagen1=$_FILES['img']['name'];
$archivo1=$_FILES['img']['tmp_name'];


$rutaf=$imagen1;

$rutaf2=$imagen2;



//move_uploaded_file($archivo1,$rutaf);
//move_uploaded_file($archivo2,$rutaf2);


move_uploaded_file($_FILES['img2']['tmp_name'], $carpeta_destino.$imagen2);
move_uploaded_file($_FILES['img']['tmp_name'], $carpeta_destino.$imagen1);


//if(move_uploaded_file($_FILES['img2']['tmp_name'],"../img/".$_FILES['img2']['name'] )){}

$sentencia = "INSERT INTO producto(nombre_producto, codigo_categoria, precio_unitario, cantidad, imagen, descripcion, imagen_2, color, estado, id_sucursal, costo_unitario) VALUES ('$nombre', $categoria, $precioVenta, $cantidad, '$rutaf','$descripcion',
'".$rutaf2."', '$color', 1, $sucursal, 0);";
$result = $conn->query($sentencia); 


if($result === TRUE){
	header("Location: ../index.php");
	exit;
}

else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
