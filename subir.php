<?php
session_start();
//echo '<pre>';
//print_r($_FILES['archivo']);
//echo '<pre>';

$temporal= $_FILES['archivo']['tmp_name'];
$nombre= $_FILES['archivo']['name'];

if ($_FILES['archivo']['type'] == 'image/jpeg'){
    $original=imagecreatefromjpeg($temporal);
}elseif($_FILES['archivo']['type'] == 'image/png'){
    $original=imagecreatefrompng($temporal);
}else{
    die('Error al guardar');
}

$ancho_original= imagesx($original);
$alto_original= imagesy($original);

$ancho_nuevo= 200;
$alto_nuevo= round($ancho_nuevo * $alto_original / $ancho_original);

$copia= imagecreatetruecolor($alto_nuevo, $ancho_nuevo);

//copiar

imagecopyresampled($copia, $original, 0, 0, 0, 0, $alto_nuevo, $ancho_nuevo, $alto_original, $ancho_original );

imagejpeg($copia, "imagenes/" . $nombre, 100);
imagedestroy($original);
imagedestroy($copia);


//no repetir nombre de archivos

$original =$_FILES['archivo'];
$nombre = $original['name'];

$array_nombre =explode('.', $nombre);
$extension =array_pop($array_nombre);

$array = glob('imagenes/'.$array_nombre[0]."*".$extension);
$cantidad = count($array);

$nombre_final = $array_nombre[0].$cantidad.".".$extension;
move_uploaded_file($original['tmp_name'], 'imagenes/'.$nombre_final);