<?php 
include('./conexion_be.php');
include('./Agregar_Actividad_Reciente.php');


$N_NombreObjeto = $_POST['N_NombreObjeto'];
$N_CantDisponible = $_POST['N_CantDisponible'];
$N_Operador = $_POST['N_Operador'];
$N_InfoObjeto = $_POST['N_InfoObjeto'];

// $N_NombreObjeto = "NombreObjeto";
// $N_CantDisponible = "5";
// $N_Operador = "1";
// $N_InfoObjeto = "Nadade imnformacion";


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
    AgregarActividadReciente("Se agrego nuevo registro a inventario general de ".$N_NombreObjeto."","text-success");
}else{
    echo "Error";
}






?>