<?php
include("conexion.php");

$id_materiales=$_GET['id'];
mysqli_query($conexion_db, "DELETE FROM materiales WHERE id=$id_materiales");


header("Location:modificar.php");

?>