<?php
    session_start();
    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $otro=$_POST['contrasena'];
    $contrasena = hash('sha512',$contrasena);
    $resp=$_POST['resp'];
    $captcha=$_SESSION['img_number'];

    
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");
    
    
    if(!empty($captcha) and $captcha === $resp){//Aqui evaluamos si el capctcha escrito coincide con el generado
        if(mysqli_num_rows($validar_login) == 1 ){
            $consulta = mysqli_fetch_array($validar_login);
            $id = $consulta['id'];
            $_SESSION['usuario'] = $correo;
            $_SESSION["admin"] = $id;
            /*Aqui evaluamos si el checkbox fue validado en caso de que si se guarda la cookie en caso de que no pues no la guarda pero inicia sesion*/
            if(!empty($_POST['remember'])){
                setcookie('correo',$correo,time()+60*60*7);
                setcookie('contrasena',$otro,time()+60*60*7);
                header("location: index.php");
                exit;
            }
            else{
                setcookie("correo","");
                setcookie("contrasena","");
                header("location: index.php");
                exit;
            }
                
        }else{
            echo '
                <script>
                alert("Usuario no existente, favor de registrarse o verificar los datos");
                window.location = "index.php";
                </script>
                ';
            exit;
        }

    }else{
        echo '
                <script>
                alert("Captcha Incorrecto!!!, vuelve a ingresar el captcha");
                window.location = "index.php";
                </script>
                ';
    }
        
?>


<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>