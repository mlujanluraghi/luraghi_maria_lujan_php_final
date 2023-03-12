
<?php
include("conexion.php");
session_start();
$codigo_captcha = $_POST['captcha'];

if ($codigo_captcha == $_SESSION['codigo_captcha']) {
    $tipo = $_POST['tipo'];
    $material = $_POST['material'];
    $cantidad = $_POST['cantidad'];
    $estado='DISPONIBLE';

    $nombre_img = $_FILES['image']['name'];
    $tamanio_img = $_FILES['image']['size'];
    $tipo_img = $_FILES['image']['type'];
    $tmp_img = $_FILES['image']['tmp_name'];

    $destino = 'imagenes/' . $nombre_img;

    if (($tipo_img != 'image/jpeg' && $tipo_img != 'image/jpg' && $tipo_img != 'image/png' && $tipo_img != 'image/gif') or $tamanio_img > 200000) {
        header("Location:ingresar.php?error");
    } else { 
        move_uploaded_file($tmp_img, $destino);
        mysqli_query($conexion_db, "INSERT INTO materiales VALUES (DEFAULT, '$tipo','$material','$cantidad', '$nombre_img','$estado')");
        header("Location:ingresar.php?ok");
        mysqli_close($conexion_db);
    }
    
   
} else {
    header("Location:ingresar.php?error_codigo");
 }
