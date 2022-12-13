<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de</title>
    <link rel="shortcut icon" href="img/logoi.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/aCercaDe.css">
</head>

<body class="cuerpoAcercade">
    <?php
        include "menu.php";
    ?>
    <div class="jumbotron">
        <h1 class="tituloAcerca">¡Buscamos la mayor calidad en nuestros productos!</h1>
        <p class="lead">
            Nuestra tienda se preocupa por la calidad de nuestros productos, donde nuestros clientes encontraran un producto increible y a buen precio.
        </p>
        <h3 class="h3Acerca">¿Quiénes Somos?</h3>
        <p class="pAcerca">
           Somos una empresa independiente que ofrece sus productos mediante nuestros proveedores, buscando siempre los mejores precios y la mayor calidad. Nos ubicamos en Aguascalientes, Mexico aunque nuestros pedidos son enviados por linea.
        </p>
    </div>
    <div id="tarjetas" class="cuerpoAcercade">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="img/mision.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MISIÓN</h5>
                        <p class="card-text">
                            Ofrecer los productos de mayor calidad, a un precio increible para que nuestros clientes
                            reciban sus productos deseados en el menor tiempo posible asegurando nuestro sello de calidad 
                            .</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="img/vision.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">VISIÓN</h5>
                        <p class="card-text">
                            Asegurar el crecimiento de nuestra tienda para lograr vender una mayor cantidad de productos siempre sin perder 
                            la calidad y precios rentables de nuestros productos siempre sin perder la calidad de nuestros productos, pensando en
                            un mejor futuro donde las podamos cumplir las expectativas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="img/valores.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">VALORES</h5>
                        <ol>
                            <li>Honestidad</li>
                            <li>Trabajo en equipo</li>
                            <li>Integridad</li>
                            <li>Familia</li>
                            <li>Compromiso con resultados</li>
                            <li>Responsabilidad social</li>
                            <li>Creatividad</li>
                            <li>Solidaridad</li>
                            <li>Innovadores</li>
                            <li>Impulsores</li>
                            <li>Objetivos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    include "Ppagina.php";
?>

</html>
