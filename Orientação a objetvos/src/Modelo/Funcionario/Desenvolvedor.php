<?php 
namespace Projeto\Banco\Modelo\Funcionario;


class Desenvolvedor extends Funcionario {


  public function calcularBonificacao(): float
  {
    return $this->verSalario() * 0.05;
  }

  public function sobeDeNivel() : void
  {
    $this->recebeAumento($this->verSalario() * 0.75);
  }


}


?>