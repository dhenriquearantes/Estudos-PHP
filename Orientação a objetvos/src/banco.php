<?php

require 'Conta.php';
require 'Titular.php';
require 'CPF.php';

$maria = new Titular(new CPF('964.456.123-15'), 'Maria');
$primeiraConta = new Conta($maria);

$nuria = new Titular(new CPF('964.456.124-15'), 'Nuria');
$segundaConta = new Conta($nuria);

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


print_r($primeiraConta);

// echo Conta::verNumeroDeContas(). PHP_EOL;