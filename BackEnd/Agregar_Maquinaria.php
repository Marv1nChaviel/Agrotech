<?php 
include('./conexion_be.php');
include('./Agregar_Actividad_Reciente.php');
$Marca = $_POST['Marca'];
$Modelo = $_POST['Modelo'];
$Color = $_POST['Color'];
$HorasdeUso = $_POST['HorasdeUso'];
$Año =  $_POST['Año'];
$Trabajador = $_POST['Trabajador'];
$Extras = $_POST['Extras'];
// $Foto = $_FILES['Foto']['name'];


$ejecutar = $conexion->prepare("INSERT INTO maquinaria (Marca, Modelo, Color, Año, Extras, Horas_uso,Trabajadores_ID_trabajador) 
VALUES (?, ?, ?, ?, ?, ?, ?)");
// Bind

$ejecutar->bindParam(1,$Marca);
$ejecutar->bindParam(2,$Modelo);
$ejecutar->bindParam(3,$Color);
$ejecutar->bindParam(4,$Año);
$ejecutar->bindParam(5,$Extras);
$ejecutar->bindParam(6,$HorasdeUso);
$ejecutar->bindParam(7,$Trabajador);

// Excecute
if($ejecutar->execute()){
    echo "Ejecutado";
    AgregarActividadReciente("Se agrego el Maquinaria ".$Modelo." al Registro","text-success");
}else{
    echo "Error";
}






?>