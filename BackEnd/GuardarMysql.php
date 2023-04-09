<?php 
include('./conexion_be.php');

$datos = json_decode($_POST['GuardarDatos'],true);
$titulo = $_POST['Titulo'];
$Plantilla ="";
foreach ($datos as $resultado) {
    $Plantilla .="[".$resultado["lat"].",".$resultado["lng"]."],";
   
}


$TituloFinal = $titulo;
$PlantillaFinal = $Plantilla;
$ejecutar = $conexion->prepare("INSERT INTO ubicacion_instalaciones (Nombre, Ubicacion) VALUES (?, ?)");


$ejecutar->bindParam(1,$TituloFinal);
$ejecutar->bindParam(2,$PlantillaFinal);
$ejecutar->execute();








 
?>