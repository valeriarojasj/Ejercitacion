<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php en donde se definirá una función que reciba los radios de 3 círculos y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas.
  </body>
</html>

<?php

include("superficie.php");
include("funciones.php");

echo "<br>". mayor(circulo(2),circulo(4),circulo(5)) . "<br>";


echo strpos( "Me encanta php, a mi también me encanta php!","php");

 ?>
