<?php
#Salir si alguno de los datos no está presente
//if(!isset($_POST["nombre"]) || !isset($_POST["categoria"]) ||!isset($_POST["precioVenta"]) ||!isset($_POST["cantidad"]) ||!isset($_POST["descripcion"])||!isset($_POST["sucursal"]) )  exit();

#Si todo va bien, se ejecuta esta parte del código...

include '../conexion/conexion.php';

$nombres = $_POST["nombres"];
$apellidoP= $_POST["apellidoP"];
$apellidoM = $_POST["apellidoM"];
$nombreU = $_POST["nombreU"];

$rol = $_POST["rol"];
$sucursal =$_POST["sucursal"];
$id =$_POST["id"];

 
//$passHash = password_hash($contrasenia, PASSWORD_BCRYPT);

//if(move_uploaded_file($_FILES['img2']['tmp_name'],"../img/".$_FILES['img2']['name'] )){}

$sentencia = "UPDATE usuario SET nombres ='$nombres', apellidoP='$apellidoP' , apellidoM='$apellidoM', nombre_usuario='$nombreU', id_sucursal_f=$sucursal, id_rol=$rol WHERE id_usuario=$id"; 

$result = $conn->query($sentencia); 

if($result === TRUE){
echo "<script>
                alert('Usuario actualizado correctamente');
                window.location= '../gestion_usuarios.php'
    </script>";
	exit;
}

else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>

