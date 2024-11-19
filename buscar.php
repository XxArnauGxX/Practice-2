<?php

// include 'conexion.php';

if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
    echo "Consulta SQL: $sql<br>";

    $stmt = $conexion->query($sql);
    
    foreach ($stmt as $fila) {
        echo "Nombre: " . $fila['nombre'] . "- Email: " . $fila['email'] . "<br>";
    }
}
?>