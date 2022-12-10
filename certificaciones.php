<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Certificaciones</title>
    <link rel="shortcut icon" href="img/logoi.ico">
    <link rel="stylesheet" href="css/certificaciones.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

</html>
<?php
include "menu.php";
?>
<div class="ulact">
    <?php
                date_default_timezone_set('America/Mexico_City');
                echo "La ultima fecha de modificacion fue: '".date("    F d Y H:i.",filemtime("certificaciones.php"))."'"; 
            ?>
</div>
<div>
    <div class="container1">
        <img src="img/fondo1.jpg" alt="Simbolo" style="width:100%; height:500px;">
        <div class="content1">
            <h1 id="c++">Lenguaje de programacion C++</h1>
            <p>C++ es un lenguaje de programación que proviene de la extensión del lenguaje C para que pudiese manipular objetos. A pesar de ser un lenguaje con muchos años, su gran potencia lo convierte en uno de los lenguajes de programación más demandados en 2019.</p>
        </div>
    </div>
</div>
<div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-6">
            <img src="img/imgc1.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-6 fondo">
            <div class="card-body">
                <h2 class="card-title">Certificacion en C++</h2>
                <h5 class="card-title">Ventajas de C++</h5>
                <p class="card-text">Las ventajas que tiene C++ sobre otros lenguajes de programación son las siguientes:</p>
                <ul>
                    <li class="card-text">Tiene un alto rendimiento.</li>
                    <li class="card-text">Es un lenguaje que se está actualizando, y, por lo tanto, a pesar de tener más de 20 años es moderno.</li>
                    <li class="card-text">Es multiplataforma.</li>
                </ul>
            </div>
        </div><br>
        <div class="card mb-2 fondo" style="max-width: 50%;">
            <div class="col-md-14">
                <div class="card-body">
                    <h5 class="card-title">Lenguaje de alto rendimiento</h5>
                    <p class="card-text">C++ tiene un alto rendimiento por varios motivos:</p>
                    <ul>
                        <li class="card-text">Permite hacer llamadas directamente al Sistema Operativo.</li>
                        <li class="card-text">Es un lenguaje compilado para cada plataforma.</li>
                        <li class="card-text">Tiene muchísimos parámetros de optimización.</li>
                        <li class="card-text">Tiene un acceso directo a la memoria, que además controla el usuario.</li>
                        <li class="card-text">Tiene una integración directa con el lenguaje ensamblador, tan directa que incluso permite escribir directamente en ensamblador con las diferentes directivas.</li>
                    </ul>
                    <h5 class="card-title">Lenguaje moderno y actualizado</h5>
                    <p class="card-text">C++ nos permite, entre otras muchas cosas:</p>
                    <ul>
                        <li class="card-text">Crear datos complejos.</li>
                        <li class="card-text">Definir operaciones sobre los datos complejos.</li>
                        <li class="card-text">Relacionar los datos complejos entre ellos.</li>
                        <li class="card-text">Realizar programación genérica y templates, que es hacer una clase del mismo código que sirva para cualquier tipo que pase.</li>
                        <li class="card-text">Implementar múltiples patrones de diseño</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card mb-2" style="max-width: 50%;">
            <div class="col-md-16">
                <div class="card-body" style="background-color: black">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/f3g.jpg" class="d-block w-100" alt="..." class="img-fluid" style="height: 100%">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Intenta ahora</h5>
                                    <p>Tienes la suficiente experiencia en C intenta nuestro examen</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalpago">
                                        Intentar
                                    </button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/f2g.jpeg" class="d-block w-100" alt="..." class="img-fluid" style="height: 100%">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Conoce mas</h5>
                                    <p>¿Quieres saber mas acerca de C?</p>
                                    <a href="https://openwebinars.net/blog/que-es-c/" class="btn btn-primary">Da click aqui</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>






