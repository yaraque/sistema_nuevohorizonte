<?php

$SERVIDOR = "localhost";
$USUARIO = "admin";
$PASSWORD = "12345678";
$DB = "sistema_nuevohorizonte";

$APP_NAME = "sistema integral de Inscripción";
$APP_URL = "http://localhost/sistema_nuevohorizonte";

$servidor = "mysql:dbname=".$DB.";host=".$SERVIDOR;

try {
    $pdo = new PDO($servidor, $USUARIO, $PASSWORD, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
    ));
    //echo 'Conexión exitosa a la base de datos';
} catch (Exception $e) {
    print_r($e);
    echo "Error, sin conexión con la base de datos";
}
?>