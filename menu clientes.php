<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - El Rincón de las Delicias</title>
    <link rel="shorcut icon" href="./images/EL-RINCON-DE-LAS-DELICIAS.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/carritodecompras.css">
    <link rel="stylesheet" href="./js/carritodecompras.js">
</head>

<body style="background-color:#e6cf4e;">

    <nav class="nav container2">
        <div class="nav_logo">
            <h2 class="nav__title">EL RINCON DE LAS DELICIAS</h2>
        </div>

        <ul class="nav__link nav__link--nosotros">
            <li class="nav__items">
                <a href="paginaclientes.php" class="nav__links">Regresar</a>
            </li>
        </ul>
        <li class="carrito">
      <a href="carrito.php">
        <img src="images/bxs-cart.svg" alt="Carrito de compras">
        
      </a>
        </li>
    </nav>
</body>


<header>

            <img src="./images/close.svg" class="nav__close">
        </ul>
        <div class="nav__menu">
            <img src="./images/menu.svg" class="nav__img">
        </div>
    </nav>


</header>

<section class="price__element__contenedor">
    <div class="menu__cards">

        <div class="price__table">
            <div class="price__element">
                <p class="price__name">DONAS DE CHOCOLATE</p>
                <img src="images/postre6.jpg" alt="postre rojo" height="200px" width="200px" />
                

                <div class="price__items">
                    <p class="price__features">Cubierta con cholate</p>
                    <p class="price__features">Rellena de crema chantilly</p>
                    <p class="price__features">Rayas de chocolate blanco</p>
                    <h3 class="price__price">$5.300</h3>
                </div>
                <a href="#" class="price__cta" data-name="DONAS DE CHOCOLATE" data-price="5300" onclick="addToCart(this)">Compra ahora</a>

            </div>

        </div>

        <div class="price__table">
            <div class="price__element">
                <p class="price__name">CAPUCHINO</p>
                <img src="images/postre7.jpg" alt="postre rojo" height="200px" width="200px" />
                

                <div class="price__items">
                    <p class="price__features">Leche entera o deslactosada</p>
                    <p class="price__features">Un toque de baylies</p>
                    <p class="price__features">Cafe</p>
                    <h3 class="price__price">$8.000</h3>
                </div>
                <a href="#" class="price__cta" data-name="CAPUCHINO" data-price="8000" onclick="addToCart(this)">Compra ahora</a>
            </div>
        </div>    
            <div class="price__table">
                <div class="price__element">
                    <p class="price__name">CUPCAKE DE CHOCOLATE</p>
                    <img src="images/postre8.jpg" alt="postre rojo" height="200px" width="200px" />
                    

                    <div class="price__items">
                        <p class="price__features">Trozos de tres leches</p>
                        <p class="price__features">Trozos de Arequipe</p>
                        <p class="price__features">Trozos de Dulce de leches</p>
                        <h3 class="price__price">$5.300</h3>
                    </div>
                    <a href="#" class="price__cta" data-name="CUPCAKE DE CHOCOLATE" data-price="5300" onclick="addToCart(this)">Compra ahora</a>
                </div>
            </div>
                <div class="price__table">
                    <div class="price__element">
                        <p class="price__name">MALTEADA DE COCO</p>
                        <img src="images/postre9.jpg" alt="postre rojo" height="200px" width="200px" />
                        

                        <div class="price__items">
                            <p class="price__features">Helados de Fresa</p>
                            <p class="price__features">Helados de Frambuesa</p>
                            <p class="price__features">Helados de Cereza</p>
                            <h3 class="price__price">$7.500</h3>
                        </div>
                        <a href="#" class="price__cta" data-name="MALTEADA DE COCO" data-price="7500" onclick="addToCart(this)">Compra ahora</a>                    </div>
                </div>
                <div class="price__table">
                    <div class="price__element">
                        <p class="price__name">WAFFLES</p>
                        <img src="images/postre10.jpg" alt="postre rojo" height="200px" width="200px" />
                        

                        <div class="price__items">
                            <p class="price__features">Trozos de tres leches</p>
                            <p class="price__features">Trozos de Arequipe</p>
                            <p class="price__features">Trozos de Dulce de leches</p>
                            <h3 class="price__price">$15.000</h3>
                        </div>
                        <a href="#" class="price__cta" data-name="WAFFLES" data-price="15000" onclick="addToCart(this)">Compra ahora</a>                    </div>
                </div>    
                    <div class="price__table">
                        <div class="price__element">
                            <p class="price__name">COPA DE HELADO</p>
                            <img src="images/postre11.jpg" alt="postre rojo" height="200px" width="200px" />
                            

                            <div class="price__items">
                                <p class="price__features">Trozos de tres leches</p>
                                <p class="price__features">Trozos de Arequipe</p>
                                <p class="price__features">Trozos de Dulce de leches</p>
                                <h3 class="price__price">$11.000</h3>
                            </div>
                            <a href="#" class="price__cta" data-name="COPA DE HELADO" data-price="11000" onclick="addToCart(this)">Compra ahora</a>                        </div>
                    </div>
                        <div class="price__table">
                            <div class="price__element">
                                <p class="price__name">CHEESECAKE</p>
                                <img src="images/postre12.jpg" alt="postre rojo" height="200px" width="200px" />
                                

                                <div class="price__items">
                                    <p class="price__features">Helados de Fresa</p>
                                    <p class="price__features">Helados de Frambuesa</p>
                                    <p class="price__features">Helados de Cereza</p>
                                    <h3 class="price__price">$7.800</h3>
                                </div>
                                <a href="#" class="price__cta" data-name="CHEESECAKE" data-price="7800" onclick="addToCart(this)">Compra ahora</a>                            </div>
                        </div>
                        <div class="price__table">
                            <div class="price__element">
                                <p class="price__name">TIRAMISU</p>
                                <img src="images/postre13.jpg" alt="postre rojo" height="200px" width="200px" />
                                

                                <div class="price__items">
                                    <p class="price__features">Trozos de tres leches</p>
                                    <p class="price__features">Trozos de Arequipe</p>
                                    <p class="price__features">Trozos de Dulce de leches</p>
                                    <h3 class="price__price">$8.400</h3>
                                </div>
                                <a href="#" class="price__cta" data-name="TIRAMISU" data-price="8400" onclick="addToCart(this)">Compra ahora</a>                            </div>
                        </div>
                            <div class="price__table">
                                <div class="price__element">
                                    <p class="price__name">TARTALETA</p>
                                    <img src="images/postre14.jpg" alt="postre rojo" height="200px" width="200px" />
                                    

                                    <div class="price__items">
                                        <p class="price__features">Trozos de tres leches</p>
                                        <p class="price__features">Trozos de Arequipe</p>
                                        <p class="price__features">Trozos de Dulce de leches</p>
                                        <h3 class="price__price">$9.000</h3>
                                    </div>
                                    <a href="#" class="price__cta" data-name="TARTALETA" data-price="9000" onclick="addToCart(this)">Compra ahora</a>                                </div>
                            </div>
