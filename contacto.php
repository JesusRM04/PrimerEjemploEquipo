<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="shortcut icon" href="img/logoi.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/contacto.css" type="text/css">
    
</head>

<body class="cuerpoContacto">
    <?php
        include "menu.php";
        echo "<h1> Cóntactanos </h1>";
        //include "Ppagina.php";
    ?>
    <table>
        <tr>
            <td class="td1">
                <img class="imgContacto" src="img/Contact3-01.jpg" alt="">
            </td>
            <td>
               <section class="form-contact">
                   <form action="enviar.php" class="contact" method="post">
                        <label for="nombres">Nombre Completo</label>
                        <input type="text" name="nombres" id="nombres">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" id="correo">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" name="telefono" id="telefono">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                        <input type="submit" value="Enviar">
                    </form>
               </section>
            </td>
        </tr>
        <tr>
            <td colspan="2">
               <br>
                <p class="pContacto">
                    ¿Te interesan Contactarnos? 
                    ¡Llámanos al teléfono! Tel: (449) 321-9403 <br>
                    Nuestro Horario es de las:
                    9:00 a las 18:00 de lunes a viernes y 10:00 a 15:00 los sábados y domingos
                </p>
            </td>
        </tr>
    </table>
</body>

</html>
<?php
    include "Ppagina.php";
?>