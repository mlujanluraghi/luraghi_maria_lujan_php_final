<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            text-decoration: none;
            text-align: center;
            width: 900px;
            margin-left: 45px;
        }

        table thead tr td {
            text-decoration: none;
            background-color: black;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 40px;
            color: orange;
            width: 100px;
            padding: 15px 25px;
        }

        table tr td {
            text-decoration: none;
            width: min-content;
            border: 3px solid black;
            height: 25px;
            background-color: orange;
            font-size: 30px;
            padding: 5px;
        }
        a{
            text-decoration: none;
            font-size: 30px;
            color: black;
            background-color: orange;
        }
        
    </style>

    <title>Elecktricity</title>
</head>

<body>
    <?php
    include("header.php");
    session_start();
    ?> 
    <a class="volver" href="../control_luraghimlujan/acciones.php">Volver</a>
    <br><br>
    <section class="contenedor_materiales">
        <table>
            <thead>
                <tr>
                    <td>Tipo</td>
                    <td>Material</td>
                    <td>Stock</td>
                    <td>Eliminar</td>
                    <td>Modificar</td>
                    <td>Estado</td>
                </tr>
            </thead>
            <?php include("conexion.php");
            $consulta_db = mysqli_query($conexion_db, "SELECT * FROM materiales");


            while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
            ?>

                <tr>
                    <td><?php echo $mostrar_datos['tipo'] ?></td>
                    <td><?php echo $mostrar_datos['material'] ?></td>
                    <td><?php echo $mostrar_datos['cantidad'] ?></td>
                    <td><a href="eliminar.php?id=<?php echo $mostrar_datos['id']; ?>">Eliminar</a></td>
                    <td><a href="editar.php?id=<?php echo $mostrar_datos['id']; ?>">Modificar</a></td>
                    <td><?php echo $mostrar_datos['estado'] ?></td>
                </tr>

            <?php
            }
            ?>
        </table>
       
    </section>
    <br><br>

    <footer>
        <?php
        include('footer.php')
        ?>
    </footer>
</body>

</html>