<?php 
include('./conexion_be.php');

$N_NumeroAnimal = $_POST['N_NumeroAnimal'];
$N_TipoRebaño = $_POST['N_TipoRebaño'];
$N_Color = $_POST['N_Color'];
$N_Lote = $_POST['N_Lote'];
$N_Partos = $_POST['N_Partos'];
$N_Peso = $_POST['N_Peso'];
$N_selectraza = $_POST['N_selectraza'];
$N_selectsexo = $_POST['N_selectsexo'];
$N_Clasificacion = $_POST['N_Clasificacion'];

$ejecutar = $conexion->prepare("INSERT INTO inventario_rebaño (Nro_animal, Color, Partos, Peso, ID_raza, Sexo, ID_clasificacion, Lote_ID_lote, Tipo_rebaño_ID_tipo_rebaño) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
// Bind

$ejecutar->bindParam(1,$N_NumeroAnimal);
$ejecutar->bindParam(2,$N_Color);
$ejecutar->bindParam(3,$N_Partos);
$ejecutar->bindParam(4,$N_Peso);
$ejecutar->bindParam(5,$N_selectraza);
$ejecutar->bindParam(6,$N_selectsexo);
$ejecutar->bindParam(7,$N_Clasificacion);
$ejecutar->bindParam(8,$N_Lote);
$ejecutar->bindParam(9,$N_TipoRebaño);

// Excecute
if($ejecutar->execute()){
    echo "Ejecutado";
}else{
    echo "Error";
}




$conexion = null;

?>