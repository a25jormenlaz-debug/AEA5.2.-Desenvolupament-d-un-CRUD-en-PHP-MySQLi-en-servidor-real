<?php
$mysqli = include_once "conexion.php";
if (empty($_POST["nom"])) {
    
    header("Location: crear.php?error=El nom és obligatori");
    exit();
}
$nom = $_POST["nom"];
$descripcio = $_POST["descripcio"];

$sentencia = $mysqli->prepare("INSERT INTO videojocs (nom, descripcio) VALUES (?, ?)");
$sentencia->bind_param("ss", $nom, $descripcio);
$sentencia->execute();
$sentencia->close();
$mysqli->close();

header("Location: index.php");