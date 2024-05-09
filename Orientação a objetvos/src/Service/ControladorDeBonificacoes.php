<?php 

namespace Projeto\Banco\Service;

use Projeto\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{

  private $totalBonificacoes = 0;


  public function addBonificacaoFuncionario(Funcionario $funcionario)
  {
    $this->totalBonificacoes += $funcionario->calcularBonificacao();
  }


  public function verTotal(): float
  {
    return $this->totalBonificacoes;
  }

}


?>