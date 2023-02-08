<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM tipo_rebaño";
foreach ($conexion->query($sql) as $datos) {
$json[] = array(
    'ID_tipo_rebaño'=> $datos['ID_tipo_rebaño'],
    'Nombre_tipo_rebaño'=> $datos['Nombre_tipo_rebaño']
);
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>