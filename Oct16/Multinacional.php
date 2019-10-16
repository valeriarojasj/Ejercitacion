<?php
require_once('Cliente.php');
Class Multinacional extends Cliente implements Liquidable, Imprimible{
    Private $CUIT;
    Private $razonSocial;
 
    public function __construct($cuit,$razonSocial,$email,$pass){
        $this->cuit = $cuit;
        $this->razonSocial = $razonSocial;
        parent::setEmail($email);
        parent::setPassword($pass);
     
      }

      public function getCuit(){
        return $this->cuit;  
      }

      public function getRazonSocial(){
        return $this->razonSocial;  
      }

      public function setCuit($cuit){
        $this->cuit->$cuit;  
      }

      public function setRazonSocial($razonSocial){
        $this->razonSocial->$razonSocial;   
      }

      public function  cobrarServicios(){
        if($this->cuenta instanceOf Classic){
          
          $cobrar = $this->cuenta->getBalance()-100;
          $this->cuenta->setBalance($cobrar);
        }
        if($this->cuenta instanceOf Gold){
          $cobrar = $this->cuenta->getBalance()-strlen($this->getRazonSocial())*5;
          $this->cuenta->setBalance($cobrar);

        }
        if($this->cuenta instanceOf Platinum){
          $cobrar = $this->cuenta->getBalance()-$this->cuenta->getBalance()*0.1;
          $this->cuenta->setBalance($cobrar);

        }

        if($this->cuenta instanceOf Black){

          $weekday=date('w', strtotime($this->fechaUltimoMov));

          $cobrar = $this->cuenta->getBalance()-(100*$weekday +500);

          $this->cuenta->setBalance($cobrar);

        }


}
}