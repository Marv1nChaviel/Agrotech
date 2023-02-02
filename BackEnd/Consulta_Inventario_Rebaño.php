<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM inventario_rebaño";
$resultado = $conexion->prepare($sql);
$resultado->execute();
$datos=$resultado->fetch(PDO::FETCH_ASSOC);

    echo json_encode($datos, JSON_UNESCAPED_UNICODE);

    $conexion=null;



?>