<div>
    <div class="container1">
        <img src="img/fondo2.jpg" alt="Simbolo" style="width:100%; height:500px;">
        <div class="content1">
            <h1 id="php">Lenguaje de programacion PHP</h1>
            <p class="card-text">PHP es un lenguaje de programación de código abierto del lado del servidor cuyo principal uso es el de crear páginas web dinámicas. Una abreviatura que nació en un principio de “Personal Home Page Tools”, aunque actualmente es el acrónimo de “PHP Hypertext Preprocessor”. Los lenguajes del lado del cliente, como JavaScript o HTML, en primer lugar, son interpretados por el navegador web cuando los usuarios abren una página. Mientras, en PHP, un lenguaje de programación del lado del servidor, el código es ejecutado en el servidor, donde los scripts de PHP generan el código HTML que posteriormente se envía al navegador.</p>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="img/f1p.jpeg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6 fondo">
                <div class="card-body">
                    <h2 class="card-title">Certificacion en PHP</h2>
                    <p class="card-text">Los beneficios de PHP son principalmente tres. Por un lado, el lenguaje de programación se puede utilizar con cualquier tipo de servidor, y con cualquier SO virtual. Por otro lado, soporta una gran cantidad de bases de datos diferentes. Y, por último, brinda un soporte completo para la comunicación del servidor con otros protocolos.</p>
                    <p class="card-text">PHP es muy sencillo de utilizar para principiantes, pero ofrece un amplio abanico de características avanzadas para programadores profesionales. De ahí la importancia de confiar en una empresa como Anexia Tecnología para crear una aplicación o un sitio web dinámico. Sólo programadores profesionales pueden “exprimir” al máximo todas las funcionalidades de PHP.</p>
                </div>
            </div><br>
            <div class="card mb-2 fondo" style="max-width: 50%;">
                <div class="col-md-14">
                    <div class="card-body">
                        <h5 class="card-title">Beneficios de aprender PHP</h5>
                        <p class="card-text">Las páginas web estáticas ya son historia, y han dado paso a las páginas web dinámicas, de nueva generación. Su principal ventaja es que permiten una mayor interacción entre empresas y usuarios, lo que mejora de forma notable la experiencia de estos últimos.</p>
                        <ol>
                            <li class="card-text"><strong>Diseño:</strong> a diferencia de las páginas web estáticas, las dinámicas ofrecen un abanico ilimitado de posibilidades de diseño. Es importante que la plataforma se adapte de forma precisa a la imagen corporativa, y gracias al desarrollo de páginas dinámicas utilizando el lenguaje PHP es posible.</li>
                            <li class="card-text"><strong>Contenidos:</strong> en plena era digital, todo cambia a gran velocidad, así que es esencial poder añadir contenidos y modificarlos de manera constante. Con las páginas dinámicas es posible cambiar imágenes, modificar textos, elegir una portada diferente, añadir formularios de contacto&hellip; Un mundo de posibilidades.</li>
                            <li class="card-text"><strong>Posicionamiento web:</strong> más allá del diseño, en el proceso de desarrollo de un sitio web corporativo es fundamental tener en cuenta los requerimientos de Google. Para escalar posiciones en los resultados de búsqueda, es importante actualizar los contenidos constantemente.</li>
                            <li class="card-text"><strong>Diseño web responsive:</strong> una página web dinámica es aquella que se adapta a todo tipo de dispositivos, algo muy importante teniendo en cuenta que a día de hoy el 70% de los usuarios se conectan a Internet a través de sus dispositivos móviles.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card mb-2" style="max-width: 50%;">
                <div class="container">
                    <img src="img/f2p.jpg" alt="PHP" class="image">
                    <div class="overlay">
                        <div class="text">Deseas conocer mas sobre PHP</div>
                        <div class="text"><br><br><a href="https://www.php.net/manual/es/intro-whatis.php" class="btn btn-primary">Click Aqui</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container1">
        <img src="img/fondo3.png" alt="Simbolo" style="width:100%; height:500px;">
        <div class="content1">
            <h1 id="java">Lenguaje de programacion Java</h1>
            <p class="card-text">Java es un lenguaje de programación ampliamente utilizado para codificar aplicaciones web. Ha sido una opción popular entre los desarrolladores durante más de dos décadas, con millones de aplicaciones Java en uso en la actualidad. Java es un lenguaje multiplataforma, orientado a objetos y centrado en la red que se puede utilizar como una plataforma en sí mismo. Es un lenguaje de programación rápido, seguro y confiable para codificarlo todo, desde aplicaciones móviles y software empresarial hasta aplicaciones de macrodatos y tecnologías del servidor.</p>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="img/f1j.webp" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6 fondo">
                <div class="card-body">
                    <h2 class="card-title">Certificacion en Java</h2>
                    <p>Java es popular porque se ha diseñado para que sea fácil de usar. Algunas razones por las que los desarrolladores siguen eligiendo Java sobre otros lenguajes de programación incluyen:</p>
                    <h5>Recursos de aprendizaje de alta calidad</h5>
                    <p>Java existe desde hace mucho tiempo, por lo que hay muchos recursos de aprendizaje disponibles para los nuevos programadores. La documentación detallada, los libros completos y los cursos ayudan a los desarrolladores a lo largo de la curva de aprendizaje. Además, los principiantes pueden comenzar a escribir código en Core Java antes de pasar a Advanced Java.</p>
                    <h5>Funciones y bibliotecas incorporadas</h5>
                    <p>Al usar Java, los desarrolladores no necesitan escribir cada nueva función desde cero. En cambio, Java proporciona un rico ecosistema de funciones y bibliotecas integradas para desarrollar una variedad de aplicaciones.&nbsp;</p>

                </div>
            </div><br>
            <div class="card mb-2 fondo" style="max-width: 50%;">
                <div class="col-md-14  cont">
                    <div class="card-body">
                        <h5 class="card-title">Beneficios de aprender Java</h5>
                        <h5>Herramientas de desarrollo de alta calidad</h5>
                        <p>Java ofrece varias herramientas para admitir la edición automatizada, la depuración, las pruebas, la implementación y la administración de cambios. Estas herramientas hacen que la programación de Java sea más rápida y rentable.</p>
                        <h5>Plataforma independiente</h5>
                        <p>El código de Java puede ejecutarse en cualquier plataforma subyacente, como Windows, Linux, iOS o Android, sin tener que volver a escribir. Esto lo hace especialmente poderoso en el entorno actual, donde queremos ejecutar aplicaciones en múltiples dispositivos.</p>
                        <h5>Seguridad</h5>
                        <p>Los usuarios pueden descargar código Java que no sea de confianza a través de una red y ejecutarlo en un entorno seguro en el que no puede causar ningún daño. El código que no es de confianza no puede infectar el sistema host con un virus ni puede leer o escribir archivos del disco duro. Los niveles de seguridad y las restricciones en Java también son altamente configurables.</p>
                    </div>
                </div>
            </div>
            <div class="card mb-2" style="max-width: 50%;">
                <div class="container">
                    <img src="img/f2j.jpg" alt="PHP" class="image">
                    <div class="overlay">
                        <div class="text">Deseas conocer mas sobre java</div>
                        <div class="text"><br><br><a href="https://www.php.net/manual/es/intro-whatis.php" class="btn btn-primary">Click Aqui</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container1">
        <img src="img/fondo4.webp" alt="Simbolo" style="width:100%; height:500px;">
        <div class="content1">
            <h1 id="python">Lenguaje de programacion Python</h1>
            <p class="cart-text">Python es un lenguaje de programación ampliamente utilizado en las aplicaciones web, el desarrollo de software, la ciencia de datos y el machine learning (ML). Los desarrolladores utilizan Python porque es eficiente y fácil de aprender, además de que se puede ejecutar en muchas plataformas diferentes. El software Python se puede descargar gratis, se integra bien a todos los tipos de sistemas y aumenta la velocidad del desarrollo.</p>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="img/f1py.png" class="img-fluid rounded-start" alt="..." style="width:100%">
            </div>
            <div class="col-md-6 fondo">
                <div class="card-body">
                    <h2 class="card-title">Certificacion en Python</h2>
                    <h6>Un lenguaje interpretado</h6>
                    <div>
                        <p>Python es un lenguaje interpretado, lo que significa que ejecuta directamente el código línea por línea. Si existen errores en el código del programa, su ejecución se detiene.</p>
                    </div>
                    <h6>Un lenguaje fácil de utilizar</h6>
                    <div>
                        <p>Python utiliza palabras similares a las del inglés. A diferencia de otros lenguajes de programación.&nbsp;</p>
                    </div>
                    <h6>Un lenguaje tipeado dinámicamente</h6>
                    <div>
                        <p>Los programadores no tienen que anunciar tipos de variables cuando escriben código porque Python los determina en el tiempo de ejecución. </p>
                    </div>
                    <h6>Un lenguaje de alto nivel</h6>
                    <div>
                        <p>Python es más cercano a los idiomas humanos que otros lenguajes de programación. Por lo tanto, los programadores no deben preocuparse sobre sus funcionalidades subyacentes</p>
                    </div>
                </div>
            </div><br>
            <div class="card mb-2 fondo" style="max-width: 50%;">
                <div class="col-md-14  cont">
                    <div class="card-body">
                        <h5 class="card-title">Beneficios de aprender Python</h5>
                        <li>Los desarrolladores pueden leer y comprender fácilmente los programas de Python debido a su sintaxis básica similar a la del inglés.&nbsp;</li>
                        <li>Python permite que los desarrolladores sean más productivos, ya que pueden escribir un programa de Python con menos líneas de código en comparación con muchos otros lenguajes.</li>
                        <li>Python cuenta con una gran biblioteca estándar que contiene códigos reutilizables para casi cualquier tarea. De esta manera, los desarrolladores no tienen que escribir el código desde cero.</li>
                        <li>Los desarrolladores pueden utilizar Python fácilmente con otros lenguajes de programación conocidos, como Java, C y C++.</li>
                        <li>La comunidad activa de Python incluye millones de desarrolladores alrededor del mundo que prestan su apoyo. Si se presenta un problema, puede obtener soporte rápido de la comunidad.</li>
                        <li>Hay muchos recursos útiles disponibles en Internet si desea aprender Python. Por ejemplo, puede encontrar con facilidad videos, tutoriales, documentación y guías para desarrolladores.</li>
                        <li>Python se puede trasladar a través de diferentes sistemas operativos de computadora, como Windows, macOS, Linux y Unix.</li>
                        <li>Automatizacion con los scripts de Python</li>

                    </div>
                </div>
            </div>
            <div class="card mb-2" style="max-width: 50%;">
                <div class="container">
                    <img src="img/f2py.jpg" alt="PHP" class="image">
                    <div class="overlay">
                        <div class="text">Deseas conocer mas sobre Python</div>
                        <div class="text"><br><br><a href="https://www.python.org/" class="btn btn-primary">Click Aqui</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalpago" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header bg-light ">
                    <h1 class="modal-title fs-5 " id="modallogin ">Atencion!</h1>

                </div>
                <div class="modal-body modalpagoes">
                    <form action="examen.php" method="post">
                        <div class="mb-3">
                            SI no has pagado el examen pulsa el boton para pagar. (Seras redirigido al inicio si no has pagado o a la ventana de error si no esta logueado)
                        </div>

                        <div class="mb-3">
                            <input class="btn btn-primary" type="submit" name="submit" value="pagar">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Atras</button>
                </div>
            </div>
        </div>
    </div>


    <?php
include "Ppagina.php";
?>
