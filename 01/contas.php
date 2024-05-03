<?php 

$conta1 = [
    'titular' => 'Jose',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 2500
];

 $conta3 = [
    'titular' => 'Pedro',
    'saldo' => 500
];


$contas = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contas); $i++) { 
  echo $contas[$i]['titular'] . PHP_EOL;
}