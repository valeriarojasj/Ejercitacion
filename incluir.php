<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Ejercicio 3 Sept 11</h2>

<p>Generar un archivo llamado incluir.php que retorne un echo con el siguiente string “Soy incluir.php”.</p>

<p>a. Incluir en incluir.php  el archivo saludo.php (el cual aún no existe). ¿Qué sucede? ¿Tira algún error?</p>

<p>b. Reemplazar el include por require. ¿Qué sucede?</p>

<p>c. Generar en la misma carpeta un archivo saludo.php que solamente haga echo “Hola mundo”. ¿Qué sucede ahora con el punto a y el punto b?</p>

<p>d. En el archivo incluir.php reemplazar el require por include, e incluir 3 veces el mismo archivo. ¿Qué sucede?</p>

<p>e. En el archivo incluir.php reemplazar todos los include por include_once. ¿Qué sucede?</p>

<br>

  </body>
</html>

<?php
echo "soy incluir.php <br>";

include_once('saludo.php');
include_once('saludo.php');
include_once('saludo.php');
?>
