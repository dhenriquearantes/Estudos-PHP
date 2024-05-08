<?php

use Projeto\Banco\Modelo\Conta\Conta;

use Projeto\Banco\Modelo\Conta\Titular;

use Projeto\Banco\Modelo\CPF;

use Projeto\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(

  new Titular(
    new CPF('123.456.789-10'),
    'Nuria',
    new Endereco('Acreuna', 'Sul', 'Av Araguaia', '121')
  ), 0
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->verSaldo();