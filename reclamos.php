<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quejas y Reclamos</title>
    <link rel="stylesheet" href="./css/reclamos.css">
</head>
<body>
    <header>
        <h1>Quejas y Reclamos</h1>
        <p>Tu opinión es importante para nosotros</p>
    </header>
    <main>
        <form action="../modelo/procesarreclamos.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="producto">Producto:</label>
            <input type="text" id="producto" name="producto" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 El Rincón de las Delicias. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
