<?php

    $comentario ="<p>". "  Tipo: " . $_POST['tipo'] . "  Material: " . $_POST['material']." Cantidad: ".$_POST['cantidad']." Nombre y apellido: ".$_POST['persona']." Fecha del pedido: ".$_POST['fecha']."</p>";

    $archivo = fopen('pedidos.txt', 'a','\n');
    fputs($archivo, $comentario);
    include('pedidos.php');