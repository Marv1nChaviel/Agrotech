<?php 



$RadioOpcion = $_POST['RadioOpcion'];
if($RadioOpcion == "Leche"){
    $Animal = $_POST['Animal'];
    $Fecha = $_POST['Fecha'];
    $Produccion = $_POST['Produccion'];
    $Ganancias = $_POST['Ganancias'];
    $Descripcion = $_POST['Descripcion'];
    GuardarIngresoLeche($Ganancias,$Descripcion,$Fecha,$Animal,$Produccion);
    
}else if($RadioOpcion == "Carne"){
    $Animal = $_POST['Animal'];
    $Fecha = $_POST['Fecha'];
    $Produccion = $_POST['Produccion'];
    $Ganancias = $_POST['Ganancias'];
    $Descripcion = $_POST['Descripcion'];
    GuardarIngresoCarne($Ganancias,$Descripcion,$Fecha,$Animal,$Produccion);

}else if($RadioOpcion == "Animal"){ //Falta terminar es para la venta del animal
    
}

function GuardarIngresoLeche($Ganancias,$Descripcion,$Fecha,$Animal,$Produccion){

    include('./conexion_be.php');
include('./Agregar_Actividad_Reciente.php');
    $ejecutar = $conexion->prepare("INSERT INTO ingresos (Ganancias, Venta_leche, Fecha, Inventario_rebaño_ID_animal,Produccion_ID_produccion) 
    VALUES (?, ?, ?, ?, ?)");
    // Bind
    
    $ejecutar->bindParam(1,$Ganancias);
    $ejecutar->bindParam(2,$Descripcion);
    $ejecutar->bindParam(3,$Fecha);
    $ejecutar->bindParam(4,$Animal);
    $ejecutar->bindParam(5,$Produccion);
    
    
    // Excecute
    if($ejecutar->execute()){
        echo "Ejecutado";
        AgregarActividadReciente("Se agrego nuevo registro a Ingresos de Venta ","text-success");
    }else{
        echo "Error";
    }
    
}


function GuardarIngresoCarne($Ganancias,$Descripcion,$Fecha,$Animal,$Produccion){

    include('./conexion_be.php');
include('./Agregar_Actividad_Reciente.php');
    $ejecutar = $conexion->prepare("INSERT INTO ingresos (Ganancias, Venta_carne, Fecha, Inventario_rebaño_ID_animal,Produccion_ID_produccion) 
    VALUES (?, ?, ?, ?, ?)");
    // Bind
    
    $ejecutar->bindParam(1,$Ganancias);
    $ejecutar->bindParam(2,$Descripcion);
    $ejecutar->bindParam(3,$Fecha);
    $ejecutar->bindParam(4,$Animal);
    $ejecutar->bindParam(5,$Produccion);
    
    
    // Excecute
    if($ejecutar->execute()){
        echo "Ejecutado";
        AgregarActividadReciente("Se agrego nuevo registro a Ingresos de Venta ","text-success");
    }else{
        echo "Error";
    }
    
}






?>