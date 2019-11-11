<?php


abstract Class Cuenta implements Imprimible{


  protected $cbu;
  protected $balance;
  protected $fechaUltimoMov;

//Creo una función constructora con sus parámetros necesarios

  public function __construct(string $cbu){

    $this->cbu = $cbu;

  }


  public function setCbu(string $cbu){
    $this->cbu = $cbu;
  }

  public function getCbu():string{
    return $this->cbu;
  }
  public function setBalance(int $balance){
    $this->balance = $balance;
  }
  public function getBalance():int{
    return $this->balance;
  }

  public function setFechaUltimoMov(string $fechaUltimoMov){
    $this->fechaUltimoMov = $fechaUltimoMov;
  }
  public function getFechaUltimoMov():string{
    return $this->fechaUltimoMov;
  }


  public abstract function debitar(int $monto, string $lugarTrans);

  public function acreditar(int $monto, string $lugarTrans){
    $this->balance=$this->balance+$monto;
    $this->fechaUltimoMov=date('Y-m-d');

  }
  public function mostrar(){
    return $this->getBalance()."<br>";
  }

}
