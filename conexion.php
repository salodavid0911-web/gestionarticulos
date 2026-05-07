<?php

$servidor = " mysql-cristina.alwaysdata.net";
$usuario = "cristina";
$password = "clase1234";
$bd = "cristina_gestionarticulos";

$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

if (!$conexion) {
    die("Error de conexión");
}

?>