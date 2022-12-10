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
            Para CertificaT solamente se piensa en lo mejor para cualquier persona que desea tomar nuestra certificación, ademas que tenemos todo tipo de horarios en cualquier día de la semana.
        </p>
        <h3 class="h3Acerca">¿Quiénes Somos?</h3>
        <p class="pAcerca">
            En CapacitaT somos una empresa de capacitación de lenguajes de programación, certificando y capacitando a personal de empresas, profesionistas y universitarios, para cubrir la demanda del mercado nacional e internacional.
            Tenemos alianzas con las principales marcas y universidades del país, así como con proyectos en todo el país, para la creación de becas en el sector de las Tecnologías de la Información.
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
                            Ayudar al País mejorando el perfil del talento en las TI.
                            Ofrecer e Impartir de manera eficaz, capacitaciones a Profesionistas y Universitarios, enfocadas a lograr certificaciones reconocidas internacionalmente en el sector de Tecnologías de la Información para cubrir y atender a la demanda del mercado interno y global.
                            Desarrollar programadores competitivos en cualquier rama del mercado para que no se tenga ningún problema en el país al que vayas o te encuentres.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="img/vision.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">VISIÓN</h5>
                        <p class="card-text">
                            Consolidar a CertificaT en el 2022 como la principal proveedora de capacitación y certificación en todo México, para Instituciones de Nivel Medio Superior y Superior de TI en México.
                            Nuestra visión contempla un país generador de talentos en Tecnologías de la Información que puedan desarrollar mejores sistemas computacionales que ayuden a mejorar la calidad de vida de las personas de nuestro país y de todo el mundo.
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
                            <li>Entusiastas</li>
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