<div class="price__table">
    <div class="price__element">
        <p class="price__name">CROASAINT</p>
        <img src="images/postre15.jpg" alt="postre rojo" height="200px" width="200px" />
        

        <div class="price__items">
             <p class="price__features">Helados de Fresa</p>
            <p class="price__features">Helados de Frambuesa</p>
             <p class="price__features">Helados de Cereza</p>
             <h3 class="price__price">$4.500</h3>
        </div>
        <a href="#" class="price__cta" data-name="CROASAINT" data-price="4500" onclick="addToCart(this)">Compra ahora</a>    </div>
</div>
<div class="price__table">
    <div class="price__element">
        <p class="price__name">BATIDOS</p>
        <img src="images/postre16.jpg" alt="postre rojo" height="200px" width="200px" />
        

        <div class="price__items">
             <p class="price__features">Helados de Fresa</p>
            <p class="price__features">Helados de Frambuesa</p>
             <p class="price__features">Helados de Cereza</p>
             <h3 class="price__price">$7.000</h3>
        </div>
        <a href="#" class="price__cta" data-name="BATIDOS" data-price="7000" onclick="addToCart(this)">Compra ahora</a>    </div>
</div>
<div class="price__table">
    <div class="price__element">
        <p class="price__name">PASTEL GLORIA</p>
        <img src="images/postre17.jpg" alt="postre rojo" height="200px" width="200px" />
        

        <div class="price__items">
             <p class="price__features">Helados de Fresa</p>
            <p class="price__features">Helados de Frambuesa</p>
             <p class="price__features">Helados de Cereza</p>
             <h3 class="price__price">$4.500</h3>
        </div>
        <a href="#" class="price__cta" data-name="PASTEL GLORIA" data-price="4500" onclick="addToCart(this)">Compra ahora</a>    </div>
</div>

</section>

</body>

</html>