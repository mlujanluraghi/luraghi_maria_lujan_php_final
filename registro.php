<?php
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['contraseña'];

include('conexion.php');

$consulta= mysqli_query($conexion_db, "SELECT * FROM administracion WHERE usuario='admin' AND clave='admin123';");

if ($usuario=="admin" && $clave=='admin123'){
    $_SESSION['admin']= $_POST['usuario'];
    header('Location: acciones.php');
}else{
    header('Location: index.php?error');
}

?>