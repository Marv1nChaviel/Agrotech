<?php 
// Comprobacion de datos post inventario Rebaño#######################################################
if(isset($_POST['Operacion'])){
$Operacion = $_POST['Operacion'];
    if($Operacion == "EditarInventarioRebaño"){
        
    }

}

//     isset($_POST['NumeroAnimal']) && isset($_POST['TipoRebaño']) && isset($_POST['Color']) && isset($_POST['Lote']) && isset($_POST['Partos'])
//  && isset($_POST['Peso'])  && isset($_POST['SRaza']) && isset($_POST['SSexo']) && isset($_POST['Clasificacion'])

Editar_Inventario_Rebaño();
   
    
 

// Funciones ##################################################################################################
// ##############################################################################################################
function Editar_Inventario_Rebaño(){
    include('./conexion_be.php');

// -----Se definen las variables obtenniendo datos del post------
    // $E_NumeroAnimal = $_POST['NumeroAnimal'];
    // $E_TipoRebaño = $_POST['TipoRebaño'];
    // $E_Color = $_POST['Color'];
    // $E_Lote = $_POST['Lote'];
    // $E_Partos = $_POST['Partos'];
    // $E_Peso = $_POST['Peso'];
    // $E_selectraza = $_POST['SRaza'];
    // $E_selectsexo = $_POST['SSexo'];
    // $E_Clasificacion = $_POST['Clasificacion'];

    $E_NumeroAnimal = "1";
    $E_TipoRebaño = "1";
    $E_Color = "verde";
    $E_Lote = "1";
    $E_Partos = "3";
    $E_Peso = "1";
    $E_selectraza = "1";
    $E_selectsexo = "H";
    $E_Clasificacion = "1";

    $ejecutar = $conexion->prepare("UPDATE inventario_rebaño SET Color=:Color, Partos=:Partos, Peso=:Peso, 
    ID_raza=:ID_raza, Sexo=:Sexo, ID_clasificacion=:ID_clasificacion, Lote_ID_lote=:Lote_ID_lote,
    Tipo_rebaño_ID_tipo_rebaño=:Tipo_rebaño_ID_tipo_rebaño WHERE ID_animal=:ID_animal");

 
    $Resultado =$ejecutar->execute(
        array(
            ':Color' => $E_Color,
            ':Partos' => $E_Partos,
            ':Peso' => $E_Peso,
            ':ID_raza' => $E_selectraza,
            ':Sexo' => $E_selectsexo,
            ':ID_clasificacion' => $E_Clasificacion,
            ':Lote_ID_lote' => $E_Lote,
            ':Tipo_rebaño_ID_tipo_rebaño' => $E_TipoRebaño,
            ':ID_animal' => $E_NumeroAnimal,
        )
    );
    // Excecute
    if(!empty($Resultado)){
        echo "Ejecutado";
    }else{
        echo "Error";
    }
}



?>