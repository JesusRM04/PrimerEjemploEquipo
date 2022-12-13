<?php 
    if(isset($_POST['enviar'])){
        if(!empty( !empty($_POST['correo'] ) )){
                $variable2=$_POST['correo'];
                $header="From: proyectofinalpagweb910@gmail.com"."\r\n";
                $header2="Gracias por unirte a nuestro sitio, tu cupon de promocion es: x29ghn."."\r\n";
                $correo=mail($variable2,$header2,$header);

                if($correo){
                    echo  "El Correo Fue Enviado Satisfactoriamente";
                    header("Location:index.php");
                }
                else{
                    echo "Error";
                }
        }
    }
?>