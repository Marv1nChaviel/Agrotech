<?php 

// Verifica si se envio el dato del inventario rebaño
if(isset($_POST['id_animal'])){
    $id_animal = $_POST['id_animal'];
    EliminarRegistroInventarioRebaño($id_animal);

    // Se verifica si se envio el dato trabajador
}else if(isset($_POST['id_trabajador'])){
    $id_trabajador=$_POST['id_trabajador'];
    EliminarRegistroTrabajador($id_trabajador);

    // Se verifica si se envio un dato de maquinaria
}else if(isset($_POST['id_Maquinaria'])){
    $id_Maquinaria=$_POST['id_Maquinaria'];
    EliminarRegistroMaquinaria($id_Maquinaria);

    // Se verifica el envio de datos de inventario general
}else if(isset($_POST['id_inventario'])){
    $id_inventario=$_POST['id_inventario'];
    EliminarRegistroInventarioGeneral($id_inventario);
}



function EliminarRegistroInventarioRebaño($id_animal){
    include('./conexion_be.php');
    include('./Agregar_Actividad_Reciente.php');
    $sql = "DELETE FROM inventario_rebaño WHERE ID_animal  = '$id_animal'";
    $resultado = $conexion->prepare($sql);

    if($resultado->execute()){
        echo "Ejecutado";
        AgregarActividadReciente("Se elimino registro de un animal en inventario rebaño","text-danger");
        }else{
            echo "Error";
        }

}

function EliminarRegistroTrabajador($id_trabajador){
    include('./conexion_be.php');
    include('./Agregar_Actividad_Reciente.php');
    $sql = "DELETE FROM trabajadores WHERE ID_trabajador  = $id_trabajador";
$resultado = $conexion->prepare($sql);


if($resultado->execute()){
    echo "Ejecutado";
    AgregarActividadReciente("Se elimino registro de un Trabajador","text-danger");
    }else{
    echo "no ejecutado";
    }
}

function EliminarRegistroMaquinaria($id_Maquinaria){
    include('./conexion_be.php');
    include('./Agregar_Actividad_Reciente.php');
    $sql = "DELETE FROM maquinaria WHERE ID_maquinaria = $id_Maquinaria";
    $resultado = $conexion->prepare($sql);


if($resultado->execute()){
    echo "Ejecutado";
    AgregarActividadReciente("Se elimino registro de una Maquinaria","text-danger");
    }else{
    echo "no ejecutado";
    }
}

function EliminarRegistroInventarioGeneral($id_inventario){
    include('./conexion_be.php');
    include('./Agregar_Actividad_Reciente.php');
    $sql = "DELETE FROM inventario_general WHERE ID_inventario = $id_inventario";
    $resultado = $conexion->prepare($sql);


if($resultado->execute()){
    echo "Ejecutado";
    AgregarActividadReciente("Se elimino registro de Inventario General","text-danger");
    }else{
    echo "no ejecutado";
    }
}
   


?>