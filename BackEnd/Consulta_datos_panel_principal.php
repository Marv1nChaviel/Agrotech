<?php 
include('./conexion_be.php');

$sql = "SELECT COUNT(*) FROM inventario_rebaño ";
$resultado = $conexion->query($sql);
$resultado->execute();
$datos=$resultado->fetchColumn();

// esta y la anterior funcionan igual se dejo por si algun problema con una se pueda usar la otra

// $sql = "SELECT FROM inventario_rebaño ";
// $resultado = $conexion->prepare($sql);
// $resultado->execute();
// $datos=$resultado->rowCount();

$sql1 = "SELECT COUNT(*) FROM trabajadores";
$resultado1 = $conexion->query($sql1);
$resultado1->execute();
$datos1=$resultado1->fetchColumn();

$sql2 = "SELECT SUM(Ganancias) AS Ganancias FROM ingresos";
$resultado2 = $conexion->query($sql2);
$resultado2->execute();


while($Datos = $resultado2->fetch()){
    $ingresosT = $Datos['Ganancias'];
}

$sql3 = "SELECT SUM(Egresos) AS Egresos FROM egresos";
$resultado3 = $conexion->query($sql3);
$resultado3->execute();

while($Datos = $resultado3->fetch()){
    $EgresosT = $Datos['Egresos'];
}


$datos_json[] = array(
    'cantidad_rebaño'=> $datos,
    'cantidad_trabajadores'=>$datos1,
    'Ganancias'=>$ingresosT." $",
    'Gastos'=>$EgresosT." $"
);

echo json_encode($datos_json,JSON_UNESCAPED_UNICODE);
?>