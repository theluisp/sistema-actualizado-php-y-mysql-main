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
$codigo = $_POST["codigo"];



$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'sistema-actualizado-php-y-mysql-main/img/';

$imagen2=$_FILES['img2']['name'];
$archivo2=$_FILES['img2']['tmp_name'];

$imagen1=$_FILES['img']['name'];
$archivo1=$_FILES['img']['tmp_name'];

move_uploaded_file($_FILES['img2']['tmp_name'], $carpeta_destino.$imagen2);
move_uploaded_file($_FILES['img']['tmp_name'], $carpeta_destino.$imagen1);

$rutaf=$imagen1;

$rutaf2=$imagen2;



//move_uploaded_file($archivo1,$rutaf);
//move_uploaded_file($archivo2,$rutaf2);





if(move_uploaded_file($_FILES['img2']['tmp_name'],"../img/".$_FILES['img']['name'] )){

$sentencia = "INSERT INTO producto(codigo, descripcion, proveedor, precio, existencia, usuario_id,  nombre, codigo_categoria, imagen, color, estado, id_sucursal, imagen2) VALUES ('$codigo','$nombre',1, $precioVenta, $cantidad, 1,'$nombre', $categoria, '$rutaf','$color', 1, $sucursal,
'".$rutaf2."');";
$result = $conn->query($sentencia); 
}
else{ echo 'imagen no insertada';} 

if($result === TRUE){
	$var = "Producto insertado correctamente";
echo "<script> alert('".$var."'); </script>
<script>
        window.location.replace('../vendedor/index_vendedor.php');

    </script>";
	

	exit;
}

else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
