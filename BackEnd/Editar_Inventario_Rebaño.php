<?php 
// Comprobacion de datos post inventario Rebaño#######################################################
    include('./conexion_be.php');
    include('./Agregar_Actividad_Reciente.php');

// -----Se definen las variables obtenniendo datos del post------
    $E_NumeroAnimal = $_POST['E_NumeroAnimal'];
    $E_TipoRebaño = $_POST['E_TipoRebaño'];
    $E_Color = $_POST['E_Color'];
    $E_Lote = $_POST['E_Lote'];
    $E_Partos = $_POST['E_Partos'];
    $E_Peso = $_POST['E_Peso'];
    $E_selectraza = $_POST['E_selectraza'];
    $E_selectsexo = $_POST['E_selectsexo'];
    $E_Clasificacion = $_POST['E_Clasificacion'];

    // $E_NumeroAnimal = "1";
    // $E_TipoRebaño = "1";
    // $E_Color = "verde";
    // $E_Lote = "1";
    // $E_Partos = "3";
    // $E_Peso = "10";
    // $E_selectraza = "1";
    // $E_selectsexo = "H";
    // $E_Clasificacion = "1";

   

    $ejecutar = $conexion->prepare("UPDATE inventario_rebaño SET Color= '$E_Color', Partos= '$E_Partos', Peso= '$E_Peso', 
    ID_raza= '$E_selectraza', Sexo= '$E_selectsexo', ID_clasificacion= '$E_Clasificacion', Lote_ID_lote= '$E_Lote',
    Tipo_rebaño_ID_tipo_rebaño= '$E_TipoRebaño' WHERE ID_animal= '$E_NumeroAnimal'");


    
    // Excecute
    if($ejecutar->execute()){
        echo "Ejecutado";
        AgregarActividadReciente("Se edito un registro en inventario rebaño del animal  ".$E_NumeroAnimal."","text-warning");

       
    }else{
        echo "Error";
        print_r($conexion->errorInfo());
    }




?>