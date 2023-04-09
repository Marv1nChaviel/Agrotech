<?php 

// $datos = json_decode($_POST['GuardarDatos'],true);
// foreach ($datos as $resultado) {
//     var_dump($resultado["lat"],$resultado["lng"]);
//   }


$datos = $_POST['GuardarDatos'];
$titulo = $_POST['Titulo'];
// $resul = json_encode($datos);

    $json = array(
        $titulo => array(
            array($datos),
        )
        );
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
        $DatosCodificadosCompletos = json_encode($json, JSON_UNESCAPED_UNICODE);

    $directorio = __DIR__;
    $micarpeta = __DIR__ . '/json/';
    if (!file_exists($micarpeta)) {
        mkdir($micarpeta, 0777, true);
        //-------Crear archivo json-----------
        $creador = fopen($directorio . "/json/".$titulo.".json", "w+");
        fwrite($creador, $datos);
        fclose($creador);
    } else {
        //-------Crear archivo json-----------
        $creador = fopen($directorio . "/json/".$titulo.".json", "w+");
        fwrite($creador, $datos);
        fclose($creador);
    }

?>