<?php 
session_start();
//Si la seccion ya esta iniciada con algun usuario no se permita volver al inicio de seccion
//al menos que salgamos mediante el boton de cerrar cuenta
if(isset($_SESSION['Seccion'])){
	header('Location: ../Principal.php');
   exit;
}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icono -->
    <link rel="icon" href="./assets/img/icon.png">
    <!-- CSS/Style -->
    <link rel="stylesheet" href="./assets/css/Login-Style.css">
    <!-- Titulo de la Pagina -->
    <title>Agrotech | Login</title>

</head>

<body>
    <div class="container">
        <div class="img-background"></div>
        <div class="login-section">


            <div class="container">
                <!-- code here -->
                <div class="card">

                    <h2 class="card-heading">
                        AgroTech
                        <img class="logo" src="./assets/img/icon.png" width="70px" alt="">
                    </h2>
                </div>
                <form class="card-form" method="POST" action="./BackEnd/Verificacion_Datos_Login.php">

                    <div class="input">
                        <input type="text" name="ciOrif" class="input-field" required />
                        <label>CI/RIF</label>
                    </div>
                    <div class="input">
                        <input type="password" name="contra" class="input-field" required />
                        <label>Contraseña</label>
                    </div>
                    <div class="action">
                        <button type="submit" class="action-button">Iniciar Sesion</button>
                    </div>
                </form>
                <div class="card-info">
                    <p>Al iniciar sesion estas aceptando los <a href="#">Terminos y Condiciones</a></p>
                </div>
                <button class="action-button-register">Registrarse</button>
            </div>
        </div>

    </div>


    </div>
</body>

</html>
<?php 
}
?>