<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM clasificacion";
foreach ($conexion->query($sql) as $datos) {
$json[] = array(
    'ID_clasificacion'=> $datos['ID_clasificacion'],
    'Clasificacion_animal'=> $datos['Clasificacion_animal']
);
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>