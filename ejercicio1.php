
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
<p>Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir todos los números. La ejecución debe terminarse si alguno de los números encontrados es un 5 (Se debe imprimir "Se encontró un 5!")
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
<h2>Ejercicio 9</h2>

<p>Partiendo de un archivo con la siguiente variable definida:</p>
<p>$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;
</p>
<p>Crear un script que muestre el nombre de la capital y el país desde la variable $ceu.
</p>

<?php
$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;
foreach ($ceu as $pais => $capital) {
  echo $capital . ", " . $pais . "." . "<br>";
}


 ?>
<h2>Ejercicio 10</h2>
<p>Partiendo de un archivo con la siguiente variable definida:</p>


<p>$ceu = [

        "Argentina"        => ["Buenos Aires", "Córdoba", "Santa Fé"],

        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],

        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],

        "Francia" => ["Paris", "Nantes", "Lyon"],

        "Italia" => ["Roma", "Milan", "Venecia"],

        "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];</p>


<p>Crear un script que muestre el nombre de cada país y sus ciudades desde la variable $ceu con el siguiente formato:


        <p>Las ciudades de Argentina son:</p>
<ul>


<li>Buenos Aires</li>
<li>Córdoba</li>
<li>Santa Fé</li>

</ul>
        Las ciudades de Brasil son:
<ul>
<li>Brasilia</li>
<li>Rio de Janeiro</li>
<li>Sao Pablo</li>
</ul>

<?php
$ceu = ["Argentina"        => ["Buenos Aires", "Córdoba", "Santa Fé"],

        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],

        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],

        "Francia" => ["Paris", "Nantes", "Lyon"],

        "Italia" => ["Roma", "Milan", "Venecia"],

        "Alemania" => ["Munich", "Berlin", "Frankfurt"]];


foreach ($ceu as $pais => $ciudades) {
  echo "Las ciudades de " . $pais . " son: ";?>
  <ul>
<?php  {foreach($ciudades as $ciudad){?>
      <li><?php  echo $ciudad;}?></li></ul>
<?php  }} ?>


<h2>Ejercicio 11</h2>
<p>A partir del ejercicio anterior:</p>


<p>Agregarle a cada país un dato extra además de sus ciudades llamado esAmericano. Este valor debe ser true o false.
Hacer que la impresión anterior no muestre países que no sean Americanos.</p>



<p>IMPORTANTE: Para que esto funcione de manera prolija deberán crear un array asociativo por cada país en donde cada país tendrá los datos de sus ciudades y esAmericano.</p>

<?php $ceu = ["Argentina"  => ["Buenos Aires", "Córdoba", "Santa Fé"],

        "Brasil" => ["Brasilia","Rio de Janeiro", "Sao Pablo"],

        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],

        "Francia" => ["Paris", "Nantes", "Lyon"],

        "Italia" => ["Roma", "Milan", "Venecia"],

        "Alemania" => ["Munich", "Berlin", "Frankfurt"]];

$esAmericano =["Argentina" => true,"Brasil" => true,"Colombia" => true,"Francia" => false,"Italia" => false,"Alemania" => false];

foreach ($ceu as $pais => $ciudades) {

  if($esAmericano[$pais]==true){
  echo "Las ciudades de " . $pais . " son: ";?>
  <ul>
<?php  {foreach($ciudades as $ciudad){?>
      <li><?php  echo $ciudad;}?></li></ul>
<?php  }}} ?>



<h2>Embedding</h2>


<p>Partiendo del archivo embed.html</p>

  <?php $nombre = "Valeria";
  $sorteo = rand(0,1);?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?php echo $nombre  ?></h2>

    <h3>¿Es usted un ganador?</h3>
    <?php if($sorteo===1){echo "SI";

    }else{echo "NO";}

$sitiosWeb=["https://google.com"=>"Google","https://facebook.com"=>"Facebook", "https://twitter.com"=>"Twitter",]
    ?>


    <h3>Algunos sitios interesantes:</h3>
    <ul>
  <?php
    foreach ($sitiosWeb as $sitioWeb => $nameSitio){
      ?>
      <li><a href="<?php echo $sitioWeb;?>"><?php echo $nameSitio;?></a></li>

<?php } ?>
</ul>




