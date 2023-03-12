<?php
include("conexion.php");
$id_materiales = $_GET['id'];

mysqli_query($conexion_db, "UPDATE materiales SET estado ='NO DISPONIBLE' WHERE id=$id_materiales");
header("Location:modificar.php");


?>
