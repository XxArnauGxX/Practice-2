<?php

try {
    $conexion = new PDO("mysql:host=localhost;dbname=practice2", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>