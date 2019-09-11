
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Ejercicio 1</h2>
  </body>
</html>
<?php
for ($i=0; $i < 11; $i++) {
$resultado = 2*$i;
echo "2*$i =$resultado <br>";
}
 ?>
<h2>Ejercicio 2</h2>
<?php
$a=100;
while ($a >= 85) {
echo $a .'<br>';
$a--;
}
 ?>

 <h2>Ejercicio 3</h2>
 <p>
  Un bucle while que a partir de una variable $contador que toma valores de 1 a 5, muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.</p>
 <?php
$contador= 1;
while ($contador <= 5) {
  $resultado=2*$contador;
  echo $resultado .'<br>';
  $contador++;
}

 ?>

<h2>Ejercicio 4</h2>
<p>    Utilizando un while haremos un programa que tire una moneda (seleccionará un número al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar, debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara.

</p>

<?php
$cara=0;
$tiros=0;
while ($cara < 5) {
 $moneda= rand(0,1);
 $cara= $cara +$moneda;
 $tiros=$tiros +1;
 echo 'salio '. $moneda . ' en el tiro '. $tiros  .'<br>';
}
  echo 'total de tiros: '.$tiros. '<br>';
  echo 'total de caras: ' . $cara;
 ?>


 <h2>Ejercicio 5</h2>
 <p>    Definir un array con 5 strings que sean nombres. Recorrer este array para imprimir cada uno de los nombres en pantalla. Resolver este problema con un foreach.
 </p>

 <?php
 $nombre=['Ana', 'Pedro', 'Juan', 'Carlos', 'Pablo'];
 foreach ($nombre as $value) {
   echo $value . '<br>';

 }
  ?>

<h2>Ejercicio 6</h2>
<p>Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir todos los números. La ejecución debe terminarse si alguno de los números encontrados es un 5 (Se debe imprimir “Se encontró un 5!”)
</p>

<?php
$random=[];
for ($i=0; $i < 10; $i++) {
$numero = rand(0,10);
$random[$i]=$numero;

}
foreach ($random as $numero) {
  if ($numero==5)  {echo 'salió 5!';
    break;} else {
      echo $numero. '<br>';
    }
  }
var_dump($random);

?>

<h2>Ejercicio 7</h2>
<p>
Definir un array con 10 números aleatorios entre 0 y 100. Recorrer este array contando cuantos números son pares.</p>

<?php
$random=[];
$par=0;
for ($i=0; $i < 10; $i++) {
$numero = rand(0,100);
$random[$i]=$numero;

}
foreach ($random as $numero) {
  if ($numero%2==0)  {
$par=$par+1;
  }

    }
echo 'En total hay ' . $par. ' numeros pares.' . '<br>';
var_dump($random);

?>
<h2>Ejercicio 8</h2>

<p>
  Definir una variable $mascota que sea un array asociativo
En el índice animal debe decir qué animal es.
En el índice edad debe decir la edad.
En el índice altura debe decir la altura.
En el índice nombre debe decir el nombre

Recorrer los valores del array con un foreach imprimiendo (como ejemplo):
animal: perro

edad: 5

altura: 0,60

nombre: Sonic
</p>
<?php
$mascota=['animal'=>'perro','edad'=>3, 'altura'=> 0.3,'nombre'=>'Sonic'];
foreach ($mascota as $indice => $value) {
echo $indice . ': ' . $value . '<br>';
}
?>



<h4>Clase Sept 11</h4>

<h5>Ejercicio 1a</h5>
<p>Definir una función mayor() que reciba 3 números y devuelva el mayor.</p>

<?php

function mayor($A,$B,$C){
  if($A>$B)
{$mayorAB=$A;} else {
  $mayorAB=$B;}
  if($mayorAB>$C){
    $elMayor=$mayorAB;
  }else{
    $elMayor=$C;
  }
  return $elMayor;
   
}

echo mayor(2,5,-3);


?>

<h5>Ejercicio 1b</h5>
<p>Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero base hasta el numero limite.</p>

<?php
function tabla($base,$limite){
$cosas =[];
for ($i = $base; $i <= $limite ; $i++){ 
  $cosas[] =$i;
 }
return $cosas;
}

var_dump(tabla(2,5));?>

<h5>Ejercicio 1c</h5>
<p>Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos números con el número 100.
    </p>


<?php

function mayor2($A,$B,$C=100){
  if($A>$B)
{$mayorAB=$A;} else {
  $mayorAB=$B;}
  if($mayorAB>$C){
    $elMayor=$mayorAB;
  }else{
    $elMayor=$C;
  }
  return $elMayor;
   
}

echo mayor2(204,107);


?>

<h5>Ejercicio 1d</h5>
<p>Modificar tabla para que si recibe un sólo parámetro utilice el número 100.
    </p>

    <?php
function tabla2($base,$limite=100){
  $cosas =[];
  for ($i = $base; $i <= $limite ; $i++){ 
    $cosas[] =$i;
  }
  return $cosas;
}

var_dump(tabla2(105));?>


    Generar un archivo llamado superficie.php:

    Definir una función triangulo() que retorne su superficie.
    Definir una función rectangulo() que retorne su superficie.
    Definir una función cuadrado() que retorne su superficie.
    Utilizando la función pi(), definir una función circulo() que retorne su superficie.

    Generar un archivo llamado incluir.php que retorne un echo con el siguiente string “Soy incluir.php”.

    Incluir en el archivo, saludo.php. ¿Qué sucede?
    Reemplazar include por require. ¿Qué sucede?
    Generar en la misma carpeta un archivo saludo.php que solamente haga echo “Hola mundo”. ¿Qué sucede ahora con el punto a y el punto b?
    En el archivo incluir.php reemplazar el require por include, e incluir 3 veces el mismo archivo. ¿Qué sucede?
    En el archivo incluir.php reemplazar todos los include por include_once. ¿Qué sucede?

    Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php en donde se definirá una función que reciba los radios de 3 círculos y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas.

    Modificar todoJunto.php para que en su primer línea diga $funcionesEjecutadas = 0. Luego, modificar cada función de funciones.php y superficie.php para que al comenzar hagan $funcionesEjecutadas++. Probar llamar a varias funciones y ver cuánto vale $funcionesEjecutadas en cada momento. ¿Esto está permitido? ¿Qué sucede?

    En caso de que el ejercicio anterior haya fallado, modificar la variable con la palabra reservada global para que sí funcione.

    Utilizando strpos(), encontrar la posición de la primera aparición de "php" dentro de la cadena: "Me encanta php, a mi también me encanta php!"

    Tomando la maqueta de Craftsy ya armada modificar el ejercicio para que los siguientes recursos no esten duplicados sino que deben ser reutilizados:

    Header
    Footer
    Hojas de estilos (Elementos repetidos en <head>)

    Agregar además soporte en Craftsy para que los artículos provengan de un Array similar a como lo hicimos en Kitchening.

    Modificar el array de artículos para que además tengan un “precio”

    Generar una función descripcionLarga que dado un artículo devuelva un String que tenga la descripción del artículo y el precio.

    Modificar la maqueta para que en el espacio donde se imprimen las descripciones de los artículos se imprima la descripcionLarga

    Agregar un valor booleano a los “articulos” que sea “estaEnOferta”. Si el artículo está en oferta se le hace un 20% de descuento al precio original. Generar una función para calcular los precios finales y mostrarlos en la visualización del usuario.




