<?php

    $sueldo_basico = 600;
    $porcentaje_comision = 0.075;
    $bonificacion_por_hijo = 0.5;
    $porcentaje_descuento = 11;
    
$importe = $_POST['valor1'];   
$hijos = $_POST['valor2'];

$comision = ($porcentaje_comision / 100) * $hijos;
echo "Comisión " . $comision;

$bonificacion = $bonificacion_por_hijo * $hijos;
echo  "<br>";
echo "Bonificación" . $bonificacion;

$sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
echo  "<br>";
echo "Sueldo bruto " . $sueldo_bruto ;

$descuento = ($porcentaje_descuento / 100) * $sueldo_bruto;
echo  "<br>";
echo "Descuento " . $descuento ;

$sueldo_neto = $sueldo_bruto - $descuento;
echo  "<br>";
echo "Sueldo neto " . $sueldo_neto; 

?>