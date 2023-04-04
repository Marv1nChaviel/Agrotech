<?php 
include('./conexion_be.php');

$N_Cedula = $_POST['N_Cedula'];
$N_Nombre = $_POST['N_Nombre'];
$N_Cargo = $_POST['N_Cargo'];
$N_Fecha_Entrada = $_POST['N_Fecha_Entrada'];
$Telefono =  $_POST['N_Telefono'];
$Sueldo = $_POST['N_Sueldo'];
// $Foto = $_FILES['Foto']['name'];



// #### Foto Trabajador ###################################################################################
##########################################################################################################//

// $extension = pathinfo($Foto, PATHINFO_EXTENSION); //Obvtener extencion de la imagen si es png o jpg

// //dirname(__DIR__) nos otorga la ruta absoluta hasta el archivo en ejecución
// $url_insertar = dirname(__DIR__) . "/assets/img/trabajadores"; //Carpeta donde subiremos nuestros archivos

// //Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
// $url_Final = str_replace('\\', '/', $url_insertar) . '/' . $Foto;

// switch ($extension) {
//     case 'jpg':
//     case 'jpeg':
//        $image = imagecreatefromjpeg($Foto);
//     break;
//     case 'gif':
//        $image = imagecreatefromgif($Foto);
//     break;
//     case 'png':
//        $image = imagecreatefrompng($Foto);
//     break;
// }

// imagepng($image, $N_Cedula.".png");


// #### Foto Trabajador ###################################################################################
##########################################################################################################//

// $N_Cedula = "2222";
// $N_Cargo = "fgfgfd";
// $N_Fecha_Entrada ="2222/10/02";
// $Telefono =  "0412451";
// $Sueldo = "fdsfsdfsf";




$ejecutar = $conexion->prepare("INSERT INTO trabajadores (Ci, Fecha_entrada, Sueldo_trabajadores, Cargo, Telefono, Nombre) 
VALUES (?, ?, ?, ?, ?, ?)");
// Bind

$ejecutar->bindParam(1,$N_Cedula);
$ejecutar->bindParam(2,$N_Fecha_Entrada);
$ejecutar->bindParam(3,$Sueldo);
$ejecutar->bindParam(4,$N_Cargo);
$ejecutar->bindParam(5,$Telefono);
$ejecutar->bindParam(6,$N_Nombre);

// Excecute
if($ejecutar->execute()){
    echo "Ejecutado";
}else{
    echo "Error";
}






?>