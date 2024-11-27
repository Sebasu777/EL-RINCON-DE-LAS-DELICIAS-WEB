<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar - El Rincón de las Delicias</title>
    <link rel="shorcut icon" href="./images/EL-RINCON-DE-LAS-DELICIAS.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body class="imagen-ingresar">
<?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
        <script>alert('Correo o contraseña incorrectos. Intente de nuevo.');</script>
    <?php endif; ?>
    
    <header class="formulario">
        <nav class="nav container2">
            <div class="nav__logo">
                <h2 class="nav__title">EL RINCÓN DE LAS DELICIAS</h2>
            </div>
            <ul class="nav__link nav__link--ingresar">
                <li class="nav__items">
                    <a href="index.php" class="nav__links">REGRESAR</a>
                </li>
            </ul>
        </nav>

        <section class="form-ingresar">
            <center><h4>INICIO DE SESIÓN</h4></center>
            <form action="controlador/ingresarse.php"  method="POST">
                <input class="controls" type="email" name="email" id="correo" placeholder="INGRESE SU CORREO" required>
                <input class="controls" type="password" name="password" id="contraseña" placeholder="INGRESE SU CONTRASEÑA" required>
                <button class="botons" type="submit" >INGRESAR</button>
            </form>
            <p>Olvidé mi <a href="recuperarcontraseña.php">Contraseña</a></p>
            <p><a href="registrar.php">¿Ya Te Registraste?</a></p>
        </section>
    </header>
</body>
</html>
