<?php
// Incluir archivo de conexión
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $producto = $_POST['producto'];
    $mensaje = $_POST['mensaje'];

    // Inserción en la base de datos
    $sql = "INSERT INTO reclamos (nombre, correo, producto, mensaje) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('ssss', $nombre, $correo, $producto, $mensaje);

    if ($stmt->execute()) {
        // Redirigir al usuario con un mensaje de éxito
        header('Location: ../vistas/reclamos_exito.php');
        exit;
    } else {
        // Redirigir al usuario con un mensaje de error
        header('Location: ../vistas/reclamos_error.php');
        exit;
    }

    $stmt->close();
} else {
    echo "Método no permitido.";
}
