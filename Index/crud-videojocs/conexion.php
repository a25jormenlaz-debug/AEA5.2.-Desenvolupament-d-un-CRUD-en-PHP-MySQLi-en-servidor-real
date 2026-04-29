<?php
$host = "localhost";
$usuario = "a25jormenlaz_AEA5.2";
$contrasenia = "Mendozalazcano1";
$base_de_datos = "videojuegos";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;
