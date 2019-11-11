<?php
  

Class Classic extends Cuenta{



  public function __construct(string $cbu){
 parent::__construct($cbu);
  }

  public function debitar(int $monto, string $lugarTrans){

    if($lugarTrans=='Banelco'){
      $montoNuevo=$monto*1.05;
    }
    if($lugarTrans=='Link'){
      $montoNuevo=$monto*1.10;
    }
    if($lugarTrans=='Caja'){
      $montoNuevo=$monto;
    }
   $this->balance=$this->balance-$montoNuevo;
   $this->fechaUltimoMov=date('y-m-d');
  }

  public function acreditar(int $monto, string $lugarTrans){
    $montoNuevo=$monto*0.95;
    parent::acreditar($montoNuevo,$lugarTrans);

  }


}
