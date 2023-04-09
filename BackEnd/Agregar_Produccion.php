<?php 


$TipoProduccion = $_POST['TipoProduccion'];
if($TipoProduccion =="Leche"){

    $Cantidad = $_POST['Cantidad'];
    $Fecha_Produccion = $_POST['Fecha_Produccion'];
    $SelectAnimalProduccion = $_POST['SelectAnimalProduccion'];
    AgregarLeche($Cantidad,$Fecha_Produccion,$SelectAnimalProduccion);

}else if($TipoProduccion =="Carne"){

    $Cantidad = $_POST['Cantidad'];
    $Fecha_Produccion = $_POST['Fecha_Produccion'];
    $SelectAnimalProduccion = $_POST['SelectAnimalProduccion'];
    AgregarCarne($Cantidad,$Fecha_Produccion,$SelectAnimalProduccion);
}



function AgregarLeche($Cantidad,$Fecha,$Animal){
    include('./conexion_be.php');
    include('./Agregar_Actividad_Reciente.php');
    $ejecutar = $conexion->prepare("INSERT INTO produccion (Produccion_leche, Fecha, Inventario_rebaño_ID_animal) 
    VALUES (?, ?, ?)");
    // Bind
    
    $ejecutar->bindParam(1,$Cantidad);
    $ejecutar->bindParam(2,$Fecha);
    $ejecutar->bindParam(3,$Animal);
   
    
    
    // Excecute
    if($ejecutar->execute()){
        echo "Ejecutado";
        AgregarActividadReciente("Se agrego produccion de Leche de ".$Cantidad." Litros","text-success");
    
    }else{
        echo "Error";
    }
}

function AgregarCarne($Cantidad,$Fecha,$Animal){
    include('./conexion_be.php');
    include('./Agregar_Actividad_Reciente.php');
    $ejecutar = $conexion->prepare("INSERT INTO produccion (Produccion_carne, Fecha, Inventario_rebaño_ID_animal) 
    VALUES (?, ?, ?)");
    // Bind
    
    $ejecutar->bindParam(1,$Cantidad);
    $ejecutar->bindParam(2,$Fecha);
    $ejecutar->bindParam(3,$Animal);
    
    
    // Excecute
    if($ejecutar->execute()){
        echo "Ejecutado";
        AgregarActividadReciente("Se agrego produccion de Carne de ".$Cantidad." Kg","text-success");
    
    }else{
        echo "Error";
    }
}









?>