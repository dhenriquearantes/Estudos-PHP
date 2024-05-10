<?php 

namespace Projeto\Banco\Modelo\Funcionario;
use Projeto\Banco\Autenticavel;


class Diretor extends Funcionario implements Autenticavel{
  
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