<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Certificaciones</title>
    <link rel="shortcut icon"  href="img/logoi.ico" >
    <link rel="stylesheet" href="css/loginerror.css">
</head>

</html>
<?php
include "menu.php";
?>   
  <div class="ulact">
       <?php
                date_default_timezone_set('America/Mexico_City');
                echo "La ultima fecha de modificacion fue: '".date("    F d Y H:i.",filemtime("loginerror.php"))."'"; 
            ?>
   </div> 
   <div class="containererror">
    <h1 class="hloginerror">Datos incorrectos :( </h1>
    <img class="imglogerror" src="img/errorimg.png" alt="">
        <h2 class="hloginerror">Vuelve a Intentar Iniciar Sesion o Crea una cuenta </h2>
    </div>
<?php
include "Ppagina.php";
?>