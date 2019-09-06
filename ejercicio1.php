
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
