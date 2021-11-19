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
$rolk = $_POST["rol"];
$sucursalk =$_POST["sucursal"];
$codigo = 1;
$correo="abc";
$usu= "admin";

 
$passHash = password_hash($contrasenia, PASSWORD_BCRYPT);

//if(move_uploaded_file($_FILES['img2']['tmp_name'],"../img/".$_FILES['img2']['name'] )){}

$sentencia2 = "INSERT INTO usuario(nombres, correo, usuario, contrasenia, rol, apellidoP, apellidoM, nombre_usuario, id_sucursal_f, id_rol) VALUES ('$nombres', '$correo','$usu', '$passHash', $codigo, '$apellidoP', '$apellidoM', '$nombreU', $sucursalk , $rolk);";


$result = $conn->query($sentencia2);



if($result === TRUE){
	header("Location: ../index.php");
	exit;
}

else    echo "Error en consulta de inserción";


?>
