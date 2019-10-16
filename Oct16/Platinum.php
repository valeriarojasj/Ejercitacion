<?php

require_once('Cuenta.php');

Class Platinum extends Cuenta{
 
  


  public function __construct(string $cbu){
    parent::__construct($cbu);
 
  }
  public function debitar(int $monto, string $lugarTrans){


    
    if($this->balance>=5000){
      $montoNuevo=$monto;}
    if($lugarTrans=='Banelco'||$lugarTrans=='Link'||$lugarTrans=='Caja'){
      $montoNuevo=$monto*1.05;
    }
   $this->balance=$this->balance-$montoNuevo;
   $this->fechaUltimoMov=date('y-m-d');
  }

  public function acreditar(int $monto, string $lugarTrans){
    parent::acreditar($montoNuevo,$lugarTrans);

  }


}

  

