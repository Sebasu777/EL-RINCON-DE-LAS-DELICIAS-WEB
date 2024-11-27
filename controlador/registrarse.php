<?php
include_once '../modelo/modelregistrar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los valores del formulario
    $Nombre = trim($_POST['Nombre']);
    $Apellido = trim($_POST['Apellido']);
    $Email = trim($_POST['Email']);
    $Telefono = trim($_POST['Telefono']);
    $Contraseña = trim($_POST['Contraseña']);

    // Validar que los campos no estén vacíos
    if (empty($Nombre) || empty($Apellido) || empty($Email) || empty($Telefono) || empty($Contraseña)) {
        echo "<script>alert('Todos los campos son obligatorios.'); window.location.href='../registrar.php';</script>";
        exit();
    }

    // Generar un ID único para el usuario
    $id_usuario = 'USR' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);

    // Crear una instancia de Usuario
    $usuario = new Usuario();
    
    // Preparar el objeto de datos
    $data = new stdClass();
    $data->id_usuario = $id_usuario;
    $data->NombreUsuario = $Nombre;
    $data->ApellidoUsuario = $Apellido;
    $data->EmailUsuario = $Email;
    $data->TelefonoUsuario = $Telefono;
    $data->ContraseñaUsuario = $Contraseña; // No encriptar la contraseña

    // Registrar el usuario
    if ($usuario->Registrar($data)) {
        // Redirigir al usuario a la página de inicio si el registro es exitoso
        header("Location: ../index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si el registro falla
        echo "<script>alert('Error al registrar el usuario. Intente nuevamente.'); window.location.href='../registrar.php';</script>";
        exit();
    }
}
?>


