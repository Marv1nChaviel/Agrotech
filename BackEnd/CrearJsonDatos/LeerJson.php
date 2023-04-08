<?php 
$directorio = __DIR__;

$ubicacion = $directorio . '/json/{*.json}';
//----------verificando cuantos archivos hay en la direccion y retorna un numero
$total_ubicaciones = count(glob($ubicacion, GLOB_BRACE));
for ($i = 0; $i < $total_ubicaciones; $i++) { //ejecutara el for por cada vez que encuentre un archivo 

    $nombrearchivos = scandir($directorio . '/json/', 1); // escanea el directorio y obtiene el nombre de todos ls archivos en el
    $datosinternosjson = file_get_contents($directorio . '/json/'. $nombrearchivos[$i]); //almacenamos la ubicacion del archivo en datos internosjson
    print_r($datosinternosjson);

}
?>