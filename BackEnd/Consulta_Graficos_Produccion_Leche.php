<?php


    include('./conexion_be.php');

    // $sql = "SELECT MONTH(Fecha) as MES FROM produccion GROUP BY Fecha";
    // $sql = "SELECT SUM(Produccion_leche) AS ProduccionLeche FROM produccion GROUP BY Fecha";
    $sql = "SELECT MONTH(Fecha) as MES, SUM(Produccion_leche) AS ProduccionLeche FROM produccion GROUP BY MONTH(Fecha)";
    $resultado = $conexion->prepare($sql);
    $resultado->execute();
    
    
    while ($datos = $resultado->fetch()) {
        $mes = $datos['MES'];
        $mesatexto = date("F",mktime(0,0,0,$mes,10));
        $json[] = array( 
            'x' => $mesatexto,
            'y' => $datos['ProduccionLeche'],
          );
          
      }
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    






?>
