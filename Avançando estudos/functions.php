<?php


function exibeMensagem($mensagem){

  echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar) {

  if ($valorASacar > $conta['saldo']) {
    exibeMensagem("Você não pode sacar este valor!");
  } else {
    $conta['saldo'] -= $valorASacar;
  }
  return $conta;
};

function depositar(array $conta, float $valorADepositar) {
  if ($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
  } else {
    exibeMensagem("Depositos precisam ser positivos");
  }
  return $conta;
};

function titularUpper(array $conta) {
  $conta['titular'] = mb_strtoupper($conta['titular']);
};

