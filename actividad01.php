<!DOCTYPE html>
<html>
<head>
    
    <title>Ejercicio 01 -Operaciones con PHP</title>
</head>
<body>
    <form method="post" action="http://localhost/LAB05/ejercicio.php">
    Ingrese Valor 1: <br> <input type="text" name="valor1"><br>
    Ingrese Valor 1: <br> <input type="text" name="valor2"><br>
    Resultado  :<br>
    <input type="submit" name="suma" value="suma"> 
</form>

<?php 
    $numero1=$_POST['valor1']
    $numero2=$_POST['valor2']
        $suma=$numero1+ $numero2;
        echo" El resultado de la suma es :".$suma;
?>
</body>
</html>