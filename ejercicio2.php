<?php
    $cantidad =$_POST['cantidad'];
    $precio=  $_POST['precio'];
    echo 'Precio de la gaseosa: ' . $precio . "<br>";

    $descuentodeprecio = $precio * 0.05;
    echo 'Cantidad: ' . $cantidad . "<br>";

    $nprecio=$precio-$descuentodeprecio ;
    echo 'Nuevo precio: ' . $nprecio . "<br>";

    $icompra=$nprecio*$cantidad;
    echo 'Importe: ' . $icompra . "<br>";

    $descuento=0.07*$icompra;
    echo 'Descuento: ' . $descuento . "<br>";

    $iapagar=$icompra-$descuento;
    echo 'Impuesto a pagar: ' . $iapagar . "<br>";

    $obsequio = 2*$cantidad;
    echo 'Obsequios: ' . $obsequio . "<br>";
?>
