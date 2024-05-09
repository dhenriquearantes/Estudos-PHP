<?php 

namespace Projeto\Banco\Modelo\Funcionario;


class Diretor extends Funcionario {
  
  public function calcularBonificacao(): float
  {
    return $this->verSalario() * 2;
  }

  public function podeAutenticar(string $senha): bool
  {
    return $senha === '1234';
  }


}




?>