<?php


Class Persona extends Cliente implements Imprimible{
    Private $nombre;
    Private $apellido;
    Private $documento;
    Private $nacimiento;

    public function __construct(string $nombre,string $apellido, string $documento, string $nacimiento, string $email, string $pass){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->nacimiento = $nacimiento;
        parent::setEmail($email);
        parent::setPass($pass);


      }


      public function getNombre(){
        return $this->nombre;
      }

      public function getApellido(){
        return $this->apellido;
      }

      public function getDocumento(){
        return $this->documento;
      }

      public function getNacimiento(){
        return $this->nacimiento;
      }

      public function setNombre(string $nombre){
        $this->nombre->$nombre;
      }

      public function setApellido(string $apellido){
        $this->apellido->$apellido;
      }
      public function setDocumento(string $documento){
        $this->documento->$documento;
      }

      public function setNacimiento(string $nacimiento){
        $this->nacimiento->$nacimiento;
      }

      public function setCuenta(Cuenta $cuenta){
        parent::setCuenta($cuenta);
      }


      public function  cobrarServicios(){
        if($this->cuenta instanceOf Classic){

          $cobrar = $this->cuenta->getBalance()-100;
          $this->cuenta->setBalance($cobrar);
        }
        if($this->cuenta instanceOf Gold){
          $cobrar = $this->cuenta->getBalance()-strlen($this->getApellido())*10;
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

    public function mostrar(){
      return $this->getNombre() . " " . $this->getApellido() . "<br>";
    }


}
