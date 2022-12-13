<?php
   	$servidor="localhost";
    $cuenta="kuoudbtd_tienda";
    $password="tiendaweb258";
    $bd="kuoudbtd_tienda";
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);
	
    if ($conexion->connect_errno){
         die('ERROR EN LA CONEXION DE LA BASE DE DATOS');
    }

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];
    if (strcmp($contrasena, $contrasena2) !== 0){
        echo '<script>
                alert("Validacion de contraseña incorrecta favor de ingresar la misma");
                window.location= "index.php";
            </script>
        ';
        exit();
    }
    /* Encripta la contraseña */ 
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
                VALUES('$nombre_completo','$correo','$usuario','$contrasena')";
    
    /* Verifica que el correo no se repita */
    $verificar_correo = mysqli_query($conexion, "SELECT *  FROM usuarios WHERE correo='$correo'");

    if(mysqli_num_rows($verificar_correo) == 1){
        echo '
            <script>
                alert("Correo registrado, vuelve a poner otro distinto");
                window.location = "index.php";
             </script>';
        exit();
    }
     
     /* Verifica que el usuario no se repita */
    $verificar_usuario = mysqli_query($conexion, "SELECT *  FROM usuarios WHERE usuario='$usuario'");

    if(mysqli_num_rows($verificar_usuario) == 1){
        echo '
            <script>
                alert("Usuario ya registrado, vuelve a poner otro distinto");
                window.location = "index.php";
             </script>';
        exit();
    }
     

    $ejecutar = mysqli_query($conexion, $query);
    
    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado exitosamente!");
                window.location = "index.php";
            </script>';
    }else{
        echo'
          <script>
                alert("Error!, intentalo de nuevo");
                window.location = "index.php";
          </script>';
    }
    mysqli_close($conexion);
?>