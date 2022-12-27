<?php

include 'conexion_be.php';

$usu = $_POST['usuario'];
$contra = $_POST['contra'];

$validad_login = mysqli_query($conexion,"SELECT * FROM cuentas WHERE Usuario='$usu' AND Contra ='$contra'");

if(mysqli_num_rows($validad_login) > 0){
    //$_SESSION['usuario'] = $usu;
        echo '<script> window.location ="Principal.html"; </script>';
        exit();
 } else{

    echo
             '
             <script>
            alert("Error Contraseña o Usuario incorrectos!");
            window.location ="index.html";
             </script>
              ';
 }

?>