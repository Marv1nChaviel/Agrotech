<?php 
// Comprobacion de datos post inventario Rebaño#######################################################
    include('./conexion_be.php');

// -----Se definen las variables obtenniendo datos del post------
    $E_id_trabajador = $_POST['S_id_trabajador'];
    $E_Salida_permiso = $_POST['S_Salida_Permiso'];
 

   

    $ejecutar = $conexion->prepare("UPDATE trabajadores SET Salida_permiso = '$E_Salida_permiso' WHERE ID_trabajador = '$E_id_trabajador'");


    
    // Excecute
    if($ejecutar->execute()){
        echo "Ejecutado";
       
    }else{
        echo "Error";
        print_r($conexion->errorInfo());
    }




?>