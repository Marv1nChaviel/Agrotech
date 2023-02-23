<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGROTECH</title>
    <link rel="icon" href="./assets/img/icono_peque.ico">
    <link rel="stylesheet" href="./assets/css/login.css">

</head>
<body>
    <div class="container">
        <form action="./BackEnd/Verificacion_Datos.php" method="POST" class="login">
            <img class="login-icon" src="/assets/img/icono.png" alt="">
               <h3>Bienvenido </h3>
                <h2>AGROTECH</h2>
            <div class="inputs"> 
                <i><img src="/assets/img/icon-user.png" width="30px"></i><input type="text" required="" placeholder="Usuario" name="Usuario">
            </div>
            <div class="inputs">
                <i><img src="/assets/img/icon-password.png" width="30px"></i><input type="password" required="" placeholder="Contraseña" name="Contraseña">
            </div>
            <div class="btn">
                <input type="submit" value="Entrar">
               
            </div>
            <div class="resetpassword">
                <p>Olvidaste tu Contraseña? <a href="#">Click Aqui</a></p>
            </div>
        </form>
    </div>
</body>
</html>