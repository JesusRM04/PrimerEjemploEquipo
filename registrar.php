<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilosmenu.css">
      <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" type="image/x-icon" href="img/logoi.ico">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo" width="60" height="40" class="d-inline-block align-text-top">
                TuAnimeMX
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="consultar.php">Consultar Articulos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Registrar Productos</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="modificar.php">Modificar Productos</a>
                         <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="eliminar.php">Eliminar Productos</a>
                    </li>
                    </li>
                         
                </ul>
                <?php
                    /*Funcion de la cookie */
                    function usuario(){
                        if(isset($_COOKIE['correo'])){
                        echo $_COOKIE['correo'];
                        }
                    }

                    function contrasena(){
                        if(isset($_COOKIE['contrasena'])){
                            echo $_COOKIE['contrasena'];
                        } 
                    }
                    require_once("validarlogin.php");
                    if($estado){
                        echo "<p class='texnomu'>".$_SESSION["usuario"];
                        echo "</p>";
                        if($_SESSION["admin"] === "1"){
                            echo "<ul class='navbar-nav me-auto mb-2 mb-lg-0'> <li class='nav-item'>
                        <a class='nav-link active' aria-current='page'' href='admin.php'>Ver Informacion</a>
                            </li>";
                        }    
                        ?>
                <form action="cerrar_sesion.php">
                    <button class="btn btn-primary" type="submit">Cerrar Sesion</button>
                </form>
                <?php
                        
                    }else{
                ?>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modallogin">
                    Iniciar Sesion
                </button>
                <?php
                    }
                ?>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="modallogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header bg-light ">
                    <h1 class="modal-title fs-5 " id="modallogin " >Inicia Sesion</h1>

                </div>
                <div class="modal-body modallogin2">
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <input type="email" placeholder="Correo Electrónico" name="correo" size="20" value="<?php usuario(); ?>" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Contraseña" name="contrasena" size="20" value="<?php contrasena(); ?>" required>
                        </div>
                        <div class="mb-3">
                           <img src="crearImagen.php" alt="" border="0"><br><br>
                            <input type="text" placeholder="Ingresar Captcha" name="resp" size="13" required>
                        </div>
                        <div class="mb-3">
                           <p style="text-align: center;"><input type="checkbox" name="remember"><br>Recordar Cuenta</p>
                        </div>
                        
                        <div class="mb-3">
                           
                            <input class="btn btn-primary" type="submit" name="submit" value="Iniciar Sesion">
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-primary" data-bs-target="#modalregistro" data-bs-toggle="modal" data-bs-dismiss="modal">
                                Crear Cuenta
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Atras</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalregistro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header ">
                    <h1 class="modal-title fs-5 " id="modalregistro " >Crear Cuenta</h1>

                </div>
                <div class="modal-body modallogin2">
                    <form action="registroUsuario.php" method="post">
                        <div class="mb-3">
                             <input type="text" placeholder="Nombre Completo" name="nombre_completo" size="25" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Usuario" name="usuario" size="25" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Correo Electrónico" name="correo" size="25" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Contraseña" name="contrasena" size="25" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Volver a ingresar contraseña" name="contrasena2" size="25" required>
                        </div>
                        <div class="mb-3">
                            <input class="btn btn-primary" type="submit" name="submit" value="Registrar Cuenta">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <form action="index.php">
                        <input type="submit" class="btn btn-secondary" value="Cancelar" />
                    </form>
                </div>
            </div>
        </div>
    </div>
        
         <div class="container">
        <div class="row">
            <div class="col-8">
                  <div class="caja">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' enctype="multipart/form-data">
                    <h2>INGRESE LA INFORMACION CORRESPONDIENTE</h2>
                    <div class="form-group">
                        <label for="nombre">INGRESE EL NOMBRE DEL PRODUCTO</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="categoria">CATEGORIA</label>
                         <select type="text" class="form-control" name="categoria" id="categoria">
                            <option> MANGAS</option>
                            <option> JUGUETES </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">DESCRIPCION</label>
                        <textarea type="text" class="form-control" name="descripcion" id="descripcion" required>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="cantidad">CANTIDAD DE PRODUCTOS</label>
                        <input name="cantidad" type="number" class="form-control" id="cantidad" required>
                    </div>
                     <div class="form-group">
                        <label for="precio">PRECIO DEL PRODUCTO</label>
                        <input name="precio" type="number" class="form-control" id="precio" required>
                    </div>
                   
                    <div class="form-group">
                         <label for="img">INGRESE LA IMAGEN DEL PRODUCTO</label>
                        <input  name="img" type="file" class="form-control" id="img" required>
                    </div>
                    <br>
                         <button class="btn btn-success" type="submit" name="submit">REGISTRAR PRODUCTO</button>
                 
                   
                </form>
            </div> 
        </div> 
    </div> 
</div><!---Limite--->


    <?php

    $servidor="localhost";
    $cuenta="kuoudbtd_tienda";
    $password="tiendaweb258";
    $bd="kuoudbtd_tienda";

    //conexion a la base de datos
    
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    else{
         //conexion exitosa
         /*revisar si traemos datos a insertar en la bd  dependiendo
         de que el boton de enviar del formulario se le dio clic*/
                
             if(isset($_POST['submit']) ){
                //obtenemos datos del formulario
                $nombre = $_POST['nombre'];
                $categoria =$_POST['categoria'];
                $descripcion =$_POST['descripcion'];
                $cantidad =$_POST['cantidad'];
                $precio=$_POST['precio'];
                $imagen=$_FILES['img']['name'];

                //AQUI SE EVALUA LA INFORMACION
                $directorio="img/";
                $archivo=$directorio.basename($_FILES["img"]["name"]);
                $tipo_archivo=strtolower(pathinfo($archivo,PATHINFO_EXTENSION));
                $verificar=getimagesize($_FILES["img"]["tmp_name"]);
                $bandera=false;
                if($verificar!=false){
                $size=$_FILES["img"]["size"];
                    if($size>5000000){
                    echo '<script> alert("LA IMAGEN ES MUY GRANDE") </script>';
                    }
                    else{

                        if($tipo_archivo=="jpg" or $tipo_archivo=="png" or $tipo_archivo=="jpeg"){

                            if(move_uploaded_file($_FILES["img"]["tmp_name"], $archivo)){
                                //hacemos cadena con la sentencia mysql para insertar datos
                                $sql = "INSERT INTO productos (Nombre, Categoria, Descripcion,Existencias,Precio,Imagen) VALUES('$nombre','$categoria','$descripcion','$cantidad','$precio','$imagen')";
                                            $conexion->query($sql);  //aplicamos sentencia que inserta datos en la tabla usuarios de la base de datos

                                if ($conexion->affected_rows >= 1){ //revisamos que se inserto un registro
                                     echo '<script> alert("EL PRODUCTO SE REGISTRO CON EXITO") </script>';
                                }
                                else{
                                     echo '<script> alert("ERROR AL REGISTRAR EL PRODUCTO") </script>';
                                }

                            }
                        }
                        else{
                           echo '<script> alert("LA IMAGEN ES NO ES jpg NI png") </script>'; 
                        }
                    }
                }
                else{
                     echo '<script> alert("EL ARCHIVO NO ES UNA IMAGEN") </script>';
                } 
         
         }
    }
    ?>
  <br>
  <br>
  <br>
   
<?php
    include "Ppagina.php";
?>



</body>

</html>