<p> a. Inicializar una variable $nombre antes del código HTML y reemplazar [NOMBRE] por el valor de dicha variable</p>
<p> b. Previo al código HTML sortear un número que puede ser 0 o 1. Si el número es 1 se imprimirá luego del texto "¿Es usted un ganador?" el texto "SI". Por el contrario, si el número es 0, se imprimirá el texto "NO".</p>
<p> c. Modificar el listado de sitios web para que estos sean tomados de un Array. ¿Cómo podemos hacer para que también se generen bien los hipervínculos?</p>
<p> d. ¿Pudiste escribir todo el código utilizando la sintaxis corta?</p>
<p> e. Armar un array con la siguiente estructura</p>

<p>[</p>
<br>
<p>       0 => [</p>
<br>
<p>               "id" => 1</p>
<br>
<p>               "titulo" => "Lorem Ipsum",</p>
<br>
<p>               "descripcion" => "Lorem Ipsum",</p>
<br>
<p>               "precio" => 300,</p>
<br>
<p>               "imagen" => "img-pdto-1.jpg",</p>
<br>
<p>               "enOferta" => true</p>
<br>
<p>       ],</p>
<br>
<p>       1 => [</p>
<br>
<p>              "id" => 2</p>
<br>
<p>              "titulo" => "Lorem Ipsum",</p>
<br>
<p>              "descripcion" => "Lorem Ipsum",</p>
<br>
<p>              "precio" => 500,</p>
<br>
<p>              "imagen" => "img-pdto-2.jpg",</p>
<br>
<p>              "enOferta" => false</p>
<br>
<p>        ]</p>
<br>
<p> ]</p>


<p>El array debe tener un total de 10 elementos con distintos precios, imágenes,

descripciones, títulos y valores booleanos en el campo "enOferta"</p>
<?php

$array = [
0 => ["id" => 1,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 300,"imagen" => "img-pdto-1.jpg", "enOferta" => true],
1 => ["id" => 2,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 500,"imagen" => "img-pdto-1.jpg", "enOferta" => false],
2 => ["id" => 3,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 700,"imagen" => "img-pdto-1.jpg", "enOferta" => true],
3 => ["id" => 4,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 900,"imagen" => "img-pdto-1.jpg", "enOferta" => false],
4 => ["id" => 5,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 1100,"imagen" => "img-pdto-1.jpg", "enOferta" => true],
5 => ["id" => 6,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 1300,"imagen" => "img-pdto-1.jpg", "enOferta" => false],
6 => ["id" => 7,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 1500,"imagen" => "img-pdto-1.jpg", "enOferta" => true],
7 => ["id" => 8,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 1700,"imagen" => "img-pdto-1.jpg", "enOferta" => false],
8 => ["id" => 9,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 1900,"imagen" => "img-pdto-1.jpg", "enOferta" => true],
9 => ["id" => 10,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 2100,"imagen" => "img-pdto-1.jpg", "enOferta" => true]
];
?>

<p>Tomando el ejercicio de Kitchener y el array del ejercicio anterior, modificar el código para que los artículos que se muestran en la maqueta provengan del Array.
Agregar un mensaje de "En Oferta" en los productos que efectivamente tengan un valor verdadero en el campo "enOferta"</p>


<h2>Bonus</h2>

<p>Modificar el menú de navegación de Kitchener para que los elementos del menú provengan de un Array.</p>


<p>¿Que pasa si el array tiene más o menos de 6 elementos? ¿Se te ocurre cómo corregirlo?</p>


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

    Generar un archivo llamado incluir.php que retorne un echo con el siguiente string "Soy incluir.php".

    Incluir en el archivo, saludo.php. ¿Qué sucede?
    Reemplazar include por require. ¿Qué sucede?
    Generar en la misma carpeta un archivo saludo.php que solamente haga echo "Hola mundo". ¿Qué sucede ahora con el punto a y el punto b?
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

    Modificar el array de artículos para que además tengan un "precio"

    Generar una función descripcionLarga que dado un artículo devuelva un String que tenga la descripción del artículo y el precio.

    Modificar la maqueta para que en el espacio donde se imprimen las descripciones de los artículos se imprima la descripcionLarga

    Agregar un valor booleano a los "articulos" que sea "estaEnOferta". Si el artículo está en oferta se le hace un 20% de descuento al precio original. Generar una función para calcular los precios finales y mostrarlos en la visualización del usuario.
