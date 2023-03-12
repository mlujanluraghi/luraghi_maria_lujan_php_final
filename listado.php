<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .caja_principal {
            columns: 2;
            border: 3px solid black;
            border-radius: 15px;
            width: 600px;
            height: 400px;
            background-color: orange;
            margin-left: 160px;
        }

        .caja_principal .textos h2 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            color: rgb(59, 4, 4);
            text-align: left;
            margin-left: 100px;
            width: 400px;
            border: 1px solid black;
            border-radius: 10px;
            background-color: lightgray;
        }

        .caja_principal .imagenes img {
            width: 400px;
            height: 400px;
            border: 3px solid rgb(59, 4, 4);
            border-radius: 10px;
            margin-left: 330px;
        }
        a{
            text-decoration: none;
            font-size: 20px;
            color: black;
            border: 2px solid black;
            background-color: orange;
            border-radius: 5px;
        }
    </style>
    <title>Elecktricity</title>
</head>

<body>
    <?php
    include("header.php");  ?>
    <br><br>
    <section class="contenedor_materiales">
        <?php include("conexion.php");
        $consulta_db = mysqli_query($conexion_db, "SELECT * FROM materiales");

        while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
        ?>

            <div class="caja_principal">
                <div class="textos">
                    <h2><?php echo $mostrar_datos['tipo']; ?></h2>
                    <h2><?php echo $mostrar_datos['material']; ?></h2>
                    <h2><?php echo $mostrar_datos['cantidad']; ?></h2>
                    <h2>Estado: <?php echo $mostrar_datos['estado'] ?></h2>
                    <!-- <h2><a href="editar.php?id=<?php echo $mostrar_datos['id']; ?>"></a></h2> -->
                </div>
                <div class="imagenes">
                    <img src="imagenes/<?php echo $mostrar_datos['imagen'] ?>">
                </div>
            </div>

            <br><br>
        <?php
        }
        ?>
    </section>

    <footer>
        <?php
        include('footer.php')
        ?>
    </footer>
</body>

</html>