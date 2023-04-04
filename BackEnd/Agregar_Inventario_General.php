<?php 
include('./conexion_be.php');

$N_NombreObjeto = $_POST['N_NombreObjeto'];
$N_CantDisponible = $_POST['N_CantDisponible'];
$N_Operador = $_POST['N_Operador'];
$N_InfoObjeto = $_POST['N_InfoObjeto'];


$ejecutar = $conexion->prepare("INSERT INTO inventario_general (Nombre_item, Info_item, Stock, Trabajadores_ID_trabajador) 
VALUES (?, ?, ?, ?)");
// Bind

$ejecutar->bindParam(1,$N_NombreObjeto);
$ejecutar->bindParam(2,$N_InfoObjeto);
$ejecutar->bindParam(3,$N_CantDisponible);
$ejecutar->bindParam(4,$N_Operador);

// Excecute
if($ejecutar->execute()){
    echo "Ejecutado";
}else{
    echo "Error";
}




$conexion = null;

?>