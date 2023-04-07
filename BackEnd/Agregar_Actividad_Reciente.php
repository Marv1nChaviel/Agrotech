<?php 


function AgregarActividadReciente($Actividad,$icono){
    include('./conexion_be.php');
    date_default_timezone_set('America/Caracas');
    $fecha_actual = date("Y-m-d h:i:s");
    $ejecutar = $conexion->prepare("INSERT INTO itinerario (Dia_hora, icono, Nota) 
    VALUES (?, ?, ?)");
    $ejecutar->bindParam(1,$fecha_actual);
    $ejecutar->bindParam(2,$icono);
    $ejecutar->bindParam(3,$Actividad);

    if($ejecutar->execute()){
        // echo "Ejecutado";
    }else{
        // echo "Error";
    }
}

?>
