<?php

include('./conexion_be.php'); //incluyo el archivo conexion.php


session_start();

$ciOrif = $_POST['ciOrif'];
$contra = $_POST['contra'];

$consulta = $conexion->prepare("SELECT * FROM login WHERE ID_login =:ciOrif AND Contraseña=:contra");
$consulta->bindValue(':ciOrif', (int)$ciOrif, PDO::PARAM_INT);
$consulta->bindValue(':contra', (int)$contra, PDO::PARAM_INT);
$consulta->execute();
$count = $consulta->rowCount();

// echo $count;
if ($count > 0) {
   $_SESSION['Seccion'] = $ciOrif;
   $consulta2 = $conexion->prepare("SELECT * FROM info_hacienda WHERE RifOci =:ciOrif");
   $consulta2->bindValue(':ciOrif', (int)$ciOrif, PDO::PARAM_INT);
   $consulta2->execute();
   $datos=$consulta2->fetch(PDO::FETCH_ASSOC);
   $_SESSION['Nombre_Usuario'] = $datos['Nombre_propietario'];
  
      header('Location: ../Principal.php');
   exit;
} else {
   header('Location: Error.php');
}
