<?php
#Salir si alguno de los datos no está presente
//if(!isset($_POST["nombre"]) || !isset($_POST["categoria"]) ||!isset($_POST["precioVenta"]) ||!isset($_POST["cantidad"]) ||!isset($_POST["descripcion"])||!isset($_POST["sucursal"]) )  exit();

#Si todo va bien, se ejecuta esta parte del código...

include '../conexion/conexion.php';
$id_categoria = $_GET["id"];

//if(move_uploaded_file($_FILES['img2']['tmp_name'],"../img/".$_FILES['img2']['name'] )){}

$sentencia = "DELETE FROM categoria
WHERE id_categoria
=$id_categoria "; 

$result = $conn->query($sentencia); 

if($result === TRUE){

     echo "<script>
                alert('Categoria eliminada correctamente');
                window.location= '../gestion_categoria.php'
    </script>";

	exit;
}

else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
