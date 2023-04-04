<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM itinerario";
$resultado = $conexion->prepare($sql);
$resultado->execute();


while($datos=$resultado->fetch(PDO::FETCH_ASSOC)){
$json[] = array(
    'Fecha'=> $datos['Dia_hora'],
    'Nota'=> $datos['Nota'],
);
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>