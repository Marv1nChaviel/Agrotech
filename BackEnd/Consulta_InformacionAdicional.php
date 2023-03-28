<?php 
include('./conexion_be.php');
$NumeroAnimal = $_POST['id_animal'];
// $NumeroAnimal = "10";
// Obteniendo datos de inventario 
$sql = "SELECT * FROM produccion WHERE Inventario_rebaño_ID_animal='$NumeroAnimal'";
$resultado = $conexion->prepare($sql);
$resultado->execute();
// $datos=$resultado->fetch(PDO::FETCH_ASSOC);
$Columnas_Optenidas = $resultado->rowCount();

if($Columnas_Optenidas <= 0){

 $json[] = array( 
      'Fecha' => "Sin datos",
      'Tipo_produccion' => "Sin Datos",
      
    );

}else{

  while($datos = $resultado->fetch()){
  
    $json[] = array( 
      'Fecha' => $datos['Fecha'],
      'Tipo_produccion' => $datos['Produccion_leche']." de Leche",
      
    );
  
}

}
echo json_encode($json, JSON_UNESCAPED_UNICODE);





?>