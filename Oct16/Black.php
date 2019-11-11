<?php



Class Black extends Cuenta{


//Creo una función constructora con sus parámetros necesarios

  public function __construct(string $cbu){
    parent::__construct($cbu);
  }

  public function debitar(int $monto, string $lugarTrans){

   $this->balance=$this->balance-$monto;
   $this->fechaUltimoMov=date('y-m-d');
  }

  public function acreditar(int $monto, string $lugarTrans){
    if($monto>1000000){
      $montoNuevo=$monto*0.96;
    }else{
      $montoNuevo=$monto;
    }
    parent::acreditar($montoNuevo,$lugarTrans);

  }


}
