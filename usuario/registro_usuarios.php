<?php
#Salir si alguno de los datos no está presente
//if(!isset($_POST["nombre"]) || !isset($_POST["categoria"]) ||!isset($_POST["precioVenta"]) ||!isset($_POST["cantidad"]) ||!isset($_POST["descripcion"])||!isset($_POST["sucursal"]) )  exit();

#Si todo va bien, se ejecuta esta parte del código...

include '../conexion/conexion.php';

$nombres = $_POST["nombres"];
$apellidoP= $_POST["apellidoP"];
$apellidoM = $_POST["apellidoM"];
$nombreU = $_POST["nombreU"];
$contrasenia = $_POST["contrasenia"];
$rol = $_POST["rol"];
$sucursal =$_POST["sucursal"];


 
$passHash = password_hash($contrasenia, PASSWORD_BCRYPT);

//if(move_uploaded_file($_FILES['img2']['tmp_name'],"../img/".$_FILES['img2']['name'] )){}

$sentencia = "INSERT INTO usuario(nombres, apellidoP, apellidoM, nombre_usuario, contrasenia, id_sucursal_f, id_rol) VALUES ('$nombres', '$apellidoP', '$apellidoM', '$nombreU', '$passHash', $sucursal, $rol);";
$result = $conn->query($sentencia); 


if($result === TRUE){
	header("Location: ../index.php");
	exit;
}

else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
