<?php
include('conexion.php');
session_start();
header("Content-type:image/jpeg");

$imagen_captcha= imagecreate(150, 70);

$fondo= imagecolorallocate($imagen_captcha, 255, 180, 0);
$texto= imagecolorallocate($imagen_captcha, 0, 0, 0);


imagestring($imagen_captcha, 5, 45, 25, $_SESSION['codigo_captcha'], $texto);

imagejpeg($imagen_captcha);

?>