<?php 

if( isset($_POST['Animal']) && isset($_POST['Fecha']))  {
    $Animal = $_POST['Animal'];
    $FechaRev = $_POST['Fecha'];
    obtenerProduccion($Animal,$FechaRev);
}
function obtenerProduccion($Animal,$Fecha) {
        include '../conexion_be.php';

        $sql = "SELECT * FROM produccion WHERE Fecha = '$Fecha' AND Inventario_rebaño_ID_animal = '$Animal'";
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
    ?>