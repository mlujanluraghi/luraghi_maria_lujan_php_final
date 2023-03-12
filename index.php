<html>
<html lang="en">

<head>
    <style>
        .contenedor_registro {
            background-color: black;
            width: 600px;
            height: 300px;
            border: 2px solid orange;
            margin-top: 30px;
            margin-left: 100px;
        }

        .contenedor_registro h2 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 30px;
            background-color: orange;
            color: black;
            padding-top: 5px;
            padding-bottom: 5px;
            text-align: center;
        }

        .contenedor_registro input {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 25px;
            text-align: left;
            margin-left: 15px;
            padding-left: 10px;
            background-color: white;
            color: rgb(59, 4, 4);
            width: 550px;
            padding-top: 5px;
            padding-bottom: 5px;
            border: 2px solid orange;
            border-radius: 10px;
        }

        .contenedor_registro button {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 25px;
            border: 2px solid orange;
            padding: 8px 40px;
            text-align: center;
            margin-left: 270px;
            border-radius: 10px;
            cursor: pointer;
            margin-bottom: 10px;
        }
    </style>
    <title>Elecktricity</title>

</head>

<body>
    <?php
    include('conexion.php');
    include('header.php')
    ?>
    <section>
        <div class="contenedor_registro">
            <h2>Inicio de sesión</h2>
            <form action="registro.php" method="post" class="formulario">
                <input type="text" name="usuario" required placeholder="Usuario">
                <br><br>
                <input type="password" name="contraseña" required placeholder="Contraseña">
                <br>
                <br>
                <button type="submit" value="Ingresar">Ingresar</button>

            </form>
        </div>
    </section>

    <?php
    if (isset($_GET['error'])) {
        echo "<h2>Usuario y/o password incorrectos</h2>";
    } else {
    }

    ?>

    <footer>
        <?php
        include('footer.php')
        ?>
    </footer>
</body>

</html>