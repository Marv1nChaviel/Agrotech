<?php 
include('./conexion_be.php');

// $N_TipoRebaño = $_POST['N_TipoRebaño'];
// $N_Lote = $_POST['N_Lote'];
// $N_selectsexo = $_POST['N_selectsexo'];
// $N_Clasificacion = $_POST['N_Clasificacion'];
// $Cantidad = $_POST['Cantidad'];

$N_TipoRebaño = "1";
$N_Lote = "1";
$N_selectsexo = "H";
$N_Clasificacion = "1";
$Cantidad = "2";

for ($i=0; $i < $Cantidad; $i++) { 
$ejecutar = $conexion->prepare("INSERT INTO inventario_rebaño (Sexo, ID_clasificacion, Lote_ID_lote, Tipo_rebaño_ID_tipo_rebaño) 
VALUES (?, ?, ?, ?)");
// Bind

$ejecutar->bindParam(1,$N_selectsexo);
$ejecutar->bindParam(2,$N_Clasificacion);
$ejecutar->bindParam(3,$N_Lote);
$ejecutar->bindParam(4,$N_TipoRebaño);

}

// Excecute
if($ejecutar->execute()){
    echo "Ejecutado";
}else{
    echo "Error";
}




$conexion = null;

?>