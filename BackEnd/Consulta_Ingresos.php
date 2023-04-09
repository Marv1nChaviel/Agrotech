<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM ingresos";
$resultado = $conexion->prepare($sql);
$resultado->execute();

$Columnas_Optenidas = $resultado->rowCount();

if($Columnas_Optenidas <= 0){

 $json[] = array( 
      'Fecha' => "Sin datos",
      'Ingreso' => "Sin Datos",
      
    );

}else{

while($datos=$resultado->fetch(PDO::FETCH_ASSOC)){

    if($datos['Venta_leche'] != null){
  
        $json[] = array( 
          'Fecha' => $datos['Fecha'],
          'Ingreso' => $datos['Venta_leche']." ".$datos['Ganancias']."$ de Ganancia",
        );
      }else if($datos['Venta_carne'] != null){
        $json[] = array( 
          'Fecha' => $datos['Fecha'],
          'Ingreso' => $datos['Venta_carne']." ".$datos['Ganancias']."$ de Ganancia",
        );
      }else{
        $json[] = array( 
            'Fecha' => $datos['Fecha'],
            'Ingreso' => $datos['Venta_animal']." ".$datos['Ganancias']."$ de Ganancia",
          );
      }

}
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>