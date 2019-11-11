<?php

class Banco {
  private $razonSocial;
  Private $CUIT;
  private $clientes = [];

  public function __construct($razonSocial,$cuit){
    $this->setRazonSocial($razonSocial);
    $this->setCuit($cuit);

  }

  public function getCuit(){
    return $this->cuit;
  }

  public function getRazonSocial(){
    return $this->razonSocial;
  }

  public function setCuit($cuit){
    $this->cuit=$cuit;
  }

  public function setRazonSocial($razonSocial){
    $this->razonSocial=$razonSocial;
  }

  public function agregarCliente(Cliente $cliente){
    $this->clientes[]=$cliente;
  }

  public function getClientes(){
    return $this->clientes;
  }


}
