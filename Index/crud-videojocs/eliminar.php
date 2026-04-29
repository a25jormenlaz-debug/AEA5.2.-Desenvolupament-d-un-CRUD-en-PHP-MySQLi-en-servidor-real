<?php
if (!isset($_GET["id"])) {
    header("Location: index.php?error=Falta l'ID");
    exit();
}

$mysqli = include_once "conexion.php";
$id = $_GET["id"];

$sentencia = $mysqli->prepare("DELETE FROM videojocs WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$sentencia->close();
$mysqli->close();

header("Location: listar.php"); 