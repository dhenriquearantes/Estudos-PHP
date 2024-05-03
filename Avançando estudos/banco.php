<?php

require 'functions.php';

$contas = [
  '123.456.789-10' => [
    'titular' => 'Jose',
    'saldo' => 1500
  ],
  '123.456.489-11' => [
    'titular' => 'Maria',
    'saldo' => 2500
  ],
  '123.256.789-10' => [
    'titular' => 'Pedro',
    'saldo' => 1000
  ]
];

$contas['123.456.789-10'] = sacar(
  $contas['123.456.789-10'],
  500);

$contas['123.456.489-11'] = depositar(
  $contas['123.456.489-11'],
  5000);


foreach ($contas as $cpf => $conta) {
  exibeMensagem(
    "$cpf {$conta['titular']} {$conta['saldo']}"
  );
};
