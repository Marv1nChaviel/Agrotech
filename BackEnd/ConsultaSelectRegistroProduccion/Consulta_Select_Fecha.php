<?php
    function obtenerFecha() {
        include '../conexion_be.php';

        $sql = "SELECT * FROM produccion";
        $resultado = $conexion->prepare($sql);
        $resultado->execute();  

        $json = array();
        
        while($datos=$resultado->fetch(PDO::FETCH_ASSOC)) {
            $json[] = array(
                'FechaJson' => $datos['Fecha'],
            );
        }  

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
    

    function obtenerAnimales($Fecha) {
        include '../conexion_be.php';

        $sql = "SELECT * FROM produccion WHERE Fecha = '$Fecha'";
        $resultado = $conexion->prepare($sql);
        $resultado->execute();

        $json = array();
        
        while($datos=$resultado->fetch(PDO::FETCH_ASSOC)) {
            $json[] = array(
                'Animal' => $datos['Inventario_rebaño_ID_animal'],
            );
        }

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

    function obtenerProduccion($Animal,$Fecha) {
        include '../conexion_be.php';

        $sql = "SELECT * FROM produccion WHERE Fecha = '2023-03-03' AND Inventario_rebaño_ID_animal = '1'";
        $resultado = $conexion->prepare($sql);
        $resultado->execute();

        $json = array();
        
        while($datos=$resultado->fetch(PDO::FETCH_ASSOC)) {

            if($datos['Produccion_leche'] == null){
                $json[] = array(
                    'Produccion' => $datos['Produccion_carne'],
                );
            }else{
                $json[] = array(
                    'Produccion' => $datos['Produccion_leche'],
                );
            }
            
        }  

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

    if( isset($_POST['Fecha']) ) {
        $Fecha= $_POST['Fecha'];
        obtenerAnimales($Fecha);
    } else {
        obtenerFecha();
    }
?>