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
                        <a class="nav-link active" aria-current="page" href="registrar.php">Registrar Productos</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="modificar.php">Modificar Productos</a>
                         <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Eliminar Productos</a>
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
    
    <div class="caja">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' enctype="multipart/form-data">
             <div class="form-group">
               <label for="eliminar">INGRESE EL ID EL PRODUCTO A ELIMINAR:</label>
               <input type="number" name="eliminar" id="eliminar" required>
              </div>
              <button  type="submit" class="btn btn-success" name="submit">ELIMINAR PRODUCTO</button>
        </form>
    </div>
    <br><br>
    <?php 
    $servidor="localhost";
    $cuenta="kuoudbtd_tienda";
    $password="tiendaweb258";
    $bd="kuoudbtd_tienda";

    //conexion a la base de datos
    
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('ERROR EN LA CONEXION DE LA BASE DE DATOS');
    }
    else{
     //vemos datos en un tabla de html
          if(isset($_POST['submit'])){
                //obtenemos datos del formulario
                $eliminar = $_POST['eliminar'];
                $sql = "DELETE FROM productos WHERE id='$eliminar'";
                
                $conexion->query($sql);  
                if ($conexion->affected_rows >= 1){ 
                    echo '<script> alert("PRODUCTO ELIMINADO ") </script>';
                }//fin
                else{
                    echo '<script> alert("EL PRODUCTO NO EXISTE") </script>';
                }
         }
         $sql = 'select * from productos';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
         $resultado = $conexion -> query($sql); //aplicamos sentencia

         if ($resultado -> num_rows){ //si la consulta genera registros
            echo '<div class="caja">';
              echo '<div style="margin-left: 20px;">';
              echo '<table class="table table-hover" style="width:50%;">';
                echo '<tr>';
                    echo '<th>ID DEL PRODUCTO</th>';
                    echo '<th>NOMBRE DEL PRODUCTO</th</th>';
                    echo '<th>CATEGORIA DEL PRODUCTO</th>';
                    echo '<th>DESCRIPCION DEL PRODUCTO</th>';
                    echo '<th>CANTIDAD DEL PRODUCTO</th>';
                    echo '<th>PRECIO DEL PRODUCTO</th>'; 
                    echo '<th>IMAGEN DEL PRODUCTO</th>';
                echo '</tr>';
                while( $fila = $resultado -> fetch_assoc()){ //recorremos los registros obtenidos de la tabla
                    echo '<tr>';
                        echo '<td>'. $fila['id'] . '</td>';
                        echo '<td>'. $fila['Nombre'] . '</td>';
                        echo '<td>'. $fila['Categoria'] . '</td>';
                        echo '<td>'. $fila['Descripcion'] . '</td>';
                        echo '<td>'. $fila['Existencias'] . '</td>';
                        echo '<td> $'. $fila['Precio'] . '</td>';
                      ?>                    
                         <td><img class="img"src="<?php echo  "img/".$fila['Imagen'] ?>"></td>
                      <?php  
                        echo '</tr>';

                }   
                echo '</table">';
             echo '</div>';
        echo '</div>';

         }
         else{
               echo '<script> alert("NO HAY PRODUCTOS") </script>';
         }




    }
    

?>