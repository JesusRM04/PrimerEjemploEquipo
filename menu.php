<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilosmenu.css">
    <link rel="icon" type="image/x-icon" href="img/logoi.ico">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="Logo" width="60" height="40" class="d-inline-block align-text-top">
                TuAnimeMX
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Articulos.php">Articulos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contacto.php">Contactanos</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Acerca de
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="acercade.php">Nuestra Empresa</a></li>
                            
                        </ul>
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



</body>

</html>
