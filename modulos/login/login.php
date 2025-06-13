<?php 
 include("../../app/config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title><?php $APP_NAME?></title>
</head>
<body>
    <div class="container">
        <div class="login form">
            <header>
                <img class="login-icon" src="../../public/img/icon_usuario.svg" alt="icon">
                <h3>Inicio de Sesión</h3>
            </header>
            <form action="#" method="post">
                <label><h4>Usuario</h4></label>
                <input id="usuario" type="text" placeholder="Ej. nsolano" name="usuario">
                <label><h4>Contraseña</h4></label>
                <input id="contrasena" type="password" placeholder="**********" name="password" >
                <?php
                include("../login/controlador.php");
                ?>
                <input name="btningresar" type="submit" class="button" value="Ingresar">
            </form>
        </div>
    </div>
</body>
</html>