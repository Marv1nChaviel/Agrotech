<?php 
include('./conexion_be.php');

$E_NumeroAnimal = $_POST['NumeroAnimal'];
$E_TipoRebaño = $_POST['TipoRebaño'];
$E_Color = $_POST['Color'];
$E_Lote = $_POST['Lote'];
$E_Partos = $_POST['Partos'];
$E_Peso = $_POST['Peso'];
$E_selectraza = $_POST['SRaza'];
$E_selectsexo = $_POST['SSexo'];
$E_Clasificacion = $_POST['Clasificacion'];

$ejecutar = $conexion->prepare("UPDATE inventario_rebaño (Color, Partos, Peso, ID_raza, Sexo, ID_clasificacion, Lote_ID_lote, Tipo_rebaño_ID_tipo_rebaño) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
// Bind


$ejecutar->bindParam(1,$E_Color);
$ejecutar->bindParam(2,$E_Partos);
$ejecutar->bindParam(3,$E_Peso);
$ejecutar->bindParam(4,$E_selectraza);
$ejecutar->bindParam(5,$E_selectsexo);
$ejecutar->bindParam(6,$E_Clasificacion);
$ejecutar->bindParam(7,$E_Lote);
$ejecutar->bindParam(8,$E_TipoRebaño);

// Excecute
if($ejecutar->execute()){
    echo "Ejecutado";
}else{
    echo "Error";
}




$conexion = null;

?>