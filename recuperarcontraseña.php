<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - El Rincón de las Delicias</title>
    <link rel="shorcut icon" href="./images/EL-RINCON-DE-LAS-DELICIAS.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/recuperarcontraseña.css">
</head>
<body class="imagen-recuperarcontraseña">
    <header>
        <h1>El Rincón de las Delicias</h1>
        <div class="regresar">
            <a href="ingresar.php" class="btn-regresar">Regresar</a>
        </div>
    </header>

    <main>
    <?php
    session_start();
    if (isset($_SESSION['mensaje'])) {
        echo "<p class='mensaje'>" . $_SESSION['mensaje'] . "</p>";
        unset($_SESSION['mensaje']); // Limpiar el mensaje para que no persista
    }
    ?>

    <form action="./controlador/recuperarContraseña.php" method="post">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit" name="submit">Enviar</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 El Rincón de las Delicias. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
