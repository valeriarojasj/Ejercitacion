<?php

require_once('Usuario.php');
require_once('Celular.php');
require_once('Habilidad.php');
$usuario1= new Usuario('Juan','juan@lopez.com','12345678');
var_dump($usuario1);
$usuario2= new Usuario('Juana','juana@gomez.com','12345679');
var_dump($usuario2);



$usuario1->setEmail('juanito@lopez.com');
$usuario2->setEmail('juanita@lopez.com');
echo $usuario1->getEmail() . '<br>';
echo $usuario2->getEmail();

echo '<br>'.$usuario1->saludar();

$celular1=new Celular('iPhone','6S','movistar','12233333');
$celular2=new Celular('Samsung','S7','Personal','12233335');

$usuario1->setCelular($celular1);
$usuario2->setCelular($celular2);

var_dump($usuario1);
var_dump($usuario2);

echo $usuario1->mostrarTelefono() . '<br>';
echo $usuario2->mostrarTelefono();

echo '<br> El costo de la llamada es ' . $usuario1->llamar($usuario2,3) . ' pesos';

$habilidad1 = new Habilidad('cantar');
$habilidad2 = new Habilidad('bailar');
$habilidad3 = new Habilidad('pintar');
$habilidad4 = new Habilidad('jugar futbol');

$usuario1->agregarHabilidad($habilidad1);
$usuario1->agregarHabilidad($habilidad2);
$usuario1->agregarHabilidad($habilidad3);
$usuario2->agregarHabilidad($habilidad4);
$usuario2->agregarHabilidad($habilidad2);
$usuario2->agregarHabilidad($habilidad1);
var_dump($usuario1);
var_dump($usuario2);
