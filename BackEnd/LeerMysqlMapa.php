<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM ubicacion_instalaciones";

$resultado = $conexion->prepare($sql);
$resultado->execute();

while($datos=$resultado->fetch(PDO::FETCH_ASSOC)){
    $coordenada = $datos['Ubicacion'];
    $json[] = array(
        'Nombre'=> $datos['Nombre'],
        'Coordenada'=> $datos['Ubicacion']
    );
}
// $json[] = array(
//     'type' => "FeatureCollection",
//     'features'=> array(
//         'type' =>"Feature",
//         'properties'=> "{}",
//         'geometry' => array(
//             'coordinates'=> array(
//                 array($coordenada),
//             ),
//             'type'=> "Polygon",
//         )
//     ),
    
// );

echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>