 <?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        $captcha=$_SESSION['captcha'];
        echo'
            <script>
                alert("Favor de iniciar sesion");
                window.location = "login.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body style="text-align:center; background-color:white;">
    <h1 class="alert alert-success" role="alert">Hola <b><?php echo $_SESSION['admin']; ?></b> has ingresado </h1>
    <a href="cerrar_sesion.php" class="btn btn-outline-danger">Cerrar sesión</a>
    <a href="index.php" class="btn btn-outline-success">Continuar</a>
</body>
</html>