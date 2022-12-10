<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/cuerpoindex.css">
    <link rel="shortcut icon" href="img/logoi.ico">

</head>

<body>
    <div class="ulact">
        <?php
        date_default_timezone_set('America/Mexico_City');
        echo "La Hora actual es: '" . date("    F d Y H:i.", time()) . "'";
        ?>
    </div>

    <div class="contenedor">

        <div class="Intro">
            <div>
                <p class="slogan"><b>"Todo bajo un mismo techo"</b></p>
                <p class="texintro">Busca lo que necesitas a menor precio y mayor calidad </p>
            </div>
        </div>
        <div class="carru">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Carimg2.jpg" class="d-block w-100 imC" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Gran variedad de mangas</h5>
                            <p>Contamos con varios mangas en stock.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Carimg1.jpg" class="d-block w-100 imC" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Figuras a buen precio</h5>
                            <p>Buenos precios en figuras.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Carimg3.png" class="d-block w-100 imC" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Gracias por escogermos</h5>
                            <p>Agradecemos tu preferencia.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
        <div class="sec3">
            <h1><b>Gracias por visitar nuestra tienda!!</b></h1><button type="button" class="btn btn-dark" onclick="loadDoc()">
                    Preguntas Frecuentes
                </button> <span></span> <button type="button" class="btn btn-dark" onclick="loadcont()">
                    Suscribirte
                </button>
        </div>
        <div class="sec4">
            <img style="width: 110%; border: solid black 10px;" src="img/imgsec4.png" alt="">
        </div>
        <div class="sec5" id="demo">
            <p class="textsec5_1">Nuestra tienda se enfoca en ofrecerte siempre lo mejor</p>
            <p class="textsec5_2">Nuestros provedores nos ofrecen los mejores productos para ofrecerlos a nuestros clientes, siempre buscando que nuestros clientes queden satisfechos con nuestra mercancia, los precios siempre se intentara mejorar para alcanzar los mas asequibles para nuestro publico y la mayor variedad posible.</p>
            <h4 style="text-align: center;">Recuerda, Todo bajo un mismo techo.</h4>

        </div>
        <div class="sec6">


        </div>
        <div class="sec7">
            <p class="texsec6"><b>Review de una figura</b></p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/oK1vt5Y8iMU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="sec8">

        </div>
        <div class="sec9">
            <h2>Cupon del dia</h2>
            <?php
            date_default_timezone_set('America/Mexico_City');
                            $hora=date("H");
                            $horac = (int)$hora;
                            if($horac>6 && $horac<=17){
                                echo "<img src='img/cupon1.png' alt='' class='imgcupon'>";
                            }
                            if($horac>18 && $horac<=5){
                                echo "<img src='img/cupon2.png' alt='' class='imgcupon'>";
                            }
              ?>      

        </div>
    </div>
    <script>
        function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("demo").innerHTML =
                    this.responseText;
            }
            xhttp.open("GET", "examinfo.php");
            xhttp.send();
        }
        function loadcont() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("demo").innerHTML =
                    this.responseText;
            }
            xhttp.open("GET", "suscribirte.php");
            xhttp.send();
        }
    </script>
</body>

</html>