<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .contenedor_carga {
            background-color: black;
            width: 600px;
            height: auto;
            margin-left: 60px;
            border-radius: 10px;
        }

        .contenedor_carga h2 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 30px;
            background-color: white;
            color: black;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 35px;
            border: 2px solid orange;
            border-radius: 10px;
        }

        .contenedor_carga form select option {
            font-size: 20px;
            color: black;
            background-color: orange;
        }

        .contenedor_carga form input {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 20px;
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

        .contenedor_carga button {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 30px;
            border: 2px solid orange;
            padding: 8px 40px;
            text-align: center;
            margin-left: 100px;
            border-radius: 10px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .contenedor_carga .captcha img {
            width: 200px;
            height: auto;
            margin-left: 200px;
        }

        a {
            text-decoration: none;
            border: 2px solid black;
            border-radius: 15px;
            padding: 8px 40px;
            background-color: orange;
            text-align: center;
            color: black;
            font-size: 30px;
        }
    </style>
    <title>Elecktricity</title>
</head>

<body>
    <?php
    include("conexion.php");
    session_start();
    
    if (isset($_SESSION['admin'])) {

        include('header.php');
        // codigo captcha
        $nro1 = rand(0, 9);
        $nro2 = rand(5, 9);
        $nro3 = rand(1, 7);
        $letra = array('c', 'a', 'r', 'm', 'e', 'b', 'o');
        $simbolo = array('#', '%', '*', '&', '@');
        $mezcla_letra = rand(0, 6);
        $mezcla_simbolo = rand(0, 4);

        $_SESSION['codigo_captcha'] = $nro1 . $letra[$mezcla_letra] . $nro3 . $simbolo[$mezcla_simbolo] . $letra[$mezcla_letra] . $nro2;

    ?>

        <section class="contenedor_carga">

            <h2>Ingresar material</h2>
            <!-- formulario -->
            <form action="cargar_materiales.php" method="post" enctype="multipart/form-data" class="formulario">
                <select name="tipo" id="">
                    <option value="Herramienta">HERRAMIENTA</option>
                    <option value="Insumo">INSUMO</option>
                </select>
                <br><br>
                <input type="text" name="material" placeholder="Nombre de la herramienta y/o insumo ">
                <br><br>
                <input type="integer" name="cantidad" placeholder="Indique la cantidad">
                <br><br>
                <input type="file" name="image" placeholder="Seleccionar o tomar imagen">
                <br><br>
                

                <!-- captcha -->
                <div class="captcha">
                    <img src="captcha.php" alt="captcha">
                    <br><br>
                    <input type="text" name="captcha" placeholder="Ingresar captcha">
                    <br><br>
                </div>

                <!-- guardar -->
                <button type="submit" value="cargar_materiales">Guardar</button>
                <a href="../control_luraghimlujan/acciones.php">Volver</a>
            </form>
        </section>


    <?php
        if (isset($_GET['error_codigo'])) {
            echo "<h3> Código de verificacion incorrecto</h3>";
        }
        if (isset($_GET['ok'])) {
            echo "<h3>Carga con éxito</h3>";
        }
        if (isset($_GET['error'])) {
            echo "<h3> Imagen de formato o tamaño incorrecto</h3>";
        }
    } else {
        header("Location:ingresar.php");
    }



    ?>

</body>

</html>