<?php
require_once './modelo/conexion.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Conexión a la base de datos
    $conn = Database::StartUp();

    // Verificar si el token existe
    $stmt = $conn->prepare("SELECT * FROM Usuario WHERE token_recuperacion = ?");
    $stmt->execute([$token]);
    $usuario = $stmt->fetch();

    if ($usuario) {
        // Mostrar formulario para restablecer contraseña
        echo "<form method='POST' action='procesar_nueva_contrasena.php'>
            <input type='hidden' name='email' value='" . $Usuario['email'] . "'>
            <label>Nueva contraseña:</label>
            <input type='password' name='nueva_contrasena' required>
            <button type='submit'>Restablecer contraseña</button>
        </form>";
    } else {
        echo "Enlace inválido o expirado.";
    }
} else {
    echo "No se proporcionó un token.";
}
?>
