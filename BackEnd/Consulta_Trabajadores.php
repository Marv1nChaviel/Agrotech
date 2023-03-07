<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM trabajadores";
$resultado = $conexion->prepare($sql);
$resultado->execute();


while($datos=$resultado->fetch(PDO::FETCH_ASSOC)){
$json[] = array(
    'ID_trabajador'=> $datos['ID_trabajador'],
    'Ci'=> $datos['Ci'],
    'Fecha_entrada'=> $datos['Fecha_entrada'],
    'Salida_permiso'=> $datos['Salida_permiso'],
    'Sueldo_trabajadores'=> $datos['Sueldo_trabajadores'],
    'Cargo'=> $datos['Cargo'],
    'Telefono'=> $datos['Telefono'],
    'Opciones'=>'
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar"><i class="bi bi-pencil"></i></button>
    <button type="button" class="btn btn-danger" onclick="EliminarRegistroTablaTrabajadores('.$datos['Ci'].')"><i class="bi bi-trash3"></i></button>',
    'Imagen'=>'<img src="../assets/img/trabajadores/'.$datos['Ci'].'.jpg" width="100" height="100" style="border-radius: 20%">'
);
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>