<?php

use Projeto\Banco\Modelo\Endereco;

require_once 'autoload.php';

$enderecoOne = new Endereco('acreuna', 'Sul', 'Av Araguaia', '121');
$enderecoTwo = new Endereco('Acreuna', 'Centro', 'Av Corumba', '127');


echo $enderecoOne->__get('bairro') . PHP_EOL;

$enderecoOne->__set('bairro', 'Nuria');

echo $enderecoOne->__get('bairro') . PHP_EOL;

exit();