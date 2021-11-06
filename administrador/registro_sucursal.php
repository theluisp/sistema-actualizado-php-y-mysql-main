<?php
    require_once("../conexion/conexion1.php");
    $id = $_REQUEST['Codigo'];
    
    $Nombre = $_POST['Nombre'];
    $Telefono = $_POST['Telefono'];
    $Estado = $_POST['Estado'];
    $Municipio = $_POST['Municipio'];
    $Colonia = $_POST['Colonia'];
    $Calle = $_POST['Calle'];
    $Domicilio =$_POST['Domicilio'];
    //$conexion = new mysqli("localhost","root","mysql","farmacia1");
         
    $query = "INSERT INTO sucursal(nombre_sucursal,telefono,codigo_postal,estado,municipio,colonia,calle,numero_domicilio) VALUES('".$id."','".$Nombre."','".$Telefono."','".$Estado."','".$Municipio."','".$Colonia."','".$Calle."','".$Domicilio."')";

    $resultado = $conexion->query($query);

    if($resultado){
        $mensaje = "Datos insertados correctamente";
        echo "<script>
            ";
            echo "alert('$mensaje');";
            echo "window.location = 'Admin_index.php'";
            echo "

        </script>";
    
        
    }else{
        echo "No se guardaron los datos";
        echo $query;
    }

?>


