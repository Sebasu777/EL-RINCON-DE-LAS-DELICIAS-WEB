<?php
// Función para obtener un usuario por email
function obtenerUsuarioPorEmail($email, $conn) {
    $sql = "SELECT * FROM Usuario WHERE Email = :email"; // Asegurarnos de que la variable es minúscula
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email); // Asegurarnos de que la variable es minúscula
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Función para actualizar el token del usuario
function actualizarTokenUsuario($email, $token, $conn) {
    $sql = "UPDATE Usuario SET token = :token, token_expira = DATE_ADD(NOW(), INTERVAL 15 MINUTE) WHERE Email = :email"; // Asegurarnos de que la variable es minúscula
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':token', $token);
    $stmt->bindParam(':email', $email); // Asegurarnos de que la variable es minúscula
    return $stmt->execute();
}
?>
