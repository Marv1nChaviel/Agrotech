<?php 
include('./conexion_be.php');

$N_Cedula = $_POST['N_Cedula'];
$N_Cargo = $_POST['N_Cargo'];
$N_Fecha_Entrada = $_POST['N_Fecha_Entrada'];
$Telefono =  $_POST['N_Telefono'];
$Sueldo = $_POST['N_Sueldo'];
$Foto = $_FILES[''];

// #### Foto Trabajador ###################################################################################
##########################################################################################################//



// #### Foto Trabajador ###################################################################################
##########################################################################################################//

// $N_Cedula = "2222";
// $N_Cargo = "fgfgfd";
// $N_Fecha_Entrada ="2222/10/02";
// $Telefono =  "0412451";
// $Sueldo = "fdsfsdfsf";




$ejecutar = $conexion->prepare("INSERT INTO trabajadores (Ci, Fecha_entrada, Sueldo_trabajadores, 	Cargo, Telefono) 
VALUES (?, ?, ?, ?, ?)");
// Bind

$ejecutar->bindParam(1,$N_Cedula);
$ejecutar->bindParam(2,$N_Fecha_Entrada);
$ejecutar->bindParam(3,$Sueldo);
$ejecutar->bindParam(4,$N_Cargo);
$ejecutar->bindParam(5,$Telefono);

// Excecute
if($ejecutar->execute()){
    echo "Ejecutado";
}else{
    echo "Error";
}




$conexion = null;

?>