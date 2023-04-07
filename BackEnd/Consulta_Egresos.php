<?php 


// Funcion Egresos ----------------------------------------------------------------

  include('./conexion_be.php');

  $sql = "SELECT * FROM egresos";
  $resultado = $conexion->prepare($sql);
  $resultado->execute();
  
  $Columnas_Optenidas = $resultado->rowCount();
  
  if($Columnas_Optenidas <= 0){
  
   $json[] = array( 
        'Fecha' => "Sin datos",
        'Egresos' => "Sin Datos",
        
      );
  
  }else{
  
  while($datos=$resultado->fetch(PDO::FETCH_ASSOC)){
  
      if($datos['Sueldo_trabajadores'] != null){
    
          $json[] = array( 
            'Fecha' => $datos['Fecha'],
            'Egresos' => $datos['Sueldo_trabajadores'],
          );
        }else if($datos['Salud_Animal'] != null){
          $json[] = array( 
            'Fecha' => $datos['Fecha'],
            'Egresos' => $datos['Salud_Animal'],
          );
        }else if($datos['Mantenimiento_potreros'] != null){
          $json[] = array( 
            'Fecha' => $datos['Fecha'],
            'Egresos' => $datos['Mantenimiento_potreros'],
          );
        }else if($datos['Mantenimiento_mecanico'] != null){
          $json[] = array( 
            'Fecha' => $datos['Fecha'],
            'Egresos' => $datos['Mantenimiento_mecanico'],
          );
        }else if($datos['Gastos_generales'] != null){
          $json[] = array( 
            'Fecha' => $datos['Fecha'],
            'Egresos' => $datos['Gastos_generales'],
          );
        }else{
          $json[] = array( 
              'Fecha' => $datos['Fecha'],
              'Egresos' => $datos['Gastos_instalaciones']."",
            );
        }
  
  }
  }
  echo json_encode($json,JSON_UNESCAPED_UNICODE);
  


?>