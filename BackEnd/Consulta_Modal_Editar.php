<?php 

if(isset($_POST['id_animal'])){
  $ID_Animal = $_POST['id_animal'];
  ConsultaModalEditarRebaño($ID_Animal);
}else if(isset($_POST['id_trabajador'])){
  $id_trabajadores = $_POST['id_trabajador'];
ConsultaModalEditarTrabajadores($id_trabajadores);
}else if(isset($_POST['id_Maquinaria'])){
  $id_Maquinaria =$_POST['id_Maquinaria'];
  ConsultaModalEditarMaquinaria($id_Maquinaria);
}else if(isset($_POST['id_inventariogeneral'])){
  $id_inventariogeneral = $_POST['id_inventariogeneral'];
  ConsultaModalEditarInventarioGeneral($id_inventariogeneral);
}

// Consulta de modal editar rebaño --------------------------
function ConsultaModalEditarRebaño($ID_Animal){
  include('./conexion_be.php');
  // Obteniendo datos de inventario 
  
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
  
}
// Funcion Consulta Trabajadores en modal editar-----------------------------

function ConsultaModalEditarTrabajadores($id_trabajadores){
  include('./conexion_be.php');

$sql = "SELECT * FROM trabajadores WHERE ID_trabajador = $id_trabajadores";
$resultado = $conexion->prepare($sql);
$resultado->execute();


while($datos=$resultado->fetch(PDO::FETCH_ASSOC)){
$json[] = array(
    'ID_trabajador'=> $datos['ID_trabajador'],
    'Ci'=> $datos['Ci'],
    'Nombre'=> $datos['Nombre'],
    'Fecha_entrada'=> $datos['Fecha_entrada'],
    'Salida_permiso'=> $datos['Salida_permiso'],
    'Sueldo_trabajadores'=> $datos['Sueldo_trabajadores'],
    'Cargo'=> $datos['Cargo'],
    'Telefono'=> $datos['Telefono'],
    'Imagen'=>'../assets/img/trabajadores/'.$datos['Ci'].'.jpg'
);
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
}
// Funcion Consulta Maquinaria en modal editar-----------------------------
function ConsultaModalEditarMaquinaria($id_Maquinaria){
  include('./conexion_be.php');

$sql = "SELECT * FROM maquinaria 
INNER JOIN trabajadores ON maquinaria.Trabajadores_ID_trabajador = trabajadores.ID_trabajador WHERE ID_maquinaria = $id_Maquinaria";
$resultado = $conexion->prepare($sql);
$resultado->execute();


while($datos=$resultado->fetch(PDO::FETCH_ASSOC)){
$json[] = array(
    'ID_maquinaria'=> $datos['ID_maquinaria'],
    'Marca'=> $datos['Marca'],
    'Modelo'=> $datos['Modelo'],
    'Color'=> $datos['Color'],
    'Año'=> $datos['Año'],
    'Extras'=> $datos['Extras'],
    'Horas_uso'=> $datos['Horas_uso'],
    'Trabajadores_ID_trabajador'=> $datos['ID_trabajador'],
    
);
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
}

// Funcion Consulta Inventario General en modal editar-----------------------------
function ConsultaModalEditarInventarioGeneral($id_inventariogeneral){
  include('./conexion_be.php');
// Obteniendo datos de inventario 

$sql = "SELECT * FROM inventario_general 
INNER JOIN trabajadores ON inventario_general.Trabajadores_ID_trabajador  = trabajadores.ID_trabajador WHERE ID_inventario = $id_inventariogeneral";
$resultado = $conexion->prepare($sql);
$resultado->execute();
// $datos=$resultado->fetch(PDO::FETCH_ASSOC);

while($datos = $resultado->fetch()){
  
    $json[] = array( 
      'id_Inventario' => $datos['ID_inventario'],
      'Nombre_item' => $datos['Nombre_item'],
      'Info_item' => $datos['Info_item'],
      'Stock' => $datos['Stock'],
      'Trabajador' => $datos['ID_trabajador'],
    );
    
}
echo json_encode($json, JSON_UNESCAPED_UNICODE);

}



?>