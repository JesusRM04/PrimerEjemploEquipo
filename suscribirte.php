
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
    <style>
        table,
        td {
            border-collapse: collapse;
            margin: auto;
           
            width: 60%;
        }

        td {
            padding: 8px;
            text-align: center;
        }
        h4{
        text-align: center;
        }
        .boton1{
            background-color: #555555;
            font-size: 16px;
            padding: 10px 45px;
            color: white;
        }
        input[type=text]{
            width: 119%;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;
            border: 2px solid black;
  border-radius: 4px;
        }

    </style>
</head>

<body>
   

    <form action="enviado.php" method="post">
        <table>
           <tr>
               <td>Suscribete y te llegara un cupon:</td>
           </tr>
            <tr>
                
                <td><input placeholder="Email"  type="text" name="correo" required></td>
                <td  style="text-align: center;"> <input class="boton1" type="submit" name="enviar" value="Suscribirse"> </td>
            </tr>
            
        </table>
    </form>

</body>

</html>
