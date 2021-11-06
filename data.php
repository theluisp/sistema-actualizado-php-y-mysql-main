<?php
header('Content-Type: application/json');
include 'conexion/conexion.php';

//$con = mysqli_connect("localhost", "id17297836_root", "2225166120Abc?", "id17297836_estanteria");
if (mysqli_connect_errno($conn)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
    $data_points = array();
    $result = mysqli_query($conn, "SELECT * FROM producto where cantidad<=10"); 
    while ($row = mysqli_fetch_array($result)) {
        $point = array("valorx" => $row['nombre_producto'], "valory" => $row['cantidad']);
        array_push($data_points, $point);
    }
    echo json_encode($data_points);
}
mysqli_close($conn);
?>