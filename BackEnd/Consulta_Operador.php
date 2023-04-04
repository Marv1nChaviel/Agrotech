<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM trabajadores";
foreach ($conexion->query($sql) as $datos) {
$json[] = array(
    'ID_trabajador'=> $datos['ID_trabajador'],
    'Nombre'=> $datos['Nombre']
);
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>