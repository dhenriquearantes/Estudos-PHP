<?php

$controle = [
  'produtos' => [
    '1' => [
      'nome' => 'Celular',
      'preco' => 1000
    ],
    '2' => [
      'nome' => 'Notebook',
      'preco' => 3000
    ]
  ],
  'clientes' => [
    '1' => [
      'nome' => 'Joana',
      'idade' => 32
    ],
    '2' => [
      'nome' => 'Leonardo',
      'idade' => 20
    ]
  ]
];

$controles = $controle['clientes'];


for ($i = 1; $i <= count($controles); $i++) {
  print $controles[$i]['nome'] . PHP_EOL;
}
