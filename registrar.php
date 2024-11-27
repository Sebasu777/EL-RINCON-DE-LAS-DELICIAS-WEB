<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - El Rincón de las Delicias</title>
    <link rel="shorcut icon" href="./images/EL-RINCON-DE-LAS-DELICIAS.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">

</head>
<body class="imagen-register">

    <header class="register">
        <nav class="nav container2">
             <div class="nav__logo">
                <h2 class="nav__title">EL RINCON DE LAS DELICIAS</h2>
            </div>
            <ul class="nav__link nav__link--registrar">
                <li class="nav__items">
                    <a href="index.php" class="nav__links">REGRESAR</a>
                </li>
            </ul>
        </nav>
        <section class="form-register">
            <!-- El formulario debe envolver todos los campos y el botón -->
                <center><h4>FORMULARIO DE REGISTRO</h4></center>
            <form action="controlador/registrarse.php"  method="POST">
                <input class="controls" type="text" name="Nombre" id="Nombre" placeholder="INGRESE SU NOMBRE" required>
                <input class="controls" type="text" name="Apellido" id="Apellido" placeholder="INGRESE SU APELLIDO" required>
                <input class="controls" type="email" name="Email" id="Email" placeholder="INGRESE SU CORREO" required>
                <input class="controls" type="tel" name="Telefono" id="Telefono" placeholder="INGRESE SU TELEFONO" required>
                <input class="controls" type="password" name="Contraseña" id="Contraseña" placeholder="INGRESE SU CONTRASEÑA" required>
                <p>Estoy de acuerdo con <a href="terminosycondiciones.php">Términos y Condiciones</a></p>
                <button class="botons" type="submit" >REGISTRAR</button>
                <p><a href="ingresar.php">¿Ya Tengo Cuenta?</a></p>
            </form>
        </section>
        

</body>
</html>