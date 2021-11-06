<?php
header('Content-Type: application/json');
include 'conexion/conexion.php';

//$con = mysqli_connect("localhost", "id17297836_root", "2225166120Abc?", "id17297836_estanteria");
if (mysqli_connect_errno($conn)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
    $data_points = array();
    

    $result = mysqli_query($conn, " SELECT VENTAS.id_producto, producto.nombre_producto, VENTAS.numero_venta,
COUNT(*) AS num
FROM VENTAS
INNER JOIN producto
ON VENTAS.id_producto = producto.id_producto
GROUP BY VENTAS.id_producto
 desc limit 1;"); 
    while ($row = mysqli_fetch_array($result)) {
        $point = array("valorx" => $row['nombre_producto'], "valory" => $row['num']);
        array_push($data_points, $point);
    }
    echo json_encode($data_points);
}
mysqli_close($conn);
?>