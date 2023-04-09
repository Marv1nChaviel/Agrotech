<?php


    include('./conexion_be.php');


    $sql = "SELECT MONTH(Fecha) as MES, SUM(Egresos) AS Egresos FROM egresos GROUP BY MONTH(Fecha)";
    $resultado = $conexion->prepare($sql);
    $resultado->execute();
    
    
    while ($datos = $resultado->fetch()) {
        $mes = $datos['MES'];
        $mesatexto = date("F",mktime(0,0,0,$mes,10));
        $json[] = array( 
            'x' => $mesatexto,
            'y' => $datos['Egresos'],
          );
          
      }
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    






?>
