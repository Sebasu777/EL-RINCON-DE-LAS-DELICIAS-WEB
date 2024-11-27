<?php
include_once '../modelo/modelingresar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $usuario = new Usuario();
    $result = $usuario->Autenticar($email, $password);

    if ($result === 'Usuario') {
        header("Location: ../paginaclientes.php");
        exit();
    } elseif ($result === 'Administrador') {
        header("Location: ../paginaadministrador.php");
        exit();
    } else {
        header("Location: ../ingresar.php?error=1");
        exit();
    }
}
?>
