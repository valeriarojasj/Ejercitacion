<?php
function triangulo($base,$altura){

   return $base*$altura/2;}
   echo triangulo(5,6) ."<br>";

function rectangulo ($base,$altura){
    return $base* $altura;
}
echo rectangulo(4,5) ."<br>";


function cuadrado ($lado){
    return $lado* $lado;
}
echo cuadrado(4) ."<br>";

function circulo($radio){
    return pi()*$radio*$radio;
}
echo circulo(2);

?>
