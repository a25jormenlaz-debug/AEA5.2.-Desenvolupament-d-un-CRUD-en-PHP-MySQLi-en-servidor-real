<?php
$mysqli = include_once "conexion.php";
if (empty($_POST["nom"])) {
  
    $id = $_POST["id"] ?? 0;
    header("Location: editar.php?id=$id&error=El nom no pot estar buit");
    exit();
}
$id = $_POST["id"];
$nom = $_POST["nom"];
$descripcio = $_POST["descripcio"];

$sentencia = $mysqli->prepare("UPDATE videojocs SET nom = ?, descripcio = ? WHERE id = ?");
$sentencia->bind_param("ssi", $nom, $descripcio, $id);
$sentencia->execute();
$sentencia->close();
$mysqli->close();

header("Location: index.php");