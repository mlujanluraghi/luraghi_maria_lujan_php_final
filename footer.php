<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        footer {
            background-color: black;
        }

        .pie h3 {
            margin-top: 400px;
            /* background-color: aliceblue; */
            opacity: 70%;
            height: 100PX;
            padding-top: 15px;
            padding-left: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: orange;
            font-size: 20px;
            text-align: center;
        }
    </style>
    <title>Elecktricity</title>
</head>

<body>

    <footer class="pie">

        <?php
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $fecha_actual = date("d/m/Y H:i");
        echo "<h3> Fecha " . $fecha_actual . "<br>" . "Control de Herramientas e insumos de Elecktricity" . "<br>" . "MaLuLu© </h3>";

        ?>


    </footer>

</body>

</html>