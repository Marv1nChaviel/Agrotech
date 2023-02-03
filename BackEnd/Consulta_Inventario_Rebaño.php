<?php 
include('./conexion_be.php');
// Obteniendo datos de inventario 
$sql = "SELECT * FROM inventario_rebaño";
$resultado = $conexion->prepare($sql);
$resultado->execute();
$datos=$resultado->fetch(PDO::FETCH_ASSOC);
// almacenano datos en variables para obtener datos mediante relacion
$raza = $datos['ID_raza'];
$clasificacion = $datos['ID_clasificacion'];
$lote = $datos['Lote_ID_lote'];
$tipo_rebaño = $datos['Tipo_rebaño_ID_tipo_rebaño'];

// obteniendo datos de raza
$sql2 = "SELECT * FROM raza WHERE ID_raza='$raza'";
$resultado2 = $conexion->prepare($sql2);
$resultado2->execute();
$datos2=$resultado2->fetch(PDO::FETCH_ASSOC);

// obteniendo datos de clasificacion
$sql3 = "SELECT * FROM clasificacion WHERE ID_clasificacion='$clasificacion'";
$resultado3 = $conexion->prepare($sql3);
$resultado3->execute();
$datos3=$resultado3->fetch(PDO::FETCH_ASSOC);

// obteniendo datos de lote
$sql4 = "SELECT * FROM lote WHERE ID_lote ='$lote'";
$resultado4 = $conexion->prepare($sql4);
$resultado4->execute();
$datos4=$resultado4->fetch(PDO::FETCH_ASSOC);

// obteniendo datos de tipo de rebaño
$sql5 = "SELECT * FROM tipo_rebaño WHERE ID_tipo_rebaño ='$tipo_rebaño'";
$resultado5 = $conexion->prepare($sql5);
$resultado5->execute();
$datos5=$resultado5->fetch(PDO::FETCH_ASSOC);

$json[] = array( 
    'ID_animal' => $datos['ID_animal'],
    'Nro_animal' => $datos['Nro_animal'],
    'Color' => $datos['Color'],
    'Partos' => $datos['Partos'],
    'Peso' => $datos['Peso']." KG",
    'ID_raza' => $datos2['Nombre_raza'],
    'Sexo' => $datos['Sexo'],
    'ID_clasificacion' => $datos3['Clasificacion_animal'],
    'Lote_ID_lote' => $datos4['Nombre_lote'],
    'Tipo_rebaño_ID_tipo_rebaño' => $datos5['Nombre_tipo_rebaño'],
    'Opciones'=>'
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar"><i class="bi bi-pencil"></i></button>
    <button type="button" class="btn btn-danger" onclick="EliminarBotonTabla();"><i class="bi bi-trash3"></i></button>'
    
  );

 echo json_encode($json, JSON_UNESCAPED_UNICODE);
 

    $conexion=null;



?>