<?php 
include('./conexion_be.php');
// Obteniendo datos de inventario 
$sql = "SELECT * FROM inventario_rebaño 
INNER JOIN raza ON inventario_rebaño.ID_raza = raza.ID_raza 
INNER JOIN clasificacion ON inventario_rebaño.ID_clasificacion = clasificacion.ID_clasificacion 
INNER JOIN lote ON inventario_rebaño.Lote_ID_lote = lote.ID_lote 
INNER JOIN tipo_rebaño ON inventario_rebaño.Tipo_rebaño_ID_tipo_rebaño = tipo_rebaño.ID_tipo_rebaño ";
$resultado = $conexion->prepare($sql);
$resultado->execute();
// $datos=$resultado->fetch(PDO::FETCH_ASSOC);

while($datos = $resultado->fetch()){

  
    $json[] = array( 
      'Nro_animal' => $datos['Nro_animal'],
      'Color' => $datos['Color'],
      'Partos' => $datos['Partos'],
      'Peso' => $datos['Peso']." KG",
      'ID_raza' => $datos['Nombre_raza'],
      'Sexo' => $datos['Sexo'],
      'ID_clasificacion' => $datos['Clasificacion_animal'],
      'Lote_ID_lote' => $datos['Nombre_lote'],
      'Tipo_rebaño_ID_tipo_rebaño' => $datos['Nombre_tipo_rebaño'],
      'Opciones'=>'
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar"><i class="bi bi-pencil"></i></button>
      <button type="button" class="btn btn-danger" onclick="EliminarBotonTabla();"><i class="bi bi-trash3"></i></button>'
      
    );
  
}
echo json_encode($json, JSON_UNESCAPED_UNICODE);

?>