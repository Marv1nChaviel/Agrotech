<?php 
// Comprobacion de datos post inventario Rebaño#######################################################
    include('./conexion_be.php');

// -----Se definen las variables obtenniendo datos del post------
    $E_id_trabajador = $_POST['E_id_trabajador'];
    $E_NombreApellido = $_POST['E_NombreApellido'];
    $E_Cargo = $_POST['E_Cargo'];
    $E_Cedula = $_POST['E_Cedula'];
    $E_Sueldo = $_POST['E_Sueldo'];
    $E_Fecha_Entrada = $_POST['E_Fecha_Entrada'];
    $E_Telefono = $_POST['E_Telefono'];
 

    // $E_NumeroAnimal = "1";
    // $E_TipoRebaño = "1";
    // $E_Color = "verde";
    // $E_Lote = "1";
    // $E_Partos = "3";
    // $E_Peso = "10";
    // $E_selectraza = "1";
    // $E_selectsexo = "H";
    // $E_Clasificacion = "1";

   

    $ejecutar = $conexion->prepare("UPDATE trabajadores SET Ci= '$E_Cedula', Nombre= '$E_NombreApellido', Fecha_entrada= '$E_Fecha_Entrada', 
    Sueldo_trabajadores= '$E_Sueldo', Cargo= '$E_Cargo', Telefono= '$E_Telefono' WHERE ID_trabajador = '$E_id_trabajador'");


    
    // Excecute
    if($ejecutar->execute()){
        echo "Ejecutado";
       
    }else{
        echo "Error";
        print_r($conexion->errorInfo());
    }




?>