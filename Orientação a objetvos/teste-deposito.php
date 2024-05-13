<?php

use Projeto\Banco\Modelo\Conta\ContaCorrente;
use Projeto\Banco\Modelo\Conta\Titular;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
  new Titular(
    new CPF('364.785.981-15'),
    'Tony tornado',
    new Endereco('Acreuna', 'Sul', 'Av Araguaia', '121')
  )
);

try {
  $contaCorrente->depositar(-100);
} catch (InvalidArgumentException $exception) {
  Echo "Valor a depositar precisa ser positivo!" . PHP_EOL;
}

