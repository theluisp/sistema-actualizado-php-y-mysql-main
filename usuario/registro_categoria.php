<?php
#Salir si alguno de los datos no está presente
//if(!isset($_POST["nombre"]) || !isset($_POST["categoria"]) ||!isset($_POST["precioVenta"]) ||!isset($_POST["cantidad"]) ||!isset($_POST["descripcion"])||!isset($_POST["sucursal"]) )  exit();

#Si todo va bien, se ejecuta esta parte del código...

include '../conexion/conexion.php';

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];




//if(move_uploaded_file($_FILES['img2']['tmp_name'],"../img/".$_FILES['img2']['name'] )){}

$sentencia = "INSERT INTO categoria(Nombre, descripcion) VALUES ('$nombre', '$descripcion');";
$result = $conn->query($sentencia); 


if($result === TRUE){
echo "<script>
                alert('Categoria añadida correctamente');
                window.location= '../supervisor/supervisor_index.php'
    </script>";
}

else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
