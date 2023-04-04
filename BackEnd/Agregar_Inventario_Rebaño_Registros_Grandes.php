<?php 
include('./conexion_be.php');

// $N_TipoRebaño = $_POST['N_TipoRebaño'];
// $N_Lote = $_POST['N_Lote'];
// $N_selectsexo = $_POST['N_Sexo'];
// $N_Clasificacion = $_POST['N_Clasificacion'];
// $Cantidad = $_POST['Cantidad'];
// $N_Raza = $_POST['N_Raza'];

$N_TipoRebaño = "1";
$N_Lote = "1";
$N_selectsexo = "H";
$N_Clasificacion = "1";
$Cantidad = "2";
$N_Raza = "1";

for ($i=0; $i < $Cantidad; $i++) { 
$ejecutar = $conexion->prepare("INSERT INTO inventario_rebaño (Sexo, ID_clasificacion, Lote_ID_lote, Tipo_rebaño_ID_tipo_rebaño, ID_raza) 
VALUES (?, ?, ?, ?, ?)");
// Bind

$ejecutar->bindParam(1,$N_selectsexo);
$ejecutar->bindParam(2,$N_Clasificacion);
$ejecutar->bindParam(3,$N_Lote);
$ejecutar->bindParam(4,$N_TipoRebaño);
$ejecutar->bindParam(5,$N_Raza);
$ejecutar->execute();


}


if($ejecutar->errorCode() == 0){
    echo "Ejecutado";
}else{
    echo "Error";
}





?>