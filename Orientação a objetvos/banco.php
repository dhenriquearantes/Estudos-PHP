<?php

require_once 'autoload.php';

use Projeto\Banco\Modelo\Conta\Conta;
use Projeto\Banco\Modelo\Conta\Titular;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Endereco;


$endereco = new Endereco('Acreuna', 'Sul', 'Av. Araguaia', '121');

$maria = new Titular(new CPF('964.456.123-15'), 'Maria', $endereco);
$primeiraConta = new Conta($maria);

// $nuria = new Titular(new CPF('964.456.124-15'), 'Nuria');
// $segundaConta = new Conta($nuria);

// $primeiraConta->cpfTitular = '123.456.789-10';
// $primeiraConta->nomeTitular = 'Maria';
// $primeiraConta->saldo = 100;

// $primeiraConta -> sacar(1);
// $primeiraConta -> transferir(50, $segundaConta);
$primeiraConta -> depositar(1000);
// $primeiraConta -> setNome('Tereza');
// $primeiraConta -> setCpf('964.456.123-10');



$primeiraConta -> verSaldo();
// $primeiraConta -> verNome();
// $primeiraConta -> verCpf();
$primeiraConta -> verNumeroDeContas();


// print_r($primeiraConta);

print_r($endereco);

// echo Conta::verNumeroDeContas(). PHP_EOL;