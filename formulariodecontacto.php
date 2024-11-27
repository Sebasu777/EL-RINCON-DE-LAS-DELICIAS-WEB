<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto - El Rincón de las Delicias</title>
    <link rel="shorcut icon" href="./images/EL-RINCON-DE-LAS-DELICIAS.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/terminosycondiciones.css">
    <link rel="stylesheet" href="./css/formulario.css">
</head>
<body class="imagen-terminosycondiciones">
    <header>
        <h1>El Rincón de las Delicias</h1>
        <nav>
            <ul>
                <li><a href="terminosycondiciones.php">REGRESAR</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Formulario de Contacto</h2>
            <p>Si tienes alguna pregunta o inquietud, por favor completa el siguiente formulario y nos pondremos en contacto contigo a la mayor brevedad.</p>

            <form action="enviar_contacto.php" method="POST">
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div>
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo" required>
                </div>

                <div>
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                </div>

                <div>
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 El Rincón de las Delicias. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
