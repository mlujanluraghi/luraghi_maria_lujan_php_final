<html>
<html lang="en">

<head>
    <style>
        body {
            background-color: gainsboro;
        }

        header {
            background-color: black;
        }

        .encabezado {
            columns: 2;
        }

        header img {
            margin-left: 15%;
            width: 200px;
            height: 150px;
            border: 2px solid darkslategrey;
            border-radius: 50%;
        }

        header h1 {
            font-size: 50px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-top: 20px;
            color: orange;
        }

        header h2 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 30px;
            margin-left: 200px;
            color: orange;
        }

        header nav {
            background-color: black;
            height: 40px;
        }

        header nav li {
            display: inline-block;
            text-decoration: none;
            align-items: center;
            margin-left: 10%;
            margin-right: 5%;
        }

        header nav li a {
            font-size: 22px;
            color: white;
            letter-spacing: 2px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            justify-content: space-between;
            background-color: black;
        }

        header nav li a:hover {
            color: orange;
            border-bottom: 6px solid orange;
            transition: 4s;
        }
    </style>
    <title>Elecktricity</title>
</head>

<body>
    <header>
        <div class="encabezado">
            <img src="../control_luraghimlujan/imagenes/logo.jpg" alt="logo">
            <h1>Elecktricity</h1>
            <h2>Máquinas e insumos</h2>
        </div>
        <br>
        <nav>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="listado.php">Listado</a></li>
            <li><a href="pedidos.php">Pedidos</a></li>
            <li><a href="salir.php">Salir</a></li>
        </nav>
    </header>

</body>

</html>