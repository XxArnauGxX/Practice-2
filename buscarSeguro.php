<?php

include 'conexion.php';

if (isset($_GET['nombre'])) {
    $nombre = htmlspecialchars($_GET['nombre']);

    $sql = "SELECT * FROM usuarios WHERE nombre = :nombre";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);

    $stmt->execute();

    foreach ($stmt as $fila) {
        echo "Nombre: " . $fila['nombre'] . " - Email: " . $fila['email'] . "<br>";
    }
}
?>