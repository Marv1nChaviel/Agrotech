<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM lote";
foreach ($conexion->query($sql) as $datos) {
$json[] = array(
    'ID_lote'=> $datos['ID_lote'],
    'Nombre_lote'=> $datos['Nombre_lote']
);
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>