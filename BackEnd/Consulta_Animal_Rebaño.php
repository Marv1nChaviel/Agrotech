<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM inventario_rebaño
INNER JOIN tipo_rebaño ON inventario_rebaño.Tipo_rebaño_ID_tipo_rebaño = tipo_rebaño.ID_tipo_rebaño";
foreach ($conexion->query($sql) as $datos) {

$json[] = array(
    'ID_animal'=> $datos['ID_animal'],
    'Raza'=> $datos['Nombre_tipo_rebaño']
);
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>