<?php 
include('./conexion_be.php');

$sql = "SELECT * FROM itinerario";
$resultado = $conexion->prepare($sql);
$resultado->execute();


while($datos=$resultado->fetch(PDO::FETCH_ASSOC)){
    $colorIncono = $datos['icono'];
    if($colorIncono == 1){ //Color Verde
        $json[] = array(
            'Datos'=> 
        '<div class="activity-item d-flex">
            <div class="activite-label">'.$datos['Dia_hora'].'</div>
                <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                    <div class="activity-content">
                <b>'.$datos['Nota'].'</b>
            </div>
        </div>',
        );
    }else if ($colorIncono == 2) { // Color Amarillo
        $json[] = array(
            'Datos'=> 
        '<div class="activity-item d-flex">
            <div class="activite-label">'.$datos['Dia_hora'].'</div>
                <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                    <div class="activity-content">
                <b>'.$datos['Nota'].'</b>
            </div>
        </div>',
        );
    }else if ($colorIncono == 2) { // Color Rojo
        $json[] = array(
            'Datos'=> 
        '<div class="activity-item d-flex">
            <div class="activite-label">'.$datos['Dia_hora'].'</div>
                <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                    <div class="activity-content">
                <b>'.$datos['Nota'].'</b>
            </div>
        </div>',
        );
    }

}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>