<?php


abstract Class Cliente{


  protected $email;
  protected $pass;
  protected $cuenta;

//Creo una función constructora con sus parámetros necesarios

  public function __construct(string $email, string $pass, Cuenta $cuenta){

    $this->setEmail($email);
    $this->setPassword($pass);
    $this->setCuenta($cuenta);
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado

  public function setEmail($email){
    $this->email = $email;
  }

  public function getEmail(){
    return $this->email;
  }
  public function setPass(string $pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }

  public function setCuenta( Cuenta $cuenta){
    $this->cuenta = $cuenta;
  }
  public function getCuenta(){
    return $this->cuenta;
  }

  public abstract function  cobrarServicios();

  }
