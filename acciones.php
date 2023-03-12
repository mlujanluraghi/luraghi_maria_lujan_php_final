<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Elecktricity</title>
    <style>
        img{
            margin-left: 400px;
        }
        .atencion a {
            display: inline-flex;
            margin-left: 10%;
            margin-right: 10%;
            text-decoration: none;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 30px;
            text-align: center;
            color: black;
            padding: 15px;
            width: 300px;
            height: 100px;
            background-color: orange;
            border: 6px solid black;
            border-radius: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    include('conexion.php');
    include('header.php');
    session_start();
    ?>
    

    <section class="at">
        <img src="../control_luraghimlujan/imagenes/ingreso.png" width="500px" height="250px" alt="">
        <br><br><br>
<div class="atencion">
        <a href="ingresar.php">Ingresar  Materiales/Insumos</a>
        <a href="modificar.php">Control  Materiales/Insumos</a>
     
</div>


    </section>
</body>

</html>