<?php 
// Comprobacion de datos post inventario Rebaño#######################################################
    include('./conexion_be.php');
    include('./Agregar_Actividad_Reciente.php');

// -----Se definen las variables obtenniendo datos del post------
    $E_id_Maquinaria = $_POST['E_id_Maquinaria'];
    $E_Marca = $_POST['E_Marca'];
    $E_Modelo = $_POST['E_Modelo'];
    $E_Color = $_POST['E_Color'];
    $E_HorasdeUso = $_POST['E_HorasdeUso'];
    $E_Año = $_POST['E_Año'];
    $E_Trabajador = $_POST['E_Trabajador'];
    $E_Extras = $_POST['E_Extras'];

    // $E_NumeroAnimal = "1";
    // $E_TipoRebaño = "1";
    // $E_Color = "verde";
    // $E_Lote = "1";
    // $E_Partos = "3";
    // $E_Peso = "10";
    // $E_selectraza = "1";
    // $E_selectsexo = "H";
    // $E_Clasificacion = "1";

   

    $ejecutar = $conexion->prepare("UPDATE maquinaria SET Marca= '$E_Marca', Modelo= '$E_Modelo', Color= '$E_Color', 
    Año= '$E_Año', Horas_uso= '$E_HorasdeUso', Trabajadores_ID_trabajador = '$E_Trabajador', Extras='$E_Extras' WHERE ID_maquinaria  = '$E_id_Maquinaria'");


    
    // Excecute
    if($ejecutar->execute()){
        echo "Ejecutado";
        AgregarActividadReciente("Se edito un registro de Maquinaria ","text-warning");
       
    }else{
        echo "Error";
        print_r($conexion->errorInfo());
    }




?>