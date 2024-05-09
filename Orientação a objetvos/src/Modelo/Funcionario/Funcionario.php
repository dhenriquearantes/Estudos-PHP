<?php

namespace Projeto\Banco\Modelo\Funcionario;

use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{

  private $salario;

  public function __construct(string $nome, CPF $cpf, float $salario)
  {

    parent::__construct($nome, $cpf);
    $this->salario = $salario;
  }

  public function verSalario(): float
  {
    return $this->salario;
  }

  public function alterarNome(string $nome): void
  {
    $this->validarNome($nome);
    $this->nome = $nome;
  }

  public function calcularBonificacao(): float
  {
    return $this->salario * 0.1;
  }

  public function recebeAumento(float $valorAumento): void
  {
    if ($valorAumento <= 0) {
      echo "Aumento deve ser positivo";
      return;
    }
    $this->salario += $valorAumento;

  }

}
