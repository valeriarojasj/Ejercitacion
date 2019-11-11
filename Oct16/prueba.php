<?php

require_once('autoload.php');

$banco1 = new Banco("Banco Santander", "4151513");
var_dump($banco1);



$persona1 = new Persona("Ana", "Rojas", "32123123", "1982-04-01", "ana@rojas.com", "12345678");
$cuenta1= new Classic("111111");
$persona1->setCuenta($cuenta1);

var_dump($persona1);
$pyme1 =new Pyme("7123123", "mi Pyme ABC", "mipyme@abc.com","12345678");
$cuenta2= new Gold("222222");
$pyme1->setCuenta($cuenta2);
$multinacional1 = new Multinacional ("8123123", "VW","vw@vw.com","12345678");
$cuenta3= new Black("333333");
$multinacional1->setCuenta($cuenta3);
$banco1->agregarCliente($persona1);
$banco1->agregarCliente($pyme1);
$banco1->agregarCliente($multinacional1);
$banco1->getClientes();
$persona1->getCuenta()->acreditar(2000,"Banelco");

$persona1->getCuenta()->mostrar();
var_dump($persona1);
