<?php

require 'Conta.php';

$primeiraConta = new Conta();

$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Maria';
// $primeiraConta->saldo = 100;

$segundaConta = new Conta();

// $primeiraConta -> sacar(1);
$primeiraConta -> depositar(1000);
// $primeiraConta -> transferir(50, $segundaConta);

$primeiraConta -> verSaldo();
$primeiraConta -> verNome();
$primeiraConta -> verCpf();

print_r($primeiraConta);
print_r($segundaConta);