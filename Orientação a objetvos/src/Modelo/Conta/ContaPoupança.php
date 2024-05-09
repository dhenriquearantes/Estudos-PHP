<?php

namespace Projeto\Banco\Modelo\Conta;

class ContaPoupança extends Conta 
{
  protected function percentualTarifa(): float
  {
    return 0.03;
  }

}






?>