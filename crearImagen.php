<?php
    header("Content-type: image/png");
    $im=@imagecreatetruecolor(110, 32);
    $color_fondo=imagecolorallocate($im,102,102,153);//color negro
    $color_texto=imagecolorallocate($im,255,255,255);//color blanco
    session_start();
    $key="";
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    for($i=0;$i<6;$i++){
        $key.= $pattern[$num=rand(0,35)];
        imagechar($im,rand(3,7),($i*17)+10,rand(2,14),$pattern[$num],$color_texto);
    }
    imagepng($im);
    imagedestroy($im);
    $_SESSION['img_number']=$key;
        
?>