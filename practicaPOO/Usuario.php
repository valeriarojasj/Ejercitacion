<?php
class Usuario{

  private $nombre;
  private $email;
  private $password;
  private $celular;
  private $habilidad;

  public function __construct(string $nombre, string $email, string $password){
    $this->nombre=$nombre;
    $this->email=$email;
    $this->setPassword($password);
    $this->habilidad =[];
  }
 public function getEmail():string
 {
   return $this->email;

 }
 public function setEmail(string $email)
 {
   $this->email=$email;

 }

 public function saludar():string
 {
   return 'Hola ' . $this->nombre;

 }
 public function getNombre():string{
   return $this->nombre;
 }

 public function getPassword():string{
   return $this->password;
 }

 public function setNombre(string $nombre){
    $this->nombre=$nombre;
 }

 public function setPassword(string $password){
    $this->password=$this->encriptPassword($password);

 }

 private function encriptPassword(string $password){
   return password_hash($password,PASSWORD_DEFAULT);

 }
public function setCelular(Celular $celular){
  $this->celular=$celular;
}
public function getCelular():Celular{
  return $this->celular;
}

public function mostrarTelefono():string
{ $textoFan="";
  if ($this->celular->getMarca()=='iPhone'){
    $textoFan = ' y soy fan de los iphones';
  }
  return 'El telefono es de la marca ' . $this->celular->getMarca() . ' y modelo ' .$this->celular->getModelo() . $textoFan;
}

public function llamar(Usuario $usuario, int $minuto){
if($this->celular->getProveedor()==$usuario->celular->getProveedor()){
  $costo=0;
}else{
  $costo=10*$minuto;
}
  return $costo;


}

public function agregarHabilidad(Habilidad $habilidad){
$this->habilidad[]=$habilidad;

}


}
