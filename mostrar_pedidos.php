<?php
            $archivo = fopen('pedidos.txt', 'r\n');
            echo fread($archivo, 1000);
            fclose($archivo);
?>
