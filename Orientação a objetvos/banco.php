<?php

require_once 'autoload.php';

use Projeto\Banco\Modelo\Conta\ContaPoupança;
use Projeto\Banco\Modelo\Conta\Titular;
use Projeto\Banco\Modelo\Pessoa;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Endereco;


$nuria = new ContaPoupança(

  new Titular (
    new CPF ('123.654.789-12'),
     'Nuria',
    new Endereco ('Acreuna', 'Sul', 'Av Araguaia', '121')
  )
  );

$nuria -> depositar(1000);

print ($nuria ->verSaldo());



