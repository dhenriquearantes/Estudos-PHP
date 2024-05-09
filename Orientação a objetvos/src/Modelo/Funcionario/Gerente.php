<?php 

namespace Projeto\Banco\Modelo\Funcionario;


class Gerente extends Funcionario {
  
  public function calcularBonificacao(): float
  {
    return $this->verSalario();
  }



}




?>