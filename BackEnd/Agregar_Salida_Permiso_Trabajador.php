<?php 
include('./conexion_be.php');

$id_trabajador = $_POST['N_NombreObjeto'];
$salida_permiso_fecha = $_POST['N_NombreObjeto'];


$ejecutar = $conexion->prepare("UPDATE trabajadores SET Salida_permiso=? WHERE ID_trabajador =?");

$ejecutar->execute([$salida_permiso_fecha, $id_trabajador]);


// Excecute
if($ejecutar->execute()){
    echo "Ejecutado";
}else{
    echo "Error";
}



