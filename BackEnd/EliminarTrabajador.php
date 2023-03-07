<?php 
include('./conexion_be.php');
$Cedula=$_POST['Cedula'];

$sql = "DELETE FROM trabajadores WHERE Ci = $Cedula";
$resultado = $conexion->prepare($sql);
$resultado->execute();

if($resultado=true){
    echo "ejecutado";
    }else{
    echo "no ejecutado";
    }
?>