<?php 
include('./conexion_be.php');
include('./Agregar_Actividad_Reciente.php');

    $Fecha = $_POST['Fecha'];
    $Gasto = $_POST['Gasto'];
    $Descripcion = $_POST['Descripcion'];
    $id_inventario = 1;
    $id_trabajador = 1;

    $ejecutar = $conexion->prepare("INSERT INTO egresos (Egresos, Fecha, Gastos_generales, Inventario_rebaño_ID_animal ,Trabajadores_ID_trabajador ) 
    VALUES (?, ?, ?, ?, ?)");
    // Bind
    
    $ejecutar->bindParam(1,$Gasto);
    $ejecutar->bindParam(2,$Fecha);
    $ejecutar->bindParam(3,$Descripcion);
    $ejecutar->bindParam(4,$id_inventario);
    $ejecutar->bindParam(5,$id_trabajador);
    
    
    // Excecute
    if($ejecutar->execute()){
        echo "Ejecutado";
        AgregarActividadReciente("Se agrego nuevo registro a Gastos sobre ".$Descripcion."","text-success");
    }else{
        echo "Error";
    }
    

?>