
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
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Articulos</a>
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
                    require_once("validarlogin.php");
                    if($estado){
                        echo "<p class='texnomu'>".$_SESSION["nomcu"];
                        echo "</p>";
                        if($_SESSION["admin"] === "1"){
                            echo "<ul class='navbar-nav me-auto mb-2 mb-lg-0'> <li class='nav-item'>
                        <a class='nav-link active' aria-current='page'' href='verarchivos.php'>Ver Informacion</a>
                            </li>";
                        }    
                        ?>
                <form action="logout.php">
                    <button class="btn btn-primary" type="submit">Cerrar Sesion</button>
                </form>
                <?php
                        
                    }else{
                ?>
                <button type="button" class="btn btn-dark" >
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
                    <h1 class="modal-title fs-5 " id="modallogin ">Inicia Sesion</h1>

                </div>
                <div class="modal-body modallogin2">
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            Correo: <input type="text" name="correo" required>
                        </div>
                        <div class="mb-3">
                            Contraseña: <input type="password" name="passw" required>
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
                    <h1 class="modal-title fs-5 " id="modalregistro ">Crear Cuenta</h1>

                </div>
                <div class="modal-body modallogin2">
                    <form action="registro.php" method="post">
                        <div class="mb-3">
                            Nombre Completo: <input type="text" name="nomco" required>
                        </div>
                        <div class="mb-3">
                            Nombre Cuenta: <input type="text" name="nomcu" required>
                        </div>
                        <div class="mb-3">
                            Correo: <input type="text" name="correo" required>
                        </div>
                        <div class="mb-3">
                            Contraseña: <input type="password" name="passw" required>
                        </div>
                        <div class="mb-3">
                            <input class="btn btn-primary" type="submit" name="submit" value="Crear Cuenta">
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
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        CATEGORIAS
      <p>
        GENERO:

        <select name="genero">
          <option>TODOS LOS PRODUCTOS</option>

          <option>MANGAS</option>

          <option>JUGUETES</option>

        </select>

      </p>

     <button class="btn btn-success" type="submit" value="submit" name="enviar">Filtrar</button>

    </form>
    </div>

<?php 

$servidor="127.0.0.1:33065";
$cuenta="root";
$password="";
$bd="tienda";
$conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    else{
       
         //vemos datos en un tabla de html
         $sql = 'select * from productos';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
         $resultado = $conexion -> query($sql); //aplicamos sentencia

         if ($resultado -> num_rows){ //si la consulta genera registros

            if(isset($_POST['enviar'])){
             $palabra=$_POST['genero'];
             if($palabra=="MANGA"){
                 categoria_uno($resultado);
               }
               elseif($palabra=="JUGUETES"){
                categoria_dos($resultado);
               }
               else{
                categoria_tres($resultado);
               }


             }
         }
         else{
             echo "no hay datos";
         }

    }
?>

 <?php
    function categoria_uno($resultado){
         $conta=0;
        ?>  
         <script> var array=[];</script> 
         <?php
         echo '<h3>MANGAS</h3>';
             echo '<div class="caja">';
              echo '<div style="margin-left: 20px;">';
              echo '<table class="table table-hover" style="width:50%;">';

                echo '<tr>';
                    echo '<th>ID DEL PRODUCTO</th>';
                    echo '<th>NOMBRE DEL PRODUCTO</th</th>';
                    echo '<th>DESCRIPCION DEL PRODUCTO</th>';
                    echo '<th>CANTIDAD DEL PRODUCTO</th>';
                    echo '<th>PRECIO DEL PRODUCTO</th>'; 
                    echo '<th>IMAGEN DEL PRODUCTO</th>';
                echo '</tr>';
                while( $fila = $resultado -> fetch_assoc()){ //recorremos los registros obtenidos de la tabla 
                       $producto=$fila['Nombre'];
                        if($fila['Categoria']=="MANGAS"){
                         
                        ?>
                   <script>
                     array.push("<?php echo $producto; ?>");   
                     </script>
                     <?php
                   
                    echo '<tr>';
                        echo '<td>'. $fila['id'] . '</td>';
                        echo '<td>'. $fila['Nombre'] . '</td>';
                        echo '<td>'. $fila['Descripcion'] . '</td>';
                        echo '<td>'. $fila['Existencias'] . '</td>';
                        echo '<td> $'. $fila['Precio'] . '</td>';
                        echo '<td><img class="img" src="img/'.$fila['Imagen'].'"></td>';
                        ?>             
                   <td><button class="btn btn-success" id="<?php echo $conta;?>" onclick="agregar(this.id)">AGREGAR PRODUCTO AL CARRITO
                    </button></td>
                     <?php  
                     }
                     $conta=$conta+1; 
                      echo '</tr>'; 
                }
                
                echo '</table">';

                echo '</div>';
             echo '</div>';
             ?>

            <script>
        console.log(array);    
    
        function agregar(id){
            var indice = parseInt(id);
            console.log(`ELEJISTES ${array[indice]}`);       
         
        }
        </script>
   
 <?php 
    }  
    function categoria_dos($resultado){
        $conta=0;
        ?>  
         <script> var array=[];</script> 
         <?php
         echo '<h3>JUGUETES</h3>';
             echo '<div class="caja">';
              echo '<div style="margin-left: 20px;">';
              echo '<table class="table table-hover" style="width:50%;">';

                echo '<tr>';
                    echo '<th>ID DEL PRODUCTO</th>';
                    echo '<th>NOMBRE DEL PRODUCTO</th</th>';
                    echo '<th>DESCRIPCION DEL PRODUCTO</th>';
                    echo '<th>CANTIDAD DEL PRODUCTO</th>';
                    echo '<th>PRECIO DEL PRODUCTO</th>'; 
                    echo '<th>IMAGEN DEL PRODUCTO</th>';
                echo '</tr>';
                while( $fila = $resultado -> fetch_assoc()){ //recorremos los registros obtenidos de la tabla 
                       
                        if($fila['Categoria']=="JUGUETES"){
                         $producto=$fila['Nombre'];
                        ?>
                   <script>
                     array.push("<?php echo $producto; ?>");   
                     </script>
                     <?php
                   
                    echo '<tr>';
                        echo '<td>'. $fila['id'] . '</td>';
                        echo '<td>'. $fila['Nombre'] . '</td>';
                        echo '<td>'. $fila['Descripcion'] . '</td>';
                        echo '<td>'. $fila['Existencias'] . '</td>';
                        echo '<td> $'. $fila['Precio'] . '</td>';
                        echo '<td><img class="img" src="img/'.$fila['Imagen'].'"></td>';
                        ?>             
                   <td><button class="btn btn-success" id="<?php echo $conta;?>" onclick="agregar(this.id)">AGREGAR PRODUCTO AL CARRITO
                    </button></td>
                     <?php  
                     }
                     $conta=$conta+1; 
                      echo '</tr>'; 
                }
                
                echo '</table">';

                echo '</div>';
             echo '</div>';
             ?>

            <script>
        console.log(array);    
    
        function agregar(id){
            var indice = parseInt(id);
            console.log(`ELEJISTES ${array[indice]}`);       
         
        }
        </script>
   
    <?php  
    }
    function categoria_tres($resultado){
         $conta=0;
         ?>
       <script> var array=[];</script>
       <?php 
         echo '<h3>TODOS LOS PRODUCTOS</h3>';
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

                    $producto=$fila['Nombre'];
                ?>
                    <script>
                     array.push("<?php echo $producto; ?>");   
                     </script>
                   <?php  
                    echo '<tr>';
                        echo '<td>'. $fila['id'] . '</td>';
                        echo '<td>'. $fila['Nombre'] . '</td>';
                        echo '<td>'. $fila['Categoria'] . '</td>';
                        echo '<td>'. $fila['Descripcion'] . '</td>';
                        echo '<td>'. $fila['Existencias'] . '</td>';
                        echo '<td> $'. $fila['Precio'] . '</td>';
                        echo '<td><img class="img" src="img/'.$fila['Imagen'].'"></td>';
                           ?>             
                    <td><button class="btn btn-success" id="<?php echo $conta;?>" onclick="agregar(this.id)">AGREGAR PRODUCTO AL CARRITO
                    </button></td>
                     <?php  

                      
                     $conta=$conta+1; 
                      echo '</tr>'; 

                }   
                echo '</table">';

                echo '</div>';
             echo '</div>';
             ?>
              <script>
        console.log(array);    
    
        function agregar(id){
            var indice = parseInt(id);
            console.log(`ELEJISTES ${array[indice]}`);       
         
        }
        </script>
        <?php  
    }

?>

    
</body>

</html>

