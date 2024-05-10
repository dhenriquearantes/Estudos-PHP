<?php 

namespace Projeto\Banco\Modelo;

trait AcessoPropiedades
{
  public function __get(string $nomeAtributo)
  {
    $metodo = 'ver' . ucfirst($nomeAtributo);
    return $this->$metodo();
  }

  public function __set(string $nomeAtributo, string $value)
  {
    $this->$nomeAtributo = $value;
  }


}