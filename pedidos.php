<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .contenedor_pedidos {
            background-color: grey;
            width: 800px;
            height: auto;
            margin-left: 160px;
            margin-top: 30px;
            border-radius: 10px;
            margin-bottom: 60px;
            padding: 10px;
        }

        .contenedor_pedidos h2 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: white;
            color: rgb(59, 4, 4);
            text-align: center;
        }

        .contenedor_pedidos option,
        input {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
            width: 650px;
            margin-left: 75px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: white;
            color: rgb(59, 4, 4);
            text-align: center;
        }

        .contenedor_ver_pedidos p {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 20px;
            text-align: justify;
            margin-left: 5px;
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 10px;
            background-color: white;
            color: rgb(59, 4, 4);
            width: 450px;
            height: 300px;
            padding-top: 5px;
            padding-bottom: 5px;
            border: 2px solid orange;
            border-radius: 10px;

        }

        .contenedor_pedidos button {
            text-decoration: none;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 30px;
            border: 2px solid rgb(3, 3, 47);
            padding: 6px 20px;
            text-align: center;
            margin-left: 370px;
            border-radius: 10px;
            cursor: pointer;
            background-color: orange;
        }

        .contenedor_ver_pedidos {
            background-color: gray;
            font-size: 20px;
            color: black;
            border: 5px solid orange;
            width: 600px;
            height: auto;
            margin-left: 150px;
        }

        .contenedor_ver_pedidos button {
            text-decoration: none;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 30px;
            border: 2px solid rgb(3, 3, 47);
            padding: 6px 20px;
            text-align: center;
            margin-left: 370px;
            border-radius: 10px;
            cursor: pointer;
            background-color: white;
        }
    </style>
    <title>Elecktricity</title>
</head>

<body>
    <?php
    include('header.php')
    ?>

    <?php
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $fecha_actual = date("d/m/Y H:i");
    ?>

    <section class="contenedor_pedidos">
        <h2>Pedidos</h2>
        <form action="cargar_pedidos.php" method="post" class="formulario_pedidos">
            <select name="tipo" id="">
                <option value="Herramienta">Herramienta</option>
                <option value="Insumo">Insumo</option>
            </select>
            <br><br>
            <input type="text" name="material" placeholder="Nombre de la herramienta y/o insumo ">
            <br><br>
            <input type="integer" name="cantidad" placeholder="Indique la cantidad">
            <br><br>
            <input type="text" name="persona" placeholder="Nombre y apellido">
            <br><br>
            <input type="date" name="fecha" placeholder="Indique la fecha">
            <br><br>
            <button type="submit" value="cargar_pedidos">Enviar</button>
            <br>
        </form>
    </section>
    <br>
    <br>
    <br>
    <section class="contenedor_ver_pedidos">
        <br>
        <br>
        <button type="reset" value="cargar_pedidos">Actualizar</button>
        <br>
        <br>
        <div class="mostrar">
            <?php
            include('mostrar_pedidos.php')
            ?>
        </div>
    </section>

    <footer>
        <?php
        include('footer.php')
        ?>
    </footer>

</body>

</html>