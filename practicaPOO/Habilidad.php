<?php

class Habilidad{
  private $nombre;
  private $expertise;

  public function __construct($nombre){

    $this->setNombre($nombre);
    $this->setExpertise();






  }

  public function getNombre():string
  {
    return $this->nombre;

  }
  public function setNombre(string $nombre)
  {
    $this->nombre=$nombre;

  }

    public function getExpertise():int
    {
      return $this->expertise;

    }
    public function setExpertise()
    {

      $this->expertise=rand(0,5);    }



}

//Crear una clase llamada Habilidad. La misma debe tener dos atributos: nombre y expertise (expertise es un número entre 0 y 5). Definir los atributos como privados. Definir los getters, setters y constructor de la clase.
