<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM raza";
foreach ($conexion->query($sql) as $datos) {
$json[] = array(
    'Nombre_Raza'=> $datos['Nombre_raza']
);
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>