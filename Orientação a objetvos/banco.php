<?php

require_once 'autoload.php';

use Projeto\Banco\Modelo\Conta\ContaPoupança;
use Projeto\Banco\Modelo\Conta\Titular;
use Projeto\Banco\Modelo\Pessoa;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Endereco;

$enderecoOne = new Endereco('Acreuna', 'Sul', 'Av. Araguaia', '121');
$nuria = new ContaPoupança(
  new Titular(
    new CPF('123.987.456-15'), 
    'Nuria', 
    $enderecoOne
  )
);

$nuria -> depositar(1000);
$nuria -> sacar(50);

print ($nuria ->verSaldo());



