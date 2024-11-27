<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Rincón De Las Delicias</title>
    <link rel="shortcut icon" href="./images/EL-RINCON-DE-LAS-DELICIAS.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/paginas.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="fondo-paginaclientes">
        <div class="nav__logo">
            <h2 class="nav__title">El Rincón De las Delicias</h2>
        </div>
        <ul class="nav__link nav__link--menu">
            <li class="nav__items">
                <a href="menu administrador.php" class="nav__links">Menú</a>
            </li>
            <li class="nav__items">
                <a href="manual de usuario administrador.pdf" class="nav__links">Manual de Usuario</a>
            </li>
            <li class="nav__items">
                <a href="consultarclientes.php" class="nav__links">Consultar Clientes</a>
            </li>
            <li class="nav__items">
                <a href="index.php" class="nav__links">Regresar</a>
                <link rel="stylesheet" href="./css/estiloconsultarcliente.css">
            </li>
        </ul>
        <div class="nav__menu">
            <img src="./images/menu.svg" class="nav__img" alt="Menu Icon">
        </div>
    </nav>

    <!-- Carrusel de imágenes -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slider1.jpg" alt="Primer slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider2.jpg" alt="Segundo slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider3.jpg" alt="Tercer slide">
            </div>
        </div>
    </div>

    <!-- Derechos de autor -->
    <footer class="fondo-paginaclientes2">
        <div class="footer__social">
            <a href="#" class="footer__icons">
                <img src="./images/faceb.svg" class="footer__img" alt="Facebook">
            </a>
            <a href="#" class="footer__icons">
                <img src="./images/instagram-alt.svg" class="footer__img" alt="Instagram">
            </a>
            <a href="#" class="footer__icons">
                <img src="./images/whatsapp.svg" class="footer__img" alt="WhatsApp">
            </a>
        </div>
        <h3 class="footer__copyrigth">Derechos Reservados &copy; 2024 El Rincón De Las Delicias</h3>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
