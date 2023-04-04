<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM maquinaria 
INNER JOIN trabajadores ON maquinaria.Trabajadores_ID_trabajador = trabajadores.ID_trabajador";
$resultado = $conexion->prepare($sql);
$resultado->execute();


while($datos=$resultado->fetch(PDO::FETCH_ASSOC)){
$json[] = array(
    'ID_maquinaria'=> $datos['ID_maquinaria'],
    'Marca'=> $datos['Marca'],
    'Modelo'=> $datos['Modelo'],
    'Color'=> $datos['Color'],
    'Año'=> $datos['Año'],
    'Extras'=> $datos['Extras'],
    'Horas_uso'=> $datos['Horas_uso'],
    'Trabajadores_ID_trabajador'=> $datos['Ci'],
    'Opciones'=>'
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar"><i class="bi bi-pencil"></i></button>
    <button type="button" class="btn btn-danger btnEliminar" id="'.$datos['ID_maquinaria'].'"><i class="bi bi-trash3"></i></button>'
    
);
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>