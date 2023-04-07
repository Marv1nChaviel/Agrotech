<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM itinerario ORDER BY Dia_hora DESC";
$resultado = $conexion->prepare($sql);
$resultado->execute();

$Columnas_Optenidas = $resultado->rowCount();

if($Columnas_Optenidas <= 0){

 $json[] = array( 
    'Datos'=> 
    '<div class="activity-item d-flex">
        <div class="activite-label">Sin datos</div>
            <i class="bi bi-circle-fill activity-badge text-secondary align-self-start"></i>
                <div class="activity-content">
            <b>Sin Datos Actualmente</b>
        </div>
    </div>',
    );

}else{
// text-success text-warning text-danger
while($datos=$resultado->fetch(PDO::FETCH_ASSOC)){
    $colorIncono = $datos['icono'];
   
        $json[] = array(
            'Datos'=> 
        '<div class="activity-item d-flex">
            <div class="activite-label">'.$datos['Dia_hora'].'</div>
                <i class="bi bi-circle-fill activity-badge '.$colorIncono.' align-self-start"></i>
                    <div class="activity-content">
                <b>'.$datos['Nota'].'</b>
            </div>
        </div>',
        );


}
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>