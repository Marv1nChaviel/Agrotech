<?php 
include('./conexion_be.php');
// Obteniendo datos de inventario 
$ID_Animal = $_POST['id_animal'];
// $ID_Animal = "50";
$sql = "SELECT * FROM inventario_rebaño 
INNER JOIN raza ON inventario_rebaño.ID_raza = raza.ID_raza 
INNER JOIN clasificacion ON inventario_rebaño.ID_clasificacion = clasificacion.ID_clasificacion 
INNER JOIN lote ON inventario_rebaño.Lote_ID_lote = lote.ID_lote 
INNER JOIN tipo_rebaño ON inventario_rebaño.Tipo_rebaño_ID_tipo_rebaño = tipo_rebaño.ID_tipo_rebaño WHERE ID_animal='".$ID_Animal."'";
$resultado = $conexion->prepare($sql);
$resultado->execute();
// $datos=$resultado->fetch(PDO::FETCH_ASSOC);

$Valor_Existe = $resultado->rowCount();

if($Valor_Existe <= 0){
echo "No";
}else{
  while($datos = $resultado->fetch()){
  
    $json[] = array( 
      'ID_animal' => $datos['ID_animal'],
      'Color' => $datos['Color'],
      'Partos' => $datos['Partos'],
      'Peso' => $datos['Peso'],
      'Raza' => $datos['ID_raza'],
      'Sexo' => $datos['Sexo'],
      'ID_clasificacion' => $datos['ID_clasificacion'],
      'Lote_ID_lote' => $datos['ID_lote'],
      'Tipo_rebaño_ID_tipo_rebaño' => $datos['ID_tipo_rebaño']
      
    );
  
}
echo json_encode($json, JSON_UNESCAPED_UNICODE);
}



?>