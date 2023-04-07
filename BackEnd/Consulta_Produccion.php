<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM produccion INNER JOIN inventario_rebaño ON produccion.Inventario_rebaño_ID_animal  = inventario_rebaño.ID_animal";
$resultado = $conexion->prepare($sql);
$resultado->execute();


while($datos=$resultado->fetch(PDO::FETCH_ASSOC)){
    if(!empty($datos['Produccion_leche'])){

        $json[] = array(
            'ID_Produccion'=> $datos['ID_produccion'],
            'Fecha'=> $datos['Fecha'],
            'Produccion'=> $datos['Produccion_leche']." litros de Leche",
            'Animal'=> $datos['ID_animal'],
            'Opciones'=>'
            <button type="button" class="btn btn-warning btnEditarProduccion" id="'.$datos['ID_produccion'].'"><i class="bi bi-pencil"></i></button>
            <button type="button" class="btn btn-danger btnEliminar" id="'.$datos['ID_produccion'].'"><i class="bi bi-trash3"></i></button>',
        );

    }else if (!empty($datos['Produccion_carne'])){
        $json[] = array(
            'ID_Produccion'=> $datos['ID_produccion'],
            'Fecha'=> $datos['Fecha'],
            'Produccion'=> $datos['Produccion_carne']." KG de Carne",
            'Animal'=> $datos['ID_animal'],
            'Opciones'=>'
            <button type="button" class="btn btn-warning btnEditarProduccion" id="'.$datos['ID_produccion'].'"><i class="bi bi-pencil"></i></button>
            <button type="button" class="btn btn-danger btnEliminar" id="'.$datos['ID_produccion'].'"><i class="bi bi-trash3"></i></button>',
        );
    }


}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>
