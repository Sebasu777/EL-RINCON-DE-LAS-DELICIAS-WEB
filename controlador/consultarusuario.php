<?php
include_once '../modelo/conexion.php';

$action = isset($_POST['action']) ? $_POST['action'] : '';

try {
    $pdo = Database::StartUp();

    if ($action == '') {
        $stmt = $pdo->query("SELECT * FROM Usuario");
        $usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);
        echo json_encode($usuarios);
    }

    if ($action == 'create') {
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Email = $_POST['Email'];
        $Telefono = $_POST['Telefono'];
        $id_usuario = uniqid('USR');

        $stmt = $pdo->prepare("INSERT INTO Usuario (id_usuario, Nombre, Apellido, Email, Telefono) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$id_usuario, $Nombre, $Apellido, $Email, $Telefono]);

        echo "Usuario creado con éxito";
    }

    if ($action == 'update') {
        $id_usuario = $_POST['id_usuario'];
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Email = $_POST['Email'];
        $Telefono = $_POST['Telefono'];

        $stmt = $pdo->prepare("UPDATE Usuario SET Nombre = ?, Apellido = ?, Email = ?, Telefono = ? WHERE id_usuario = ?");
        $stmt->execute([$Nombre, $Apellido, $Email, $Telefono, $id_usuario]);

        echo "Usuario actualizado con éxito";
    }

    if ($action == 'delete') {
        $id_usuario = $_POST['id_usuario'];

        if (!empty($id_usuario)) {
            $stmt = $pdo->prepare("DELETE FROM Usuario WHERE id_usuario = ?");
            $stmt->execute([$id_usuario]);
            echo "Usuario eliminado con éxito";
        } else {
            echo "Error: ID de usuario no proporcionado.";
        }
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
