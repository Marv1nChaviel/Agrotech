<?php 
include('./conexion_be.php');

$sql = "SELECT COUNT(*) FROM inventario_rebaño ";
$resultado = $conexion->query($sql);
$resultado->execute();
$datos=$resultado->fetchColumn();

// esta y la anterior funcionan igual se dejo por si algun problema con una se pueda usar la otra

// $sql = "SELECT FROM inventario_rebaño ";
// $resultado = $conexion->prepare($sql);
// $resultado->execute();
// $datos=$resultado->rowCount();

$sql1 = "SELECT COUNT(*) FROM trabajadores ";
$resultado1 = $conexion->query($sql1);
$resultado1->execute();
$datos1=$resultado1->fetchColumn();

$datos_json[] = array(
    'cantidad_rebaño'=> $datos,
    'cantidad_trabajadores'=>$datos1
);

echo json_encode($datos_json,JSON_UNESCAPED_UNICODE);
?>