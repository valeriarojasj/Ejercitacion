<?php

require_once('Cuenta.php');

Class Gold extends Cuenta{
 

  public function __construct(string $cbu){
 
    parent::__construct($cbu);
  
  }
  public function debitar(int $monto, string $lugarTrans){
    
    if($lugarTrans=='Banelco'){
      $montoNuevo=$monto;
    }
    if($lugarTrans=='Link'){
      $montoNuevo=$monto*1.05;
    }
    if($lugarTrans=='Caja'){
      $montoNuevo=$monto;
    }
   $this->balance=$this->balance-$montoNuevo;
   $this->fechaUltimoMov=date('y-m-d');
  }
  public function acreditar(int $monto, string $lugarTrans){
    if($monto>=25000){$montoNuevo=$monto;}
      else{$montoNuevo=$monto*0.97;}
    parent::acreditar($montoNuevo,$lugarTrans);

  }

 

  
}

  

