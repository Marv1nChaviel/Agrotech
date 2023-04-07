<?php 
include('./conexion_be.php');
// Obteniendo datos de inventario 

$sql = "SELECT * FROM inventario_general 
INNER JOIN trabajadores ON inventario_general.Trabajadores_ID_trabajador  = trabajadores.ID_trabajador";
$resultado = $conexion->prepare($sql);
$resultado->execute();
// $datos=$resultado->fetch(PDO::FETCH_ASSOC);

while($datos = $resultado->fetch()){
  
    $json[] = array( 
      'id_Inventario' => $datos['ID_inventario'],
      'Nombre_item' => $datos['Nombre_item'],
      'Info_item' => $datos['Info_item'],
      'Stock' => $datos['Stock']." Unidades",
      'Trabajador' => $datos['Nombre'],
      'Opciones'=>'
      <button type="button" class="btn btn-warning btnEditar" name="btnEditar" id="'.$datos['ID_inventario'].'" ><i class="bi bi-pencil"></i></button>
      <button type="button" class="btn btn-danger btnEliminar" id="'.$datos['ID_inventario'].'"><i class="bi bi-trash3"></i></button>'
    );
    
}
echo json_encode($json, JSON_UNESCAPED_UNICODE);


?>