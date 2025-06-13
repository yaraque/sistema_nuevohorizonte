<?php
include ("../../app/config.php");

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) and empty($_POST ["password"])) {
        echo"LOS CAMPOS ESTÁN VACÍOS";
    } else {
        $usuario=$_POST ["usuario"];
        $contrasena=$_POST ["password"];

        $sql=$pdo->prepare(" SELECT * FROM usuarios WHERE nom_usuario= :usuario AND contrasena= :contrasena ");
        $sql->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $sql->bindParam(":contrasena", $contrasena, PDO::PARAM_STR);
        $sql->execute();
        if ($datos=$sql->fetch(PDO::FETCH_OBJ)) {
            header("Location:../../index.php");
        } else {
            echo"EL USUARIO NO EXISTE";
        }
}
}
?>