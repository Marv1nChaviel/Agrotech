<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM ingresos";
$resultado = $conexion->prepare($sql);
$resultado->execute();


while($datos=$resultado->fetch(PDO::FETCH_ASSOC)){
$json[] = array(
    'ID_ingresos'=> $datos['ID_ingresos'],
    'Venta_leche'=> $datos['Venta_leche'],
    'Venta_carne'=> $datos['Venta_carne'],
    'Venta_animal'=> $datos['Venta_animal'],
    'Inventario_rebaño_ID_animal '=> $datos['Inventario_rebaño_ID_animal '],
    'Produccion_ID_produccion '=> $datos['Produccion_ID_produccion '],
    'Fecha'=> $datos['Fecha'],
    'Opciones'=>'
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar"><i class="bi bi-pencil"></i></button>
    <button type="button" class="btn btn-danger" onclick=""><i class="bi bi-trash3"></i></button>',
);
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>