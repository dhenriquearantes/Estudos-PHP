// Adicionando dados modo específico

<?php


$contas = [
    '123.456.789-10' => [
      'titular' => 'Jose',
      'saldo' => 1000
    ], 
    '123.456.489-11' => [
      'titular' => 'Maria',
      'saldo' => 2500
    ], 
    '123.256.789-10' => [
      'titular' => 'Pedro',
      'saldo' => 500
    ]
  ];
  
  $contas['123.456.789-12'] = [
    'titular' => 'Joana',
    'saldo' => 2000
  ];


foreach ($contas as $cpf => $conta) {
  echo $cpf . PHP_EOL;
};